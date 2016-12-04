<?php

include ("db_connect.php");

$myusername = $_POST["username"];
$mypassword = $_POST["password"];
$passwordcheck = $_POST["passwordcheck"];

if ($mypassword==$passwordcheck)
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
    echo "Passwords do not match";
}
?>
