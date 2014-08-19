<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Ajax extends Controller_Security {

    public $json = array(
             'status' => FALSE,
             'message' => NULL,
             'redirect' => FALSE,
             'message_box_ok' => '#result_ok',
             'message_box_ok_method' => 'html',
             'message_box_ok_separator' => '<br />',
             'message_box_err' => '#result_err',
             'message_box_err_method' => 'html',
             'message_box_err_separator' => '<br />',
    );

    public $auto_render = FALSE;

    public function before()
    {
        if($this->request->is_ajax() === FALSE) die('No direct script access.');

        parent::before();

        // Set content type json
        $this->request->headers( 'Content-type', 'application/json' );

        /*if (Cookie::get('lang') !== null)
        {
            I18n::$lang = Cookie::get('lang');
        }
        // or from headers
        else
        {
            I18n::$lang = substr($this->request->headers('accept-language'), 0, 2);
            Cookie::set('lang', I18n::$lang);
        }*/
    }

    public function after()
    {
        // Конвертирование и вывод данных
        $this->json = json_encode( $this->json, JSON_HEX_TAG );
        $this->response->body( $this->json );
    }

} // End
