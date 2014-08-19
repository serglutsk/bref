<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_Module extends ORM {

    // Relationships
    protected $_has_many = array(
        'rights' => array('model' => 'Right', 'foreign_key' => 'module_id'),
        'users' => array('model' => 'User', 'through' => 'users_modules'),
        'widgets' => array('model' => 'Widget', 'foreign_key' => 'module_id'),
    );

} // End Role Model