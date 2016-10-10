<?php
include("DBCONNECT.php");
// Steps 1 and 2 connect to csdm- webdev server and sel ect database
$db = new mysqli(
"hostname", "username", "password", "db_name");
// test if connection was established, and print any errors
if($db->connect_errno){
    echo "Could not connect";
    die('Connectfailed['.$db->connect_error.']');
}

//Step 3 create a SQL query as a string
$sql_query = "SELECT * FROM superheros WHERE superpower LIKE '%l aser%' ";
// execute the SQL query
$result = $db->query($sql_query);
// steps 4 iterate over $result obj ect one $row at a time
// use fetch_array() to return an associative array
while($row = $result->fetch_array()){
// process the $row
}
//step 5
while($row = $result->fetch_array()){
    // print out fiel ds from row of data
    echo "<p>" . $row['superheroName']. "</p>";
}
//end
$result->close();
 // cl ose connection to database
 $db->close();

/*$result=mysqli_query($db,$sql);
while($row = $result->fetch_array()) {
    /* the code inside here is repeat ed for each item i n the array
    You can do thi ngs like the followi ng to print out each movi e title */
    /*$movieTitle = $row['title'];
    echo ""<p>"" . $movieTitle . ""</p>"";
    }*/
