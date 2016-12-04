<?
//This code removes all sessions.
session_start();
if (isset($_SESSION['username']))
{
    unset($_SESSION['username']);
}
if (isset($_SESSION['Signupfail']))
{
    unset($_SESSION['Signupfail']);
}
if (isset($_SESSION['Loginfail']))
{
    unset($_SESSION['Loginfail']);
}
header("location:checklogin.php");
?>
