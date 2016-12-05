<?php
// Include init file
include 'init.php';

if (!isset($_POST['submit']))
{
     // Show the form
     include 'login_form.inc.php';
}
else
{
     // Try and login with the given username & pass
     $result = user_login($_POST['username'], $_POST['password']);

     if ($result != 'Correct')
     {
          // Reshow the form with the error
          $login_error = $result;
          include 'login_form.inc.php';
     }
     else
     {
          echo 'Thank you for logging in, <a href="index.php">click here</a> to go back.';
     } 
}
?>
