<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ajax_Msg_Popup extends Controller_Ajax {

    public function before(){

        parent::before();
        // Берем данные юзера
        if (!($user = Auth::instance()->get_user()))die('No direct script access.');
    }

    public function action_list()
    {

        $this->json['message_box_ok'] = "#msgs";
        $this->json['message_box_ok_separator'] = "";
        $this->json['message_box_err'] = "alert";

        // Поиск доступных сообщений
        $messages = ORM::factory("Message")->new_messages()->type('popup')->find_all()->as_array();

        foreach($messages as $message)
        {
            // Подключаем вид
            $view = View::factory("msg/popup")
                ->set('id', $message->id)
                ->set('text', $message->text)
                ->set('url', $message->url)
                ->set('subject', $message->subject);

            // Сгенерированный вид в json клиенту
            $this->json['message'][] = (string) $view;
        }

        // Результат положительный
        $this->json['status'] = TRUE;
    }

    public function action_close()
    {
        $this->json['message_box_ok'] = FALSE;
        $this->json['message_box_err'] = "alert";

        // Извлекаем данные из POST запроса
        $post = Arr::extract($_POST, array('msg_id','msg_url'), '');
        $post = Arr::map('HTML::chars',$post);

        if($post['msg_url']!="false")
        {
            $this->json['redirect'] = $post['msg_url'];
        }


        // Валидация от пустых данных
        $validation = Validation::factory($post)
            -> rule('msg_id', 'not_empty')
            -> rule('msg_id', 'numeric');

        // Проверка правилам валидации
        if ($validation->check())
        {
            $msg = ORM::factory('Message', $post['msg_id'])
                ->set('readed', date('Y-m-d H:i:s',time()))
                ->save();

            // В json выдаем что все ОК!
            $this->json['status'] = TRUE;

        }
        else
        {
            $this->json['message'] = $validation->errors('comments');
        }

    }

} // End Page