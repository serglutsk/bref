<?php defined('SYSPATH') OR die('No direct script access.');
/**
 * Created by JetBrains PhpStorm.
 * User: 1
 * Date: 26.11.13
 * Time: 11:59
 * To change this template use File | Settings | File Templates.
 */

class Controller_Designer_Designer extends Controller_Module {

    public function action_index()
    {
        $this->_content = View::factory('designer/index');
        $this->template->content = $this->_content;
    }
}