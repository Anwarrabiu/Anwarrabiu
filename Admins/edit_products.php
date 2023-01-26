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

            if (isset($_POST['submit'])){
               
               $s="UPDATE products SET name='".$_POST['name']."', category='".$_POST['category']."', item='".$_POST['item']."', price='".$_POST['price']."', description='".$_POST['description']."', image='".$_POST['image']."' WHERE id='".$_GET['id']."';"; 
               $sr=mysqli_query($con,$s) or die("Failed to edit this product ".mysqli_connect_error());

               if ($sr) {
                 echo "Done editing";
               }
            }else{

          $id=$_GET['id'];

          $q="SELECT * FROM products WHERE id='".$id."';";
          $qr=mysqli_query($con,$q) or die("Failed to fetch this products ".mysqli_connect_error());
          $nm=mysqli_num_rows($qr);

          if($nm == 1){

            $row=mysqli_fetch_assoc($qr);
            echo "<br><br>";
            echo "<div id='input'>";
             echo "<table id='edit' cellpadding='7' align='center'>";
             echo "<form method='POST' action='edit_products.php?id=".$row['id']."'>";              
             echo "<tr>";
             echo "<td><img src='./images/".$row['image']."' width=400 height=270></td>";
             echo "</tr>";
             echo "<tr>"; 
             echo "<td>ID</td>"; 
             echo "</tr>";            
             echo "<td><input type='text' name='id' size='40' value='".$row['id']."' readonly ></td>";
             echo "</tr>";
             echo "<tr>"; 
             echo "<td>Name</td>"; 
             echo "</tr>";            
             echo "<td><input type='text' name='name' size='40' pattern='[A-Za-z0-9 ]+$' value='".$row['name']."' ></td>";
             echo "</tr>";
             echo "<tr>"; 
             echo "<td>Category</td>"; 
             echo "</tr>";            
             echo "<td><input type='text' name='category' size='40' value='".$row['category']."' ></td>";
             echo "</tr>";
             echo "<tr>"; 
             echo "<td>Item</td>"; 
             echo "</tr>";            
             echo "<td><input type='text' name='item' size='40' value='".$row['item']."' ></td>";
             echo "</tr>";
             echo "<tr>"; 
             echo "<td>Price</td>"; 
             echo "</tr>";            
             echo "<td><input type='text' name='price' size='40' pattern='[0-9 ]+$' value='".$row['price']."' ></td>";
             echo "</tr>";
             echo "<tr>"; 
             echo "<td>Description</td>"; 
             echo "</tr>";
             echo "<td><textarea name='description' placeholder='".$row['description']."'  rows=7 cols=30 pattern='[A-Za-z0-9/ ]+$'></textarea></td>";            
             echo "</tr>";
             echo "<tr>"; 
             echo "<td>Image</td>"; 
             echo "</tr>";            
             echo "<td><input type='file' name='image' size='40' value='".$row['image']."' ></td>";
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
 <tr><td></td></tr><br>
 <tr><td></td></tr><br>
 <tr><td></td></tr><br>
 <tr><td></td></tr>
   
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
