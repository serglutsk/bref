<?php defined('SYSPATH') OR die('No direct script access.'); ?>

    <br/>

    <form action="" method="POST" onsubmit="if(confirm('<?=__('Save changes?')?>')) { return true; } return false;">
        <h2><?=__('View right')?></h2>
        <div>
            <label for="value"><?=__('Value')?></label>
            <input name="value" value="<?=Arr::get($values, 'value')?>">
            <label class="error"><?=Arr::get($errors, 'value')?></label>
        </div>
        <div>
            <label for="roles"><?=__('Roles')?></label>
            <select name="roles[]" size="5" multiple="multiple">
                <?php foreach ($roles as $role): ?>
                    <option value="<?=$role->id?>"
                        <?=in_array($role->id, (array) Arr::get($values, 'roles'))?' selected':null?>>
                        <?=$role->name?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div>
            <label for="module"><?=__('Module')?></label>
            <select name="module">
                <?php foreach ($modules as $module): ?>
                    <option value="<?=$module->id?>"
                        <?=$module->id === Arr::get($values, 'module')?' selected':null?>>
                        <?=$module->name?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div>
            <label for="description"><?=__('Description')?></label>
            <input name="description" value="<?=Arr::get($values, 'description')?>">
            <label class="error"><?=Arr::get($errors, 'description')?></label>
        </div>
        <div>
            <input type="submit" value="<?=__('Save changes')?>">
        </div>
    </form>

    <br/>

<?=HTML::anchor(URL::site('managment/rights'), __('Back'))?>