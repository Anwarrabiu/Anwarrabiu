<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Requesting...</title>
   <meta charset="utf-8">
<meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="main.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
   #s:hover{
      background-color: rgba(0,0,0,.57);
   } 
  </style>
</head>
<body>
  <div id="header">
  <img id="img1" src="img/logo1.png" alt="logo" width="8%" />
  <img id="img2" src="img/logo2.png" alt="logo" width="8%" />
   </div>
  <div class="main-container">
     <?php
           if(!isset($_SESSION['user'])){
              header("location:index.php");
           }
  
       include('config.php');
       include('menu.php');
       ?>
  
<section id="consult">
<?php

     $id=$_GET['id'];
     $sq="SELECT * FROM consultancy_services WHERE id='".$id."';";
     $qr=mysqli_query($con,$sq);
     $row=mysqli_fetch_assoc($qr);



if (isset($_POST['submit'])){
  
                  
  $sql="INSERT INTO consultancy_requests(service_id,service_name,location_address,service_date,service_time,contact_phone) VALUES('".$row['id']."','".$row['name']."','".$_POST['address']."','".$_POST['date']."','".$_POST['time']."','".$_POST['phone']."')";

  $sqr=mysqli_query($con,$sql) or die("failed to insert request");
              
              header("location:request_checkout.php");

           

 }else{

?>


    <table>
      <form action="request_cont.php?id=<?php echo $row['id']; ?>" method="POST">
        <tr>
          <td><strong><h1><?php echo $row['name']; ?></h1></strong></td>
        </tr>
        <tr>
          <td><label>Location of Service Address</label></td>
          <td><textarea  name="address" rows="6" cols="35"></textarea></td>
        </tr>
        <tr>
          <td><label>Date Require the Service</label></td>
          <td><input type="text" name="date" size="40"></td>
        </tr>
        <tr>
          <td><label>Time Require the Service</label></td>
          <td><input type="text" name="time" size="40"></td>
        </tr>
        <tr>
          <td><label>Contact phone</label></td>
          <td><input type="text" name="phone" size="40" maxlength="10" minlength="4"></td>
        </tr>
        <tr><td></td>
          <td><input type="submit" name="submit" id="s" value="Submit" ></td>
        </tr>
      </form>
    </table>
</section>
<?php


}
 
?>
    <footer>
      <p class="text-center">this is a footer</p>
    </footer>
</div>
 
</body>
</html>