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

     $sqo="SELECT * FROM consultancy_services WHERE id='".$_GET['si']."';";
     $qro=mysqli_query($con,$sqo);
     $ron=mysqli_num_rows($qro);
     $ro=mysqli_fetch_assoc($qro);

     $s="SELECT * FROM requests_orders WHERE requester_id=".$_SESSION['userid']."";
     $sq=mysqli_query($con,$s) or die("failed to fetch requests_orders");
     $row=mysqli_fetch_assoc($sq);

     $tot= $row['total_price'] - $ro['price'];


     $qd="UPDATE requests_orders SET total_price=".$tot." ";
     mysqli_query($con,$qd) or die("failed to update total price");
      
        header("location:consults_requested.php");


     ?>
</body>
</html>