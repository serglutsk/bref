<h2><?php echo __('Add answer'); ?></h2>
<p>
<div id='status' class="ajax"></div>
<?php echo Form::open('javascript::add_ticket();return false;', array('enctype' => 'multipart/form-data', 'id' => 'addForm')); ?>
<table class="tform">
    <tr>
        <td width="140px;"><?php echo __('Subject'); ?></td>
        <td><?php echo Form::input('subject','Re: '.$ticket->subject, array('disabled' => 'disabled')); ?></td>
    </tr>
    <tr>
        <td><?php echo __('Description'); ?></td>
        <td><?php echo Form::textarea('description'); ?></td>
    </tr>
</table>
<?php echo Form::hidden('ticket_id',$ticket->id); ?>
</p>
<?php echo Form::close(); ?>
<iframe src="<?php echo URL::site('support/file/upload'); ?>" width="100%" align="left" frameborder="0" height="50px">
</iframe>
<a class="kdm_button" href="#" onclick="support_answer_add();return false;"><?php echo __('To send'); ?></a><br />
<a href="<?php echo URL::site('support/answer'); ?>"><?php echo __('Cancel'); ?></a>