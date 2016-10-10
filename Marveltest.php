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

/*$result=mysqli_query($db,$sql);
while($row = $result->fetch_array()) {
    /* the code inside here is repeat ed for each item i n the array
    You can do thi ngs like the followi ng to print out each movi e title */
    /*$movieTitle = $row['title'];
    echo ""<p>"" . $movieTitle . ""</p>"";
    }*/
