<html>
   
   <head>
      <title>Add New Record in MySQL Database</title>
   </head>
   
   <body>
      <?php
          $link = include("dbconnect.php");
 
          // Check connection
          if($link === false){
              die("ERROR: Could not connect. " . mysqli_connect_error());
          }
            
            if(! get_magic_quotes_gpc() ) {
               $id = addslashes ($_POST['id']);
               $headline = addslashes ($_POST['headline']);
               $story = addslashes ($_POST['story']);
               $name = addslashes ($_POST['name']);
               $email = addslashes ($_POST['email']);
            }else {
               $emp_name = $_POST['emp_name'];
               $emp_address = $_POST['emp_address'];
               $id = $_POST['id'];
               $headline = $_POST['headline'];
               $story = $_POST['story'];
               $name = $_POST['name'];
               $email = $_POST['email'];
            }
            
            $sql = "INSERT INTO news ". "(id, headline, story, name, email, 
            timestamp) VALUES ('$id', '$headline', '$story', '$name', '$email', NOW())";
               
            mysql_select_db('test_db');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('Could not enter data: ' . mysql_error());
            }
            
            echo "Entered data successfully\n";
            
            mysql_close($link);
         }else {
            ?>
           
               
               
               <form method="post" action= "<? echo $PHP_SELF; ?>">
    <p>
        <label for="id">ID:</label>
        <input type="text" name="id" id="id">
    </p>
    <p>
        <label for="headline">Headline:</label>
        <input type="text" name="headline" id="headline">
    </p>
    <p>
        <label for="story">story:</label>
        <input type="text" name="story" id="story">
    </p>
    <p>
        <label for="name">name:</label>
        <input type="text" name="name" id="name">
    </p>
    <p>
        <label for="email">email:</label>
        <input type="text" name="email" id="email">
    </p>
    <input type="submit" value="Submit">
</form>
    
            <?php
         }
      ?>
   
   </body>
</html>
