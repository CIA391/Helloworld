<?php

include ("db_connect.php");

$username = $_POST["username"];
$password = $_POST["password"];
$passwordcheck = $_POST["passwordcheck"];
$email = $_POST["email"];

if ($password==$passwordcheck)
{
    $sql = "INSERT INTO users (username, password, email, userType) VALUES ('". $username ."', '" .$password."', 'reader')";

    if (mysqli_query($db, $sql)) {
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($db);
    }

    session_start();
    $_SESSION['username'] = $username;
    header("location:index.php");

    $sql = "INSERT INTO users (username, password, email, userType) VALUES ('". $username ."', '" .$password."', 'reader')";

}
else
{
    echo "Passwords do not match";
}
?>
