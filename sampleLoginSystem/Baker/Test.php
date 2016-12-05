<?php
include ("db_connect.php");
$username = Chris; // you must escape any input. Remember.
 
$query = "SELECT * FROM users WHERE username = '$username}'";
 
$result = mysql_query($query);
 
if ( mysql_num_rows ( $result ) > 1 )
{
    /* Username already exists */
    echo 'Username already exists';
}
else
{
    /* Username doesn't exist */
    /* .. insert query */
}
