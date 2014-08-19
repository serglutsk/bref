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
            <th><?=__('ID')?> <?=HTML::anchor(URL::site('managment/users/index/id/asc'), 'A')?>|<?=HTML::anchor(URL::site('managment/users/index/id/desc'), 'D')?></th>
            <th><?=__('Username')?> <?=HTML::anchor(URL::site('managment/users/index/username/asc'), 'A')?>|<?=HTML::anchor(URL::site('managment/users/index/username/desc'), 'D')?></th>
            <th><?=__('E-mail')?> <?=HTML::anchor(URL::site('managment/users/index/email/asc'), 'A')?>|<?=HTML::anchor(URL::site('managment/users/index/email/desc'), 'D')?></th>
            <th><?=__('Roles')?></th>
            <th><?=__('Delete')?></th>
        </tr>
    </thead>
    <tbody>

    <?php foreach ($users as $user):?>

        <tr>
            <td><?=$user->id?></td>
            <td><?=HTML::anchor(URL::site('managment/users/view/'.$user->id), $user->username)?></td>
            <td><?=$user->email?></td>
            <td>
                <?php foreach ($user->roles->find_all() as $role):?>
                    <?=$role->name?>
                <?php endforeach;?>
            </td>
            <td class="del"><?=HTML::anchor(URL::site('managment/users/remove/'.$user->id), __('Del'))?></td>
        </tr>

    <?php endforeach;?>

    </tbody>
</table>

<br/>

<?=HTML::anchor(URL::site('system/desktop'), __('Back'))?> |
<?=HTML::anchor(URL::site('managment/users/create'), __('New user'))?>

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