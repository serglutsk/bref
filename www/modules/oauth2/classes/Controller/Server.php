<?php defined('SYSPATH') OR die('No direct script access.');

class Controller_Server extends Controller
{
    public function action_index()
    {
        $data = $this->request->post();
        echo Oauth2::factory($data['app_id'])->send_token($data);
    }
}