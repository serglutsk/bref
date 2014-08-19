<?php defined('SYSPATH') or die('No direct script access.');

class Model_Ticket_Status extends ORM {
    protected $_table_name = 'ticket_statuses';
    protected $_table_columns = array(
        'id' => array('type'=>'int'),
        'value' => array('type'=>'string')
        );
} // End