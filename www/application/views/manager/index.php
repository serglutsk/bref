<?php defined('SYSPATH') OR die('No direct script access.'); ?>

<header class="content-header">
    <form action="" class="search">
        <input type="text">
        <input type="submit" value="Submit">
    </form>
    <ul class="project-status">
        <li class="first"><a href="" class="active-item" id="all"><?= __('All') ?></a></li>
        <li><a href="" id="new"><?= __('New') ?></a></li>
        <li><a href="" id="active"><?= __('During') ?></a></li>
        <li><a href="" id="pending"><?= __('Awaiting') ?></a></li>
        <li class="last"><a href="" id="complete"><?= __('Approved') ?></a></li>
    </ul>

    <div class="lang-switch">

        <select id="lang_q">
            <option value="ru-ru" <?php if(I18n::$lang=='ru-ru'){?>selected<?php }?>>RU</option>
            <option value="en-us" <?php if(I18n::$lang=='en-us'){?>selected<?php }?>>EN</option>
            <option value="it-it" <?php if(I18n::$lang=='it-it'){?>selected<?php }?>>IT</option>
        </select>
<!--        <span class="language">RU</span>-->
<!--        <span class="language-select"></span>-->
    </div>
</header>

<section class="content">
<div class="happy"></div>

<?php foreach ($briefs as $status => $brief):
    if (count($brief) > 0) {
        ?>

        <section class="<?=$status ?>">
        <?php  foreach ($count_briefs as $status1 => $count) {
            if ($status == $status1) {
                $c = $count;
                break;
            }
        }
        if ($c > 5) {
            ?>
            <ul class="show-project">
                <li><?= __('Show:') ?></li>
                <li data-value="5" class="button active-item">5</li>
                <li data-value="10" class="button">10</li>
                <li data-value="20" class="button">20</li>
                <li data-value="all" class="button"><?= __('All') ?></li>
            </ul>
        <?php } ?>
        <h1 class="segment-info"><?=__($status) ?></h1>

        <?php foreach ($brief as $record):

            $user = $record->user->find('username');
            $user = $user->username;
            if (empty($user)) {
                $user = 'Not determined';
            }?>

            <ul class="site-status">
            <li class="site-name big-width"><?= $record->client_name . ' ' . $record->client_sec_name ?></li>
           <?php if(Auth::instance()->logged_in('admin')){?>
            <li class="project-type"><?= __($user); ?></li>
            <?php }?>
            <li class="project-type"><?= __($record->type) ?></li>
            <li class="project-date"><?= date('d.m.Y', strtotime($record->created)) ?></li>
            <li class="project-info"><?= __('Not issued') ?></li>
            <div class="request-info">
                <ul class="contacts">
                    <li class="big-width"><?= __('Контакты') ?></li>
                    <li></li>
                    <ul class="contact-info">
                        <ul class="subject-name">
                            <li><?= __('Имя') ?></li>
                            <li><?= $record->client_name ?></li>
                        </ul>
                        <ul class="design-money">
                            <li><?= __('Дизайн') ?></li>
                            <li>
                                <?php if (Arr::get($rights, 'design_price')): ?>
                                    <input name="design_price" value="<?= $record->design_price ?>">
                                <?php else: ?>
                                    <?= $record->design_price ?>
                                <?php endif; ?>
                            </li>
                        </ul>
                        <ul class="subject-family">
                            <li><?= __('Фамилия') ?></li>
                            <li><?= $record->client_sec_name ?></li>
                        </ul>
                        <ul class="development-money">
                            <li><?= __('Разработка') ?></li>
                            <li>
                                <?php if (Arr::get($rights, 'dev_price')): ?>
                                    <input name="dev_price" value="<?= $record->dev_price ?>">
                                <?php else: ?>
                                    <?= $record->dev_price ?>
                                <?php endif; ?>
                            </li>
                        </ul>
                        <ul class="subject-email">
                            <li><?= __('Эл. ящик') ?></li>
                            <li><?= $record->client_email ?></li>
                        </ul>
                        <ul class="total-money">
                            <li><?= __('Общая цена') ?></li>
                            <li>
                                <?php if (Arr::get($rights, 'total_price')): ?>
                                    <input name="total_price" value="<?= $record->total_price ?>">
                                <?php else: ?>
                                    <?= $record->total_price ?>
                                <?php endif; ?>
                            </li>
                        </ul>
                        <ul class="subject-phone">
                            <li><?= __('Телефон') ?></li>
                            <li><?= $record->client_phone ?></li>
                        </ul>
                        <ul class="checked">
                            <li><?= __('Проверено') ?></li>
                            <li>
                                <input type="checkbox" value="check">
                                <input type="hidden" name="hash" value="<?= $record->hash ?>">
                            </li>
                        </ul>
                        <ul>
                            <input type="button" value="<?= __('Отправить уведомление управляющим') ?>"
                                   class="submit-notice">
                        </ul>
                    </ul>
                </ul>
                <ul class="informatione">
                    <li class="big-width"><?= __('Информация') ?></li>
                    <li></li>
                    <ul class="detail-information">
                        <ul class="type-information">
                            <li><?= __('Тип') ?></li>
                            <li><?= $record->type ?></li>
                        </ul>
                        <ul>
                            <li><?= __('Бюджет') ?></li>
                            <li><?= $record->budget ?></li>
                        </ul>
                        <ul>
                            <li><?= __('Категория') ?></li>
                            <li><?= $record->category ?></li>
                        </ul>
                        <ul>
                            <li><?= __('Страниц') ?></li>
                            <li><?= $record->pages_count ?></li>
                        </ul>
                        <ul class="idea show-details">
                            <li><?= __('Идея:') ?></li>
                            <li><span class="list-item"></span><span class="show-detail"><?= __('Показать') ?></span>
                            </li>
                            <div class="show-detail"><?= $record->tasks ?></div>
                        </ul>
                        <ul class="show-details">
                            <li><?= __('Функционал:') ?></li>
                            <li><span class="list-item"></span><span class="show-detail"><?= __('Показать') ?></span>
                            </li>
                            <div class="show-detail"><?= $record->functions ?></div>
                        </ul>
                        <ul>
                            <li><?= __('Отображение:') ?></li>
                            <li><?php foreach ((array)unserialize($record->devices) as $device) {
                                    echo __($device) . ' ';
                                } ?></li>
                        </ul>
                        <ul>
                            <li><?= __('Стиль') ?></li>
                            <li><?= __($record->style) ?></li>
                        </ul>
                        <ul>
                            <li><?= __('Цвет') ?></li>
                            <li>
                                <ul class="colors">
                                    <?php foreach ((array)unserialize($record->colors) as $color): ?>
                                        <li class="select-option color color-<?= $color ?>">
                                            <label for="color<?= $color ?>"></label>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                        </ul>
                        <ul class="show-details">
                            <li><?= __('Нравится:') ?></li>
                            <li><span class="list-item"></span> <span class="show-detail"><?= __('Показать') ?></span>
                            </li>
                            <div class="show-detail"><?php foreach ((array)unserialize($record->like_sites) as $site) {
                                    echo $site . '<br/>';
                                } ?></div>
                        </ul>
                        <ul class="show-details">
                            <li><?= __('Не нравится') ?></li>
                            <li><span class="list-item"></span> <span class="show-detail"><?= __('Показать') ?></span>
                            </li>
                            <div
                                class="show-detail"><?php foreach ((array)unserialize($record->dislike_sites) as $site) {
                                    echo $site . '<br>';
                                } ?></div>
                        </ul>
                        <ul>
                            <li><?= __('Company name') ?></li>
                            <li><?= __($record->project->company_name) ?></li>
                        </ul>
                        <ul>
                            <li><?= __('Company scope') ?></li>
                            <li><?= __($record->project->company_scope) ?></li>
                        </ul>
                        <ul>
                            <li><?= __('Company products') ?></li>
                            <li><?= __($record->project->company_products) ?></li>
                        </ul>
                        <ul>
                            <li><?= __('Company logo') ?></li>
                            <li><?= __($record->project->company_logo) ?></li>
                        </ul>
                        <ul>
                            <li><?= __('Company style') ?></li>
                            <li><?= __($record->project->company_style) ?></li>
                        </ul>

                        <ul>
                            <li><?= __('Company slogan') ?></li>
                            <li><?= __($record->project->company_slogan) ?></li>
                        </ul>
                        <ul>
                            <li><?= __('Target audience') ?></li>
                            <li><?php foreach ((array)unserialize($record->project->target_audience) as $audience) {
                                    echo $audience . '<br>';
                                } ?></li>
                        </ul>
                        <ul>
                            <li><?= __('Audience ages') ?></li>
                            <li><?php foreach ((array)unserialize($record->project->audience_ages) as $age) {
                                    echo $age . '<br>';
                                } ?></li>
                        </ul>
                        <ul>
                            <li><?= __('Audience gender') ?></li>
                            <li><?php foreach ((array)unserialize($record->project->audience_genders) as $gender) {
                                    echo $gender . '<br>';
                                } ?></li>
                        </ul>
                        <ul>
                            <li><?= __('Company location') ?></li>
                            <li><?php foreach ((array)unserialize($record->project->audience_locations) as $location) {
                                    echo $location . '<br>';
                                } ?></li>
                        </ul>
                        <ul class="show-details">
                            <li><?= __('Competitors') ?></li>
                            <li><span class="list-item"></span> <span class="show-detail"><?= __('Показать') ?></span>
                            </li>
                            <div class="show-detail">
                                <?php foreach ((array)unserialize($record->project->competitors) as $competitor): ?>
                                    <ul>
                                        <li><?= __('Company name') ?></li>
                                        <li><?= $competitor['name'] ?></li>
                                        <li><?= __('Company site') ?></li>
                                        <li><?= $competitor['url'] ?></li>
                                        <li><?= __('Vantages') ?></li>
                                        <li><?= $competitor['vantages'] ?></li>
                                        <li><?= __('Disvantages') ?></li>
                                        <li><?= $competitor['disvantages'] ?></li>
                                    </ul>;
                                <?php endforeach; ?>
                            </div>
                        </ul>
                        <ul>
                            <li><?= __('Required modules') ?></li>
                            <li><?php foreach ((array)unserialize($record->project->site_types) as $type) {
                                    echo $type . '<br>';
                                } ?></li>
                        </ul>
                        <ul class="show-details">
                            <li><?= __('Меню') ?></li>
                            <li><span class="list-item"></span> <span class="show-detail"><?= __('Показать') ?></span>
                            </li>
                            <div class="show-detail"><?= $record->project->navigation_show() ?></div>
                        </ul>

                        <span class="close right"><?= __('Закрыть') ?></span>
                        <input type="button" value="<?= __('Отправить') ?>" class="submit-subject-info">
                    </ul>
                </ul>
            </div>
            </ul>

        <?php endforeach; ?>
        </section>

    <?php } endforeach; ?>

</section>
