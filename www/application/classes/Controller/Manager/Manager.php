<?php defined('SYSPATH') OR die('No direct script access.');
/**
 * Created by JetBrains PhpStorm.
 * User: 1
 * Date: 26.11.13
 * Time: 11:59
 * To change this template use File | Settings | File Templates.
 */

class Controller_Manager_Manager extends Controller_Base {

    public $template = 'template';

    /**
     * Set main configs for current page
     */
    public function before()
    {
        parent::before();

        View::set_global('title', 'Manager page');
        View::set_global('description', 'Manager page');
        $this->template->styles = array('reset', 'templates/template/style', 'manager/style');
        $this->template->scripts = array('jquery', 'hoverIntent', 'templates/template/script', 'manager/script');
        $this->template->modules = ORM::factory('User', Auth_ORM::instance()->get_user()->id)->modules->find_all();
    }

    public function action_index()
    {

        $request = ORM::factory('Request')->order_by('updated', 'DESC');


        $briefs = array(
            'new' => $request->where('status', '=', 'new')->limit(5)->find_all(),
            'active' => $request->where('status', '=', 'active')->limit(5)->find_all(),
            'pending' => $request->where('status', '=', 'pending')->limit(5)->find_all(),
            'complete' => $request->where('status', '=', 'complete')->limit(5)->find_all(),
        );

        $rights = array(
            'dev_price' => $this->check('request', 'set_dev_price'),
            'design_price' => $this->check('request', 'set_design_price'),
            'total_price' => $this->check('request', 'set_total_price'),
            'check_brief' => $this->check('request', 'check_brief'),
        );

        $this->_content = View::factory('manager/index')
            ->set('briefs', $briefs)
            ->set('rights', $rights);

        $this->template->content = $this->_content;
    }
}