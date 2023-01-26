<?php

 include("config.php");

	 
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$address=$_POST['address'];	
	$username=$_POST['uname'];
	$password=$_POST['pass'];
	$cpassword=$_POST['cpass'];

         $ssql="INSERT INTO users(name,email,phone,address,roll,username,password,conf_password) VALUES('$name','$email','$phone','$address','user','$username','$password','$cpassword')";
          $qqry=mysqli_query($con,$ssql) or die("fail to register: ".mysqli_query());

	header("location:register.php?sc='dne'");

	?>