<html>
<body>
<?php
include("dbconnect.php");
 
mysql_select_db("acsm_0dd8805538e55e7", $con); 
 
$sql="INSERT INTO nametable (firstname, lastname)
VALUES
('$_POST[firstname]','$_POST[lastname]')";
 
if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";
 
mysql_close($con)
?>
</body>
</html>
