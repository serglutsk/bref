<h2><?php echo __('Ticket list'); ?></h2>
<p>
<table class="tlist">
    <tr class="thead">
        <td>№</td>
        <td><?php echo __('User'); ?></td>
        <td><?php echo __('Created'); ?></td>
        <td><?php echo __('Updated'); ?></td>
        <td><?php echo __('Subject'); ?></td>
        <td><?php echo __('Type'); ?></td>
        <td><?php echo __('Priority'); ?></td>
        <td><?php echo __('Status'); ?></td>
        <td></td>
    </tr>
<?php foreach($tickets as $ticket): ?>
    <tr class="titem stat<?php echo $ticket->status; ?>">
        <td><?php echo $ticket->id; ?></td>
        <td><?php echo $ticket->user->username; ?></td>
        <td><?php echo $ticket->created; ?></td>
        <td><?php echo $ticket->updated; ?></td>
        <td><?php echo $ticket->subject; ?></td>
        <td><?php echo $ticket->type->value; ?></td>
        <td><?php echo $ticket->priority->value; ?></td>
        <td><?php echo $ticket->status->value; ?></td>
        <td><a href="<?php echo URL::site('support/answer/index/'.$ticket->id); ?>"><?php echo __('read'); ?></a></td>
    </tr>
<?php endforeach; ?>
</table>
</p>
<a class="kdm_button" href="<?php echo URL::site('support/ticket/add'); ?>"><?php echo __('Add ticket'); ?></a>
