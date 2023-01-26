<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Assignments</title>
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

       $s="SELECT * FROM consultancy_requests WHERE consultant_assigned="
        
      ?>

        
     
</fieldset>
 <footer>
      <p class="text-center">this is a footer</p>
    </footer>
</div>
 
</body>
</html>