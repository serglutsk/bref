<?php defined('SYSPATH') or die('No direct script access.');

class Model_Widget extends ORM {
    protected $_table_columns = array(
        'id' => array('type'=>'int'),
        'module_id' => array('type'=>'int'),
        'class_name' => array('type'=>'string'),
        'method_name' => array('type'=>'string'),
        'name' => array('type'=>'string'),
        'description' => array('type'=>'string'),
    );

    protected $_has_many = array(
        'users' => array(
            'model' => 'User',
            'through' => 'widgets_users',
        ),
    );

    protected $_belongs_to = array(
        'module' => array(
            'model' => 'Module',
            'foreign_key' => 'module_id',
        ),
    );

} // End Model_Ticket