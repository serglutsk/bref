<?php

$config = array(
    'dir'         => 'managment',
    'name'        => 'Managment',
    'description' => 'Managment module',
    'install'     => array(
        'sql'       => file_get_contents(CONTROLLER.DIRECTORY_SEPARATOR.'Managment'.DIRECTORY_SEPARATOR.'install.sql'),
        'rights'    => array(
            'allowed'  => 'Access to module managment',
            'show_all' => 'Show all users',
        ),
        'widgets'   => array(),
    ),
);