<?php
	include("DBCONNECT.php");
	
	$myusername = $_POST['user'];
	$mypassword = $_POST['pass'];
	
	$myusername = stripslashes($myusername);
	$mypassword = stripslashes($mypassword);
	
	$query = "SELECT * FROM users WHERE Username='$myusername' and Password='$mypassword'";
	$result = mysql_query($query);
	$count = mysql_num_rows($result);
	
	mysql_close();
	
	if($count==1){
		$seconds = 5 + time();
		setcookie(loggedin, date("F jS - g:i a"), $seconds);
		header("location:login_success.php");
	}else{
		echo 'Incorrect Username or Password';
	}
?>
