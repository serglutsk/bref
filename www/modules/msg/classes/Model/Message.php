<?php defined('SYSPATH') or die('No direct script access.');

class Model_Message extends ORM {

    protected $_table_name = 'messages';

    protected $_table_columns = array(
        'id' => array('type'=>'int'),
        'user_id' => array('type'=>'int'),
        'type' => array('type'=>'string'),
        'subject' => array('type'=>'string'),
        'url' => array('type'=>'string'),
        'text' => array('type'=>'string'),
        'created' => array('type'=>'date'),
        'readed' => array('type'=>'date')
    );

    protected $_belongs_to = array(
        'user' => array(
            'model' => 'user',
            'foreign_key' => 'user_id',
        ),
    );

    // Автоматическое сохранение даты создания записи
    protected $_created_column = array(
        'column' => 'created',
        'format' => 'Y-m-d H:i:s',
    );

// Автоматическое сохранение даты обновления записи
    protected $_updated_column = array(
        'column' => 'readed',
        'format' => 'Y-m-d H:i:s'
    );


    public function new_messages()
    {
        $this->and_where('user_id','=',Auth_ORM::instance()->get_user())
            ->and_where('readed','=','0000-00-00 00:00:00');

        return $this;
    }

    public function type($type)
    {
        $this->and_where('type', '=', $type);

        return $this;
    }

} // End Model_Message