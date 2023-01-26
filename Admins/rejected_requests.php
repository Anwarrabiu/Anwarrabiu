<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
  <title>Requests View</title>
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
    <img id="img1" src="img/asmislg1.png" alt="logo" width="22%" height="8%" />

   </div>
  <div class="main-container">
     <?php
            if($_SESSION['roll']!='admin'){   

               header("location:../login.php");
             }else{
  
       include('config.php');
       include('menu.php');
           
      
   ?>

  <fieldset id="consult"><legend><h1> Rejected Requests</h1></legend>
  <?php
  
       $sq="SELECT * FROM consultancy_requests WHERE status = 4";
       $sqr=mysqli_query($con,$sq) or die("failed to fetch requests!".mysqli_connect_error());
      
            echo "<table cellspacing=20 cellpadding=2 align='center'>";
            echo "<th>ID</th>";
            echo "<th>Name of Service</th>";
            echo "<th>Person Requests</th>";
            echo "<th>Date</th>";
            echo "<th>Time</th>";
            echo "<th>Reason for Rejection</th>";
           
              

            while($row=mysqli_fetch_assoc($sqr)){
              $id=$row['id'];
              $requester_id=$row['requester_id'];

              $a="SELECT name FROM users WHERE id='".$requester_id."'";
              $aq=mysqli_query($con,$a) or die("failed to fetch name");
              $r=mysqli_fetch_assoc($aq);
                
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['service_name']."</td>";
        echo "<td>".$r['name']."</td>";
        echo "<td>".$row['service_date']."</td>";
        echo "<td>".$row['service_time']."</td>";        
        echo "<td>".$row['rejected_comment']."</td>";        


               echo "</tr>";
       
       }
         
    
       echo "</form>";
        echo "</table>";
        echo "</fieldset>";
              }

      echo "<tr><td></td></tr>";
      echo "<tr><td></td></tr>";
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