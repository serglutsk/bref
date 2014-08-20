<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Request_Request extends Controller_Base {

    public $template = 'request';

    /**
     * Set main configs for current page
     */
    public function before()
    {
        parent::before();
        if(!empty($_GET['ref'])){
            $user=ORM::factory('Userslink')->where('value', '=', $_GET['ref'])->find();
            $_SESSION['menedger']=$user->user_id;
            Controller::redirect(URL::base().'request');

        }

        View::set_global('title', 'Brief');
        View::set_global('description', 'Brief page');
        $this->template->styles = array('reset', 'request/style',);
        $this->template->scripts = array('jquery', 'jquery.scrollTo', 'request/script');
    }

    public function action_index()
    {
        $values = ORM::factory('Request_Value', 1);

        if ($this->request->method() === Request::POST)
        {
            $request = ORM::factory('Request');

            try
            {
                $e=$request->create_request($this->request->post());
                $id_request=$e->pk();
                $request_user = ORM::factory('Request_Users');
                $manager_id=$_POST['id_manager'];
                $request_user->user_id=$manager_id;
                $request_user->request_id=$id_request;
                $request_user->save();

            }
            catch (ORM_Validation_Exception $e)
            {
                $this->_errors = $e->errors('errors');
                $this->_values = $this->request->post();
            }

            if ($request->loaded())
            {
                ORM::factory('Project')->create_project($request->id);

                // Сохраняєм инфу о девайсе пользователя
                ORM::factory('Request_Info')->save_info($request->id);

                // Уведомляем всех менеджеров popup сообщением
                //#bug тут надо было добавить абсолютную ссылки а не от корня /
                // [deprecated]
                /*$url = URL::site("/manager/manager/view/".$request->id);*/
                $subject = __("New request for ").$request->type;
                Msg::factory()->popup_to_roles(array(array('name' => 'admin')), $subject, null, null);

                // E-mail to manager
                $config = Kohana::$config->load('email');
                //и это не сработало!!! #bug ..надо все проверять + читать изменения версий(В 3.3 все модули только с заглавной буквы)

                Email::connect($config);

                $manager = $config->get('manager');
                //#bug +изменил Route а тут ничего не поменял!!! Надо чгибкость - через Route адрес задавать!!!
                // [fixed]
                $link = URL::site(Route::get('hash')->uri(array('hash' => $request->hash)), true);

                $subject = __('New unread project');
                $message = HTML::anchor($link, __('Link to project'));
                Email::send($manager, $manager, $subject, $message, $html = false);
            }
        }
        if(isset($_SESSION['menedger'])){
            $id_manager= $_SESSION['menedger'];
        }else{
            $id_manager=0;
        }

        $this->_content = View::factory('request/index')
            ->set('project_types', unserialize($values->types))
            ->set('id_manager',$id_manager )
            ->set('budgets', unserialize($values->budgets))
            ->set('categories', unserialize($values->categories))
            ->set('services', unserialize($values->services))
            ->set('pages_counts', unserialize($values->pages_counts))
            ->set('devices', unserialize($values->devices))
            ->set('styles', unserialize($values->styles));
        $this->template->content = $this->_content;
    }
    public function action_project()
    {
        $values = ORM::factory('Project_Value', 1);

        if ($this->request->method() === Request::POST)
        {
            $post_data = $this->request->post();

            try
            {
                ORM::factory('Project', array('hash' => $post_data['hash']))->update_project($post_data);
            }
            catch (ORM_Validation_Exception $e)
            {
                $this->_errors = $e->errors('errors');
                $this->_values = $this->request->post();
            }
        }

        $this->_content = View::factory('request/project')
            ->set('target_audiences', unserialize($values->target_audiences))
            ->set('audience_ages', unserialize($values->audience_ages))
            ->set('audience_genders', unserialize($values->audience_genders))
            ->set('audience_locations', unserialize($values->audience_locations))
            ->set('site_types', unserialize($values->site_types));
        $this->template->content = $this->_content;
    }

    public function action_brief_exists()
    {
        if ($this->request->method() === Request::POST)
        {
            $post_data = $this->request->post();
            if (Oauth2::factory('brief')->verify_token($post_data['token']))
            {
                if (ORM::factory('Request', array('hash' => $post_data['hash']))->loaded())
                {
                    die(json_encode(array('status' => true)));
                }
                else die(json_encode(array('status' => false)));
            }
            else die(json_encode(array('status' => false)));
        }
        else throw new HTTP_Exception_404();
    }
}
