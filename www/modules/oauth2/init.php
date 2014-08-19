<?php defined('SYSPATH') or die('No direct script access.');

Route::set('oauth_client', 'client')
	->defaults(array(
		'controller' => 'client',
		'action' => 'index',
    ));

Route::set('oauth_client_answer', 'client/answer(/<app_id>)')
    ->defaults(array(
        'controller' => 'client',
        'action' => 'answer',
    ));


Route::set('oauth_server', 'server')
    ->defaults(array(
        'controller' => 'server',
        'action' => 'index',
    ));
