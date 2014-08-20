<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Created by PhpStorm.
 * User: Юзер
 * Date: 19.08.14
 * Time: 11:43
 */
class Controller_System_Myseting extends Controller_Base {
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
        $this->_content = View::factory('system/profile/seting')
            ->set('link', ORM::factory('Userslink')->where('user_id','=',$user->id)->find());
//            ->set('widgets', ORM::factory('User')->available_widgets()->find_all());
        $this->template->content = $this->_content;

    }
}