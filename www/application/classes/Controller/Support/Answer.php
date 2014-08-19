<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Support_Answer extends Controller_Module {

    // Action вывода списка тикетов
    public function action_index()
    {
        // Грузим соответствующий вид
        // Если разрешено видеть все тикеты грузим админский
        if($this->check('support', 'show_all'))
        {
            $this->_content = View::factory('support/admin/ticket/answer/list');
        }
        // Иначе пользоватальский
        else
        {
            $this->_content = View::factory('support/ticket/answer/list');
        }

        $user = Auth_ORM::instance()->get_user();

        $this->_content->bind('answers', $answers)
            ->bind('ticket', $ticket)
            ->set('user', $user->id);

        $ticket = ORM::factory('Ticket', (int) $this->request->param('id'));

        if(!$ticket->loaded())
        {
            $this->redirect(URL::site('/'));
        }

        // Читать чужие тикеты может только пользователь имеющий соответсвующее право show_all
        if($ticket->user_id != $user->id AND !$this->check('support', 'show_all'))die('Access denied');

        $answers = $ticket
            ->answers
            ->find_all();

        $this->template->content = $this->_content;
    }



    public function action_add()
    {
        // Временно! Далее будет ACL
        if (!($user = Auth::instance()->get_user()))
        {
            $content = View::factory('auth_form');
            $this->template->content = $content;
            return;
        }

        // Грузим соответствующий вид
        $this->_content = View::factory('support/ticket/answer/add')
            -> bind('ticket', $ticket);

        $ticket = ORM::factory('Ticket', (int) $this->request->param('id'));

        if(!$ticket->loaded())
        {
            $this->redirect(URL::site('/'));
        }

        // Давать ответы на чужие тикеты может только пользователь имеющий соответсвующее право show_all
        if($ticket->user_id != $user->id AND !$this->check('support', 'show_all'))die('Access denied');

        $this->template->content = $this->_content;
    }
} // End Page