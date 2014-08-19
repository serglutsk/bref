<?php defined('SYSPATH') OR die('No direct script access.');

class Model_Project extends ORM {

    protected $_table_name = 'projects';

    public function create_project($request_id)
    {
        $values = array(
            'request_id' => $request_id,
            'created' => Date::formatted_time(),
            'status' => 'new',
        );

        ORM::factory('Project')->values($values)->save();
    }

    public function update_project($values)
    {
        // Filter values
        $values = Arr::map('Html::chars', $values);
        $values = Arr::map('UTF8::trim', $values);

        // Filter empty values
        foreach ($values as &$value)
        {
            if (is_array($value))
            {
                foreach ($value as $key => $val)
                {
                    if ($val === '')
                    {
                        unset($value[$key]);
                    }
                }
            }
        }

        if (Arr::get($values, 'company_slogan') === 'yes')
        {
            $values['company_slogan'] = $values['company_slogan_value'];
        }

        $competitors = array();
        foreach ($values['competitors_name'] as $key=>$value)
        {
            $competitors[] = array(
                'name'          => Arr::get($values['competitors_name'], $key),
                'url'           => Arr::get($values['competitors_url'], $key),
                'vantages'      => Arr::get($values['vantages'], $key),
                'disvantages'   => Arr::get($values['disvantages'], $key),
            );
        }

        $menu = array();
        preg_match_all('/\{.*\}/Ui', $values['created_menu'], $matches);
        foreach ($matches[0] as $el)
        {
            $el = str_replace('&quot;', '"', $el);
            $menu[] = json_decode($el, true);
        }

        // Refactor values
        $this->values(array(
            'updated' => Date::formatted_time(),
            'company_name' => Arr::get($values, 'company_name'),
            'company_scope' => Arr::get($values, 'company_scope'),
            'company_products' => Arr::get($values, 'company_products'),
            'company_logo' => Arr::get($values, 'company_logo'),
            'company_style' => Arr::get($values, 'company_style'),
            'company_slogan' => Arr::get($values, 'company_slogan'),
            'target_audience' => serialize(Arr::get($values, 'target_audience')),
            'audience_ages' => serialize(Arr::get($values, 'audience_age')),
            'audience_genders' => serialize(Arr::get($values, 'audience_gender')),
            'audience_locations' => serialize(Arr::get($values, 'audience_location')),
            'competitors' => serialize($competitors),
            'site_types' => serialize(Arr::get($values, 'site_type')),
            'navigation' => serialize($menu),
            /*'status' => 'active',*/
        ));

        $this->save();
    }

    public function change_status($hash, $status)
    {

    }

    public function navigation_show()
    {
        $menu = array();
        $nav = (array) unserialize($this->navigation);
        foreach ($nav as $item)
        {
            if ($item['IDparent'] === '0')
            {
                $item['sub'] = $this->navigation_find_children($item['IDmenu'], $nav);
                $menu[] = $item;
            }
        }

        $counter = 0;
        $navigation = '';
        $navigation .= '
            <div class="menu-creator">
                <script type="text/javascript">
                    _lang = {
                        add_section: \''.__('Add section').'\',
                        add_subsection: \''.__('Add subsection').'\',
                        delete_subsection: \''.__('Delete section').'\',
                        placeholder: \''.__('Input name...').'\'
                    };
                </script>';

        foreach ($menu as $item)
        {
            if ($item['IDparent'] === '0')
            {
                $navigation .= '
                    <div class="razdel parent">
                        <div class="pos">'.++$counter.'</div>
                        <input type="text" value="'.$item['title'].'"/>
                        <a href="javascript:void(0)" class="plus">+</a>
                        <div class="popup">'.__('Add section').'</div>
                        <a href="javascript:void(0)" class="delete">&times;</a>
                        <div class="popup">'.__('Delete section').'</div>
                    </div>';
                $navigation .= $this->navigation_render_children($item['sub']);
            }
        }

        $navigation .= '
                <a class="add" href="javascript:void(0)">'.__('Add section').'</a>
            </div>
            <input id="created-menu" type="hidden" name="created_menu">
            <input id="send-request" onclick="return false" type="submit" value="'.__('SEND').'"/>';

        return $navigation;
    }

    private function navigation_find_children($parent, $nav)
    {
        $sub = array();
        foreach ($nav as $item)
        {
            if ($item['IDparent'] === $parent)
            {
                $item['sub'] = $this->navigation_find_children($item['IDmenu'], $nav);
                $sub[] = $item;
            }
        }
        return $sub;
    }

    private function navigation_render_children($item)
    {
        $navigation = '';
        if (count($item) > 0)
        {
            $navigation .= '<div class="subsection">';
            foreach ($item as $subitem)
            {
                $navigation .= '
                    <div class="razdel sub">
                        <a href="javascript:void(0)" class="delete">&times;</a>
                        <div class="popup">'.__('Delete section').'</div>
                        <input type="text" value="'.$subitem['title'].'"/>
                        <a href="javascript:void(0)" class="plus">+</a>
                    </div>';
                $navigation .= $this->navigation_render_children($subitem['sub']);
            }
            $navigation .= '
                    <a class="add sub" href="javascript:void(0)">'.__('Add section').'</a>
                </div>';
        }
        return $navigation;
    }
}