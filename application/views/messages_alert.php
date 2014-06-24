<?php
if (isset($msg) && $msg !== FALSE):
    ?>
    <div class="sms_messages_alert alert alert-<?php echo $type ?> fade in outside">
        <a class="close" data-dismiss="alert">×</a>
        <?php echo $msg; ?>
    </div>
<?php endif; ?>