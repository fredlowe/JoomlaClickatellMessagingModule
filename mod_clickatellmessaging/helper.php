<?php
/**
 * Clickatell Messaging module
 *
 * mod_clicaktellmessaging is a module that allows the user to send text messages
 * through their site making use of the Clickatell platform. This module requires the site
 * to be linked to an existing Clickatell Central account with REST API.
 */
defined('_JEXEC') or die;

class modClickatellMessagingHelper
{
    /**
     * Retrieves the saved config
     *
     * @access public
     */
    public static function getConfig()
    {
        // Obtain a database connection
        $db = JFactory::getDbo();

        // Retrieve the shout
        $query = $db->getQuery(true);
        $query
            ->select($db->quoteName(array('ApiUsername', 'ApiPassword', 'ApiId')))
            ->from($db->quoteName('cm__clickatell_config'))
            ->where('id = 1');

        // Prepare the query
        $db->setQuery($query);

        // Load the row.
        $result = $db->loadObjectList();

        // Return the config
        return $result;
    }

    public static function sendTextMsg($params)
    {
        $config = current(self::getConfig());

        $callUrl = "http://api.clickatell.com/http/sendmsg?user={$config->ApiUsername}"
            ."&password={$config->ApiPassword}&api_id={$config->ApiId}"
            ."&to={$params['numbers']}&text={$params['message']}";

        // create a new cURL resource
        $ch = curl_init();

        // set URL and other appropriate options
        curl_setopt($ch, CURLOPT_URL, $callUrl);
        curl_setopt($ch, CURLOPT_HEADER, 0);

        // grab URL and pass it to the browser
        curl_exec($ch);

        // close cURL resource, and free up system resources
        curl_close($ch);
    }
}