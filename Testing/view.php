<?php
include("dbconnect.php");
if (!$db) {
    die('Connect Error: ' . mysqli_connect_errno());
}
$sql_query = "SELECT * FROM news ORDER BY timestamp DESC";
$result = $db->query($sql_query);
echo "<p><strong>All news: </strong>";
while($row = $result->fetch_array()){
echo $row['id'] . $row['headline'] . $row['story'] . "</p>" . $row['name'] . $row['email'] . $row['timestamp'] . "</p>";
}
$result->close();
   $db->close();
