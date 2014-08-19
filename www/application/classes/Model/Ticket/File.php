<?php defined('SYSPATH') or die('No direct script access.');

class Model_Ticket_File extends ORM {
    protected $_table_name = 'ticket_files';
    protected $_table_columns = array(
        'id' => array('type'=>'int'),
        'answer_id' => array('type'=>'int'),
        'filename' => array('type'=>'string'),
        'url' => array('type'=>'string'),
        );
    public function put_file($answer_id)
    {
        // Открываем сессию
        $session = Session::instance();
        $uploaded_files = Arr::extract($_SESSION, array('usfile'), array());
        if (count($uploaded_files['usfile'])>=1)
        {
            foreach($uploaded_files['usfile'] as $url => $filename)
            {
              $data = array(
                        'answer_id' => $answer_id,
                        'filename' => $filename,
                        'url' => $url
              );
              $this->values($data);
            }
            $this->create();
        }
        return $this;
    }
} // End