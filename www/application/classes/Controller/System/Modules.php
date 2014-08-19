<?php defined('SYSPATH') OR die('No direct script access.');
/**
 * Created by JetBrains PhpStorm.
 * User: 1
 * Date: 26.11.13
 * Time: 11:59
 * To change this template use File | Settings | File Templates.
 */

class Controller_System_Modules extends Controller_Base {

    public function before()
    {
        parent::before();

        if (!$this->check('system', 'modules')) die('Access denied');
    }

    public function action_index()
    {
        $this->_content = View::factory('system/modules/index')
            ->set('modules', ORM::factory('Module')->find_all())
            ->set('install', Model::factory('System_Module')->find_modules());
        $this->template->content = $this->_content;
    }

    public function action_install()
    {
        $modules = Model::factory('System_Module')->find_modules();
        $install = $modules[$this->request->param('id')];

        $module = ORM::factory('Module');
        $module->values(array(
            'dir' => $install['dir'],
            'name' => $install['name'],
            'description' => $install['description'],
        ));
        $module->save();

        $install = $install['install'];

        foreach ($install['rights'] as $name => $description)
        {
            $right = ORM::factory('Right');
            $right->values(array(
                'value'       => $name,
                'description' => $description,
                'module_id'   => $module->id,
            ));
            $right->save();
        }

        foreach ($install['widgets'] as $widget)
        {
            $right = ORM::factory('Widget');
            $right->values(array(
                'class_name'  => $widget['class_name'],
                'method_name' => $widget['method_name'],
                'name'        => $widget['name'],
                'description' => $widget['description'],
                'module_id'   => $module->id,
            ));
            $right->save();
        }

        $sql = explode(';', $install['sql']);
        foreach ($sql as $query)
        {
            $query = trim($query);
            if ($query != NULL)
            {
                DB::query(NULL, $query)->execute();
            }
        }

        Session::instance()->delete('rights');

        $this->redirect('system/modules');
    }

    public function action_uninstall()
    {
        echo $this->request->param('id').'<br>';

        ORM::factory('Module', $this->request->param('id'))->delete();
        foreach (ORM::factory('Right')->where('module_id', '=', $this->request->param('id'))->find_all() as $right)
        {
            $right->delete();
        }
        foreach (ORM::factory('Widget')->where('module_id', '=', $this->request->param('id'))->find_all() as $widget)
        {
            $widget->delete();
        }

        Session::instance()->delete('rights');

        $this->redirect('system/modules');
    }


}