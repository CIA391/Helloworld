<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = include("dbconnect.php");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql_query = "SELECT * FROM news ORDER BY timestamp DESC";
$result = $db->query($sql_query);
echo "<p><strong>All news: </strong>";
while($row = $result->fetch_array()){
  echo $row['id'] . $row['headline'] . $row['story'] . $row['name'] . $row['email'] . $row['timestamp'] . "</p>";
}
 
// Escape user inputs for security
$id = mysqli_real_escape_string($link, $_POST['id']);
$headline = mysqli_real_escape_string($link, $_POST['headline']);
$story = mysqli_real_escape_string($link, $_POST['story']);
$name = mysqli_real_escape_string($link, $_POST['name']);
$email = mysqli_real_escape_string($link, $_POST['email']);
 
// attempt insert query execution
$sql = "INSERT INTO news (id, headline, story, name, email, timestamp) VALUES ('$id', '$headline', '$story', '$name', '$email, NOW())";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>
