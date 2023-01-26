<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>products</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>
     <?php
           if (!isset($_SESSION['user'])) {
              header("location:index.php");
           }
    
       include('config.php');
       ?>
 
  
<a href="logout.php">logout</a>

<?php
       echo "Welcome ".$_SESSION['user']."<br>";
       echo "logged in = ".$_SESSION['loggedin'];

               
        $sdel="DELETE FROM users WHERE id=".$_GET['id'].";";
        mysqli_query($con,$sdel) or die("Failed to delete from ordered items");

       header("location:users_view.php");
 

     ?>
</body>
</html>