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
		<td><input type="text" name="name" id="" size="40"></td></tr>
	<tr><td><label>Category:</label></td>
		<td><select name="category" id="category" onchange="cat()">
			<option></option>
        	<option>crop_farming</option>
			<option>fisheries</option>
			<option>poultry</option>
			<option>diary</option>
			<option>bee_keeping</option>
			<option>animal_care</option>
		</select></td><tr>
	 
	<tr><td><label>Item:</label></td>
		<td id="crp"><select name="crop" > 			
	 	      <option></option>
	 	      <option>tractors</option>
	 	      <option>cultivators</option>
	 	      <option>cultipackers</option>
	 	      <option>plows</option>
	 	      <option>harrows</option>
	 	      <option>sprayers</option>
	 	      <option>transplanters</option>
	 	      <option>mowers</option>
	 	      <option>sickles</option>
	 	      <option>rakes</option>
	 	      <option>balers</option>
	 	      <option>hervesters</option>
	 	      <option>manure_spreaders</option>
	 	      <option>hydroponics</option>	 	      
	 </select></td>

	 
		<td id="pltr"><select name="poultry" >
		       <option></option> 
	          <option>egg_handling</option>
	 	      <option>nest_boxes</option>
	 	      <option>poultry_brooders</option>
	 	      <option>poultry_feeders</option>
	 	      <option>poultry_netting</option>
	 	      <option>poultry_waterers</option>
	 	      </select></td>

     <td id="fish"><select name="fishery" >
		       <option></option> 
	          <option>aerator</option>
	 	      <option>fish_grader</option>
	 	      <option>auto_fish_feeder</option>
	 	      <option>fish_pond</option>
	 	       
	 	  </select></td>

	 	  <td id="bee"><select name="bee" >
		       <option></option> 
	          <option>bee_hive</option>
	 	      <option>bee_feeder</option>
	 	      <option>bee_smoker</option>
	 	      <option>frame</option>
	 	      <option>bee_catcher</option>
	 	      <option>bee_suit</option>
	 	  </select></td>

	 	  <td id="animals"><select name="animals" >
		       <option></option> 
	          <option>fencing_wire</option>
	 	      <option>ear_notcher</option>
	 	      <option>strip_cup</option>
	 	      <option>dehorner</option>
	 	      <option>wool_sheer</option>
	 	      <option>drenching_gun</option>
	 	  </select></td>

	 	   <td id="diar"><select name="diary" >
		       <option></option> 
	          <option>boiler</option>
	 	      <option>diary_tank</option>
	 	      <option>cream_seperator</option>
	 	      <option>milk_cooler</option>
	 	      <option>milking_claw</option>
	 	      <option>curd_percolator</option>
	 	  </select></td>
	 	  </tr>
 
	<tr><td><label>Product Price:</label></td>
		<td><input type="text" name="price" id="" size="40"></td><tr>
	<tr><td><label>Product Description:</label></td>
		<td><input type="text" name="desc" id="" size="40"></td><tr>
	<tr><td><label>Product Image:</label></td>
		<td><input type="file" name="image" id="" size="40"></td><tr>
	</tr>
	 <tr><td><input type="submit" name="submit" id="sub" value="Add Product"></td></tr>

	 
	</form>
</table>

 <footer>
      <p class="text-center">this is a footer</p>
    </footer>
</div>
 
</body>
</html>