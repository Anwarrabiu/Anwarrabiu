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
         .off{
          padding: 7px;
          padding-left: 29px;
          padding-right: 29px;
          background-color: rgba(0,0,0,.3);
          border-radius: 5px;
          text-decoration: none;
          color: black;
          margin-left: 8px;
          margin-right: 0px;
          font-weight: bolder;


        }
        .off:hover{
          background-color: rgba(0,0,0,.6);
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
   <br><br>
    <a class="off" href="consultants_view.php" >View Consultants</a>
    <a class="off" href="view_admins.php" >View Admins</a>

  <fieldset id="consult"><legend>View of Requests</legend>

  <?php
  
       $sq="SELECT * FROM users order by id desc";
       $sqr=mysqli_query($con,$sq) or die("failed to fetch requests!".mysqli_connect_error());
      
            echo "<table cellspacing=20 cellpadding=2 align='center'>";
            echo "<th>ID</th>";
            echo "<th>NAME</th>";
            echo "<th>E-MAIL</th>";
            echo "<th>PHONE</th>";
            echo "<th>ADDRESS</th>";
            echo "<th>ROLL</th>";
            echo "<th>USERNAME</th>";
            echo "<th>PASSWORD</th>";
           
              

            while($row=mysqli_fetch_assoc($sqr)){
             
                
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['phone']."</td>";
        echo "<td>".$row['address']."</td>";
        echo "<td>".$row['roll']."</td>";
        echo "<td>".$row['username']."</td>";
        echo "<td>".$row['password']."</td>";
 

        


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