<?php
include("dbconnect.php");
// test if connection was established, and print any errors
if (!$db) {
    die('Connect Error: ' . mysqli_connect_errno());
}

// create a SQL query as a string
$sql_query = "SELECT * FROM news ORDER BY timestamp DESC";
$result = $db->query($sql_query);
echo "<p><strong>All news: </strong>";
while($row = $result->fetch_array()){
  echo $row['id'] . $row['headline'] . $row['story'] . $row['name'] . $row['email'] . $row['stimestamp'] . "</p>";
}
$result->close();
   $db->close();
