<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup Form</title>
</head>
<body>
    <h1>Signup Form</h1>
    <?
    session_start();
    $jives = $_SESSION['Signupfail'];
    echo $jives;
    
    if (isset($_SESSION['Signupfail']))
    {
        echo "<p><font color='red'>Hello please ensure you fill the bo</font></p>";
    }
    ?>
    <form method="post" action="signup.php">
        <!-- This is the form used for users to sign up -->
        <p><input type="text" name="username" value="" placeholder="Username please"></p>
        <p><input type="password" name="password" value="" placeholder="Password please"></p>
        <p><input type="password" name="passwordcheck" value="" placeholder="Confirm Password please"></p>
        <p class="submit"><input type="submit" name="commit" value="Login"></p>
    </form>
    <a href="logout.php">Return to login screen</a>
</body>
</html>
