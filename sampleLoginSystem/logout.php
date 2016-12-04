<?
//Code to logout. This logs the user out completely
session_start();
if (isset($_SESSION['username']))
{
    unset($_SESSION['username']);
}
header("location:index.php");
?>
