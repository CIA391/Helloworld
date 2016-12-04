<?php
include 'DBCONNECT.php';

  $myusername = $_POST['username'];
  $mypassword = $_POST['password'];

  $myusername = stripcslashes($myusername);
  $mypassword = stripcslashes($mypassword);
  $myusername = mysqli_real_escape_string($myusername);
  $mypassword = mysqli_real_escape_string($mypassword);
  
  $sql = "INSERT into users(NULL, '".$myusername."', '"$mypassword."');
  $query = mysql_query($sql);

  if(!query)
	  echo "Failed "..mysql_error();
  else
	  echo "Successful"

?>
