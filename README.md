# Joomla Clickatell Messaging Module
Joomla! Module to send text Messages through the Clickatell platform

**Clickatell Messaging Module for Joomla!**

**How to install:**
1. Register a Central account on the Clickatell website (http://clickatell.com) if you don't already have one. Once your account has been created,
create a new HTTP api

2. Navigate to sql/mysql/ and edit the install.mysql.utf8.sql.Insert your Clickatell API credentials

3. After updating the file, zip your module folder and install the module through the Joomla! Administrator dashboard

**Notes:**

From within the module admin page on Joomla, you can set the location of where you want module page to
be displayed on your site.
If you want to integrate the module with existing other functionality, you can call the **modClickatellMessagingHelper::sendTextMsg**
and then pass your mobile number(s) and message.

