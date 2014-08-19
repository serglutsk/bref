<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Support_Widget extends Controller_Widget {

    // Метод виджета отображающий количество тикетов с ответами
    public static function base_info()
    {
        $content = View::factory('support/widget_info')
            ->bind('ticket_cnt', $ticket_cnt);

        $ticket_cnt = ORM::factory('Ticket')
            ->get_by_user(Auth_ORM::instance()->get_user()->id)
            ->get_by_status(array(2))
            ->count_all();


        return $content;
    }

    // Метод виджета отображающий последний ответ
    public static function last_answer()
    {
        $content = View::factory('support/widget_answer')
            ->bind('last_answer', $last_answer)
            ->bind('url', $url);

        $ticket = ORM::factory('Ticket')
            ->get_by_user(Auth_ORM::instance()->get_user()->id)
            ->get_by_status(array(2))
            ->order_by('id','desc')
            ->find();

        if(!$ticket->loaded())
        {
            $last_answer = __("No answers!");
            return $content;
        }

        $answer = $ticket
            ->answers
            ->order_by('id','desc')
            ->find();

        $last_answer = $answer->description;
        $url = "/support/answer/index/".$ticket->id;

        return $content;
    }

} // End Page