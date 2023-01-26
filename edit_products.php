<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
  <title>products</title>

   <meta charset="utf-8">
<meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="main.css">
  <link rel="stylesheet" type="text/css" href="style.css">
 
   
</head>
<body>
  <div id="header">
  <img id="img1" src="img/logo1.png" alt="logo" width="8%" />
  <img id="img2" src="img/logo2.png" alt="logo" width="8%" />
   </div>
  <div class="main-container" >
     <?php
           if (!isset($_SESSION['user'])) {
              header("location:index.php");
           }
    ?>
 

<?php
            include('menu.php');            
            include('config.php');


          $id=$_GET['id'];

          $q="SELECT * FROM products WHERE id='".$id."';";
          $qr=mysqli_query($con,$q) or die("Failed to fetch this products ".mysqli_connect_error());
          $nm=mysqli_num_rows($qr);

          if($nm > 0){
             echo "Did it";
          }

 ?>
 </div>

 <footer>
      <p class="text-center">this is a footer</p>
    </footer>
 </div>
 
</body>
</html>
