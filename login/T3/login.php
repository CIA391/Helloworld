<?php
session_start();

if(isset($_POST['submit'])) {
  $myusername = $_POST['username'];
  $mypassword = $_POST['password'];

  $myusername = stripcslashes($myusername);
  $mypassword = stripcslashes($mypassword);
  $myusername = mysqli_real_escape_string($myusername);
  $mypassword = mysqli_real_escape_string($mypassword);
  echo $myusername. '----' .$password;
}
?>
