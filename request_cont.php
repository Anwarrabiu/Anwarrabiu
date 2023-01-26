<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Requesting...</title>
   <meta charset="utf-8">
<meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="main.css">
	<link rel="stylesheet" type="text/css" href="style.css">
  <style type="text/css">
     #who{
      text-align: right;
      color: tomato;
    }
    #consult{
      position: absolute;
      top: 10%;
      left: 7%;
      padding: 11%;
      padding-top: 7%;
      padding-right: 42%;
      background-color: rgba(0,0,0,.1);
      border-radius: 8px;
    }
     #sub{
            border:none;
            background-color: rgba(0,0,0,.3);
            padding: 8px;
            padding-right: 40px;
            padding-left: 40px;
            border-radius: 5px;
        }
        input, textarea{
          border:none;
          padding: 6px;
        }
      #pr{
        color: tomato;
        text-align: center;
         }
         .a{
          text-decoration: none;
          color: black;
          font-size: 18px;
          background-color: rgba(0,0,0,.3);
          padding: 5px;
          border-radius: 4px;
          }
          .a:hover{
            background-color: rgba(0,0,0,.5);
          }
           #log{
          padding: 7px;
          padding-left: 46px;
          padding-right: 46px;
          background-color: rgba(0,0,0,.3);
          border-radius: 5px;
          font-weight: bold;

        }
        #log:hover{
          background-color: rgba(0,0,0,.6);
        }
          #pr{
            font-size: 28px;
          }
  </style>
  <script type="text/javascript">

    history.pushState(null,null,location.href);
    window.onpopstate=function(){
      history.go(1);
    };

  </script>
	
</head>
<body>
  <div id="header">
    <img id="img1" src="img/asmislg1.png" alt="logo" width="22%" height="8%" />

   </div>
  <div class="main-container">
     <?php
           
       include('config.php');
       include('menu.php');

        if(isset($_SESSION['user'])){
              
                  

     $id=$_GET['id'];
     $sq="SELECT * FROM consultancy_services WHERE id='".$id."';";
     $qr=mysqli_query($con,$sq);
     $row=mysqli_fetch_assoc($qr);

     $sqo="SELECT * FROM requests_orders WHERE requester_id='".$_SESSION['userid']."';";
     $qro=mysqli_query($con,$sqo);
     $ron=mysqli_num_rows($qro);
     $ro=mysqli_fetch_assoc($qro);

 

if (isset($_POST['submit'])){


  
                  
  $sql="INSERT INTO consultancy_requests(service_id,requester_id,service_name,price,date_of_request,location_address,service_date,service_time,contact_phone) VALUES('".$row['id']."','".$_SESSION['userid']."','".$row['name']."','".$row['price']."',curdate(),'".$_POST['address']."','".$_POST['date']."','".$_POST['time']."','".$_POST['phone']."')";

  $sqr=mysqli_query($con,$sql) or die("failed to insert request");

if($ron==0) {

             $tot=$row['price'] + $ro['total_price'];
             $ro="INSERT INTO requests_orders(requester_id,total_price) VALUES('".$_SESSION['userid']."','".$tot."')";
             mysqli_query($con,$ro) or die("Failed to add to requests orders");

}else{
      
            $tot = $row['price'] + $ro['total_price'];
            $rou="UPDATE requests_orders SET total_price=".$tot." WHERE requester_id=".$_SESSION['userid']."";
            $rouq=mysqli_query($con,$rou) or die("failed to update requests_orders price");

   }

  if ($sqr) {
   //echo "YOUR CONSULTANCY REQUEST WENT SUCCESSFULLY, EXPECT US TO ARRIVE BY THE INFORMATION YOU PROVIDED, THANK YOU! ";
    //header("location:requests_checkout.php");

         $sql="SELECT * FROM consultancy_requests WHERE requester_id=".$_SESSION['userid']." AND status < 10 ";
     $sqlqr=mysqli_query($con,$sql) or die("failed to fetch: ".mysqli_error());
     $num=mysqli_num_rows($sqlqr);
     if($num!=0){

                     echo "<h1>Consultancy Requests Submitted By ".$_SESSION['user']."</h1>";
            echo "<table cellspacing=33 cellpadding=2 align='center'>";
            echo "<th>SERVICE NAME</th>";
            echo "<th>DATE REQUESTED</th>";
            echo "<th>LOCATION ADDRESS</th>";
            echo "<th>SERVICE DATE</th>";
            echo "<th>SERVICE TIME</th>";
            echo "<th>CONTACT PHONE</th>";
            echo "<th>CONSULTANT ASSIGNED</th>";
            echo "<th>CONSULT PRICE</th>";
            echo "<th>PAYMENT</th>";
             
             $total=0;

     while($row=mysqli_fetch_assoc($sqlqr)){
       $total=$row['price'];
    
       echo "<tr>";
       echo "<td><strong>".$row['service_name']."</strong></td>";
       echo "<td>".$row['date_of_request']."</td>";
       echo "<td>".$row['location_address']."</td>";
       echo "<td>".$row['service_date']."</td>";
       echo "<td>".$row['service_time']."</td>";
       echo "<td>".$row['contact_phone']."</td>";
       echo "<td>";  

       if ($row['consultant_assigned']=='') {

        echo "<div id='pend'>Pending</div>";

       }else{

        echo $row['consultant_assigned'];
       }
       echo "<td>$ ".$row['price']."</td>";

       if ($row['status']==2) {
        echo "<td>PAID</td>";

       }elseif ($row['status']==1) {
        echo "<td>TO PAY AFTER SERVICE</td>";
       }else{
           echo "<td>NOT PAID</td>";
       }

       "</td>";
      // echo "<td><a class='a' href='remove_request.php?id=".$row['id']."&fr=1'>CANCEL REQUEST</td>";
        echo "</tr>";

}
 

    $sqo="SELECT * FROM requests_orders WHERE requester_id='".$_SESSION['userid']."';";
     $qro=mysqli_query($con,$sqo);
     $ron=mysqli_num_rows($qro);
     $ro=mysqli_fetch_assoc($qro);

  echo "&nbsp&nbsp<strong id='pr'>Total Price : $ " . $ro['total_price']."</strong>";
   echo "&nbsp&nbsp&nbsp<a class='a' href='request_checkout.php'>CHECKOUT</a>";
}else{
  echo "<h2>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspYou Didn't Request Any Consultancy Yet!</h2>";
}
  }
 

 }else{



?>

<section id="consult">
    <table>
      <form action="request_cont.php?id=<?php echo $row['id']; ?>" method="POST">
        <tr>
          <td><strong><h1><?php echo $row['name']; ?></h1></strong></td>
        </tr>
        <tr>
          <td><label>Location of Service Address</label></td>
          <td><textarea  name="address" rows="6" cols="35" placeholder="Please state the location you need the service"  pattern="[A-Za-z0-9/ ]+$" maxlength="55" minlength="3" required></textarea></td>
        </tr>
        <tr>
          <td><label>Date Require the Service</label></td>
          <td><input type="date" name="date" size="40" required></td>
        </tr>
        <tr>
          <td><label>Time Require the Service</label></td>
          <td><input type="time" name="time" size="40" required></td>
        </tr>
        <tr>
          <td><label>Contact phone</label></td>
          <td><input type="text" name="phone" size="40"  pattern="[0-9+ ]+$" title="it must be valid phone number" maxlength="14" minlength="6" required></td>
        </tr>
        <tr><td></td>
          <td><input type="submit" id="log" name="submit" value="SUBMIT" id="sub"></td>
        </tr>
      </form>
    </table>
</section>
<?php


}
 }else{ 
         echo "<div id='pr'>";
        echo "<h1>You Must Login to be Able to Request for Consultancy or If You Dont Have an Account Click <a href='register.php'>HERE</a> to Open one!</h1></div>";
 }

?>
   
 <style type="text/css">
   #table{
    position: absolute;
    left: 60%;
    bottom: 1%;
    color: white;
   }
   #label{
    position: absolute;
    left: 3%;
    bottom: 1%;
    color: white;
    font-size: 85%;
   }
    #s{
    color: black;
   }
 </style>

 <footer>
   
  
      <table id="table" align="center" cellspacing="">
        <tr class="tr"><td><img src="place.png" width="2%" height="2%">&nbsp&nbsp No12 Ahmadu Bello way Nassarawa, Kano State, Nigeria</td></tr>
         <tr class="tr"><td><img src="phone.png" width="2%" height="2%">&nbsp&nbsp +256 755923076</td></tr>
          <tr class="tr"><td><img src="contact.png" width="2%" height="2%">&nbsp&nbsp asmis@yahoo.com</td></tr>
       </table>
       <label id="label"><strong id="s">ABOUT US</strong><br><br>ASMIS system is basically a consultancy platform for farmers in need for particular consultation<br> in their farming activities, and the other is agricultural products sects for farmers that may buy<br> their desired Products from this platform. Using this system the agency (KNARDA) officials will<br> digitally manage their certain activities efficiently. </label>
    </footer>
</div>
 
</body>
</html>