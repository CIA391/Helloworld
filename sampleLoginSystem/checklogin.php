<?php

include ("db_connect.php");

$username = $_POST["username"];
$password = $_POST["password"];

//$username = mysqli_real_escape_string($username);
//$password = mysqli_real_escape_string($password);

$sql="SELECT * FROM users WHERE username='". $username ."' and password='". $password . "'";

$result = $db->query($sql);

$loginSuccessful = 0;

while($row = $result->fetch_array()) {
    $loginSuccessful = 1;
}

if($loginSuccessful==1){

    session_start();
    $_SESSION['username'] = $username;
    header("location:index.php");

}
else {
    echo "Wrong Username or Password";
}

?>
