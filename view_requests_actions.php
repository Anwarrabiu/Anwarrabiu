<?php
session_start();

              if(!isset($_SESSION['user'])){
              header("location:index.php");
           }  
       include('config.php');

       $s="INSERT INTO consultancy_requests(status,consultant_assigned) VALUES('1','".$_POST['consultant']."')";
       $sr=mysqli_query($con,$s) or die("failed to update requests");
       



?>