<?php
include ("db_connect.php");

//This is the fields from the signup form
$myusername = $_POST["username"];
$mypassword = $_POST["password"];
$passwordcheck = $_POST["passwordcheck"];

if (strpos($myusername, ' ') !== false) {
    $userspace 'true';
}
if (strpos($mypassword, ' ') !== false) {
    $passspace 'true';
}
if (strpos($passwordcheck, ' ') !== false) {
    $pass2space 'true';
}


//This checks if the password is 100% what the user typed
if ($mypassword=="" || $mypassword=="" || $passwordcheck==""){
    session_start();
    $_SESSION['Signupfail'];
    header("location:signupform.php");
}
elseif($userspace=='true' || $passspace=='true' || $pass2space=='true')
    session_start();
    $_SESSION['Signupfail'];
    header("location:signupform.php");
}
elseif($mypassword==$passwordcheck)
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
