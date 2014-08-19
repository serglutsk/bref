<div class="message_box" id="msg_<?php echo $id; ?>">
    <?php echo HTML::anchor("#","",array('onclick' => "msg_close({$id},false);return false", 'class' => 'widget_close')); ?>
    <div class="subj">
        <?php
            echo HTML::anchor($url,$subject,array('onclick' => "msg_close({$id},'{$url}');return false"))
        ?>
    </div>
    <div class="text"><?php echo $text; ?></div>
</div>