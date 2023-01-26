<!DOCTYPE html>
<html>
<head>
	<title>Admin Register</title>
       <meta charset="utf-8">
<meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

      <link rel="stylesheet" href="main.css">
      <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
      <div id="header">
  <img id="img1" src="img/logo1.png" alt="logo" width="8%" />
  <img id="img2" src="img/logo2.png" alt="logo" width="8%" />
   </div>
      <div class="main-container">
          <?php

            include('menu.php');
             include("config.php");
if(isset($_POST['sub'])){
   
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $address=$_POST['address']; 
  $username=$_POST['uname'];
  $password=$_POST['pass'];
  $cpassword=$_POST['cpass'];

         $ssql="INSERT INTO users(name,email,phone,address,roll,username,password,conf_password) VALUES('$name','$email','$phone','$address','admin','$username','$password','$cpassword')";
          $qqry=mysqli_query($con,$ssql) or die("fail to register: ".mysqli_query());

  header("location:index.php");
}
            ?>
       	<table>
       		<h1>REGISTER</h1>
       		<form method="POST" action="admin_register.php">
       		<tr>
            <td><label>Name :</label></td> 
       		<td><input type="text" name="name" size="35"></td></tr>
       		<tr><td><label>E-Mail :</label></td> 
       		<td><input type="text" name="email" size="35"></td></tr>
       		<tr><td><label>Phone No :</label></td> 
       		<td><input type="text" name="phone" size="35"></td></tr>
            <tr><td><label>Address :</label></td> 
       		<td><input type="text" name="address" size="35"></td></tr>
       		<tr><td><label>Username :</label></td> 
       		<td><input type="text" name="uname" size="35"></td></tr>
       		<tr><td><label>Password :</label></td> 
       		<td><input type="text" name="pass" size="35"></td></tr>
       		<tr><td><label>Confirm Password :</label></td> 
       		<td><input type="text" name="cpass" size="35"></td></tr>
       		<td></td>
       		<td><input type="submit" name="sub" value="Register"></td></tr>
        	
             </form>
       </table>      
 <footer>
      <p class="text-center">this is a footer</p>
    </footer>
</div>
 
</body>
</html>