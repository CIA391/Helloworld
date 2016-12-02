<html>
<body>
<h1>A small example page to insert some data in to the MySQL database using PHP</h1>
<form action="insert.php" method="post">
Firstname: <input type="text" name="firstname" /><br><br>
Lastname: <input type="text" name="lastname" /><br><br>
 
<input type="submit" />
</form>
<?php
 
$con = mysql_connect("us-cdbr-azure-southcentral-f.cloudapp.net","bf9afe7c1df5c8","5d557954");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db("acsm_0dd8805538e55e7", $con);
 
if(isset($_POST['submit'])){
 $firstname = $_POST['firstname'];
 $lastname = $_POST['lastname'];
}
 
$sql="INSERT INTO nametable (firstname, lastname)
VALUES
('$_POST['firstname']','$_POST['lastname']')";
 
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";
 
mysql_close($con)
?>

</body>
</html>
