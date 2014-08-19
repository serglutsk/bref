<?php defined('SYSPATH') OR die('No direct script access.');
/**
 * Created by JetBrains PhpStorm.
 * User: 1
 * Date: 26.11.13
 * Time: 11:59
 * To change this template use File | Settings | File Templates.
 */

class Controller_Managment_Roles extends Controller_Base {
    public $template = 'template';
    public function before()
    {
        parent::before();

        View::set_global('title', 'Manager page');
        View::set_global('description', 'Manager page');
        $this->template->styles = array('reset', 'templates/template/style', 'support/upload');
        $this->template->scripts = array('jquery', 'hoverIntent', 'templates/template/script', 'manager/script');
        $this->template->modules = ORM::factory('User', Auth_ORM::instance()->get_user()->id)->modules->find_all();
    }
    public function action_index()
    {
        $order = array('id', 'name');
        $order = $this->set_order($order);

        $this->_content = View::factory('managment/roles/index')
            ->set('roles', ORM::factory('Role')->order_by($order['field'], $order['vector'])->find_all());
        $this->template->content = $this->_content;
    }

    public function action_view()
    {
        $role = ORM::factory('Role', (int) $this->request->param('id'));

        if(!$role->loaded())
        {
            $this->redirect(URL::site('managment/roles'));
        }

        if ($this->request->method() === Request::POST)
        {
            $this->save_role($role);
        }

        $role_rights = array();
        foreach ($role->rights->find_all() as $right)
        {
            $role_rights[] = $right->id;

        }

        $this->_values['name'] = $role->name;
        $this->_values['description'] = $role->description;
        $this->_values['rights'] = $role_rights;

        $this->_content = View::factory('managment/roles/view')
            ->set('rights', ORM::factory('Right')->find_all());
        $this->template->content = $this->_content;
    }

    public function action_create()
    {
        $role = ORM::factory('Role');

        if ($this->request->method() === Request::POST)
        {
            $this->save_role($role);
        }

        $this->_content = View::factory('managment/roles/create')
            ->set('rights', ORM::factory('Right')->find_all());
        $this->template->content = $this->_content;
    }

    public function action_remove()
    {
        ORM::factory('Role', (int) $this->request->param('id'))->delete();
        $this->redirect(URL::site('managment/roles'));
    }

    protected function save_role($model)
    {
        $post_data = $this->request->post();

        $post_data = Arr::map('Html::chars', $post_data);

        $valid = Validation::factory($post_data);
        $valid->rule('name', 'not_empty')
            ->rule('description', 'not_empty');

        if (!$valid->check())
        {
            $this->_values = $post_data;
            $this->_errors = $valid->errors('validation');
        }
        else
        {
            $model->values(array(
                'name' => Arr::get($post_data, 'name'),
                'description' => Arr::get($post_data, 'description'),
            ));
            $model->save();

            $model->remove('rights');

            $rights = (array) Arr::get($this->request->post(), 'rights');
            foreach ($rights as $right)
            {
                $model->add('rights', $right);
            }

            Session::instance()->delete('rights');

            $this->redirect(URL::site('managment/roles'));
        }
    }
}