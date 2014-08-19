<?php defined('SYSPATH') or die('No direct script access.');

class Model_Ticket_Priority extends ORM {
    protected $_table_name = 'ticket_priorities';
    protected $_table_columns = array(
        'id' => array('type'=>'int'),
        'value' => array('type'=>'string')
        );
} // End