<?php defined('SYSPATH') OR die('No direct script access.'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" content="<?=$description?>" />

        <?php foreach($styles as $style): ?>
            <link href="<?php echo URL::base(); ?>public/css/<?=$style?>.css"
                rel="stylesheet" type="text/css" />
        <?php endforeach; ?>

        <title><?=$title?></title>
    </head>

    <body>
        <div id="header">
            <div id="navi_box">
                <?=HTML::anchor(URL::site('/'), __('Main'))?> |
                <?=HTML::anchor(URL::site('system/profile'), __('Profile'))?> |
                <?=HTML::anchor(URL::site('system/modules'), __('Modules'))?> |
                <?=HTML::anchor(URL::site('system/auth/exit'), __('Exit'))?>
            </div>
            <div id="lang_box">
                <?=HTML::anchor(URL::site('/uk'), 'Українська')?> |
                <?=HTML::anchor(URL::site('/ru'), 'Русский')?> |
                <?=HTML::anchor(URL::site('/en'), 'Enlish')?>
            </div>
            <div id="loader_box" class="ajax">
                <img src="<?php echo URL::base(''); ?>public/images/loader.gif" border="0" alt="" />
                <?php echo __('Loading'); ?> ...
            </div>
            <div id="redirection_box" class="ajax">
                <?php echo __('Redirection'); ?> ...
            </div>
        </div>
        <div id="kdm_form">
            <div id="kdm_box">
                <?=$content?>
            </div>
        </div>

        <div id="widgets">
            <?php foreach($widgets as $widget): ?>
                <?=$widget?>
            <?php endforeach; ?>
        </div>

        <div id="msgs"></div>

        <?php foreach($scripts as $script): ?>
            <script language="JavaScript" src="/public/js/<?=$script?>.js" type="text/javascript"></script>
        <?php endforeach; ?>

    </body>
</html>
