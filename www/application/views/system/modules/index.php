<?php  defined('SYSPATH') OR die('No direct script access.'); ?>

<br/>

<table>
    <thead>
        <tr>
            <th><?=__('ID')?> <?=HTML::anchor(URL::site('system/modules/index/id/asc'), 'A')?>|<?=HTML::anchor(URL::site('system/modules/index/id/desc'), 'D')?></th>
            <th><?=__('Name')?> <?=HTML::anchor(URL::site('system/modules/index/name/asc'), 'A')?>|<?=HTML::anchor(URL::site('system/modules/index/name/desc'), 'D')?></th>
            <th><?=__('Description')?></th>
            <th><?=__('Directory')?></th>
            <th><?=__('Status')?></th>
        </tr>
    </thead>
    <tbody>

        <?php foreach ($modules as $module):?>

            <tr>
                <td><?=$module->id?></td>
                <td><?=$module->name?></td>
                <td><?=$module->description?></td>
                <td><?=$module->dir?></td>
                <td>
                    <?php if ($module->system === 'FALSE'):?>
                    <?=HTML::anchor(URL::site('system/modules/uninstall/'.$module->id), __('Uninstall'), array('onclick' => 'if (!confirm("Удалить модуль?")) return false'))?>
                    <?php else:?>
                    <?=__('System module')?>
                    <?php endif;?>
                </td>
            </tr>

        <?php endforeach;?>

        <?php foreach ($install as $module):?>

            <tr>
                <td></td>
                <td><?=$module['name']?></td>
                <td><?=$module['description']?></td>
                <td><?=$module['dir']?></td>
                <td><?=HTML::anchor(URL::site('system/modules/install/'.$module['dir']), __('Install'), array('onclick' => 'if (!confirm("Установить модуль?")) return false'))?></td>
            </tr>

        <?php endforeach;?>

    </tbody>

</table>

<br/>

<?=HTML::anchor(URL::site('system/desktop'), __('Back'))?>