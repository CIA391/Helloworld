<?php
include ("db_connect.php");

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//information from the index form
$myusername = $_POST["username"];
$mypassword = $_POST["password"];

//checks
echo "<p>Username is {$myusername}</p>
<p>Password is {$mypassword}</p>";

//Security checks
$myusername = stripslashes($myusername);
$myusername = mysqli_real_escape_string($db,$myusername);
$mypassword = stripslashes($mypassword);
$mypassword = mysqli_real_escape_string($db,$mypassword);

//checking to see if any usernames and password pairs match any in the database
$sql = "SELECT * FROM users WHERE username ='". $myusername ."' and password ='". $mypassword . "'";
$result = $db->query($sql);
$checker = 0;
while($row = $result->fetch_array()) {
    $checker = 1;
    echo "<p>Checker run</p>";
}

$userType = "";
//Test code for getting usertype extracted
$boom = "SELECT usertype FROM users WHERE username ='". $myusername ."' and password ='". $mypassword . "'";
$result = $db->query($boom);
while($row = $result->fetch_array()){
    echo "<p>Item found in database, setting $usertype</p>";
$userType = $row['userType'];
}   
  
//delete me after fixed
echo "<p>Printing Usertype</p>";
echo $userType;

//This deals with if any matched or not. And send the user back to the index page
if($checker==1){
    session_start();
    $_SESSION['username'] = $myusername;
    $_SESSION['userType'] = $userType;
    //header("location:index.php");
} else {
    //header("location:index.php?Loginfail=1");
}
