<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Support_File extends Controller_Template {

    public $template = 'support/file/main';

    public function before()
    {
        parent::before();

        View::set_global('title', 'File upload');
        View::set_global('description', 'File upload');
        $this->template->content = '';
        $this->template->styles = array('upload');
        $this->template->scripts = array();
        // Открываем сессию
        $session = Session::instance();
        // Чистим файлы
        $session = Session::instance()->set('usfile', array());
    }

    public function action_upload()
    {

            $errors = array();
            // Проверяем на наличие переданных файлов
            if($_FILES)
            {

                $validation = Validation::factory($_FILES)
                    ->rule('myfile', 'Upload::valid')
                    ->rule('myfile', 'Upload::type', array(':value', Kohana::$config->load('upload.types')))
                    ->rule('myfile', 'Upload::size', array(':value', Kohana::$config->load('upload.size')));

                if ($validation->check())
                {
                        // Успешная валидация
                        $upload_dir = Kohana::$config->load('upload.directory');
                        $filename_new = UTF8::strip_non_ascii($upload_dir.time().'_'.$_FILES['myfile']['name']);
                        $filename = Upload::save($_FILES['myfile'], $filename_new, './', 0777);
                        $content = View::factory('support/file/uploaded')
                            ->set('myfile',$_FILES['myfile']['name'])
                            ->set('errors',$errors);
                        $session = Session::instance()->set('usfile', array($filename_new => $_FILES['myfile']['name']));
                }
                else
                {
                        // Вывод ошибки
                        $errors = $validation->errors('upload');
                }
            }
            if(!isset($filename_new))
              $content = View::factory('support/file/upload')
                  ->set('errors',$errors);


        $this->template->content = $content;
    }

} // End File