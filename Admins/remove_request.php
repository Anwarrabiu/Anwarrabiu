<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>
     <?php
           if (!isset($_SESSION['user'])) {
              header("location:index.php");
           }
    
       include('config.php');
       ?>
 
  


<?php
       echo "Welcome ".$_SESSION['user']."<br>";
       echo "logged in = ".$_SESSION['loggedin'];
        
        $sdel="DELETE FROM consultancy_requests WHERE id=".$_GET['id'].";";
        mysqli_query($con,$sdel) or die("Failed to delete from ordered items");

        header("location:consults_requested.php");


     ?>
</body>
</html>