<html>
<head>
    <title>Add News</title>
</head>
<body>
<?php
include("dbconnect.php");
// test if connection was established, and print any errors
if (!$db) {
    die('Connect Error: ' . mysqli_connect_errno());
}   
//$sql_query = "INSERT INTO news(name, email, headline, story, timestamp)VALUES('$name', '$email', '$headline', '$story', NOW())";

    
$query = "INSERT INTO news(name, email, headline, story, timestamp)VALUES('$name', '$email', '$headline', '$story', NOW())";
$result = @mysql_query($query);
if(!$result){
   echo('Error adding news: ' . $mysql_error());
   exit();
}else{
mysql_close($db);
echo('Success!<br><a href="add.php">Click here</a> to add more news.<br><a href="edit.php">Click here</a> to edit news.<br><a href="../index.php">Click here</a> to return to the main page.');
}
?>
<!--<form name="form1" method="post" action="<? echo $PHP_SELF; ?>"-->
<form action= "<? echo $PHP_SELF; ?>" method="post">
    Username:<input type="text" name="name"><br>
    Email:<input type="text" name="email"><br>
    Headline:<input type="text" name="headline"><br>
    Story:<input type="text" name="story"><br>
    <input type="submit" value="Submit">
</form>
<? } ?>
</body>
</html>
    
