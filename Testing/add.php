<?php
include("dbconnect.php");
// test if connection was established, and print any errors
if (!$db) {
    die('Connect Error: ' . mysqli_connect_errno());
}   
$sql_query = "INSERT INTO news(name, email, headline, story, timestamp)VALUES('$name', '$email', '$headline', '$story', NOW())";
?>
<!--<form name="form1" method="post" action="<? echo $PHP_SELF; ?>"-->
<form action= "<? echo $PHP_SELF; ?>" method="post">
    Username:<input type="text" name="name"><br>
    Email:<input type="text" name="email"><br>
    Headline:<input type="text" name="headline"><br>
    Story:<input type="text" name="story"><br>
    <input type="submit" value="Submit">
</form>

    
