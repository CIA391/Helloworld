<?php
	include("DBCONNECT.php");

		if(isset($_POST['user']) && isset($_POST['pass'])){
			$user = $_POST['user'];
			$pass = $_POST['pass'];

			$query = mysql_query("SELECT * FROM admin WHERE Username='$user'");
			if(mysql_num_rows($query) > 0 ) { //check if there is already an entry for that username
				echo "Username already exists!";
			}else{
				mysql_query("INSERT INTO users (username, password) VALUES ('$user', '$pass')");
				header("location:index.php");
			}
	}
	mysql_close();
?>

<html>
	<body>
		<h1>Signup!</h1>
			<form action="new_user.php" method="POST">
				<p>Username:</p><input type="text" name="user" />
				<p>Password:</p><input type="password" name="pass" />
				<br />
				<input type="submit" value="Signup!" />
			</form>
	</body>
</html>
