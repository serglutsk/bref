<?php defined('SYSPATH') OR die('No direct script access.');
/**
 * Created by JetBrains PhpStorm.
 * User: 1
 * Date: 26.11.13
 * Time: 11:59
 * To change this template use File | Settings | File Templates.
 */


class Controller_Managment_Users extends Controller_Base {

    public $template = 'template';
    public function before()
    {
        parent::before();
       if(!Auth::instance()->logged_in('admin')){
           Controller::redirect('/');
       }


        View::set_global('title', 'Manager page');
        View::set_global('description', 'Manager page');
        $this->template->styles = array('reset', 'templates/template/style', 'support/upload');
        $this->template->scripts = array('jquery', 'hoverIntent', 'templates/template/script', 'manager/script');
        $this->template->modules = ORM::factory('User', Auth_ORM::instance()->get_user()->id)->modules->find_all();
    }
    public function action_index()
    {
        $order = array('id', 'username', 'email');
        $order = $this->set_order($order);

        $this->_content = View::factory('managment/users/index')
            ->set('users', ORM::factory('User')->order_by($order['field'], $order['vector'])->find_all());
        $this->template->content = $this->_content;
    }

    public function action_view()
    {
        $user = ORM::factory('User', (int) $this->request->param('id'));

        if(!$user->loaded())
        {
            $this->redirect(URL::site('managment/users'));
        }

        if ($this->request->method() === Request::POST)
        {
            $post_data = $this->request->post();

            $post_data = Arr::map('Html::chars', $post_data);

            $valid = Validation::factory($post_data);
            $valid->rule('username', 'not_empty')
                ->rule('email', 'not_empty')
                ->rule('email', 'email')
                ->rule('phone', 'not_empty')
                ->rule('phone', 'regex', array(':value', '@[\d\+\(\)\-,]{10,}@'));

            if (isset($_POST['change_pass']))
            {
                $valid->rule('password', 'not_empty');
                $valid->rule('password', 'min_length', array(':value', 8));
                $valid->rule('password_confirm', 'matches', array(':validation', 'password_confirm', 'password'));
            }

            if (!$valid->check())
            {
                $this->_values = $post_data;
                $this->_errors = $valid->errors('validation');
            }
            else
            {
                $user->username = Arr::get($this->request->post(), 'username');
                $user->email = Arr::get($this->request->post(), 'email');
                $user->phone_set(Arr::get($this->request->post(), 'phone'));
                $user->save();

                $user->remove('roles');
                $roles = (array) Arr::get($this->request->post(), 'roles');
                foreach ($roles as $role)
                {
                    $user->add('roles', $role);
                }

                if (isset($_POST['change_pass']))
                {
                    $user->password = Arr::get($this->request->post(), 'password');
                    $user->save();
                }
            }
        }

        $user_roles = array();
        foreach ($user->roles->find_all() as $user_role)
        {
            $user_roles[] = $user_role->name;

        }

        $this->_values['roles'] = $user_roles;
        $this->_values['username'] = $user->username;
        $this->_values['email'] = $user->email;
        $this->_values['phone'] = $user->phone_get();

        $this->_content = View::factory('managment/users/view')
            ->set('roles', ORM::factory('Role')->find_all());
        $this->template->content = $this->_content;
    }

    public function action_create()
    {
        $user = ORM::factory('User');

        if ($this->request->method() === Request::POST)
        {
            $post_data = $this->request->post();

            $post_data = Arr::map('Html::chars', $post_data);

            $valid = Validation::factory($post_data);
            $valid->rule('username', 'not_empty')
                ->rule('username', array($user, 'unique_username'))
                ->rule('email', 'not_empty')
                ->rule('email', 'email')
                ->rule('email', array($user, 'unique_email'))
                ->rule('phone', 'not_empty')
                ->rule('phone', 'regex', array(':value', '@[\d\+\(\)\-,]{10,}@'))
                ->rule('password', 'not_empty');

            if (!$valid->check())
            {
                $this->_values = $post_data;
                $this->_errors = $valid->errors('validation');
            }
            else
            {
                $user->username = Arr::get($this->request->post(), 'username');
                $user->email = Arr::get($this->request->post(), 'email');
                $user->phone_set(Arr::get($this->request->post(), 'phone'));
                $user->password = Arr::get($this->request->post(), 'password');
                $user->save();

                $user->remove('roles');
                $roles = (array) Arr::get($this->request->post(), 'roles');
                foreach ($roles as $role)
                {
                    $user->add('roles', $role);
                }

                $this->redirect('managment/users');
            }
        }

        $user_roles = array();
        foreach ($user->roles->find_all() as $user_role)
        {
            $user_roles[] = $user_role->name;

        }

        $this->_content = View::factory('managment/users/create')
            ->set('roles', ORM::factory('Role')->find_all());
        $this->template->content = $this->_content;
    }

    public function action_remove()
    {
        ORM::factory('User', (int) $this->request->param('id'))->delete();
        $this->redirect(URL::site('managment/users'));
    }
}