<?
//This code removes the users session. Do not touch.
session_start();
if (isset($_SESSION['username']))
{
    unset($_SESSION['username']);
}
header("location:index.php");
?>
