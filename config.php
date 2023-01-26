<?php
$host='localhost';
$user='root';
$pass='';
$db='agrdb';

      $con=mysqli_connect($host,$user,$pass) or die("fail to connect".mysqli_error());
      mysqli_select_db($con,$db) or die("fail to select db".mysqli_error());

?>
