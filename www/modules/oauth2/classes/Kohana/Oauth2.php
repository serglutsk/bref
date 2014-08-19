<?php defined('SYSPATH') OR die('No direct script access.');

class Kohana_Oauth2
{
    protected $_config = array();
    protected $_error = null;

    public static function factory($provider)
    {
        return new Oauth2($provider);
    }

    public function __construct($provider)
    {
        $config = Kohana::$config->load('oauth2');

        $this->_config = isset($config[$provider]) ? $config[$provider] : false;

        if (!$this->_config) $this->_error = 'App_id not found';
    }

    // Send request for access token to server
    public function request_token()
    {
        $params = array(
            'app_id'        => $this->_config['app_id'],
            'app_host'      => URL::base('http', FALSE),
            'secret_key'    => $this->_config['secret_key'],
            'api_version'   => $this->_config['api_version'],
            'redirect_uri'  => $this->_config['redirect_uri'],
        );

        return Request::factory($this->_config['request_uri'])
            ->method(Request::POST)
            ->post($params)
            ->execute();
    }

    // Send access token to redirect uri
    public function send_token($data)
    {
        $params = array(
            'status' => $status = $this->_verify_app($data) ? true : false,
            'msg' => $this->_error !== null ? $this->_error : 'Token request success',
            'token' => $status ? $this->_generate_token() : false,
        );

        return Request::factory($data['redirect_uri'])
            ->method(Request::POST)
            ->post($params)
            ->execute();
    }

    // Verify app settings, compare with server settings
    protected function _verify_app($data)
    {
        if ($this->_error !== null) return false;

        if ($data['app_host'] !== $this->_config['app_host'])
        {
            $this->_error = 'App host is invalid';
            return false;
        }
        if ($data['secret_key'] !== $this->_config['secret_key'])
        {
            $this->_error = 'App secret key dont match';
            return false;
        }
        if ($data['api_version'] !== $this->_config['api_version'])
        {
            $this->_error = 'Update your API version';
            return false;
        }
        return true;
    }

    // Generate access token and save in session
    protected function _generate_token()
    {
        $token = sha1($this->_config['secret_key'].microtime());

        Session::instance()->set('token', $token);

        return $token;
    }

    // Check access token with server session
    public function verify_token($token)
    {
        if (Session::instance()->get('token') !== $token)
        {
            $this->_error = 'Token dont match';
            return false;
        }
        return true;
    }
}