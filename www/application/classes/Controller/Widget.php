<?php defined('SYSPATH') or die('No direct script access.');

/*
 *  Твой виджет должен наследовать Controller_Widget
 *  Название твоего класса в обязательном порядке должно быть прописано в поле "class_name"
 *  таблици "widgets" в соответсвующей твоему виджету строке.
 *  В каждом модуле может быть неограниченное количество виджетов, соответственно в твоем классе
 *  на каждый из них должен быть отдельный static метод, который в обязательном порядке нужно прописать
 *  в поле "method_name" в соответсвующей твоему виджету строке.
 *  Метод твоего виджета должен вернуть содержимое твоего виджета
 *  ПРИМЕР:
 *
    public static function my_widget()
    {
        $content = View::factory('my_module/widget')
            ->bind('message', $my_message);

        $my_message = "Hello, world!";

        return $content;
    }

 */
abstract class Controller_Widget extends Controller_Module {

    public static $widget_template = 'widget';

    public function before()
    {
        parent::before();
    }

    // Будет переопределенно в наследующем классе
    public static function show()
    {
        return "Widget is not ready! Try again later.";
    }

    // Оборачиваем все виджеты в шаблон
    public static function render($widget)
    {
        // Check if widget deleted (dont need any more)
        /*$user = Auth::instance()->get_user();

        if (!self::check_widget($widget->module->uri, 'allowed'))
        {

            $user->remove('widgets', $widget->id);
            return "";
        }*/

        $class_name = $widget->class_name;
        $method_name = $widget->method_name;

        $content = View::factory(self::$widget_template)
            ->set('widget', $class_name::$method_name())
            ->set('id', $widget->id);


        return $content;
    }

}

// End