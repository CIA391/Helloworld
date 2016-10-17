<!DOCTYPE html>
<html lang="en"></html>
<head>
    <meta charset="UTF-8">
    <title>Shield</title>
</head>
<body>
<form action="SHIELDResponse.php" method="post">
    <label>firstname</label><input type="text" name="name">
    <label>lastname</label><input type="text" name="lastname">
    <label>gender</label><input type="text" name="gender">
    <label>power</label><input type="text" name="power">
    <input type="submit" value="Submit">
</form>
</body>
<?php
?>

CREATE TABLE `superheros` (
`superheroID` int(10) NOT NULL AUTO_INCREMENT,
`firstName` text NOT NULL,
`lastName` text NOT NULL,
`mainSuperpower` text NOT NULL,
PRIMARY KEY (`superheroID`)
)
