<?php
session_start();
$accesslevel = $_COOKIE['access_level_cookie'];

displayAccessLevelInformation($accesslevel);
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