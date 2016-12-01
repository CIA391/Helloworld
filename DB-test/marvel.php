<?php
include("db_connect.php");
if (!$db) {
    die('Connect Error: ' . mysqli_connect_errno());
}
$sql_query = "SELECT * FROM marvelmovies";
$result = $db->query($sql_query);
echo "<p><strong>All Movies: </strong>";
while($row = $result->fetch_array()){
  echo $row['title']  . " | " . $row['notes'] . "</p>";
}
echo "</p>";
$result->close();
   $db->close();
