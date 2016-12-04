<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

  session_start();
  include("DBCONNECT.php");
  $myusername = $_POST['username'];
  $mypassword = $_POST['password'];

  $myusername = stripcslashes($myusername);
  $mypassword = stripcslashes($mypassword);
  $myusername = mysqli_real_escape_string($myusername);
  $mypassword = mysqli_real_escape_string($mypassword);
  
  $result = mysqli_query($con, 'SELECT * FROM admin WHERE username = '.$myusername.' and passcode = '.$mypassword.'";
  if(mysqli_num_rows($result)==1){
    $_SESSION['username'] = $username;
    header('Location:welcome.php');
    } else {
    echo 'no access';
    }
    
?>
