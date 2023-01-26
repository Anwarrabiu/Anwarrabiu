<!DOCTYPE html>
<html>
<head>
	<title>Add product</title>
	 <meta charset="utf-8">
<meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="main.css">
<link rel="stylesheet" type="text/css" href="style.css">

<script type="text/javascript">
	function cat(){
		document.getElementById("crp").style.display='none';
		document.getElementById("pltr").style.display='none';
		document.getElementById("fish").style.display='none';
        document.getElementById("diar").style.display='none';
		document.getElementById("bee").style.display='none';
		document.getElementById("animals").style.display='none';		


        var item=document.getElementById("category").value;

        switch(item){

               case 'crop_farming': document.getElementById("crp").style.display='block';
               break;
                case 'fisheries': document.getElementById("fish").style.display='block';
               break;
                case 'poultry': document.getElementById("pltr").style.display='block';
               break;
                case 'diary': document.getElementById("diar").style.display='block';
               break;
                case 'bee_keeping': document.getElementById("bee").style.display='block';
               break;
                case 'animal_care': document.getElementById("animals").style.display='block';
               break;

        }

           
	}
</script>


	
</head>

<body onload="cat()">
	<div id="header">
  <img id="img1" src="img/logo1.png" alt="logo" width="8%" />
  <img id="img2" src="img/logo2.png" alt="logo" width="8%" />
   </div>

	<div class="main-container">
	
	<?php
       include('config.php');
       ?>
<nav>
    <ul>
    <li><a href="index.php" class="active">Home</a></li>
    <li><a href="#">link</a></li>
    <li><a href="#">link</a></li>
    <li><a href="#">link</a></li>
    <li><a href="#">link</a></li>
    <li><a href="#">link</a></li>
</ul>
</nav>
	
    <h1>Add Product</h1>
    <table>
	<form method="POST" action="addproduct_script.php">
	<tr><td><label>Product Name:</label></td>
		<td><input type="text" name="Pin" id="" size="40"></td></tr>
	
		
	 <tr><td><input type="submit" name="submit" id="sub" value="Proceed to pay"></td></tr>
	  <tr><td><input type="submit" name="submit" id="sub" value="Cancel"></td></tr>
	 
	 
	 
	</form>
</table>

 <footer>
      <p class="text-center">this is a footer</p>
    </footer>
</div>
 
</body>
</html>