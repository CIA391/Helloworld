<?php
include ("db_connect.php");
//information from the index form

if(isset($_POST["submit"])) {
    if(empty($_POST["username"]) || empty($_POST["username"])){
        $error = "Both fields are required.";
    } else {


$myusername = $_POST["username"];
$mypassword = $_POST["password"];
echo "$myusername";
echo "$mypassword";

if(empty($_POST["username"] ||

//checking to see if any usernames and password pairs match any in the database
$myusername = stripslashes($myusername);
$myusername = mysql_real_escape_string($myusername);
$mypassword = stripslashes($mypassword);
$mypassword = mysql_real_escape_string($mypassword);
echo "$myusername";
echo "$mypassword";
die();
}
$sql = "SELECT * FROM users WHERE username ='". $myusername ."' and password ='". $mypassword . "'";
//The following code checks to see if any match
$result = $db->query($sql);
$checker = 0;
while($row = $result->fetch_array()) {
    $checker = 1;
}
      
//This deals with if any matched or not. And send the user back to the index page
if($checker==1){
    session_start();
    $_SESSION['username'] = $myusername;
    header("location:index.php");
} else {
    header("location:index.php?Loginfail=1");
}
