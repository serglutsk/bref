<?php  defined('SYSPATH') OR die('No direct script access.'); ?>

<br/>

<form action="<?=URL::base()?>system/profile" method="POST" onsubmit="if(confirm('<?=__('Save changes?')?>')) { return true; } return false;">

    <div>
        <label for="username"><?=__('Username')?>:</label>
        <input name="username" value="<?=Arr::get($values, 'username')?>">
        <label class="error"><?=Arr::get($errors, 'username')?></label>
    </div>

    <div>
        <label for="modules"><?=__('Modules')?>:</label>
        <select name="modules[]" size="5" multiple="multiple">
            <?php foreach ($modules as $module): ?>
                <option value="<?=$module->id?>"
                    <?=in_array($module->id, Arr::get($values, 'modules'))?' selected':null?>>
                    <?=$module->name?>
                </option>
            <?php endforeach; ?>
        </select>
        <label class="error"><?=Arr::get($errors, 'modules')?></label>
    </div>

    <div>
        <label for="widgets"><?=__('Widgets')?>:</label>
        <select name="widgets[]" size="5" multiple="multiple">
            <?php foreach ($widgets as $widget): ?>
                <option value="<?=$widget->id?>"
                    <?=in_array($widget->id, Arr::get($values, 'widgets'))?' selected':null?>>
                    <?=$widget->name?>
                </option>
            <?php endforeach; ?>
        </select>
        <label class="error"><?=Arr::get($errors, 'widgets')?></label>
    </div>

    <div>
        <label for="email"><?=__('Email')?>:</label>
        <input name="email" value="<?=Arr::get($values, 'email')?>">
        <label class="error"><?=Arr::get($errors, 'email')?></label>
    </div>

    <div>
        <label for="phone"><?=__('Phone')?>:</label>
        <input name="phone" value="<?=Arr::get($values, 'phone')?>">
        <label class="error"><?=Arr::get($errors, 'phone')?></label>
    </div>

    <div>
        <label for="change_pass"><?=__('Change password')?></label>
        <input type="checkbox" name="change_pass" value="<?=Arr::get($values, 'change_pass')?>">
        <label class="error"><?=Arr::get($errors, 'change_pass')?></label>
    </div>

    <div id="pass" >
        <label for="password"><?=__('New password')?>:</label>
        <input name="password" value="<?=Arr::get($values, 'password')?>">
        <label class="error"><?=Arr::get($errors, 'password')?></label>
    </div>
    <div id="pass1" >
        <label for="password_confirm"><?=__('Repeat new password')?>:</label>
        <input name="password_confirm" value="<?=Arr::get($values, 'password_confirm')?>">
        <label class="error"><?=Arr::get($errors, 'password_confirm')?></label>
    </div>

    <div>
        <input type="submit" name="sub" value="<?=__('Save changes')?>">
    </div>

</form>


<br/>

    <div>
<!--        <label for="link_generate">--><?//=__('Username')?><!--:</label>-->



<?=HTML::anchor(URL::site('system/desktop'), __('Back'))?>

<!--<script type="text/javascript">-->
<!--    $(document).ready(function()-->
<!--    {-->
<!--        $('input[name="change_pass"]').change(function()-->
<!--        {-->
<!--            $('input[name="change_pass"]').is(':checked')?$('#pass').show():$('#pass').hide();-->
<!--        });-->
<!--    });-->
<!--</script>-->