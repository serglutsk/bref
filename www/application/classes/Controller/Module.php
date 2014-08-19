<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Module extends Controller_Base {

    public function before()
    {
        parent::before();

        Msg::factory();
        
    }

}
