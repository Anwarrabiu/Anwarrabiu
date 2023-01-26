<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Consultant Assignment</title>
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
        
        echo $_SESSION['user'];
        if(isset($_POST['submit'])){

          if ($_POST['consultant']=='Select-Consultant') {
           echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<strong><h1>Select Consultant From the Option Please!</h1></strong>";
           // header('location:view_requests_cont.php');
          }else{
          
     $q="UPDATE consultancy_requests SET status= 3, consultant_assigned='".$_POST['consultant']."' WHERE id='".$_GET['id']."';";
     $qq=mysqli_query($con,$q) or die("Failed to update consultant assigned");

    // $sl="UPDATE consultants SET task_assigned = 1 WHERE consultant_name ='".$_POST['consultant']."';";
    // $slr=mysqli_query($con,$sl) or die("Failed to set task assigned in consultants");

     $s="UPDATE consultants SET task_assigned = 1 WHERE identifier ='".$_POST['consultant']."'";
     $sr=mysqli_query($con,$s) or die("Failed to set 1 to task assigned in consultants");

     if ($sr) {
     	      header("location:view_requests.php");
     }
 

        }   
        }else{
      
   ?>

  <fieldset id="consult"><legend>Consultant Assignment to Requests</legend>
  <?php
  
       $sq="SELECT * FROM consultancy_requests WHERE id='".$_GET['id']."' AND consultant_assigned=' '";
       $sqr=mysqli_query($con,$sq) or die("failed to fetch requests!");
      
            echo "<table cellspacing=20 cellpadding=2 align=center>";
            echo "<th>ID</th>";
            echo "<th>Name of Service</th>";
            echo "<th>Person Requests</th>";
            echo "<th>Date</th>";
            echo "<th>Time</th>";
            echo "<th>Select Consultant</th>";
              

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

       echo "<form action='view_requests_end.php?id=".$row['id']."' method='POST'>";
        echo "<td><select name='consultant'>
              <option>Select-Consultant</option>
        ";

               $s="SELECT * FROM consultants WHERE profession='".$row['service_name']."' AND task_assigned = 0 ";
               $sr=mysqli_query($con,$s) or die("Failed to fetch consultants!");
                $num=mysqli_num_rows($sr);
               while($ro=mysqli_fetch_assoc($sr)){
                    
                
                echo "<option value='".$ro['identifier']."'>".$ro['identifier']."</option>";
               }

        echo "</select></td>";
        echo "<td><input type='submit' name='submit' value='Assign'></td>";
        echo "</form>";
        echo "<td><a href='reject_request.php?id=".$row['id']."'>[ Reject ]</a>";
        echo "</tr>";       
       }    
        echo "</table>";

      }
    }

       ?>
   

</fieldset>
 
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