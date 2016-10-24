<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
$access_level = $_COOKIE['access_level_cookie'];

displayAccessLevelInformation($access_level);
{
    if ($access_level == "standard_user") {
        echo "<p style = \"background-color: lightgreen\">You are currently logged in as a standard user</p>";
    }
    elseif ($access_level == "root") {
        echo "<p style = \"background-color: red\">You are currently logged in as a root user</p>";
        echo "<p style = \"background-color: red\">You now have access to additional adimistative features</p>";
    }
}
?>