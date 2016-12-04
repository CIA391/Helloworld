<?php include_once("DBCONNECT.php"); ?>
 
<?php
           $user = $_POST['n'];
echo "$user";
           $pass = $_POST['p'];
echo "$pass";
        #$sql = "INSERT into phplogin values(".$id.",'".$user."','".$pass."')";
          $sql = "INSERT into users values(default,'$user','$pass')";
           $qury = mysql_query($sql);
 
        #  INSERT into phplogin values(
        #   1,
        #   'satish',
        #   'satish');
 
        if(!$qury)
        {
                  echo "Failed ".mysql_error();
                  echo "<br /><a href='signupform.php'>SignUp</a>";
                  echo "<br /><a href='signinform.php'>SignIn</a>";
        }
        else
        {
                  echo "Successful";
                  echo "<br /><a href='signupform.php'>SignUp</a>";
                  echo "<br /><a href='signinform.php'>SignIn</a>";
        }
?>
