<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Consultancies</title>
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
    #who{
      text-align: right;
      color: tomato;
    }
     #act{
          border:none;
          background-color: rgba(0,0,0,.3);
          padding: 8px;
          padding-right: 25px;
          padding-left: 25px;
          border-radius: 3px;

        }
         #act:hover{
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
           
  
       include('config.php');
       include('menu.php');

      echo ' <div id="who">';

      if(isset($_SESSION['user'])){
               echo "LOGGED IN AS ".$_SESSION['user']." </div>";
           }else{
            echo "LOGGED IN AS VISITOR </div>";
           }

         
       ?>
  


<section id="consult">
 
<?php
     
       
     $sql="SELECT * FROM consultancy_services";
     $sqlqr=mysqli_query($con,$sql) or die("failed to fetch: ".mysqli_error());
     $num=mysqli_num_rows($sqlqr);
     if($num!=0){
     
     echo "<table cellspacing=33 cellpadding=2>";
            echo "<th>CONSULTANCY NAMES</th>";
            echo "<th>CONSULTANCY HIGHLIGHTS</th>";
            echo "<th>CONSULT PRICE</th>";
     while($row=mysqli_fetch_assoc($sqlqr)){
    
       echo "<tr>";
       echo "<td><strong>".$row['name']."</strong></td>";
       echo "<td>".$row['description']."</td>";
       echo "<td><strong>$ ".$row['price']."</strong></td>";
       echo "<td><a id='act' href='request_cont.php?id=".$row['id']."'>  Request  </a></td>";
       echo "</tr>";

}
}
?>

</section>
 
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