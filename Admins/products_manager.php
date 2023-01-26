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
  a{
    text-decoration: none;
    color: #003300;
    font-weight: bolder;
    
  }
  #sub_cont a{
         padding: 7px;
         padding-left: 19px;
         padding-right: 19px;
         background-color: rgba(0,0,0,.3);
         border-radius: 7px;

  }
  #sub_cont{
    
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
    ?>
 
<?php
            include('menu.php');
            
          include('config.php');

            $cat=$_GET['i'];

          ?>
<div id="sub_cont">
  <table align="center">
    <tr><td>
 <button onclick="location.href='products_manager.php?i=crop farming';"> Crop Farming </button>
 <button onclick="location.href='products_manager.php?i=fisheries';"> Fishery </button>
 <button onclick="location.href='products_manager.php?i=poultry';"> Poultry </button>
 <button onclick="location.href='products_manager.php?i=diary';"> Diary </button>
 <button onclick="location.href='products_manager.php?i=bee_keeping';"> Bee Keeping </button>
 <button onclick="location.href='products_manager.php?i=animal_care';"> Animal Care </button>
</td></tr>
</table>
<?php

 
$asq="SELECT * FROM products WHERE category='".$cat."';";
$asqr=mysqli_query($con,$asq) or die("Failed to retrieve products: ".mysqli_error($con));
$nm=mysqli_num_rows($asqr);

if ($nm > 0) {
  



echo '<table  cellspacing=10 cellpadding=10 align="center">';
echo  '<form>';
echo   '<th></th>';

echo   '<th>Name</th>';
echo   '<th>Price</th>';
echo   '<th>Description</th>';
 
while($r=mysqli_fetch_assoc($asqr)){

    $id=$r['id'];
    echo '<tr>';
    echo "<td><img src='./images/".$r['image']."' width=100 height=60></td>";
    echo '<td>'.$r['name'].'</td>';
    echo '<td>$ '.$r['price'].'</td>';
    echo '<td>'.$r['description'].'</td>';
    echo "<td><a href=edit_products.php?id=".$id."> Edit Product </a></td>";
    echo "<td><a href=delete_from_products.php?id=".$id."&cat=".$cat."> Remove Product </a></td>";
   
    echo '</tr>';

}
}
    echo "<tr><td></td></tr>";
    echo "<tr><td></td></tr>";
    echo "<tr><td></td></tr>";
    echo "<tr><td></td></tr>";
   echo '</form>';
 echo '</table>';
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
