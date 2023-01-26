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
 <style type="text/css">
   
   td{
    font-weight: bolder;
    font-size: 17px;

   }

  #ed{
          position: absolute;
          top: 6%;
          left: 15%;
          background-color: rgba(0,0,0,.1);
          padding: 70px;
          padding-right: 600px;
          padding-left: 200px;
          padding-bottom: 122px;
          border-radius: 7px;
        }
        table{
          background-color: rgba(0,0,0,.1);
          padding-right: 300px;
          padding-left: 300px;
          

        }
         input{
          border:none;
          padding: 6px;
          border-radius: 3px;
        }
        a{
          text-decoration: none;
          color: black; 
        }
         .log{
          padding: 7px;
          padding-left: 49px;
          padding-right: 49px;
          background-color: rgba(0,0,0,.3);
          border-radius: 5px;

        }
        .log:hover{
          background-color: rgba(0,0,0,.6);
        }
       
 </style>
   
</head>
<body>
  <div id="header">
   <img id="img1" src="img/asmislg1.png" alt="logo" width="22%" height="8%" />

   </div>
  <div class="main-container" >
     <?php
           if (!isset($_SESSION['user'])) {
              header("location:index.php");
           }

    
            include('menu.php');            
            include('config.php');

         //   echo "<div id='ed'>";

            if (isset($_POST['submit'])){
               
               $s="UPDATE users SET name='".$_POST['name']."', email='".$_POST['email']."', phone='".$_POST['phone']."', address='".$_POST['address']."', username='".$_POST['username']."', password='".$_POST['password']."' WHERE id='".$_GET['id']."';"; 
               $sr=mysqli_query($con,$s) or die("Failed to edit this product ".mysqli_connect_error());

               if ($sr) {
                header("location:users_view.php");
                  //header("location: edit_user.php?id=".$_GET['id']."");
               }
            }else{

          $id=$_GET['id'];

          $q="SELECT * FROM users WHERE id='".$id."';";
          $qr=mysqli_query($con,$q) or die("Failed to fetch this products ".mysqli_connect_error());
          $nm=mysqli_num_rows($qr);

          if($nm == 1){

            $row=mysqli_fetch_assoc($qr);
            echo "<br><br>";
            echo "<div id='input'>";
             echo "<table cellpadding='7' align='center'>";
             echo "<form method='POST' action='edit_user.php?id=".$row['id']."'>";            
             echo "<tr>"; 
             echo "<td>ID</td>"; 
             echo "</tr>";            
             echo "<td><input type='text' name='id' size='40'  value='".$row['id']."' readonly ></td>";
             echo "</tr>";
             echo "<tr>"; 
             echo "<td>Name</td>"; 
             echo "</tr>";            
             echo "<td><input type='text' name='name' size='40' pattern='[A-Za-z ]+$' title='Only letters are allowed.'  value='".$row['name']."' ></td>";
             echo "</tr>";
             echo "<tr>"; 
             echo "<td>E-Mail</td>"; 
             echo "</tr>";            
             echo "<td><input type='text' name='email' size='40' pattern='[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$' value='".$row['email']."' ></td>";
             echo "</tr>";
             echo "<tr>"; 
             echo "<td>Phone</td>"; 
             echo "</tr>";            
             echo "<td><input type='text' name='phone' size='40' pattern='[0-9+ ]+$' value='".$row['phone']."' ></td>";
             echo "</tr>";
             echo "<tr>"; 
             echo "<td>Address</td>"; 
             echo "</tr>";            
             echo "<td><input type='text' name='address' size='40' pattern='[A-Za-z0-9/ ]+$' value='".$row['address']."' ></td>";
             echo "</tr>";
             echo "<tr>";   
             echo "<td>Roll</td>"; 
             echo "</tr>";         
             echo "<td><input type='text' name='roll' size='40' pattern='[A-Za-z ]+$' value='".$row['roll']."' readonly ></td>";
             echo "</tr>";
             echo "<td>Username</td>"; 
             echo "</tr>";         
             echo "<td><input type='text' name='username' size='40' pattern='[A-Za-z0-9 ]+$' value='".$row['username']."' ></td>";
             echo "</tr>";
             echo "</tr>";
             echo "<td>Password</td>"; 
             echo "</tr>";
             echo "<tr>";           
             echo "<td><input type='text' name='password' size='40' pattern='[A-Za-z0-9 ]+$' value='".$row['password']."' ></td>";
             echo "</tr>";
             echo "<tr>";
             echo "<td></td>";
             echo "</tr>";
             echo "</tr>";    
             echo "<td><input type='submit' name='submit' class='log' size='40' value='submit'>&nbsp<input type='reset' name='reset' class='log' size='40' value='reset' ></td>";
             echo "</tr>";
             


          } 
         
            echo "<tr><td></td></tr>";
            echo "<tr><td></td></tr>";
            echo "<tr><td></td></tr>";
            echo "<tr><td></td></tr>";
            echo "<tr><td></td></tr>";

            echo "</form>";
            echo "</table>";
}
 ?>
 </div>
 <tr><td></td></tr><br>
 <tr><td></td></tr><br>
 <tr><td></td></tr><br>
 <tr><td></td></tr>
  <footer>
      <p class="text-center">this is a footer</p>
    </footer>
 </div>

</body>
</html>
