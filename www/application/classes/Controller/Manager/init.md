<?php

$config = array(
    'dir'         => 'manager',
    'name'        => 'Manager',
    'description' => 'Managers module',
    'install'     => array(
        'sql'       => file_get_contents(CONTROLLER.DIRECTORY_SEPARATOR.'Manager'.DIRECTORY_SEPARATOR.'install.sql'),
        'rights'    => array(
            'allowed'  => 'Access to module managers',
        ),
        'widgets'   => array(
            'widget' => array(
                'class_name'  => 'Controller_Manager_Widget',
                'method_name' => 'new_projects',
                'name'        => 'New projects',
                'description' => 'Show count of new projects',
            ),
        ),
    ),
);