<?php
session_start();
include 'DBCONNECT.php';
if(isset($_POST['submit'])) {
  $myusername = $_POST['username'];
  $mypassword = $_POST['password'];

  $myusername = stripcslashes($myusername);
  $mypassword = stripcslashes($mypassword);
  $myusername = mysqli_real_escape_string($myusername);
  $mypassword = mysqli_real_escape_string($mypassword);
  chckusername($username, $password);
	}

	function chckusername($username, $password){
		include_once 'sql.php';
		$check = "SELECT * FROM users WHERE username='$username'";
		$check_q = mysql_query($check) or die("<div class='loginmsg'>Error on checking Username<div>");
		if (mysql_num_rows($check_q) == 1) {
			chcklogin($username, $password);
		}
		else{
			echo "<div id='loginmsg'>Wrong Email</div>";
		}
	}
	function chcklogin($username, $password){
		$login = "SELECT * FROM users WHERE username='$username'  and password='$password'";
		$login_q = mysql_query($login) or die('Error on checking Username and Password');
		// Mysql_num_row is counting table row
		if (mysql_num_rows($login_q) == 1){
			echo "<div id='loginmsg'> Logged in as $username </div>"; 
			$_SESSION['username'] = $username;
			header('Location: member.php');
		}
		else {
			echo "<div id='loginmsg'>Wrong Password </div>"; 
			//header('Location: login-problem.php');
		}
	}
?>
}
?>
