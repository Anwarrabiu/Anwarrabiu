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

     .act{
          border:none;
          background-color: rgba(0,0,0,.3);
          padding: 8px;
          padding-right: 25px;
          padding-left: 25px;
          border-radius: 3px;

        }
         .act:hover{
          background-color: rgba(0,0,0,.6);
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

               header("location:intrusion.php");
             }else{
  
       include('config.php');
       include('menu.php');
           
      
   ?>

  <fieldset id="consult"><legend>View of CONSULTANTS</legend>

  <?php
  
       $sq="SELECT * FROM consultants order by id desc";
       $sqr=mysqli_query($con,$sq) or die("failed to fetch requests!".mysqli_connect_error());
      
            echo "<table cellspacing=20 cellpadding=2 align='center'>";
            
            echo "<th>CONSULTANT NAME</th>";
            echo "<th>IDENTIFIER</th>";
            echo "<th>PASSWORD</th>";
            echo "<th>PHONE</th>";
            echo "<th>E-MAIL</th>";
            echo "<th>ADDRESS</th>";
            echo "<th>PROFESSION</th>";


            while($row=mysqli_fetch_assoc($sqr)){
             

             
                
        echo "<tr>";   
        echo "<td>".$row['consultant_name']."</td>";
        echo "<td>".$row['identifier']."</td>";
        echo "<td>".$row['password']."</td>";
        echo "<td>".$row['phone']."</td>";
        echo "<td>".$row['e_mail']."</td>";
        echo "<td>".$row['address']."</td>";
        echo "<td>".$row['profession']."</td>";
 
        echo "<td><a class='act' href='edit_user.php?id=".$row['id']."'> EDIT </a></td>";
         
        echo "<td><a class='act' href='delete_user.php?id=".$row['id']."'> DELETE </a>";
        echo "</tr>";
       
       }
         
    
       echo "</form>";
        echo "</table>";
        echo "</fieldset>";
              }

      echo "<tr><td></td></tr>";
      echo "<tr><td></td></tr>";
       ?>
   

 
 <footer>
      <p class="text-center">this is a footer</p>
    </footer>
</div>
 
</body>
</html>