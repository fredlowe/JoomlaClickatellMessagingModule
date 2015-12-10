<?php
// No direct access
defined('_JEXEC') or die; ?>
<h4>Send Text Message</h4>

<form action="<?php echo JRoute::_(htmlspecialchars(JUri::getInstance()->toString()), true); ?>" method="post" id="sms-form" class="form-inline">
    <input type="hidden" name="clickmsg" value="1">
    <div>
        <span> Mobile</span>
        <span><input type="text" name="mobile" id="mobile-input" style="width:123px"></span>
    </div>
    <div style="margin-top:10px;">
        <span> Message</span>
        <span><textarea id="message-input" name="message" style="width: 166px"></textarea></span>
    </div>
    <div style="margin-top:10px; text-align: right">
        <span><button type="submit" tabindex="0" name="Submit" class="btn btn-primary">Send</button></span>
    </div>
</form>
