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
		
         #cart{
         	  float: right;
         }
         a{
         	text-decoration: none;
         }
          #who{
      text-align: right;
      color: tomato;
    }
    #ttl{
      color: tomato;
    }

	</style>
    }
	
</head>
<body>
  <div id="header">
   <img id="img1" src="img/asmislg1.png" alt="logo" width="22%" height="8%" />

   </div>
  <div class="main-container">
     <?php
           if (!isset($_SESSION['user'])) {
              header("location:index.php");
           }
    ?>
 

<?php
            include('menu.php');
            
          include('config.php');

         echo '<div id="who">';

         echo "LOGGED IN AS ".$_SESSION['user']." </div>";


$sq="SELECT products.*,ordered_items.*,ordered_items.id AS item_id FROM products,ordered_items where products.id=ordered_items.product_id and order_id=".$_SESSION['ordernum'].";";
    
       $sqqr=mysqli_query($con,$sq) or die("Failed to fetch for showcart<h1>You Must Add Item to Be Able to View</h1>".mysqli_connect_error());
       $sqnum=mysqli_num_rows($sqqr);
       if ($sqnum==0){
                        echo "<h1>You Dont Have Anything in Your Cart</h1>";
   }else{ 
               echo "<h2>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCART Containing the Products Selected By ".$_SESSION['user'].".</h2>";

   	     echo "<table cellpadding=10 align='center' ";

         echo "<tr>";
         echo "<td><strong></strong></td>";
         echo "<td><strong>Name </strong></td>";
         echo "<td><strong>Price </strong></td>";
         echo "<td><strong>Quantity </strong></td>";
         echo "<td><strong>Total Price</strong></td>";
         echo "<td><strong>Action</strong></td>";
         echo "</tr>";
         echo "<br><br><br>";


        $total=0;
       while($sqftch=mysqli_fetch_assoc($sqqr)){

             
              $p=$sqftch['price'];
              $q=$sqftch['quantity'];
              $price=($p*$q);

              $total = $total + $price;
            
            echo "<tr>";
            echo "<td><img src='./img/".$sqftch['image']."' width=70 height=50></td>";
            echo "<td><h3>".$sqftch['name']."<h3></td>";
            echo "<td>".$sqftch['price']."</td>";
            echo "<td>".$sqftch['quantity']."</td>";
            echo "<td><strong>$ </strong>".$price."</td>";
          //echo "<td><a href='delete_item.php?id=".$sqftch['item_id']."'>[ Remove From Cart ]</td>";
 
            if ($sqftch['status']==0) {
               
            echo "<td><a href='delete_item.php?id=".$sqftch['item_id']."'>[ Remove From Cart ]</td>";
          }
          elseif($sqftch['status']==2){
             echo "<td><label>To Be PAID on Delivery</label></td>";
             echo "<td><a href='delete_item.php?id=".$sqftch['item_id']."'>[ Remove From Cart ]</td>";
          }elseif($sqftch['status']==1){
            echo "<td><label>PAID</label></td>";
          }
            echo "<td></td>";
            echo "</tr>";

        
       } 
        $upd="UPDATE orders SET total=". $total." WHERE id=".$_SESSION['ordernum'].";";
        $updqr=mysqli_query($con,$upd) or die("Failed to update total at showcart");

       echo "<tr>"; 
       echo "<td></td><td></td><td></td><td></td><td></td><td><h3><strong><h2 id='ttl'>TOTAL Amount : $ ". $total."</h2> </strong></h3></td>";
     //  if ($r['status']==1 ) {
         
       
       echo "<td><a href='checkout.php'><strong>[ CHECKOUT ]</strong></a></td>";
   //  }
       echo "<tr><td></td></tr><tr><td></td><td></td></tr>";
       echo "</tr>";

   }

 ?>

</div>
 
</table>
 
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
