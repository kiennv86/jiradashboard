<?php
if (isset($ms) && $ms !== FALSE):
    ?>
    <div class="sms_messages_alert alert alert-<?php echo $type ?> fade in outside">
        <a class="close" data-dismiss="alert">×</a>
        <?php echo $ms; ?>
    </div>
<?php endif; ?>