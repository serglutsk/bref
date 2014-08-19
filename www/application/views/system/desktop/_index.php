<?php defined('SYSPATH') OR die('No direct script access.');?>

<div id="main_menu">
    <?php foreach ($modules as $module):?>
        <?=HTML::anchor(URL::site($module->dir), __($module->name))?>
    <?php endforeach;?>
    <br /><br />
    <img src="/public/images/santa.gif" border="0" alt="" />
</div>
<br />

