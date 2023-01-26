<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Tasks</title>
   <meta charset="utf-8">
<meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="main.css">
	<link rel="stylesheet" type="text/css" href="style.css">
  <style type="text/css">
    #tsk{
      position: absolute;
      top: 11%;
      left: 7%;
      background-color: rgba(0,0,0,.1);
      padding: 140px;
      padding-left: 100px;
      padding-right: 1000px;
      border-radius: 5px;
    }
    a{
      text-decoration: none;
      background-color: rgba(0,0,0,.5);
      padding: 8px;
      padding-right: 40px;
      padding-left: 40px;
      border-radius: 4px;
      color: black;
      font-weight: bolder;
    } 
  </style>
	
  
</head>
<body>
  <div id="header">
   <img id="img1" src="img/asmislg1.png" alt="logo" width="22%" height="8%" />

   </div>
  <div class="main-container">
     <?php
           if(!isset($_SESSION['user'])){
              header("location:index.php");
           }
  
       include('config.php');
       include('tskmenu.php');

      echo '<br>';
       echo "LOGGED IN AS ".$_SESSION['user']."";

        if (isset($_GET['tsk'])){
        	 
       $q="UPDATE consultancy_requests SET status=20, consultant_assigned='' WHERE consultant_assigned='".$_SESSION['user']."';";
       $qr=mysqli_query($con,$q) or die("Failed to update completed");

       $a="UPDATE consultants SET task_assigned=0 WHERE identifier='".$_SESSION['user']."';";
       $ar=mysqli_query($con,$a) or die("Failed to update completed");

       header("location:tasks.php");

        }else{
          
   $s="SELECT * FROM consultancy_requests WHERE status != 2 AND consultant_assigned='".$_SESSION['user']."';";
   $sq=mysqli_query($con,$s) or die("Failed to fetch particular request");
    $snm=mysqli_num_rows($sq);
       
      
    if($snm==1){

       $row=mysqli_fetch_assoc($sq);

        echo "<div id='tsk'>";      
       echo "<table cellpadding=20 >";
       echo "<tr>";
       echo "<td><strong>LOCATION ADDRESS</strong></td><td>".$row['location_address']."</td></tr>";
       echo "<tr>";
       echo "<td><strong>SERVICE DATE</strong></td><td>".$row['service_date']."</td></tr>";
       echo "<tr>";
       echo "<td><strong>SERVICE TIME</strong></td><td>".$row['service_time']."</td></tr>";
       echo "<tr><td><a href='tasks.php?tsk=1'> Done </a></td></tr>";
       echo "</table>";

        }else{


        echo "<h1>You Dont Have an Assigned Task, Thanks to You.</h1> ";

        }
             echo "</div>";

}
   ?>

 
<style type="text/css">
   #table{
    position: absolute;
    left: 60%;
    bottom: 5%;
    color: white;
   }
   #label{
    position: absolute;
    left: 3%;
    bottom: 2%;
    color: white;
    font-size: 85%;
   }
   #s{
    color: black;
   }
   footer{
    position: absolute;
    top: 100%;
   }
 </style>

 <footer>
   
  
      <table id="table" align="center" cellspacing="">
        <tr class="tr"><td><img src="place.png" width="2%" height="2%">&nbsp&nbsp No12 Ahmadu Bello way Nassarawa, Kano State, Nigeria</td></tr>
         <tr class="tr"><td><img src="phone.png" width="2%" height="2%">&nbsp&nbsp +256 755923076</td></tr>
          <tr class="tr"><td><img src="contact.png" width="2%" height="2%">&nbsp&nbsp asmis@yahoo.com</td></tr>
       </table>
       <label id="label"><strong id="s">ABOUT US</strong><br><br>ASMIS system is basically a consultancy platform for farmers in need for particular consultation<br> in their farming activities, and the other is agricultural products sects for farmers that may buy<br> their desired Products from this platform. Using this system the agency (KNARDA) officials will<br> digitally manage their certain activities efficiently. </label>
    </footer>
   
</div>
 
</body>
</html>