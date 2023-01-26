<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Consultancies</title>
   <meta charset="utf-8">
<meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="main.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	
  <style type="text/css">
   
    fieldset{
      display: inline-block;
      width: 90%;  
      max-width: 90%;    
      position: relative;
      top: 50px;
      left: 5%;
      right: 5%;
      border-bottom-width: 70px;
    }
   legend{
      font-weight: bolder;
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

  <fieldset><legend>Addition of Products</legend>
  <?php

       $sq="SELECT * FROM consultancy_requests WHERE status = 0";
       $sqr=mysqli_query($con,$sq) or die("failed to fetch requests!");
      
            echo "<table cellspacing=20 cellpadding=2>";
            echo "<th>Name of Service</th>";
            echo "<th>Person Requests</th>";
            echo "<th>Date</th>";
            echo "<th>Time</th>";
            echo "<th>Select Consultant</th>";
             
             $row=mysqli_fetch_assoc($sqr);
               $id=$row['id'];
              echo "<form action='view_requests_cont.php?id=".$id."' method='POST'>";


            while($row=mysqli_fetch_assoc($sqr)){
             
               
        echo "<tr>";
        echo "<td>".$row['service_name']."</td>";
        echo "<td>".$_SESSION['user']."</td>";
        echo "<td>".$row['service_date']."</td>";
        echo "<td>".$row['service_time']."</td>";
        ?>
             <td><select name="consult">
               <option >Select Consultant</option>
                  
                       <?php
                     $q="SELECT * FROM consultants WHERE task_assigned=0 AND profession='".$row['service_name']."'";
                     $qr=mysqli_query($con,$q) or die("Failed to fetch consultancy_services");
                     $qn=mysqli_num_rows($qr);
                       while($ro = mysqli_fetch_assoc($qr)){
             
                    echo "<option value='".$ro['consultant_name']."'>".$ro['consultant_name']."</option>";
      }
                ?> 
             </select></td>
             <td><input type="submit" name="submit" value="Approve"></td>
        <?php
 
                 
             
        echo "";
        echo "<td><a href='reject_request.php?id=".$row['id']."'>[ Reject ]</a>";
        echo "</tr>";
       
        
       

       }

       echo "</form>";
        echo "</table>";

      
       ?>
   

</fieldset>
 <footer>
      <p class="text-center">this is a footer</p>
    </footer>
</div>
 
</body>
</html>