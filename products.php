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
     #who{
      text-align: right;
      color: tomato;
    }
    #pr{
        color: tomato;
        position: absolute;
        top: 7%;
        left: 16%;
       
         }
      a{
          text-decoration: none;
          color: red;
          font-size: 40px;
         }
         .pro{
          background-color: rgba(0,0,0,.2);
          color: black;
          font-size: 28px;
          padding-right: 19px;
          padding-left: 19px;
          border-radius: 5px;
         }
          .pro{
          border:none;
          background-color: rgba(0,0,0,.3);
          padding: 2px;
          padding-right: 25px;
          padding-left: 25px;
          border-radius: 3px;

        }
         .pro:hover{
          background-color: rgba(0,0,0,.6);
        }
     
.sticky
{
     position: sticky;
     position: -webkit-sticky;
     width: 32%;
     height: 650px;
     top: 10%;
     padding-left: 30px;
}
  </style>
	
</head>

<body>
  
  <div id="header">
   <img id="img1" src="img/asmislg1.png" alt="logo" width="22%" height="8%" />

   </div>
  <div class="main-container">
     <?php
          
  
       include('config.php');
       include('menu.php');
       ?>
  
<section id="p1">
<div id="who">
<?php
 if(isset($_SESSION['user'])){
              echo "LOGGED IN AS ".$_SESSION['user']." </div>";
           }else{       
             echo "LOGGED IN AS VISITOR </div>";
           }

          

     $sql="SELECT * FROM products WHERE item='".$_GET['it']."'";
     $sqlqr=mysqli_query($con,$sql) or die("failed to fetch: ".mysqli_error());
     $num=mysqli_num_rows($sqlqr);
     if($num!=0){

      echo "<table cellspacing=33 cellpadding=2>";
     $count=0;
     while($row=mysqli_fetch_assoc($sqlqr)){
      echo "<div class='cont'>";
                if($count==0){
			         echo "<tr>"; 

    echo "<td>";
    echo "<img src='./img/".$row['image']."' width=230 height=300>";
    echo "<h2>".$row['name']."</h2>";
    echo "<p>$ ".$row['price']."</p>";
    echo "<p>".$row['description']."</p>";
    echo "<p><a class='pro' href='addtocart.php?id=".$row['id']."'>BUY</a></p></td>";

     echo "</div>";

}else{

    echo "<div class='cont'>";

    echo "<td>";
    echo "<img src='./img/".$row['image']."' width=230 height=300>";
    echo "<h2>".$row['name']."</h2>";
    echo "<p>$ ".$row['price']."</p>";
    echo "<p>".$row['description']."</p>";
    echo "<p><a class='pro' href='addtocart.php?id=".$row['id']."'>BUY</a></p></td>";

    echo "</div>";
     }$count++;
       if($count==3){
     	  $count=0;
}
   }echo "</tr>";
   
    echo "</table>";
}else{

    echo "<br><br><br><br><br><br><br><br><br><br><br><br><h1>.....................".$_GET['it']." Items Not Available...................</h1><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";

}


?>
</section>
 
 <img class="sticky" src="ad1.jpg" alt="ADVERT">
 <style type="text/css">
   #table{
    position: absolute;
    left: 60%;
    bottom: 1%;
    color: white;
   }
   #label{
    position: absolute;
    left: 3%;
    bottom: 1%;
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