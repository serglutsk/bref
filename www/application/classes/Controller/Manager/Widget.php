<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Manager_Widget extends Controller_Widget {

    // Метод виджета отображающий количество новых проэктов
    public static function new_projects()
    {
            $content = View::factory('manager/widget_new_projects')
                ->bind('manager_cnt', $manager_cnt);

            $manager_cnt = ORM::factory('Request')
                ->where('status', '=', 'new')
                ->count_all();

            return $content;
    }

} // End Controller_Manager_Widget