<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_System_Module extends Model {

    protected $_modules = array();

    public function find_modules()
    {
        define('CONTROLLER', APPPATH.DIRECTORY_SEPARATOR.'classes'.DIRECTORY_SEPARATOR.'Controller', TRUE);

        $installed = array();
        foreach (ORM::factory('Module')->select('dir')->find_all() as $module)
        {
            $installed[] = $module->dir;
        }

        $modules = scandir(CONTROLLER);
        foreach ($modules as $module)
        {
            if (is_dir(CONTROLLER.DIRECTORY_SEPARATOR.$module))
            {
                if ($file = Kohana::find_file('classes'.DIRECTORY_SEPARATOR.'Controller'.DIRECTORY_SEPARATOR.$module, 'init', 'md'))
                {
                    if (!in_array(strtolower($module), $installed))
                    {
                        include $file;
                        $this->_modules[strtolower($module)] = isset($config)?$config:FALSE;
                    }
                }
            }
        }

        return $this->_modules;
    }

    public function get_module($module)
    {
        return true;
    }

}