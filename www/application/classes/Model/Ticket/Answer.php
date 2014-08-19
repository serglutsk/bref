<?php defined('SYSPATH') or die('No direct script access.');

class Model_Ticket_Answer extends ORM {
    protected $_table_name = 'ticket_answers';
    protected $_table_columns = array(
        'id' => array('type'=>'int'),
        'user_id' => array('type'=>'int'),
        'description' => array('type'=>'string'),
        'created' => array('type'=>'date')
        );

    // Автоматическое сохранение даты создания записи
    protected $_created_column = array(
        'column' => 'created',
        'format' => 'Y-m-d H:i:s',
    );

    protected $_belongs_to = array(
        'user' => array(
            'model' => 'User',
            'foreign_key' => 'user_id',
        ),
    );
    protected $_has_many = array(
        'tickets' => array(
            'model' => 'Ticket',
            'through' => 'tickets_answers',
        ),
        'files' => array(
            'model' => 'Ticket_File',
            'foreign_key' => 'answer_id',
        ),
    );
} // End