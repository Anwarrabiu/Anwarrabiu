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
         #edit{
          background-color: rgba(0,0,0,.1);
          padding-right: 300px;
          padding-left: 300px;
          margin-top: 20px;
          margin-bottom: 40px;
        }
          input{
          border:none;
          padding: 6px;
          border-radius: 3px;
        }
        .log{
          padding: 7px;
          padding-left: 46px;
          padding-right: 46px;
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

            if (isset($_POST['submit'])){
               
               $s="UPDATE consultants SET consultant_name='".$_POST['name']."', identifier='".$_POST['identifier']."', password='".$_POST['password']."', phone='".$_POST['phone']."', e_mail='".$_POST['email']."', address='".$_POST['address']."', profession='".$_POST['profession']."' WHERE id='".$_GET['id']."';"; 
               $sr=mysqli_query($con,$s) or die("Failed to edit this product ".mysqli_connect_error());

               if ($sr) {
                 header("location:consultants_view.php");
                 // header("location: edit_consultant.php?id=".$_GET['id']."");
               }
            }else{

          $id=$_GET['id'];

          $q="SELECT * FROM consultants WHERE id='".$id."';";
          $qr=mysqli_query($con,$q) or die("Failed to fetch this products ".mysqli_connect_error());
          $nm=mysqli_num_rows($qr);

          if($nm == 1){


            $row=mysqli_fetch_assoc($qr);
            echo "<div id='input'>";
             echo "<table id='edit' cellpadding='7' align='center'>";
             echo "<form method='POST' action='edit_consultant.php?id=".$row['id']."'>";            
             echo "<tr>"; 
             echo "<td>ID</td>"; 
             echo "</tr>";            
             echo "<td><input type='text' name='id' size='40' value='".$row['id']."' readonly ></td>";
             echo "</tr>";
             echo "<tr>"; 
             echo "<td>Name</td>"; 
             echo "</tr>";            
             echo "<td><input type='text' name='name' size='40' pattern='[A-Za-z ]+$' title='Only letters are allowed.'  value='".$row['consultant_name']."' ></td>";
             echo "</tr>";
             echo "<tr>"; 
             echo "<td>Identifier</td>"; 
             echo "</tr>";            
             echo "<td><input type='text' name='identifier' size='40'  pattern='[A-Za-z0-9+ ]+$' value='".$row['identifier']."' ></td>";
             echo "</tr>";
             echo "<tr>"; 
             echo "<td>Password</td>"; 
             echo "</tr>";            
             echo "<td><input type='password' name='password' size='40' value='".$row['password']."' ></td>";
             echo "</tr>";
             echo "<tr>"; 
             echo "<td>Phone</td>"; 
             echo "</tr>";            
             echo "<td><input type='text' name='phone' size='40'  pattern='[0-9+ ]+$' value='".$row['phone']."' ></td>";
             echo "</tr>";
             echo "<tr>";   
             echo "<td>E-Mail</td>"; 
             echo "</tr>";         
             echo "<td><input type='text' name='email' size='40' pattern='[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$' value='".$row['e_mail']."' ></td>";
             echo "</tr>";
             echo "<td>Address</td>"; 
             echo "</tr>";         
             echo "<td><input type='text' name='address' size='40' pattern='[A-Za-z0-9/ ]+$' value='".$row['address']."' ></td>";
             echo "</tr>";
             echo "</tr>";
             echo "<td>Profession</td>"; 
             echo "</tr>";
             echo "<tr>";           
             echo "<td><input type='text' name='profession' size='40' pattern='[A-Za-z ]+$' value='".$row['profession']."' ></td>";
             echo "</tr>";
             echo "<tr>";
             echo "<td></td>";
             echo "</tr>";
             echo "</tr>";    
             echo "<td><input type='submit' name='submit' class='log' size='40' value='UPDATE'>&nbsp<input type='reset' name='reset' class='log' size='40' value='RESET' ></td>";
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
