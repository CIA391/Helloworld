<?php
include ("db_connect.php");

//This is the fields from the signup form
$myusername = $_POST["username"];
$mypassword = $_POST["password"];
$passwordcheck = $_POST["passwordcheck"];

if(empty($username) || empty($password) || empty($passwordcheck))
    {
    session_start();
    $_SESSION['Signupfail'];
    header("location:signupform.php");
    }

//This checks if the password is 100% what the user typed
if($mypassword==$passwordcheck)
{
    $sql = "INSERT INTO users (username, password, userType) VALUES ('". $myusername ."', '" .$mypassword."', 'reader')";

    if (mysqli_query($db, $sql)) {
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($db);
    }

    session_start();
    $_SESSION['username'] = $myusername;
    header("location:index.php");

    $sql = "INSERT INTO users (username, password, userType) VALUES ('". $myusername ."', '" .$mypassword."', 'reader')";
} else {
    session_start();
    $_SESSION['Signupfail'];
    header("location:signupform.php");
}
?>
