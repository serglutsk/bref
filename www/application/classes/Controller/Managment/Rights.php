<?php defined('SYSPATH') OR die('No direct script access.');
/**
 * Created by JetBrains PhpStorm.
 * User: 1
 * Date: 26.11.13
 * Time: 11:59
 * To change this template use File | Settings | File Templates.
 */

class Controller_Managment_Rights extends Controller_Base {

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
        $order = $this->set_order(array('id', 'value', 'module_id'));

        $this->_content = View::factory('managment/rights/index')
            ->set('rights', ORM::factory('Right')->order_by($order['field'], $order['vector'])->find_all());
        $this->template->content = $this->_content;
    }

    public function action_view()
    {
        $right = ORM::factory('Right', (int) $this->request->param('id'));

        if(!$right->loaded())
        {
            $this->redirect(URL::site('managment/rights'));
        }

        if ($this->request->method() === Request::POST)
        {
            $this->save_right($right);
        }

        $right_roles = array();
        foreach ($right->roles->find_all() as $role)
        {
            $right_roles[] = $role->id;
        }

        $this->_values['value'] = $right->value;
        $this->_values['module'] = $right->module_id;
        $this->_values['description'] = $right->description;
        $this->_values['roles'] = $right_roles;

        $this->_content = View::factory('managment/rights/view')
            ->set('roles', ORM::factory('Role')->find_all())
            ->set('modules', ORM::factory('Module')->find_all());
        $this->template->content = $this->_content;
    }

    protected function save_right($model)
    {
        $post_data = $this->request->post();

        $post_data = Arr::map('Html::chars', $post_data);

        $valid = Validation::factory($post_data);
        $valid->rule('value', 'not_empty')
            ->rule('description', 'not_empty');

        if (!$valid->check())
        {
            $this->_values = $post_data;
            $this->_errors = $valid->errors('validation');
        }
        else
        {
            $model->values(array(
                'value' => Arr::get($post_data, 'value'),
                'module_id' => Arr::get($post_data, 'module'),
                'description' => Arr::get($post_data, 'description'),
            ));
            $model->save();

            $model->remove('roles');

            $roles = (array) Arr::get($this->request->post(), 'roles');
            foreach ($roles as $role)
            {
                $model->add('roles', $role);
            }

            Session::instance()->delete('rights');

            $this->redirect(URL::site('managment/rights'));
        }
    }
}