<?php
include("dbconnect.php");
// test if connection was established, and print any errors
if (!$db) {
    die('Connect Error: ' . mysqli_connect_errno());
}   
   
   $query = "INSERT INTO news(name, email, headline, story, timestamp)VALUES('$name', '$email', '$headline', '$story', NOW())";
   $result = @mysql_query($query);
   if(!$result){
      echo('Error adding news: ' . $mysql_error());
      exit();
   }else{
   mysql_close($link);
   echo('Success!<br><a href="add.php">Click here</a> to add more news.<br><a href="edit.php">Click here</a> to edit news.<br><a href="../index.php">Click here</a> to return to the main page.');
   }
}else{
?>
<form name="form1" method="post" action="<? echo $PHP_SELF; ?>">
  <table width="50%" border="0" cellspacing="0" cellpadding="0">
    <tr> 
      <td width="50%">Name</td>
      <td><input name="name" type="text" id="name"></td>
    </tr>
    <tr> 
      <td>Email</td>
      <td><input name="email" type="text" id="email"></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Headline</td>
      <td><input name="headline" type="text" id="headline"></td>
    </tr>
    <tr> 
      <td>News Story</td>
      <td><textarea name="story" id="story"></textarea></td>
    </tr>
    <tr> 
      <td colspan="2"><div align="center">
          <input name="hiddenField" type="hidden" value="add_n">
          <input name="add" type="submit" id="add" value="Submit">
        </div></td>
    </tr>
  </table>
  </form>



$result->close();
   $db->close();
<? } ?>

