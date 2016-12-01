<?php
/**
 * Created by PhpStorm.
 * User: michaelcrabb
 * Date: 18/11/2015
 * Time: 09:43
 */
include("db_connect.php");
// test if connection was established, and print any errors
if (!$db) {
    die('Connect Error: ' . mysqli_connect_errno());
}


// create a SQL query as a string
$sql_query = "SELECT * FROM marvelmovies";
// execute the SQL query
$result = $db->query($sql_query);
// iterate over $result object one $row at a time
// use fetch_array() to return an associative array
echo "<p><strong>All Movies: </strong>";
while($row = $result->fetch_array()){
   // print out fields from row of data
  echo $row['title'] . ['yearReleased'] . " | ";
}
echo "</p>";
$result->close();
   // close connection to database
   $db->close();
