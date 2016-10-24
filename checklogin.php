<?php

$username = $_POST["name"];
$password = $_POSR["password"];

if ($username =="username" && $password=="password")
{
    setcookie('access_level_cookie', 'standarduser');
}

header('Location: loggedin.php');

?>