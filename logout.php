<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
          unset($_SESSION['user']);
          unset($_SESSION['loggedin']);
          header("location:login.php");

	?>

</body>
</html>