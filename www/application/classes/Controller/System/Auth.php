<?php defined('SYSPATH') OR die('No direct script access.');
/**
 * Created by JetBrains PhpStorm.
 * User: 1
 * Date: 26.11.13
 * Time: 11:59
 * To change this template use File | Settings | File Templates.
 */

class Controller_System_Auth extends Controller_Base {

    public function before()
    {
        parent::before();

        $this->template->styles = array('reset', 'templates/empty/style', 'system/auth/style');
        $this->template->scripts = array('jquery', 'system/auth/script');

        // Redirecting logged users
        if($this->request->action() !== 'exit')
        {
            if(Auth_ORM::instance()->logged_in('login'))
            {
                $this->redirect(URL::site('system/desktop'));
            }

        }
    }

    public function action_index()
    {
        if ($this->request->method() === Request::POST)
        {

            $post_data = $this->request->post();

            Arr::map('HTML::chars', $post_data);

            $post_data['login'] = UTF8::trim($post_data['login']);
            $post_data['password'] = UTF8::trim($post_data['password']);

            $valid = Validation::factory($post_data);
            $valid->rule('login', 'not_empty')
                 ->rule('password', 'not_empty');

            if (!$valid->check())
            {
                $this->_values = $post_data;
                $this->_errors = $valid->errors('auth');
            }
            else
            {
//
                $login = Auth_ORM::instance()->login(Arr::get($post_data, 'login'), Arr::get($post_data, 'password'));

                if (!$login)
                {
                    $this->_values = $post_data;
                    $this->_errors = $valid->errors('auth');
                    $this->_errors['incorrect'] = __('Incorrect login or password');
                }
                else
                {
                    //$this->redirect('system/auth');
                }
            }
        }

        $this->_content = View::factory('system/auth/index');
        $this->template->content = $this->_content;
    }

    public function action_exit()
    {
        Auth_ORM::instance()->logout();
        Session::instance()->destroy();
        $this->redirect(URL::site('system/auth'));
        Session::instance()->destroy();
    }
}
