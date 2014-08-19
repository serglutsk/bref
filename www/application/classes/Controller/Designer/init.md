<?php

$config = array(
    'dir'         => 'designer',
    'name'        => 'Designer',
    'description' => 'Designer module',
    'install'     => array(
        'sql'       => file_get_contents(CONTROLLER.DIRECTORY_SEPARATOR.'Designer'.DIRECTORY_SEPARATOR.'install.sql'),
        'rights'    => array(
            'allowed'  => 'Access to module designer',
        ),
        'widgets'   => array(),
    ),
);