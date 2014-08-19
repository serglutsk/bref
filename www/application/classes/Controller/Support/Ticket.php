<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Support_Ticket extends Controller_Module {
    public $template = 'template';
    public function before()
    {
        parent::before();

        View::set_global('title', 'Manager page');
        View::set_global('description', 'Manager page');
        $this->template->styles = array('reset', 'templates/template/style', 'support/upload');
        $this->template->scripts = array('jquery', 'hoverIntent', 'templates/template/script', 'manager/script');
        $this->template->modules = ORM::factory('User', Auth_ORM::instance()->get_user()->id)->modules->find_all();
    }
    // Action вывода списка тикетов
    public function action_index()
    {
        // Грузим соответствующий вид
        // Если разрешено видеть все тикеты грузим админский
        if($this->check('support', 'show_all'))
        {
            $this->_content = View::factory('support/admin/ticket/list');

        }
        // Иначе пользоватальский
        else
        {
            $this->_content = View::factory('support/ticket/list');
        }
        // В вид будет передан массив тикетов
        $this->_content->bind('tickets', $tickets);

        // Достаем тикеты с БД
        $tickets = ORM::factory('Ticket');

        // Если нет права на просмотр всех тикетов
        if(!$this->check('support', 'show_all'))
        {
            // Отфильтровываем только свои тикеты
            $tickets->get_by_user(Auth_ORM::instance()->get_user()->id);
        }

        // Непосредственно выборка
        $tickets = $tickets->find_all();

        $this->template->content = $this->_content;
    }



    public function action_add()
    {
        // Берем список значений приоритетов с БД
        $priorities = ORM::factory('Ticket_priority')
            ->find_all()
            ->as_array();
        // Берем список значений типов с БД
        $types = ORM::factory('Ticket_type')
            ->find_all()
            ->as_array();

        $priority_array = array();
        $type_array = array();

        foreach($priorities as $priority)
        {
            $priority_array[$priority->id] = $priority->value;
        }
        foreach($types as $type)
        {
            $type_array[$type->id] = $type->value;
        }

        // Грузим соответствующий вид
        $this->_content = View::factory('support/ticket/add')
            ->set('priorities',$priority_array)
            ->set('types',$type_array);

        $this->template->content = $this->_content;
    }
} // End Page