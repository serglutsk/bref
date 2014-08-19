<?php defined('SYSPATH') or die('No direct script access.');

class Model_Ticket extends ORM {
    protected $_table_columns = array(
        'id' => array('type'=>'int'),
        'user_id' => array('type'=>'int'),
        'type_id' => array('type'=>'int'),
        'priority_id' => array('type'=>'int'),
        'status_id' => array('type'=>'int'),
        'subject' => array('type'=>'string'),
        'description' => array('type'=>'string'),
        'created' => array('type'=>'date'),
        'updated' => array('type'=>'date')
        );
    // Автоматическое сохранение даты создания записи
    protected $_created_column = array(
        'column' => 'created',
        'format' => 'Y-m-d H:i:s',
    );

    // Автоматическое сохранение даты обновления записи
    protected $_updated_column = array(
        'column' => 'updated',
        'format' => 'Y-m-d H:i:s'
    );

    protected $_belongs_to = array(
        'type' => array(
            'model' => 'Ticket_Type',
            'foreign_key' => 'type_id',
        ),
        'priority' => array(
            'model' => 'Ticket_Priority',
            'foreign_key' => 'priority_id',
        ),
        'status' => array(
            'model' => 'Ticket_Status',
            'foreign_key' => 'status_id',
        ),
        'user' => array(
            'model' => 'User',
            'foreign_key' => 'user_id',
        ),
    );
    protected $_has_many = array(
        'answers' => array(
            'model' => 'Ticket_Answer',
            'through' => 'tickets_answers',
        ),
    );
    public function get_by_user($user_id)
    {
        $this->and_where('user_id', '=', $user_id);
        return $this;
    }
    public function get_by_status($statuses = array())
    {
        if (count($statuses)>=1)
        {
            $this->where_open();
            foreach($statuses as $status)
            {
                $this->or_where('status_id', '=', $status);
            }
            $this->where_close();
        }
        return $this;
    }
} // End Model_Ticket