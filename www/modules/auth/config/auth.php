<?php defined('SYSPATH') OR die('No direct access allowed.');

return array(

	'driver'       => 'File',
	'hash_method'  => 'sha256',
	'hash_key'     => 'foobar',
	'lifetime'     => 1209600,
	'session_type' => Session::$default,
	'session_key'  => 'auth_user',

	// Username/password combinations for the Auth File driver
	//'users' => array(
	//	 'managment' => 'd1599e2c7f53d62209184c3ea34661860b8ad216afc927897892de526bd2030e',
	//),
);
