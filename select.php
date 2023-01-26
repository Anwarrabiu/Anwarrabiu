<?php session_start()?>
<!DOCTYPE html>
<html>
<body>


     <?php
     include('config.php');

                     $q="SELECT * FROM consultants WHERE task_assigned=0";
                     $qr=mysqli_query($con,$q) or die("Failed to fetch consultancy_services");
                     $qn=mysqli_num_rows($qr);
                       while($ro = mysqli_fetch_assoc($qr)){
             
             $cars = array($ro['consultant_name']);

                    echo "<option value='".echo $cars."'>".echo $cars."</option>";
      }
                ?> 
<?php
 $arrlength = count($cars);

for($x = 0; $x <  $arrlength; $x++) {
     echo $cars[$x];
     echo "<br>";
}
?>

</body>
</html>