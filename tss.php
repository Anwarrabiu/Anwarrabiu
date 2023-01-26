<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>products</title>
 <style type="text/css">
   #ret{
    float: right;
     border: 1px solid yellow;
   }

 </style>	
</head>
<body>
     <?php
           if(!isset($_SESSION['user'])){
              header("location:index.php");
           }
    ?>
	<header><img src="img/ruby on rails.jpg" width="100%" height="100" margin="0" padding="0"></header>

	<?php
       include('config.php');
       ?>
<nav>
    <ul>
    <li><a href="index.php" class="active">Home</a></li>
   
</ul>
</nav>

  
<a href="logout.php">logout</a>

<section id="p1">
<?php
       echo "Welcome ".$_SESSION['user']."<br>";
       echo "logged in = ".$_SESSION['loggedin'];

     $sql="SELECT * FROM products WHERE item='".$_GET['it']."'";
     $sqlqr=mysqli_query($con,$sql) or die("failed to fetch: ".mysqli_error());
     $num=mysqli_num_rows($sqlqr);
     if($num!=0){
     
    // echo "<table cellspacing=33 cellpadding=2>";
     $count=0;
     while($row=mysqli_fetch_assoc($sqlqr)){
 
                

    echo "<div id='ret'>";
    echo "<img src='./img/".$row['image']."' width=230 height=300>";
    echo "<h2>".$row['name']."</h2>";
    echo "<p>$ ".$row['price']."</p>";
    echo "<p>".$row['description']."</p>";
    echo "<p><a href='addtocart.php?id=".$row['id']."'>BUY</a></p></td>";

    

}
   echo "</div>";
   
  //  echo "</table>";
}else{

    echo "<br><br><br><br><br><br><br><br><br><br><br><br><h1>......................................".$_GET['it']." Items Not Available.................................</h1><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";

}

?>
</section>

<footer><img src="img/angular.jpg" width="100%" height="200"></footer>
</body>
</html>
</body>
</html>