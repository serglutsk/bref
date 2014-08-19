<?php defined('SYSPATH') or die('No direct script access.');

return array(
    'manager' => 'info@youeweb.com.ua',

	/**
	 * Valid drivers are: native, sendmail, smtp
	 */
     'driver' => 'native',

	/**
	 * Driver options:
	 * @param   null    native: no options
	 * @param   string  sendmail: executable path, with -bs or equivalent attached
	 * @param   array   smtp: hostname, (username), (password), (port), (encryption)
	 */
       'options' => NULL
    /* 'options' => array('hostname' => 'smtp.gmail.com',
                                'username' => 'd.koval7@gmail.com',
                                'password' => '������',
                                'port'     => '465',
                                'encryption' => 'ssl'
     )*/
     );