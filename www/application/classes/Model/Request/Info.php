<?php defined('SYSPATH') OR die('No direct script access.');
/**
 * Created by JetBrains PhpStorm.
 * User: 1
 * Date: 22.11.13
 * Time: 15:45
 * To change this template use File | Settings | File Templates.
 */

class Model_Request_Info extends ORM {

    protected $_table_name = 'request_info';

    public function save_info($request_id)
    {
        require Kohana::find_file('vendor', 'Browscap');

        $browser = new Browscap(APPPATH.DIRECTORY_SEPARATOR.'cache');
        $browser = $browser->getBrowser();

        $values = array(
            'request_id' => $request_id,
            'remote_addr' => ip2long(Arr::get($_SERVER, 'REMOTE_ADDR')),
            'remote_host' => Arr::get($_SERVER, 'REMOTE_HOST'),
            'user_agent' => Arr::get($_SERVER, 'HTTP_USER_AGENT'),
            'refferer' => Arr::get($_SERVER, 'HTTP_REFERER'),
            'browser' => $browser->Browser,
            'browser_version' => $browser->Version,
            'platform' => $browser->Platform,
            'platform_version' => $browser->Platform_Version,
            'platform_description' => $browser->Platform_Description,
            'mobile_device' => $browser->isMobileDevice,
            'device_name' => $browser->Device_Name,
            'device_maker' => $browser->Device_Maker,
        );

        $this->values($values)->save();
    }
}