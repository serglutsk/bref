<?php defined('SYSPATH') OR die('No direct script access.');
/**
 * Created by JetBrains PhpStorm.
 * User: 1
 * Date: 26.11.13
 * Time: 11:59
 * To change this template use File | Settings | File Templates.
 */

class Controller_System_Desktop extends Controller_Base {

    public $template = 'template';

    public function before()
    {
        parent::before();

        $this->template->styles = array('reset', 'templates/template/style', 'system/desktop/style');
        $this->template->scripts = array('jquery', 'hoverIntent', 'templates/template/script', 'system/desktop/script');
        $this->template->modules = ORM::factory('User', Auth_ORM::instance()->get_user()->id)->modules->find_all();
    }

    public function action_index()
    {
        $this->_content = View::factory('system/desktop/index')
            ->set('modules', ORM::factory('User', Auth_ORM::instance()->get_user()->id)->modules->find_all());

        $this->template->content = $this->_content;
    }
}