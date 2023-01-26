<?php session_start()?>
<!DOCTYPE html>
<html>
<head>
	<title>Add to Cart</title>

   <meta charset="utf-8">
<meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="main.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		 #who{
      text-align: right;
      color: tomato;
    }
   
     input{
         
          border-color: tomato;
          padding: 6px;
        }
         #sub{
          border:none;
          background-color: rgba(0,0,0,.3);
          padding: 8px;
          padding-right: 41px;
          padding-left: 44px;
          border-radius: 3px;

        }
        #sub:hover{
          background-color: rgba(0,0,0,.6);
        }
        #mn{
          position: absolute;
          top: 0px;
          padding-bottom: 40px;
           
          padding-left: 2px;
          
        }
        #img{
          padding-top: 20px;
        }
        #cp{
          padding: 20px;
          padding-bottom: 26px;
          padding-left: 1600px;
          background-color: rgba(0,0,0,.4);
          position: absolute;
          top: 0px;
        }
	</style>
 
</head>
<body>
  <div id="header">
    <img id="img1" src="img/asmislg1.png" alt="logo" width="22%" height="8%" />

   </div>
  <div class="main-container">
   <?php

           if (!isset($_SESSION['user'])) {
   
            header("location:index.php?reg=1");
           }
            
    ?>
    <div id="main-content">

<section id="addtocart">

<div id="who">
<?php
         echo "LOGGED IN AS ".$_SESSION['user']." </div>";

       include("config.php");


      
       $sql="SELECT * FROM products WHERE id=".$_GET['id'].";";
       $sqlqr=mysqli_query($con,$sql) or die("Failed to fetch: ".mysqli_error());   
       $row=mysqli_fetch_assoc($sqlqr) or die("Failed to fetch this particular item");

        if(isset($_POST['submit'])){
           
           if(isset($_SESSION['ordernum'])){
               
$sqll="INSERT INTO ordered_items(order_id,product_id,quantity) VALUES(".$_SESSION['ordernum'].",".$_GET['id'].",".$_POST['qty'].")";
               mysqli_query($con,$sqll) or die("Failed to insert into ordered items");

               

               }else{
                      if(isset($_SESSION['loggedin'])){    
                      $osql="INSERT INTO orders(user_id) VALUES(".$_SESSION['userid'].")";
                      mysqli_query($con,$osql) or die("Failed to insert new order"); 
                        
                       $sqn="SELECT * FROM orders WHERE user_id='".$_SESSION['userid']."' AND status < 2";  
                       $sqnqr=mysqli_query($con,$sqn) or die("fail to query ordernum");
                       $sqnftch=mysqli_fetch_assoc($sqnqr); 

                       $_SESSION['ordernum']=$sqnftch['id'];   
                      $sqll="INSERT INTO ordered_items(order_id,product_id,quantity) VALUES(".$_SESSION['ordernum'].",".$_GET['id'].",".$_POST['qty'].")";
                      mysqli_query($con,$sqll) or die("Failed to insert into ordered items"); 

              
                  }
               }
               $sqpr="UPDATE orders SET status=1, total=total + ".$row['price'] * $_POST['qty']." WHERE id=".$_SESSION['ordernum'].";";
               $a=mysqli_query($con,$sqpr) or die("Failed to update total in orders table");
                       
                       header("location:showcart.php"); 
                      }else{
                          
         
         echo "<form method='POST' action='addtocart.php?id=".$row['id']."'>";
         echo "<div id='pic'>";
         echo "<img id='img' src='./img/".$row['image']."' width=600 height=500></div>";
         echo "<br><br><br><h2> ".$row['name']."</h2>";
         echo "<h3>".$row['description']."</h3>";
         echo "<h1>Unit Price : $ ".$row['price']."</h1>";
         echo "<input type='text' name='qty' pattern='[0-9+ ]+$' title='Enter valid number' maxlength='2' required><br><br>";         
         echo "<input type='submit' name='submit' id='sub' value='addtocart'>";
         echo "</form>";
         
         }
        
	?>

</section>
<?php 
 echo "<div id='cp'>  </div>";
 echo "<div id='mn'";
         include('menuad2cart.php');
         echo "</div>";
        

?>


 <footer>
  <style type="text/css">
    #table{
      position: absolute;
      top: 7%;
      left: 10%;
      font-size: 90%;
    }
    .tr{
      position: relative;
      left:80%;
    }
    #label{
      position: absolute;
      top: 4%;
      left: 3%;
      font-size: 70%;
      
    }
    #s{
      font-size: 150%;
      color: black;
      font-weight: bolder;

    }
  </style>
      <table id="table" cellspacing="">
        <tr class="tr"><td><img src="place.png" width="2%" height="2%">&nbsp&nbsp No12 Ahmadu Bello way Nassarawa, Kano State, Nigeria</td></tr>
         <tr class="tr"><td><img src="phone.png" width="2%" height="2%">&nbsp&nbsp +256 755923076</td></tr>
          <tr class="tr"><td><img src="contact.png" width="2%" height="2%">&nbsp&nbsp asmis@yahoo.com</td></tr>
       </table>
       <label id="label"><strong id="s">ABOUT US</strong><br><br>ASMIS system is basically a consultancy platform for farmers in need for particular consultation<br> in their farming activities, and the other is agricultural products sects for farmers that may buy<br> their desired Products from this platform. Using this system the agency (KNARDA) officials will<br> digitally manage their certain activities efficiently. </label>
    </footer>
</div>
 
</body>
</html>  