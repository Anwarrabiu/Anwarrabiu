
 
<?php
session_start();
  
           if(!isset($_SESSION['user'])){
              header("location:index.php");
           }
  
       include('config.php');

      
          

      $sq="UPDATE consultancy_requests SET status=4, rejected_comment='".$_POST['comment']."' WHERE id='".$_GET['id']."';";
      $sqr=mysqli_query($con,$sq) or die("failed to reject request!");
      if ($sqr) {
      	header("location:view_requests.php");
      }
?>

</body>
</html>