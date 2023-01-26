<?php session_start();

           if(!isset($_SESSION['user'])){
              header("location:index.php");
           }
  
 include('config.php');
       

       // $cnslt=$_POST['consult'];
        $id=$_GET['id'];

       $s="UPDATE consultancy_requests SET status=1 WHERE id='".$id."';";
       $sq=mysqli_query($con,$s) or die("failed to update consultancy_requests!");
 
         header("location:view_requests_end.php");
      
     ?>