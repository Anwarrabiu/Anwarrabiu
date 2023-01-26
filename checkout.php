<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Checkout</title>
	 <meta charset="utf-8">
<meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="style.css">
 <script type="text/javascript">
    function f1(){
     document.getElementById('field1').style.display='block';
     document.getElementById('field2').style.display='none';
 
    }
    function f2(){
      document.getElementById('field1').style.display='none';
      document.getElementById('field2').style.display='block';
 
    }
    function prmt(){
      confirm("Please Provide the Exact Amount to Pay for the Products on Delivery, Thanks For Doing Business With Us.");
    }
  </script>

<style type="text/css">
	h2,h3{
		text-align: center;
	}
	#proceed{
		text-decoration: none;
		background-color: rgba(0,0,0,.3);
		color: black;
		padding: 3px;
		padding-left: 5px;
		padding-right: 5px;
		border-radius: 2px;
	}
	#proceed:hover{
		background-color: rgba(0,0,0,.5);
	}
</style>
</head>
<body onload="f1()">
	<div id="header">
    <img id="img1" src="img/asmislg1.png" alt="logo" width="22%" height="8%" />

   </div>
	<div class="main-container">
	 <?php
           if (!isset($_SESSION['user'])) {
              header("location:index.php");
           }
         include('menu.php');
          include('config.php');

          if (isset($_GET['py'])) {
          	 echo "<h2>Payment Successful, Thanks for Doing Business With Us.<h2>";
          }else{

          $t="SELECT status FROM orders WHERE id='".$_SESSION['ordernum']."'";
          $tt=mysqli_query($con,$t) or die("failed to fetch status");
          $r=mysqli_fetch_assoc($tt);
          $tnm=mysqli_num_rows($tt);
          
          if ( $r['status']==3) {
              echo "<h2>You Already Paid for the Products!</h2>";
          }else{

       if(isset($_POST['submit1'])){

       	$cardno=$_POST['cardno'];
       	$securityno=$_POST['securityno'];
       	$state=$_POST['state'];
       	$town=$_POST['town'];
       	$district=$_POST['district'];
       	$roadname=$_POST['roadname'];
       	$phone=$_POST['phone'];
       	
       	$ordernum=$_SESSION['ordernum'];

        $dsql="UPDATE orders SET  card_number='$cardno',security_number='$securityno',del_state='$state',del_town='$town',del_district='$district',del_road_and_building='$roadname',del_contact_phone='$phone',status=3 WHERE id='$ordernum'";
        $dsqlqr=mysqli_query($con,$dsql) or die("<br>Failed to insert delivery address in checkout");


               //to indicate whether or not this is paid.
               $p="UPDATE ordered_items SET status = 1 WHERE order_id=".$_SESSION['ordernum']."";
               mysqli_query($con,$p) or die ("Failed to set payment by debit card status");


         if ($dsqlqr) {
                ("location:checkout.php");

                echo "<h2>Payment Successful, Thanks for Doing Business With Us.<h2>";
         }

       }else{

      echo '
      <br><br>
	  <fieldset><legend>SELECT Payment Type</legend>
         <table>
         <tr><td></td></tr>
            
           <tr><td><input type="radio" name="sel" value="field1" checked onclick="f1()">Pay With Debit Card</td></tr>
           <tr><td><input type="radio" name="sel" value="field2" onclick="f2()">Pay on Delivery</td></tr>
         </table>
       </fieldset>
      <fieldset id="field1"><legend><strong>Pay With Debit Card</strong></legend><br>

      ';
        // if ($r['status']!=3) {
        // 	echo '<a href="checkout.php?py=pyd" id="proceed">Proceed With Previous Payment Details</a><br><br>';
        // }

    echo '
             
       <table>
         <form action="checkout.php" method="POST" class="frm">
            <tr>
             <td><label>Debit Card Numbers</label></td>
           </tr>
           <tr>
             <td><input type="text" name="cardno" size="41" pattern="[0-9 ]+$" maxlength="15" minlength="15" required></td>
           </tr>
            <tr>
             <td><label>Security Number</label></td>
           </tr>
           <tr>
             <td><input type="text" name="securityno" size="41" pattern="[0-9 ]+$" maxlength="6" minlength="4" required></td>
           </tr>
            <tr>
             <td><label>State</label></td>
           </tr>
           <tr>
             <td><input type="text" name="state" pattern="[A-Za-z ]+$" size="41" maxlength="15" required></td>
           </tr>
            <tr>
             <td><label>Town</label></td>
           </tr>
           <tr>
             <td><input type="text" name="town" size="41" pattern="[A-Za-z ]+$" maxlength="15" required></td>
           </tr>
            <tr>
             <td><label>District</label></td>
           </tr>
           <tr>
             <td><input type="text" name="district" size="41" pattern="[A-Za-z0-9/ ]+$" maxlength="19" required></td>
           </tr>
            <tr>
             <td><label>Road Name & Building No.</label></td>
           </tr>
           <tr>
             <td><input type="text" name="roadname" size="41" pattern="[A-Za-z0-9/ ]+$" maxlength="30" required></td>
           </tr>
            <tr>
             <td><label>Phone Contact</label></td>
           </tr>
           <tr>
             <td><input type="text" name="phone" size="41" pattern="[0-9+ ]+$" maxlength="15" minlength="6" required></td>
           </tr>             
           <tr>
             <td><input type="submit" name="submit1" class="act" value="Pay" ></td>
           </tr>
         </form>
       </table>
     </fieldset>


 <fieldset id="field2"><legend><strong>Payment On Delivery</strong></legend>
      <form action="" method="POST">
         <h3>Please Provide the Exact Amount to Pay for the Products on Delivery, Thanks For Doing Business With Us.</h3> 
         <input type="submit" name="s" value="Pay on Delivery" onclick="prmt()">
         </form>
         ';

if(isset($_POST['s'])) {
 
    // $z="UPDATE orders SET status=2 WHERE id='".$_SESSION['ordernum']."'  AND status < 3";
    // $zz=mysqli_query($con,$z) or die("Failed to update pay on delivery");	

       //to indicate whether or not this is paid.
               $p="UPDATE ordered_items SET status = 2 WHERE order_id=".$_SESSION['ordernum']." AND status != 1 ";
               $pp=mysqli_query($con,$p) or die ("Failed to set payment on delivery status");

               echo "<script type='text/javascript'>alert('                                                                                                               Agreed to Pay After Service                                                                                                                                        ');</script>";
 
              
}

         echo '
        
     </fieldset>
  


     ';
         }
       }
    }
   
	?>

 <footer>
  <style type="text/css">
    #table{
      position: absolute;
      top: 7%;
      left: 10%;
      font-size: 90%;
    }
    .tr{
      position: relative;
      left:80%;
    }
    #label{
      position: absolute;
      top: 4%;
      left: 3%;
      font-size: 70%;
      
    }
    #s{
      font-size: 150%;
      color: black;
      font-weight: bolder;

    }
  </style>
      <table id="table" cellspacing="">
        <tr class="tr"><td><img src="place.png" width="2%" height="2%">&nbsp&nbsp No12 Ahmadu Bello way Nassarawa, Kano State, Nigeria</td></tr>
         <tr class="tr"><td><img src="phone.png" width="2%" height="2%">&nbsp&nbsp +256 755923076</td></tr>
          <tr class="tr"><td><img src="contact.png" width="2%" height="2%">&nbsp&nbsp asmis@yahoo.com</td></tr>
       </table>
       <label id="label"><strong id="s">ABOUT US</strong><br><br>ASMIS system is basically a consultancy platform for farmers in need for particular consultation<br> in their farming activities, and the other is agricultural products sects for farmers that may buy<br> their desired Products from this platform. Using this system the agency (KNARDA) officials will<br> digitally manage their certain activities efficiently. </label>
    </footer>
</div>
</body>
</html>