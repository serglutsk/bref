<?php defined('SYSPATH') OR die('No direct script access.');

class Model_Request extends ORM {

    protected $_table_name = 'requests';

    protected $_has_one = array(
        'project' => array('model' => 'Project', 'foreign_key' => 'request_id'),
    );
    protected $_has_many = array(
        'user'  => array(
            'model'       => 'User',
            'through' => 'request_users',
        )
    );
    public function rules()
    {
        return array(
            'client_email' => array(
                array('not_empty'),
                array('email'),
            ),
        );
    }

    public function create_request($values)
    {
        // Filter empty values
        foreach ($values as &$value)
        {
            if (is_array($value))
            {
                foreach ($value as $key => $val)
                {
                    if ($val === '')
                    {
                        unset($value[$key]);
                    }
                }
            }
        }

        // Refactor values
        $this->values(array(
            'created' => Date::formatted_time(),
            'updated' => Date::formatted_time(),
            'hash' => md5(microtime()),
            'type' => Arr::get($values, 'interest'),
            'type_features' => serialize(Arr::get($values, 'features')),
            'old_site' => Arr::get($values, 'old_site_value'),
            'hosting' => Arr::get($values, 'need_host'),
            'budget' => Arr::get($values, 'budget'),
            'category' => Arr::get($values, 'category'),
            'services' => Arr::get($values, 'service'),
            'pages_count' => Arr::get($values, 'pages'),
            'tasks' => Arr::get($values, 'section4-1'),
            'functions' => Arr::get($values, 'section4-2'),
            'devices' => serialize(Arr::get($values, 'devices')),
            'style' => Arr::get($values, 'style'),
            'colors' => serialize(Arr::get($values, 'colors')),
            'like_sites' => serialize(Arr::get($values, 'like')),
            'dislike_sites' => serialize(Arr::get($values, 'dislike')),
            'client_name' => Arr::get($values, 'nome'),
            'client_sec_name' => Arr::get($values, 'cognome'),
            'client_email' => Arr::get($values, 'email'),
            'client_phone' => Arr::get($values, 'phone'),
            'status' => 'new',
        ));

        return $this->create();
    }
}