<html>
<body>
 
 
<?php
$con = mysql_connect("us-cdbr-azure-southcentral-f.cloudapp.net","bf9afe7c1df5c8","5d557954");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db("acsm_0dd8805538e55e7", $con);
 
$sql="INSERT INTO nametable (firstname, lastname)
VALUES
('$_POST[firstname]','$_POST[lastname]')";
 
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";
 
mysql_close($con)
?>
</body>
</html>
