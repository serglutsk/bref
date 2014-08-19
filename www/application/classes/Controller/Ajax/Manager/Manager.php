<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ajax_Manager_Manager extends Controller_Ajax {

    public function action_load()
    {
        $values = $this->request->post();

        $this->json['message_box_ok'] = '.'.$values['status'];
        $this->json['message_box_ok_method'] = 'append';
        $this->json['message_box_ok_separator'] = '';

        $request = ORM::factory('Request')->where('status', '=', $values['status'])->order_by('created', 'DESC');
        if (in_array($values['count'], array(5,10,20)))
        {
            $request->limit($values['count']);
        }
        elseif ($values['count'] !== 'all')
        {
            $request->limit(5);
        }
        $request = $request->find_all();

        $this->json['message'] = '';

        foreach ($request as $row)
        {
            $design_price_field = $this->check('request', 'set_design_price') ? '<input name="design_price" value="'.$row->design_price.'">' : $row->design_price;
            $dev_price_field = $this->check('request', 'set_dev_price') ? '<input name="dev_price" value="'.$row->dev_price.'">' : $row->dev_price;
            $total_price_field = $this->check('request', 'set_total_price') ? '<input name="total_price" value="'.$row->total_price.'">' : $row->total_price;

            $devices = '';
            foreach( (array) unserialize($row->devices) as $device)
            {
                $devices .= $device.' ';
            }
            $like_sites = '';
            foreach( (array) unserialize($row->like_sites) as $site)
            {
                $like_sites .= $site.'<br/>';
            }
            $dislike_sites = '';
            foreach( (array) unserialize($row->dislike_sites) as $site)
            {
                $dislike_sites .= $site.'<br/>';
            }
            $colors = '<ul class="colors">';
            foreach( (array) unserialize($row->colors) as $color)
            {
                $colors .= '
                    <li class="select-option color color-'.$color.'">
                        <label for="color'.$color.'"></label>
                    </li>';
            }
            $colors .= '</ul>';


            $this->json['message'][] = '
            <ul class="site-status">
                <li class="site-name big-width">'.$row->client_name.' '.$row->client_sec_name.'</li>
                <li class="project-type">'.__($row->type).'</li>
                <li class="project-date">'.date('d.m.Y', strtotime($row->created)).'</li>
                <li class="project-info">'.__('Не выдано').'</li>
                <div class="request-info">
                    <ul class="contacts">
                        <li class="big-width">'.__('Контакты').'</li>
                        <ul class="contact-info">
                            <ul class="subject-name">
                                <li>'.__('Имя').'</li>
                                <li>'.$row->client_name.'</li>
                            </ul>
                            <ul class="design-money">
                                <li>'.__('Дизайн').'</li>
                                <li>'.$design_price_field.'</li>
                            </ul>
                            <ul class="subject-family">
                                <li>'.__('Фамилия').'</li>
                                <li>'.$row->client_sec_name.'</li>
                            </ul>
                            <ul class="development-money">
                                <li>'.__('Разработка').'</li>
                                <li>'.$dev_price_field.'</li>
                            </ul>
                            <ul class="subject-email">
                                <li>'.__('Эл. ящик').'</li>
                                <li>'.$row->client_email.'</li>
                            </ul>
                            <ul class="total-money">
                                <li>'.__('Общая цена').'</li>
                                <li>'.$total_price_field.'</li>
                            </ul>
                            <ul class="subject-phone">
                                <li>'.__('Телефон').'</li>
                                <li>'.$row->client_phone.'</li>
                            </ul>
                            <ul class="checked">
                                <li>'.__('Проверено').'</li>
                                <li>
                                    <input type="checkbox" value="check">
                                    <input type="hidden" name="hash" value="'.$row->hash.'">
                                </li>
                            </ul>
                            <input type="button" value="'.__('Отправить уведомление управляющим').'" class="submit-notice">
                        </ul>
                    </ul>
                    <ul class="informatione">
                        <li class="big-width">'.__('Информация').'</li>
                        <li></li>
                        <ul class="detail-information">
                            <ul class="type-information">
                                <li>'.__('Тип').'</li>
                                <li>'.$row->type.'</li>
                            </ul>
                            <ul>
                                <li>'.__('Бюджет').'</li>
                                <li>'.$row->budget.'</li>
                            </ul>
                            <ul>
                                <li>'.__('Категория').'</li>
                                <li>'.$row->category.'</li>
                            </ul>
                            <ul>
                                <li>'.__('Страниц').'</li>
                                <li>'.$row->pages_count.'</li>
                            </ul>
                            <ul class="idea show-details">
                                <li>'.__('Идея:').'</li>
                                <li><span class="list-item"></span><span class="show-detail">'.__('Показать').'</span></li>
                                <div class="show-detail">'.$row->tasks.'</div>
                            </ul>
                            <ul class="show-details">
                                <li>'.__('Функционал:').'</li>
                                <li><span class="list-item"></span><span class="show-detail">'.__('Показать').'</span></li>
                                <div class="show-detail">'.$row->functions.'</div>
                            </ul>
                            <ul>
                                <li>'.__('Отображение:').'</li>
                                <li>'.$devices.'</li>
                            </ul>
                            <ul>
                                <li>'.__('Стиль').'</li>
                                <li>'.__($row->style).'</li>
                            </ul>
                            <ul class="color">
                                <li>'.__('Цвет').'</li>
                                <li>'.$colors.'</li>
                            </ul>
                            <ul class="show-details">
                                <li>'.__('Нравится:').'</li>
                                <li><span class="list-item"></span> <span class="show-detail">'.__('Показать').'</span></li>
                                <div class="show-detail">'.$like_sites.'</div>
                            </ul>
                            <ul class="show-details">
                                <li>'.__('Не нравится').'</li>
                                <li><span class="list-item"></span> <span class="show-detail">'.__('Показать').'</span></li>
                                <div class="show-detail">'.$dislike_sites.'</div>
                            </ul>
                            <ul class="show-details">
                                <li>'.__('Меню').'</li>
                                <li><span class="list-item"></span> <span class="show-detail">'.__('Показать').'</span></li>
                                <div class="show-detail">'.$row->project->navigation_show().'</div>
                            </ul>
                            <span class="close right">'.__('Закрыть').'</span>
                            <input type="button" value="'.__('Отправить').'" class="submit-subject-info">
                        </ul>
                    </ul>
                </div>
            </ul>

            ';
        }

        $this->json['status'] = TRUE;
    }

    public function action_set_price()
    {
        $values = $this->request->post();


        $request = ORM::factory('Request', array('hash' => $values['hash']));

        if ($request->loaded())
        {
            if ($this->check('request', 'set_dev_price'))
            {
                $request->values(array('dev_price' => intval($values['dev_price'])))->save();
            }
            if ($this->check('request', 'set_design_price'))
            {
                $request->values(array('design_price' => intval($values['design_price'])))->save();
            }
            if ($this->check('request', 'set_total_price'))
            {
                $request->values(array('total_price' => intval($values['total_price'])))->save();
            }

            Msg::factory()->popup_to_roles(array(array('name' => 'admin')), 'prices changed', 'new prices');
            $this->json['status'] = TRUE;
        }
    }

    public function action_approve_brief()
    {
        // todo: make brief active
        // todo: send messages to supermanagers

        $values = $this->request->post();

        if ($this->check('request', 'check_brief'))
        {
            $request = ORM::factory('Request', array('hash' => $values['hash']));
            if ($request->loaded())
            {
                $request->checked = TRUE;
                $request->save;

                Msg::factory()->email_to_roles(array(array('name' => 'manager')), 'brief checked', 'brief checked');
                $this->json['status'] = TRUE;
            }
        }
    }

    public function action_send_next_brief()
    {
        // todo: sent link to brief part2
        // todo: make brief pending

        $values = $this->request->post();

        if ($this->check('request', 'check_brief'))
        {
            $request = ORM::factory('Request', array('hash' => $values['hash']));
            if ($request->loaded())
            {
                $request->checked = TRUE;
                $request->save;

                Msg::factory()->email_to_roles(array(array('name' => 'manager')), 'brief checked', 'brief checked');
                $this->json['status'] = TRUE;

                // Send e-mail to client and manager
                $config = Kohana::$config->load('email');
                //и это не сработало!!! #bug ..надо все проверять + читать изменения версий(В 3.3 все модули только с заглавной буквы)

                Email::connect($config);

                $manager = $config->get('manager');
                //#bug +изменил Route а тут ничего не поменял!!! Надо чгибкость - через Route адрес задавать!!!
                // [fixed]
                $link = URL::site(Route::get('hash')->uri(array('hash' => $request->hash)));

                $subject = __('New unread project');
                $message = HTML::anchor($link, __('Link to project'));
                Email::send($manager, $manager, $subject, $message, $html = false);

                $subject = __('You&Web');
                $message = HTML::anchor($link, __('You can continue customize your project here:'));
                Email::send($request->client_email, $manager, $subject, $message, $html = false);
            }
        }

    }



    public function action_complete_brief()
    {
        // todo: make brief complete
    }

} // End Page