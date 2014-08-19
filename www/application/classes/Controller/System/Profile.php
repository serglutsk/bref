<?php defined('SYSPATH') OR die('No direct script access.');
/**
 * Created by JetBrains PhpStorm.
 * User: 1
 * Date: 26.11.13
 * Time: 11:59
 * To change this template use File | Settings | File Templates.
 */

class Controller_System_Profile extends Controller_Base {
    public $template = 'template';
    public function before()
    {
        parent::before();
        $this->template->modules = ORM::factory('User', Auth_ORM::instance()->get_user()->id)->modules->find_all();
        $this->template->styles = array('reset', 'templates/template/style', 'support/upload');
        $this->template->scripts = array('jquery','my_js', 'hoverIntent', 'templates/template/script', 'manager/script');
        if (!$this->check('system', 'profile')) die('Access denied');
    }

    public function action_index()
    {
        $user = Auth_ORM::instance()->get_user();

        if(!$user->loaded())
        {
            $this->redirect(URL::site('system/desktop'));
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

                $available_modules = array();
                foreach (ORM::factory('User')->available_modules()->find_all() as $module)
                {
                    $available_modules[] = $module->id;
                }

                $modules = array_intersect($available_modules, (array) Arr::get($this->request->post(), 'modules'));

                $user->remove('modules');
                foreach ($modules as $module)
                {
                    $user->add('modules', $module);
                }

                $available_widgets = array();
                foreach (ORM::factory('User')->available_widgets()->find_all() as $widget)
                {
                    $available_widgets[] = $widget->id;
                }

                $widgets = array_intersect($available_widgets, (array) Arr::get($this->request->post(), 'widgets'));

                $user->remove('widgets');
                foreach ($widgets as $widget)
                {
                    $user->add('widgets', $widget);
                }

                if (isset($_POST['change_pass']))
                {
                    $user->password = Arr::get($this->request->post(), 'password');
                    $user->save();
                }

                $this->redirect('system/profile');
            }
        }

        $user_modules = array();
        foreach ($user->modules->find_all() as $user_module)
        {
            $user_modules[] = $user_module->id;
        }

        $user_widgets = array();
        foreach ($user->widgets->find_all() as $user_widget)
        {
            $user_widgets[] = $user_widget->id;
        }

        $this->_values['username'] = $user->username;
        $this->_values['email'] = $user->email;
        $this->_values['phone'] = $user->phone_get();
        $this->_values['modules'] = $user_modules;
        $this->_values['widgets'] = $user_widgets;

        $this->_content = View::factory('system/profile/index')
            ->set('modules', ORM::factory('User')->available_modules()->find_all())
            ->set('widgets', ORM::factory('User')->available_widgets()->find_all());
        $this->template->content = $this->_content;
    }

}