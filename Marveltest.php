<?php
include("DBCONNECT.php");
// Steps 1 and 2 connect to csdm- webdev server and sel ect database

$sql_query = "SELECT * FROM marvelmovies";

$result = $db->query($sql_query);

while($row = $result->fetch_array()){
    echo "<p>" . $row['title']. "</p>";
}

$result->close();
 // close connection to database
 $db->close();