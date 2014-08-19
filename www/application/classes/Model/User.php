<?php defined('SYSPATH') OR die('No direct script access.');
/**
 * Created by JetBrains PhpStorm.
 * User: 1
 * Date: 22.11.13
 * Time: 15:45
 * To change this template use File | Settings | File Templates.
 */

class Model_User extends Model_Auth_User {

    protected $_table_name = 'users';

    protected $_has_many = array(
        'user_tokens' => array('model' => 'User_Token'),
        'messages' => array('model' => 'Message'),
        'roles'       => array('model' => 'Role', 'through' => 'roles_users'),
        'modules'     => array('model' => 'Module', 'through' => 'users_modules'),
        'widgets'     => array('model' => 'Widget', 'through' => 'widgets_users'),
    );

    public function available_modules()
    {
        $result = ORM::factory('Module')
            ->where('system', '!=', 'TRUE')
            ->and_where_open();

        $modules = $this->select('rights.module_id')->distinct('rights.module_id')
            ->join('roles_users')
            ->on('user.id', '=', 'roles_users.user_id')
            ->join('rights_roles')
            ->on('roles_users.role_id', '=', 'rights_roles.role_id')
            ->join('rights')
            ->on('rights_roles.right_id', '=', 'rights.id')
            ->where('user.id', '=', Auth_ORM::instance()->get_user()->id);

        foreach ($modules->find_all() as $module)
        {
            $result->or_where('id', '=', $module->module_id);
        }

        $result->and_where_close();

        return $result;
    }

    public function available_widgets()
    {
        $result = ORM::factory('Widget');

        foreach (Auth_ORM::instance()->get_user()->modules->find_all() as $module)
        {
            $result->or_where('module_id', '=', $module->id);
        }

        return $result;
    }

    public function phone_set($phone)
    {
        $phone = serialize($phone);
        $this->phone = $phone;
    }

    public function phone_get()
    {
        return unserialize($this->phone);
    }


    public static function unique_username($username)
    {
        // Check if the username already exists in the database
        return ! DB::select(array(DB::expr('COUNT(username)'), 'total'))
            ->from('users')
            ->where('username', '=', $username)
            ->execute()
            ->get('total');
    }


    public static function unique_email($email)
    {
        // Check if the email already exists in the database
        return ! DB::select(array(DB::expr('COUNT(email)'), 'total'))
            ->from('users')
            ->where('email', '=', $email)
            ->execute()
            ->get('total');
    }
}