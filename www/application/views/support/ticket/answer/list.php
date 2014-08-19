<h2><?php echo __('Ticket')." #".$ticket->id; ?></h2>
<p>
<div id="status"></div>
<table class="tlist">
    <tr class="thead">
        <td width="130px"><?php  echo __('Priority').": <b>".$ticket->priority->value."</b>"; ?></td>
        <td align="right" style="padding-right:5px;"><?php echo __('Status').": <b>".$ticket->status->value."</b>"; ?></td>
    </tr>
<? $re = ''; $fst = "style='background-color:#DDDDDD' "; ?>
<?php foreach($answers as $answer): ?>
    <tr class="thead light">
        <td><?php echo $answer->user->username; ?></td>
        <td align="right" style="padding-right:5px;"><?php echo __('Created').": <b>".$answer->created."</b>"; ?></td>
    </tr>
    <tr <?php echo $fst; ?>>
        <td><?php echo __('Subject').":"; ?></td>
        <td colspan="2" align="left"><?php echo "<b>".$re." ".$ticket->subject."</b>"; ?></td>
    </tr>
    <tr <?php echo $fst; ?>>
        <td><?php echo __('Description').":"; ?></td>
        <td colspan="2" align="left">
            <?php echo "<b> ".$answer->description."</b>"; ?>
        </td>
    </tr>

    <?php $files = $answer->files->find_all()->as_array();
    if(count($files)>0)
    {
    ?>
    <tr <?php echo $fst; ?>>
        <td><?php echo __('Files').":"; ?></td>
        <td colspan="2" align="left">
            <?php foreach($files as $file): ?>
                <?php echo "<a href=\"/".$file->url."\"><i>".$file->filename."</i></a>"; ?>
            <?php endforeach; ?>
        </td>
    </tr>
    <?php } ?>
    <? $re = 'Re:'; $fst = ''; ?>
<?php endforeach; ?>
</table>
</p>
<a class="kdm_button" href="<?php echo URL::site('support/answer/add/'.$ticket->id); ?>"><?php echo __('Add answer'); ?></a><br />
<a href="<?php echo URL::site('support/ticket'); ?>"><?php echo __('Cancel'); ?></a> |
<a href="#" onclick="support_ticket_close('<?php echo $ticket->id; ?>','<?php echo __('Are you sure?'); ?>');return false;"><?php echo __('Close'); ?></a>
