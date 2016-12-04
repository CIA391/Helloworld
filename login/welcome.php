<?php
$username = mysqli_real_escape_string ($_POST["name"]);
$password = mysqli_real_escape_string ($_POST["password"]);
if ($username =="username" && $password=="password")
{
    session_start();
    $_SESSION['access_level_session'] = "standarduser";
}
header('Location: loggedIn.php');
?>
