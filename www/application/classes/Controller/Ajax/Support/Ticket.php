<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ajax_Support_Ticket extends Controller_Ajax {

    public function action_add_ticket()
    {

        // Берем данные юзера
        if (!($user = Auth::instance()->get_user()))die('No direct script access.');

        // При успешном выполнении - переадресация на главную
        $this->json['redirect'] = "/support/ticket";

        $this->json['message_box_ok'] = "#status";
        $this->json['message_box_err'] = "#status";

        // Извлекаем данные из POST запроса
        $post = Arr::extract($_POST, array('type', 'subject', 'priority', 'description'), '');
        $post = Arr::map('HTML::chars',$post);

        // Валидация от пустых данных
        $validation = Validation::factory($post)
            -> rule('subject', 'not_empty')
            -> rule('type', 'not_empty')
            -> rule('type', 'numeric')
            -> rule('priority', 'not_empty')
            -> rule('priority', 'numeric')
            -> rule('description', 'not_empty');

        // Проверка правилам валидации
        if ($validation->check())
        {
            // Данные для записи в таблицу тикетов
            $ticket_data = array(
                        'user_id' => $user->id,
                        'type_id' => $post['type'],
                        'priority_id' => $post['priority'],
                        'status_id' => '1',
                        'subject' => $post['subject'],
                        'description' => '',
                        'created' => Date::formatted_time(),
                        'updated' => Date::formatted_time(),
                );

            // Данные для записи в таблицу ансверов
            $answer_data = array(
                        'user_id' => $user->id,
                        'description' => $post['description'],
                        'created' => Date::formatted_time(),
                );

            // Запись данных в тикеты
            $ticket = ORM::factory('Ticket')
                    ->values($ticket_data)
                    ->save();

            // Запись данных в ансверы
            $answer = ORM::factory('Ticket_answer')
                    ->values($answer_data)
                    ->save();

            // Запись данных в файлы
            $file = ORM::factory('Ticket_file')
                    ->put_file($answer);

            // Создание связи тикет/ансвер (множ-множ)
            $ticket->add('answers',$answer);

            $this->json['status'] = TRUE;

            // Уведомляем всех администраторов popup сообщением
            $url = "/support/answer/index/".$ticket;
            $subject = __("Created new ticket by")." ".$user->username;
            $message = $post['description'];
            Msg::factory()->popup_to_admin($subject, $message, $url);
        }
        else
        {
            $this->json['message'] = $validation->errors('comments');
        }

    }

    public function action_close_ticket()
    {

        // Берем данные юзера
        if (!($user = Auth::instance()->get_user()))die('No direct script access.');

        // При успешном выполнении - переадресация на главную
        $this->json['redirect'] = "/support/ticket";

        $this->json['message_box_ok'] = "#status";
        $this->json['message_box_err'] = "#status";

        // Извлекаем данные из POST запроса
        $post = Arr::extract($_POST, array('ticket_id'), '');
        $post = Arr::map('HTML::chars',$post);

        // Валидация от пустых данных
        $validation = Validation::factory($post)
            -> rule('ticket_id', 'not_empty')
            -> rule('ticket_id', 'numeric');

        // Проверка правилам валидации
        if ($validation->check())
        {
            // Данные для обновления в таблицу тикетов
            $ticket_data = array(
                        'status_id' => '3',
                );

            // Проверяем есть ли такой тикет
            $ticket = ORM::factory('Ticket',$post['ticket_id']);
            if(!$ticket->loaded()) HTTP::redirect(URL::site('/'));

            // Закрыть тикет может только тот кто его создал...
            if($ticket->user_id != $user->id)
            {
                $this->json['message'] = array(__('Access denied'));
            }
            else
            {
                // Обновляем
                $ticket ->values($ticket_data)
                        ->save();

                // Уведомляем всех администраторов popup сообщением
                $subject = __('Ticket #:id closed by ', array(':id' => $ticket->id))." ".$user->username;
                Msg::factory()->popup_to_admin($subject);

                // В json выдаем что все ОК!
                $this->json['status'] = TRUE;
            }
        }
        else
        {
            $this->json['message'] = $validation->errors('comments');
        }

    }


public function action_add_answer()
    {
        // Берем данные юзера
        if (!($user = Auth::instance()->get_user()))die('No direct script access.');

        $this->json['message_box_ok'] = "#status";
        $this->json['message_box_err'] = "#status";

        // Извлекаем данные из POST запроса
        $post = Arr::extract($_POST, array('ticket_id', 'description'), '');
        $post = Arr::map('HTML::chars',$post);

        // Валидация от пустых данных
        $validation = Validation::factory($post)
            -> rule('ticket_id', 'not_empty')
            -> rule('ticket_id', 'numeric')
            -> rule('description', 'not_empty');

        // Проверка правилам валидации
        if ($validation->check())
        {

            // При успешном выполнении - переадресация
            $this->json['redirect'] = "/support/answer/index/".$post['ticket_id'];

            // Данные для записи в таблицу ансверов
            $answer_data = array(
                        'user_id' => $user->id,
                        'description' => $post['description'],
                        'created' => Date::formatted_time(),
                );

            // Обновление Updated тикета
            $ticket = ORM::factory('Ticket',$post['ticket_id']);
            if(!$ticket->loaded()) HTTP::redirect(URL::site('/'));

            // Давать ответы чужие тикеты может только пользователь имеющий соответсвующее право show_all
            if($ticket->user_id != $user->id AND !$this->check('support', 'show_all'))die('Access denied');

            // Данные для обновления в таблице тикетов
            $ticket_data = array(
                        // Если отвечаем на свой тикет - статус "открыт", чужое - "есть ответ"
                        'status_id' => $ticket->user_id == $user->id ? 1 : 2,
                        'updated' => Date::formatted_time(),
                );

            $ticket ->values($ticket_data)
                    ->save();

            // Запись данных в ансверы
            $answer = ORM::factory('Ticket_answer')
                    ->values($answer_data)
                    ->save();

            // Создание связи тикет/ансвер (множ-множ)
            $ticket->add('answers',$answer);

            // Запись данных в файлы
            $file = ORM::factory('Ticket_file')
                    ->put_file($answer);

            $this->json['status'] = TRUE;

            // Уведомление
            $msg = Msg::factory();
            $message = $post['description'];
            $url = "/support/answer/index/".$ticket;
            if($ticket->user_id != $user->id)
            {
                // Уведомляем пользователя об ответе popup сообщением
                $subject = __('Your ticket #:id answered', array(':id' => $ticket->id));
                $msg->popup_to($ticket->user_id, $subject, $message, $url);
            }
            else
            {
                // Уведомляем всех администраторов об ответе пользователя
                $subject = __('Ticket #:id answered by', array(':id' => $ticket->id))." ".$user->username;
                $msg->popup_to_admin($subject, $message, $url);
            }

        }
        else
        {
            $this->json['message'] = $validation->errors('comments');
        }

    }

} // End Page