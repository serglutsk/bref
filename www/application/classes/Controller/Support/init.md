<?php

$config = array(
    'dir'         => 'support',
    'name'        => 'Support',
    'description' => 'Support module',
    'install'     => array(
        'sql'       => file_get_contents(CONTROLLER.DIRECTORY_SEPARATOR.'Support'.DIRECTORY_SEPARATOR.'install.sql'),
        'rights'    => array(
            'allowed'  => 'Access to module support',
            'show_all' => 'Show all tickets',
            'show_own' => 'Show only own tickets',
        ),
        'widgets'   => array(
            'widget_1' => array(
                'class_name'  => 'Controller_Support_Widget',
                'method_name' => 'base_info',
                'name'        => 'Support',
                'description' => 'Show count of your ticket answers',
            ),
            'widget_2' => array(
                'class_name'  => 'Controller_Support_Widget',
                'method_name' => 'last_answer',
                'name'        => 'Last answer',
                'description' => 'Show last answer in support module',
            ),
        ),
    ),
);