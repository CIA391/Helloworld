<?php
$username = mysqli_real_escape_string ($_POST["name"]);
$password = mysqli_real_escape_string ($_POST["password"]);

$sql_query = "SELECT * FROM users where Name = '$username' and Password = '$password'";
$result = $db->query($sql_query);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
$count = mysqli_num_rows($result);

if($count == 1) {
{
    session_start();
    $_SESSION['access_level_session'] = "standarduser";
    header('Location: loggedIn.php');
} else {
    $_SESSION['access_level_session'] = "failed";
    $error = "Your Login has failed"
}
?>
