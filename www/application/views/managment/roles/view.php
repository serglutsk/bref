<?php defined('SYSPATH') OR die('No direct script access.'); ?>

    <br/>

    <form action="" method="POST" onsubmit="if(confirm('<?=__('Save changes?')?>')) { return true; } return false;">
        <h2><?=__('View role')?></h2>
        <div>
            <label for="name"><?=__('Name')?></label>
            <input name="name" value="<?=Arr::get($values, 'name')?>">
            <label class="error"><?=Arr::get($errors, 'name')?></label>
        </div>
        <div>
            <label for="rights"><?=__('Rights')?></label>
            <select name="rights[]" size="10" multiple="multiple">
                <?php foreach ($rights as $right): ?>
                    <option value="<?=$right->id?>"
                        <?=in_array($right->id, (array) Arr::get($values, 'rights'))?' selected':null?>>
                        <?=$right->description?>
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

<?=HTML::anchor(URL::site('managment/roles'), __('Back'))?>