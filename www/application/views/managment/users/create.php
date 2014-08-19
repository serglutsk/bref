<?php defined('SYSPATH') OR die('No direct script access.'); ?>

<br/>

<form action="" method="POST">
    <h2><?=__('New user')?></h2>
    <div>
        <label for="username"><?=__('Username')?></label>
        <input name="username" value="<?=Arr::get($values, 'username')?>">
        <label class="error"><?=Arr::get($errors, 'username')?></label>
    </div>
    <div>
        <label for="roles"><?=__('Roles')?></label>
        <select name="roles[]" size="5" multiple="multiple">
            <?php foreach ($roles as $role): ?>
                <option value="<?=$role->id?>"
                    <?=in_array($role->name, (array) Arr::get($values, 'roles'))?' selected':null?>>
                    <?=$role->name?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div>
        <label for="password"><?=__('Password')?></label>
        <input name="password" value="<?=Arr::get($values, 'password')?>">
        <label class="error"><?=Arr::get($errors, 'password')?></label>
    </div>
    <div>
        <label for="email"><?=__('Email')?></label>
        <input name="email" value="<?=Arr::get($values, 'email')?>">
        <label class="error"><?=Arr::get($errors, 'email')?></label>
        <label class="error"><?=Arr::get($errors, 'uniq_email')?></label>
    </div>
    <div>
        <label for="phone"><?=__('Phone')?></label>
        <input name="phone" value="<?=Arr::get($values, 'phone')?>">
        <label class="error"><?=Arr::get($errors, 'phone')?></label>
    </div>
    <div>
        <input type="submit" value="<?=__('Add user')?>">
    </div>
</form>

<br/>

<?=HTML::anchor(URL::site('managment/users'), __('Back'))?>