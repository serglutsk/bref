<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_Role extends Model_Auth_Role {

    // Relationships
    protected $_has_many = array(
        'users' => array('model' => 'User', 'through' => 'roles_users'),
        'rights' => array('model' => 'Right', 'through' => 'rights_roles'),
    );

} // End Role Model