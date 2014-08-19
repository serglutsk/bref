<?php defined('SYSPATH') or die('No direct script access.');

class Kohana_Msg {

    public static function factory()
    {
        return new Msg();
    }

    public function __construct()
    {
        //$this->inform_to_roles(1,"mess",'subj');
    }

    private function inform_to($users_id, $type, $subject, $message='', $url = '', $email = 'null')
    {
        if (!is_array($users_id))
        {
            $users_id = array($users_id);
        }

        if($type == "email")
        {
            // грузим config
            $config = Kohana::$config->load('email');
            Email::connect($config);
        }

        if ($users_id === null)
        {
            // Отправитель support@<hostname>
            $from = 'support@'.$_SERVER['HTTP_HOST'];
            // Вставляем в HTML вид
            $content = (string) View::factory("msg/email")
                ->set("message", $message);
            // Отправляем
            Email::send($email, $from, $subject, $content, $html = true);
        }
        else
        {
            foreach($users_id as $user_id)
            {
                $data = array(
                    'user_id' => $user_id,
                    'type' => $type,
                    'subject' => $subject,
                    'url' => $url,
                    'text' => $message
                );

                $msg = ORM::factory('Message')->values($data)->save();

                if($type == "email")
                {
                    // Отправляем email пользователю
                    $to = ORM::factory("User", $user_id)->email;
                    // Отправитель support@<hostname>
                    $from = 'support@'.$_SERVER['HTTP_HOST'];
                    // Вставляем в HTML вид
                    $content = (string) View::factory("msg/email")
                        ->set("message", $message);
                    // Отправляем
                    Email::send($to, $from, $subject, $content, $html = true);
                }
            }
        }
    }

    private function inform_to_roles($roles_id, $type, $subject, $message='', $url = '')
    {
        if (!is_array($roles_id))
        {
            $roles_id = array($roles_id);
        }

        $users_id = array();

        foreach($roles_id as $role_id)
        {
            $users = ORM::factory('Role', $role_id)->users->find_all()->as_array();
            foreach($users as $user)
            {
                $users_id[] = $user->id;
            }
        }

        return $this->inform_to($users_id, $type, $subject, $message, $url);
    }

    private function inform_to_admin($type, $subject, $message='', $url = '')
    {
        return $this->inform_to_roles(2, $type, $subject, $message, $url);
    }

    public function popup_to($users_id, $subject, $message='', $url = '')
    {
        return $this->inform_to($users_id, "popup", $subject, $message, $url);
    }

    public function popup_to_roles($roles_id, $subject, $message='', $url = '')
    {
        return $this->inform_to_roles($roles_id, "popup", $subject, $message, $url);
    }

    public function popup_to_admin($subject, $message='', $url = '')
    {
        return $this->inform_to_admin("popup", $subject, $message, $url);
    }

    public function email_to($users_id, $subject, $message)
    {
        return $this->inform_to($users_id, "email", $subject, $message, "");
    }

    public function email_to_roles($roles_id, $subject, $message)
    {
        return $this->inform_to_roles($roles_id, "email", $subject, $message, "");
    }

    public function email_to_admin($subject, $message)
    {
        return $this->inform_to_admin("email", $subject, $message, "");
    }
}