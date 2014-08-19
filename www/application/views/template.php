<?php defined('SYSPATH') OR die('No direct script access.');

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="<?=$description?>" />

        <?php foreach($styles as $style): ?>
            <link href="<?php echo URL::base(); ?>public/css/<?=$style?>.css"
                  rel="stylesheet" type="text/css" />
        <?php endforeach; ?>

        <title><?=$title?></title>
    </head>
    <body>
        <header>
            <section class="user-details">
                <div class="user-info">
                    <img src="/public/images/manager/avatar.jpg" width="30" height="30" alt="" class="avatar">
                    <span class="user-name"><?=Auth_ORM::instance()->get_user()->username?></span>
                    <section>
                        <span class="notification has-messages"></span>
                        <span class='notification-message'><?=ORM::factory('Message')->new_messages()->type('popup')->find_all()->count()?></span>
                    </section>
                    <section class="preferences-popup">
                        <ul>
                            <li class="my-profile"><a href="<?=URL::site('system/myseting')?>">Мой профиль</a></li>
                            <li class="preferances"><a href="<?=URL::site('system/profile')?>">Настройки</a></li>
                            <li class="exit-profile"><a href="<?=URL::site('system/auth/exit')?>">Выход</a></li>
                        </ul>
                    </section>
                </div>
            </section>
            <section class="logo">
                <img src="/public/images/manager/logo.png" alt="">
            </section>
        </header>
        <div id="wrapper">
                <nav class="navigation">
                    <ul>
                        <?php $counter = 0;?>
                        <?php foreach ($modules as $module):?>
                            <li class="menu-item-<?=++$counter?> menu-item">
                                <a href="<?=URL::site($module->dir)?>"></a>
                                <ul class="sub-menu">
                                    <li class="sub-header">
                                        <a href="<?=URL::site($module->dir)?>"><?=__($module->name)?></a>
                                    </li>
                                </ul>
                            </li>
                        <?php endforeach;?>
                            <li class="menu-item-<?=++$counter?> menu-item">
                                <a href="<?=URL::site('system/desktop')?>"></a>
                                <ul class="sub-menu">
                                    <li class="sub-header">
                                        <a href="<?=URL::site('system/desktop')?>"><?=__('Desktop')?></a>
                                    </li>
                                </ul>
                            </li>

                       <!-- <li class="active-item menu-item-1 menu-item"><a href="#"></a></li>
                        <li class="menu-item-2 menu-item"><a href="#"></a></li>
                        <li class="menu-item-3 menu-item"><a href="#"></a></li>
                        <li class="menu-item-4 menu-item">
                            <a href="#"></a>
                            <ul class="sub-menu">
                                <li class="sub-header"><a href="">Брифы</a></li>
                                <li class="sub-elements"><a href="">Новые</a></li>
                                <li class="sub-elements"><a href="">в процессе</a></li>
                                <li class="menu-item-last sub-elements"><a href="">Утвержденные</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-5 menu-item">
                            <a href="#"></a>
                            <ul class="sub-menu">
                                <li class="sub-header"><a href="">Брифы</a></li>
                                <li class="sub-elements"><a href="">Новые</a></li>
                                <li class="sub-elements"><a href="">в процессе</a></li>
                                <li class="menu-item-last sub-elements"><a href="">Утвержденные</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-6 menu-item "><a href="<?/*=URL::site('system/desktop')*/?>"></a></li>-->
                    </ul>
                </nav>

            <?=$content?>

            <div id="msgs"></div>

        </div>

        <?php foreach($scripts as $script): ?>
            <script language="JavaScript" src="/public/js/<?=$script?>.js" type="text/javascript"></script>
        <?php endforeach; ?>

    </body>
</html>