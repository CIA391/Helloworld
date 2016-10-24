<!DOCTYPE html> 
<html> 
<head> 
    <title>selfreference</title> 
</head> 
<body> 
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    ?>
    <form action="selfref.php" method="post">
        <label>Forename</label> 
        <input type="text" name="forename"> 
        <label>Surname</label> 
        <input type="text" name="surname"> 
        <p><input type="submit" value="Submit"></p> 
    </form>
    <?
}
elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $forename = $_POST["forename"];
    $surname = $_POST["surname"];
    print("<h1>Hello {$forename} {$surname}</h1>");
}
else {
    // this is impossible 
}
?> 
</body> 
</html>