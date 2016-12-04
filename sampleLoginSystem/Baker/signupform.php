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
    if (isset($_SESSION['Signupfail'])){
        echo "<p><font color='red'>Hello please enter the password you want to use in both password boxes</font></p>";
    }
    ?>
    <form method="post" action="signup.php">
        <!-- This is the form used for users to sign up -->
        <p><input type="text" name="username" value="" placeholder="Username please"></p>
        <p><input type="password" name="password" value="" placeholder="Password please"></p>
        <p><input type="password" name="passwordcheck" value="" placeholder="Confirm Password please"></p>
        <p class="submit"><input type="submit" name="commit" value="Login"></p>
    </form>
</body>
</html>
