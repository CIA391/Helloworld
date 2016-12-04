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
    if (isset($_SESSION['Signupfail'] = "Fail1"))
    {
        echo "<p><font color='red'>Hello please ensure you fill the bo</font></p>";
    } elseif (isset($_SESSION['Signupfail'] = "Fail2"))
    {
        echo "<p><font color='red'>Hello.</font></p>";
    } elseif (isset($_SESSION['Signupfail'] = "Fail3"))
    {
        echo "<p><font color='red'>use empty spaces.</font></p>";
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
