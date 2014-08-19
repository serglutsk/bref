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
        <th><?=__('ID')?> <?=HTML::anchor(URL::site('managment/roles/index/id/asc'), 'A')?>|<?=HTML::anchor(URL::site('managment/roles/index/id/desc'), 'D')?></th>
        <th><?=__('Role')?> <?=HTML::anchor(URL::site('managment/roles/index/name/asc'), 'A')?>|<?=HTML::anchor(URL::site('managment/roles/index/name/desc'), 'D')?></th>
        <th><?=__('Description')?></th>
        <th><?=__('Delete')?></th>
    </tr>
    </thead>
    <tbody>

    <?php foreach ($roles as $role):?>

        <tr>
            <td><?=$role->id?></td>
            <td><?=HTML::anchor(URL::site('managment/roles/view/'.$role->id), $role->name)?></td>
            <td><?=$role->description?></td>
            <td class="del"><?=HTML::anchor(URL::site('managment/roles/remove/'.$role->id), __('Del'))?></td>
        </tr>

    <?php endforeach;?>

    </tbody>
</table>

<br/>

<?=HTML::anchor(URL::site('system/desktop'), __('Back'))?> |
<?=HTML::anchor(URL::site('managment/roles/create'), __('New role'))?>

<script type="text/javascript">
    $(document).ready(function()
    {
        $('.del a').bind('click', function()
        {
            if(confirm('<?=__('Delete role?')?>'))
            {
                return true;
            }
            return false;
        });
    });
</script>