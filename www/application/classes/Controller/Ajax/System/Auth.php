<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ajax_System_Auth extends Controller_Ajax {

    public function action_login()
    {
        $this->json['redirect'] = '/';

        $post_data = $this->request->post();

        Arr::map('HTML::chars', $post_data);

        $post_data['login'] = UTF8::trim($post_data['login']);
        $post_data['password'] = UTF8::trim($post_data['password']);

        $valid = Validation::factory($post_data);
        $valid->rule('login', 'not_empty')
            ->rule('password', 'not_empty');

        if (!$valid->check())
        {
            $this->json['message'] = $valid->errors('auth');
        }
        else
        {

            $login = Auth_ORM::instance()->login(Arr::get($post_data, 'login'), Arr::get($post_data, 'password'), Arr::get($post_data, 'remember'));

            if (!$login)
            {
                $this->json['message'] = $valid->errors('auth');
                $this->json['message']['incorrect'] = __('Incorrect login or password');
            }
            else
            {
                $this->json['status'] = TRUE;
            }
        }
    }

    public function action_link(){
        $unic= Text::random();
        $user=Auth::instance()->get_user();
        $link = ORM::factory('Userslink');

        $link->user_id=$user->id;
        $link->value=$unic;
        $link->save();
        echo $unic;die();
    }
    public function action_lang(){
        $post_data = $this->request->post();

        Arr::map('HTML::chars', $post_data);

        $post_data = UTF8::trim($post_data['lang']);
        if( $post_data =='ru-ru'){
            I18n::$lang='ru-ru';
            Cookie::set('lang', I18n::$lang);
        }elseif( $post_data =='en-us'){
            I18n::$lang='en-us';
            Cookie::set('lang', I18n::$lang);
//            $response =  Request::current()->response();
//
//            $response->headers('Cache-Control', 'no-cache,no-store,max-age=0,must-revalidate');
//            $response->headers('Pragma', 'no-cache');
        }else{
            I18n::$lang='it-it';
            Cookie::set('lang', I18n::$lang);
        }
        echo($post_data );die();
    }

} // End Page