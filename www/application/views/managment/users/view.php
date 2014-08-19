<?php  defined('SYSPATH') OR die('No direct script access.'); ?>

<br/>

<form action="" method="POST" onsubmit="if(confirm('<?=__('Save changes?')?>')) { return true; } return false;">

    <div>
        <label for="username"><?=__('Username')?>:</label>
        <input name="username" value="<?=Arr::get($values, 'username')?>">
        <label class="error"><?=Arr::get($errors, 'username')?></label>
    </div>

    <div>
        <label for="roles"><?=__('Roles')?>:</label>
        <select name="roles[]" size="5" multiple="multiple">
            <?php foreach ($roles as $role): ?>
                <option value="<?=$role->id?>"
                    <?=in_array($role->name, Arr::get($values, 'roles'))?' selected':null?>>
                    <?=$role->name?>
                </option>
            <?php endforeach; ?>
        </select>
        <label class="error"><?=Arr::get($errors, 'roles')?></label>
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
        <input type="submit" value="<?=__('Save changes')?>">
    </div>

</form>

<br/>

<?=HTML::anchor(URL::site('managment/users'), __('Back'))?>

