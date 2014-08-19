<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ajax_System_Widget extends Controller_Ajax {

    public function action_add_widget_list()
    {
        // Берем данные юзера
        if (!($user = Auth::instance()->get_user()))die('No direct script access.');

        $this->json['message_box_ok'] = "#widget_result";
        $this->json['message_box_err'] = "alert";

        // Поиск доступных виджетов
        $widgets = $user->available_widgets()->find_all()->as_array();

        // Формируем массив выбранных пользователем виджетов
        $selected_widgets = $user->widgets->find_all();
        $arr_selected_widgets = array();
        foreach($selected_widgets as $selected_widget)
        {
            $arr_selected_widgets[] = $selected_widget->name;
        }

        foreach($widgets as $widget)
        {
            // Проверяем на наличие прав для просмотра этого модуля
            if (self::check_widget($widget->module->dir, 'allowed'))
            {
                $this->json['message'][$widget->id] = "<b>".$widget->name."</b>";
                if(in_array($widget->name, $arr_selected_widgets))
                {
                    $this->json['message'][$widget->id] .= " "
                        .__("installed")
                        ."<p><i>"
                        .$widget->description
                        ."</i></p>";
                }
                else
                {
                    $this->json['message'][$widget->id] .= " "
                        .HTML::anchor("","Добавить",array('onclick' => "widget_add(".$widget->id.");return false"))
                        ."<p><i>"
                        .$widget->description
                        ."</i></p>";
                }
            }
        }

        $this->json['message']['close'] = HTML::anchor("","Отмена",array('onclick' => "ajax_hide();return false"));

        $this->json['status'] = TRUE;
    }

    public function action_close_widget()
    {

        // Берем данные юзера
        if (!($user = Auth::instance()->get_user()))die('No direct script access.');

        $this->json['message_box_ok'] = FALSE;
        $this->json['message_box_err'] = "alert";

        // Извлекаем данные из POST запроса
        $post = Arr::extract($_POST, array('widget_id'), '');
        $post = Arr::map('HTML::chars',$post);

        // Валидация от пустых данных
        $validation = Validation::factory($post)
            -> rule('widget_id', 'not_empty')
            -> rule('widget_id', 'numeric');

        // Проверка правилам валидации
        if ($validation->check())
        {
            // Удаляем связь
            $user->remove('widgets', $post['widget_id']);

            // В json выдаем что все ОК!
            $this->json['status'] = TRUE;

        }
        else
        {
            $this->json['message'] = $validation->errors('comments');
        }

    }

    public function action_add_widget()
    {

        // Берем данные юзера
        if (!($user = Auth::instance()->get_user()))die('No direct script access.');

        $this->json['message_box_ok'] = "#widget_add";
        $this->json['message_box_ok_method'] = "before";
        $this->json['message_box_err'] = "alert";

        // Извлекаем данные из POST запроса
        $post = Arr::extract($_POST, array('widget_id'), '');
        $post = Arr::map('HTML::chars',$post);

        // Валидация от пустых данных
        $validation = Validation::factory($post)
            -> rule('widget_id', 'not_empty')
            -> rule('widget_id', 'numeric');

        // Проверка правилам валидации
        if ($validation->check())
        {
            $user->add('widgets', $post['widget_id']);

            $widget = ORM::factory('Widget', $post['widget_id']);
            $this->json['message'] = array( (string) Controller_Widget::render($widget));

            // В json выдаем что все ОК!
            $this->json['status'] = TRUE;

        }
        else
        {
            $this->json['message'] = $validation->errors('comments');
        }

    }

} // End Page