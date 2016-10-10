<?php
include("DBCONNECT.php");


$sql_query = "SELECT * FROM marvelmovies";
// execute the SQL query
$result = $db->query($sql_query);
// iterate over $result object one $row at a time
// use fetch_array() to return an associative array
echo "<p><strong>All Movies: </strong>";
while($row = $result->fetch_array()){
    // print out fields from row of data
    echo $row['title'] . " | ";
}
echo "</p>";

$sql_query = "SELECT * FROM marvelmovies AND productionStudio = 'Marvel Studios'";
// execute the SQL query
$result = $db->query($sql_query);
echo "<p><strong>Marvel studio Movies: </strong>";
while($row = $result->fetch_array()){
    echo $row['title'] . " | ";
}
echo "</p>";