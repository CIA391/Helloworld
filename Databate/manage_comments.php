<?php

if( $_POST )
{
	$con = new mysqli (
    		'us-cdbr-azure-southcentral-f.cloudapp.net',
    		'bf9afe7c1df5c8',
    		'5d557954',
		'acsm_0dd8805538e55e7');
	if (!$con)
  {
    die('Could not connect: ' . mysql_error());
  }
	 mysql_select_db("acsm_0dd8805538e55e7", $con);

  $users_name = $_POST['name'];
  $users_email = $_POST['email'];
  $users_website = $_POST['website'];
  $users_comment = $_POST['comment'];

  $users_name = mysql_real_escape_string($users_name);
  $users_email = mysql_real_escape_string($users_email);
  $users_website = mysql_real_escape_string($users_website);
  $users_comment = mysql_real_escape_string($users_comment);

  $articleid = $_GET['id'];
  if( ! is_numeric($articleid) )
    die('invalid article id');

  $query = "
  INSERT INTO `inmoti6_mysite`.`comments` (`id`, `name`, `email`, `website`,
        `comment`, `timestamp`, `articleid`) VALUES (NULL, '$users_name',
        '$users_email', '$users_website', '$users_comment',
        CURRENT_TIMESTAMP, '$articleid');";

  mysql_query($query);

  echo "<h2>Thank you for your Comment!</h2>";

  mysql_close($con);
}
?>
