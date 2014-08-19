<div class="widget_box" id="widget_<?php echo $id; ?>">
    <?php echo HTML::anchor("#","",array('onclick' => "widget_close({$id});return false", 'class' => 'widget_close')); ?>
        <?php echo $widget; ?>
</div>