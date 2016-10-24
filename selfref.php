<!DOCTYPE html> 
<html> 
<head> 
    <title>selfreference</title> 
</head> 
<body> 
<?php 
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        ?>
        <form action="selfref.php" method="post"> 
            <label>Forename</label> 
            <input type="text" name="forename"> 
            <label>Surname</label> 
            <input type="text" name="surname"> 
            <p><input type="submit" value="Submit"></p> 
        </form>

    <?}  
    elseif ($_SERVER['REQUEST_METHOD'] === 'POST'){ 
    // execute if requested using HTTP POST Method 
        echo "hello";
    } 
    else { 
    // this is impossible 
    }  ?> 
</body> 
</html>