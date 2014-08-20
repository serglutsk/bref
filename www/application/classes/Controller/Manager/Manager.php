<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Created by JetBrains PhpStorm.
 * User: 1
 * Date: 26.11.13
 * Time: 11:59
 * To change this template use File | Settings | File Templates.
 */
class Controller_Manager_Manager extends Controller_Base
{

    public $template = 'template';

    /**
     * Set main configs for current page
     */
    public function before()
    {
        parent::before();

        View::set_global('title', 'Manager page');
        View::set_global('description', 'Manager page');
        $this->template->styles = array('reset', 'templates/template/style', 'manager/style');
        $this->template->scripts = array('jquery', 'hoverIntent', 'templates/template/script', 'manager/script');
        $this->template->modules = ORM::factory('User', Auth_ORM::instance()->get_user()->id)->modules->find_all();
    }

    public function action_index()
    {

        $request = ORM::factory('Request');
        $user_id = Auth::instance()->get_user()->id;

        if (!Auth::instance()->logged_in('admin')) {
            $order = ORM::factory('Request_Users')->where('user_id', '=', $user_id)->find_all('request_id');
            foreach ($order as $or) {
                $request_id[] = $or->request_id;

            }
            $count_briefs = array(
                'new' => $request->where('status', '=', 'new')->where('id', 'in', $request_id)->count_all(),
                'active' => $request->where('status', '=', 'active')->where('id', 'in', $request_id)->count_all(),
                'pending' => $request->where('status', '=', 'pending')->where('id', 'in', $request_id)->count_all(),
                'complete' => $request->where('status', '=', 'complete')->where('id', 'in', $request_id)->count_all(),
            );
//
            $briefs = array(
                'new' => $request->where('status', '=', 'new')->where('id', 'in', $request_id)->limit(5)->order_by('created','DESC')->find_all(),
                'active' => $request->where('status', '=', 'active')->where('id', 'in', $request_id)->limit(5)->order_by('created','DESC')->find_all(),
                'pending' => $request->where('status', '=', 'pending')->where('id', 'in', $request_id)->limit(5)->order_by('created','DESC')->find_all(),
                'complete' => $request->where('status', '=', 'complete')->where('id', 'in', $request_id)->limit(5)->order_by('created','DESC')->find_all(),
            );
        } else {

            $count_briefs = array(
                'new' => $request->where('status', '=', 'new')->count_all(),
                'active' => $request->where('status', '=', 'active')->count_all(),
                'pending' => $request->where('status', '=', 'pending')->count_all(),
                'complete' => $request->where('status', '=', 'complete')->count_all(),
            );
            $briefs = array(
                'new' => $request->where('status', '=', 'new')->limit(5)->order_by('created','DESC')->find_all(),
                'active' => $request->where('status', '=', 'active')->limit(5)->order_by('created','DESC')->find_all(),
                'pending' => $request->where('status', '=', 'pending')->limit(5)->order_by('created','DESC')->find_all(),
                'complete' => $request->where('status', '=', 'complete')->limit(5)->order_by('created','DESC')->find_all(),
            );
        }
        $rights = array(
            'dev_price' => $this->check('request', 'set_dev_price'),
            'design_price' => $this->check('request', 'set_design_price'),
            'total_price' => $this->check('request', 'set_total_price'),
            'check_brief' => $this->check('request', 'check_brief'),
        );

        $this->_content = View::factory('manager/index')
            ->set('briefs', $briefs)
            ->set('briefs', $briefs)
            ->set('count_briefs', $count_briefs)
            ->set('rights', $rights);

        $this->template->content = $this->_content;
    }
   protected  function request_url()
    {
        $result = ''; // Пока результат пуст
        $default_port = 80; // Порт по-умолчанию

        // А не в защищенном-ли мы соединении?
        if (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS']=='on')) {
            // В защищенном! Добавим протокол...
            $result .= 'https://';
            // ...и переназначим значение порта по-умолчанию
            $default_port = 443;
        } else {
            // Обычное соединение, обычный протокол
            $result .= 'http://';
        }
        // Имя сервера, напр. site.com или www.site.com
        $result .= $_SERVER['SERVER_NAME'];

        // А порт у нас по-умолчанию?
        if ($_SERVER['SERVER_PORT'] != $default_port) {
            // Если нет, то добавим порт в URL
            $result .= ':'.$_SERVER['SERVER_PORT'];
        }
        // Последняя часть запроса (путь и GET-параметры).
        $result .= $_SERVER['REQUEST_URI'];
        // Уфф, вроде получилось!
        return $result;
    }
}