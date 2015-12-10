<?php
/**
 * Clickatell Messaging module
 *
 * mod_clicaktellmessaging is a module that allows the user to send text messages
 * through their site making use of the Clickatell platform. This module requires the site
 * to be linked to an existing Clickatell Central account with REST API.
 */

// No direct access
defined('_JEXEC') or die;
// Include the syndicate functions only once
require_once dirname(__FILE__) . '/helper.php';

if (isset($_POST['clickmsg']) && $_POST['clickmsg'] == 1)
{

    modClickatellMessagingHelper::sendTextMsg(array('numbers'=>$_POST['mobile'], 'message'=>$_POST['message']));
}
$moduleConfig = modClickatellMessagingHelper::GetConfig();
require JModuleHelper::getLayoutPath('mod_clickatellmessaging');