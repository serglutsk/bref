<h2><?php echo __('Add ticket'); ?></h2>
<p>
<div id='status' class="ajax"></div>
<?php echo Form::open('javascript::add_ticket();return false;', array('enctype' => 'multipart/form-data', 'id' => 'addForm')); ?>
<table class="tform">
    <tr>
        <td width="140px;"><?php echo __('Subject'); ?></td>
        <td><?php echo Form::input('subject','') ?></td>
    </tr>
    <tr>
        <td><?php echo __('Type'); ?></td>
        <td><?php echo Form::select('type', $types, 3); ?></td>
    </tr>
    <tr>
        <td><?php echo __('Priority'); ?></td>
        <td><?php echo Form::select('priority', $priorities, 2); ?></td>
    </tr>
    <tr>
        <td><?php echo __('Description'); ?></td>
        <td><?php echo Form::textarea('description') ?></td>
    </tr>
</table>
</p>
<?php echo Form::close(); ?>
<iframe src="<?php echo URL::site('support/file/upload'); ?>" width="100%" align="left" frameborder="0" height="50px">
</iframe>
<a class="kdm_button" href="#" onclick="support_ticket_add();return false;"><?php echo __('To send'); ?></a><br />
<a href="<?php echo URL::site('support/ticket'); ?>"><?php echo __('Cancel'); ?></a>
