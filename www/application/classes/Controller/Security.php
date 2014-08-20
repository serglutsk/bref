<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Class Controller_Security
 *
 * Has two methods to check user access:
 * public function check($module, $right) - check some right for module
 * static function check_widget($module, $right) - check some right for widget
 */
class Controller_Security extends Controller_Template {

    /**
     * Container for user rights
     * @var array
     */
    private static $_user_rights = array();

    /**
     * Set rights and check access to current page
     */
    public function before()
    {
        parent::before();

        // Set rights for current user
        self::$_user_rights = $this->set_rights();

        // Get current module name
        $module = str_replace(array('Ajax/', 'ajax/'), NULL, strtolower($this->request->directory()));
        $module = $module !== NULL?$module:'system';

        // Check access to current page
//        if (!$this->check($module, 'allowed')) throw new HTTP_Exception_403('You have no permissions for this page');
    }

    /**
     * Set rights for current user
     * @return array users rights
     */
    protected function set_rights()
    {
        // Set rights for guests
        if (!Auth_ORM::instance()->logged_in())
        {
            $rights['system']['allowed'] = TRUE;
            $rights['request']['allowed'] = TRUE;
        }
        else
        {
            // get rights from session
            $rights = Session::instance()->get('rights');
            if (!$rights)
            {
                // set new rights is session empty
                $rights = self::get_rights();
                Session::instance()->set('rights', $rights);
            }
        }

        return $rights;
    }

    /**
     * Get right for logged user from database
     * @return array
     */
    static private function get_rights()
    {
        $rights = array();

        foreach (Auth_ORM::instance()->get_user()->roles->find_all() as $role)
        {
            foreach ($role->rights->find_all() as $right)
            {
                $rights[strtolower($right->module->name)][$right->value] = TRUE;
            }
        }

        return $rights;
    }

    /**
     * Check users rights for specified right
     * @param string $module Module name
     * @param string $right Right name
     * @return bool True is has access
     */
    public function check($module, $right)
    {
        if ($user_rights = Arr::get(self::$_user_rights, $module))
        {
            if (Arr::get($user_rights, $right))
            {
                return TRUE;
            }
            else return FALSE;
        }
        else return FALSE;
    }

    /**
     * Check users rights for widgets
     * @param string $module module name
     * @param  string $right right name
     * @return bool
     */
    static function check_widget($module, $right)
    {
        return self::_check_widget(self::$_user_rights, $module, $right);
    }

    /**
     * Called by Security::check_widget()
     * @param array $rights rights container
     * @param string $module module name
     * @param string $right right name
     * @return bool
     */
    static private function _check_widget($rights, $module, $right)
    {
        if ($rights = Arr::get($rights, $module))
        {
            if (Arr::get($rights, $right))
            {
                return TRUE;
            }
            else return FALSE;
        }
        else return FALSE;
    }
}
