<?php
session_start();
  
           if(!isset($_SESSION['user'])){
              header("location:index.php");
           }
  
       include('config.php');


      $sq="UPDATE consultancy_requests SET status='10' WHERE id='".$_GET['id']."';";
      $sqr=mysqli_query($con,$sq) or die("failed to delete request!");
      if ($sqr) {
      	header("location:view_requests.php");
      }
?>