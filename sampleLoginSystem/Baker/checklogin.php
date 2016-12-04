<?php

include ("db_connect.php");

$myusername = $_POST["username"];
$mypassword = $_POST["password"];

//$myusername = mysqli_real_escape_string($myusername);
//$mypassword = mysqli_real_escape_string($mypassword);

$sql = "SELECT * FROM users WHERE username ='". $myusername ."' and password ='". $mypassword . "'";

$result = $db->query($sql);
$checker = 0;

while($row = $result->fetch_array()) {
    $checker = 1;
}

if($checker==1){
    session_start();
    $_SESSION['username'] = $myusername;
    header("location:index.php");
} else {
    echo "Incorrect user credentials";
}
?>
