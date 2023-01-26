<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
      include("config.php");

      

	$name=$_POST['name'];
	$category=$_POST['category'];
	$manufacturer=$_POST['manufacturer'];

	switch ($category) {
		case 'crop_farming': $item=$_POST['crop'];			 
			break;
		case 'fisheries': $item=$_POST['fishery'];			 
			break;
		case 'poultry': $item=$_POST['poultry'];			 
			break;
		case 'diary': $item=$_POST['diary'];			 
			break;
		case 'bee_keeping': $item=$_POST['bee'];			 
			break;
		case 'animal_care': $item=$_POST['animals'];			 
			break;			
	}
	
	$price=$_POST['price'];
	$desc=$_POST['desc'];
	$image=$_POST['image'];



    $sql="INSERT INTO products(name,category,manufacturer,item,price,description,image) VALUES('$name','$category','$manufacturer','$item','$price','$desc','$image')";
    $qry=mysqli_query($con,$sql) or die("fail to insert product: ".mysqli_query());
	
	if($qry){
		header("location:addproduct.php");
	}else{
		echo "Failed to add Product";
	}
	
	?>

</body>
</html>