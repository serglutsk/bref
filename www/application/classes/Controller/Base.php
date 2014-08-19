<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Class Controller_Base
 */
class Controller_Base extends Controller_Security {

    protected $_errors = array();
    protected $_values = array();
    protected $_content;

    public $template = 'empty';

    /**
     * Set main configs for current page
     */
    public function before()
    {
        parent::before();

        /*$this->set_widgets();*/
        $this->set_locale();

        View::set_global('title', 'PMS');
        View::set_global('description', 'Project Managment System');
        $this->template->content = '';

        $this->template->styles = array('reset', 'templates/empty/style');
        $this->template->scripts = array('jquery');

     }

    /**
     * Set locale for current page
     */
    private function set_locale()
    {
        // Setup localization from referer
        if (Arr::get($this->request->headers(), 'referer') !== null)
        {
            I18n::$lang = substr(ltrim(Arr::get($this->request->headers(), 'referer'), 'http://'), 0, 2);
        }
        // Setup localization from GET if exists
        if ($this->request->param('lang') !== null)
        {
            I18n::$lang = $this->request->param('lang');

            Cookie::set('lang', I18n::$lang);
            $this->redirect($this->request->referrer());
        }
        // or form Cookie
        elseif (Cookie::get('lang') !== null)
        {
            I18n::$lang = Cookie::get('lang');
        }
        // or from headers
        else
        {
            I18n::$lang = substr(Arr::get($this->request->headers(), 'accept-language'), 0, 2);
            Cookie::set('lang', I18n::$lang);
        }
    }

    /**
     * Helper for set and check order params
     * @param array $fields Field names which user can use for set order
     * @return array
     */
    protected function set_order($fields = array())
    {
        // Set GET-params
        $field  = $this->request->param('field');
        $vector = $this->request->param('vector');

        // Get params from cookies
        $field  = ($field === NULL)?Cookie::get($this->request->controller().'-field'):$field;
        $vector = ($vector === NULL)?Cookie::get($this->request->controller().'-vector'):$vector;

        // Check params
        $field = in_array(strtolower($field), $fields)?$field:'id';
        $vector = in_array(strtolower($vector), array('asc', 'desc'))?strtoupper($vector):'ASC';

        // Set new cookies
        Cookie::set($this->request->controller().'-field', $field);
        Cookie::set($this->request->controller().'-vector', $vector);

        // Returns params for SQL-query
        return array(
            'field'  => $field,
            'vector' => $vector,
        );
    }

    /**
     * Set errors and values from POST
     */
    public function after()
    {
        $this->_content
            ->set('values', $this->_values)
            ->set('errors', $this->_errors);

        parent::after();
    }



    /**
     * Set available for user widgets
     */
    /*private function set_widgets()
    {
        $this->template->widgets = array();

        if (Auth_ORM::instance()->logged_in())
        {
            // load user widgets
            $widgets = ORM::factory('User', Auth_ORM::instance()->get_user()->id)
                ->widgets
                ->order_by('position', 'asc')
                ->find_all();

            foreach($widgets as $widget)
            {
                $this->template->widgets[] = Controller_Widget::render($widget);
            }
            $this->template->widgets[] = HTML::anchor("#","",array('onclick' => "widget_add_list();return false", 'id' => 'widget_add',));
            $this->template->widgets[] = "<div id=\"widget_result\" class=\"ajax\"></div>";

        }
    }*/
}