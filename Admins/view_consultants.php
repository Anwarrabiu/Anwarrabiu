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
  <img id="img1" src="img/logo1.png" alt="logo" width="8%" />
  <img id="img2" src="img/logo2.png" alt="logo" width="8%" />
   </div>
  <div class="main-container">
     <?php
            if($_SESSION['roll']!='admin'){   

               header("location:../login.php");
             }else{
  
       include('config.php');
       include('menu.php');
           
      
   ?>

  <fieldset id="consult"><legend>View of Requests</legend>
  <?php
  
       $sq="SELECT * FROM consultants ";
       $sqr=mysqli_query($con,$sq) or die("failed to fetch requests!".mysqli_connect_error());
      
            echo "<table cellspacing=20 cellpadding=2>";
            echo "<th>ID</th>";
            echo "<th>Consultant Name</th>";
            echo "<th>Identifier</th>";
            echo "<th>Password</th>";
            echo "<th>Phone</th>";
            echo "<th>E-Mail</th>";
            echo "<th>Address</th>";
            echo "<th>Profession</th>";
                          

            while($row=mysqli_fetch_assoc($sqr)){
              echo "<tr>";
              echo "<td>".$row['id']."</td>";
              echo "<td>".$row['consultant_name']."</td>";               
              echo "<td>".$row['identifier']."</td>";
              echo "<td>".$row['password']."</td>";
              echo "<td>".$row['phone']."</td>";
              echo "<td>".$row['e_mail']."</td>";
              echo "<td>".$row['address']."</td>";
              echo "<td>".$row['profession']."</td>";
              echo "<td><a href='edit_consultant.php?id=".$row['id']."'>[ EDIT ]</a></td>";         
              echo "<td><a href='delete_consultant.php?id=".$row['id']."'>[ DELETE ]</a></td>";
              echo "</tr>";


             }
}

            ?>
          </table>
          </fieldset>
 
 <footer>
      <p class="text-center">this is a footer</p>
    </footer>
</div>
 
</body>
</html>