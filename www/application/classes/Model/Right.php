<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_Right extends ORM {

    // Relationships
    protected $_has_many = array(
        'roles' => array('model' => 'Role', 'through' => 'rights_roles'),
    );

    protected $_belongs_to = array(
        'module' => array('model' => 'Module', 'foreign_key' => 'module_id'),
    );

    public function get_rights($module)
    {
        return $this->where('module_id', '=', ORM::factory('Module')
            ->select('id')
            ->where('uri', '=', $module)
            ->find());
    }

} // End Action Model