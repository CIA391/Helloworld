<?php
include("dbconnect.php");
// test if connection was established, and print any errors
if (!$db) {
    die('Connect Error: ' . mysqli_connect_errno());
}   

$sql_query = "INSERT INTO news(name, email, headline, story, timestamp)VALUES('$name', '$email', '$headline', '$story', NOW())";
if(!$sql_query){
   echo('Error adding news: ' . $mysql_error());
   exit();
}else{
mysql_close($link);
echo('Success!<br><a href="add.php">Click here</a> to add more news.<br><a href="edit.php">Click here</a> to edit news.<br><a href="../index.php">Click here</a> to return to the main page.');
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

    
