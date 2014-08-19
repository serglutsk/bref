<?php  defined('SYSPATH') OR die('No direct script access.'); ?>

<br/>

<div id="main_menu">
    <?=HTML::anchor(URL::site('managment/users'), __('Users'))?>
    <?=HTML::anchor(URL::site('managment/roles'), __('Role'))?>
    <?=HTML::anchor(URL::site('managment/rights'), __('Rights'))?>
</div>

<br/>

<table>
    <thead>
        <tr>
            <th><?=__('ID')?> <?=HTML::anchor(URL::site('managment/rights/index/id/asc'), 'A')?>|<?=HTML::anchor(URL::site('managment/rights/index/id/desc'), 'D')?></th>
            <th><?=__('Module')?><?=HTML::anchor(URL::site('managment/rights/index/module_id/asc'), 'A')?>|<?=HTML::anchor(URL::site('managment/rights/index/module_id/desc'), 'D')?></th>
            <th><?=__('Description')?></th>
            <th><?=__('Name')?> <?=HTML::anchor(URL::site('managment/rights/index/value/asc'), 'A')?>|<?=HTML::anchor(URL::site('managment/rights/index/value/desc'), 'D')?></th>
            <th><?=__('Roles')?></th>
        </tr>
    </thead>
    <tbody>

    <?php foreach ($rights as $right):?>

        <tr>
            <td><?=$right->id?></td>
            <td><?=$right->module->name?></td>
            <td><?=HTML::anchor(URL::site('managment/rights/view/'.$right->id), $right->description)?></td>
            <td><?=$right->value?></td>
            <td>
                <?php foreach ($right->roles->find_all() as $role):?>
                    <?=$role->name?>
                <?php endforeach;?>
            </td>
        </tr>

    <?php endforeach;?>

    </tbody>
</table>

<br/>

<script type="text/javascript">
    $(document).ready(function()
    {
        $('.del a').bind('click', function()
        {
           if(confirm('<?=__('Delete user?')?>'))
           {
               return true;
           }
           return false;
        });
    });
</script>