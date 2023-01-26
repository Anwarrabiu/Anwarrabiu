<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>User Requests</title>
   <meta charset="utf-8">
<meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="main.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	 <style type="text/css">
   
    fieldset{
      display: inline-block;
      width: 90%;  
      max-width: 90%;    
      position: relative;
      top: 50px;
      left: 5%;
      right: 5%;
      border-bottom-width: 70px;
    }
   legend{
      font-weight: bolder;
    }
    #who{
      text-align: right;
      color: tomato;
    }
     #act{
          border:none;
          background-color: rgba(0,0,0,.3);
          padding: 8px;
          padding-right: 25px;
          padding-left: 25px;
          border-radius: 3px;

        }
         #act:hover{
          background-color: rgba(0,0,0,.6);
        }
        #pend{
          color: red;
        }
      #p{
        color: tomato;
         text-align: center;
         }
         h1{
          text-align: center;
         }
        #a{
          text-decoration: none;
          color: black;
          font-size: 18px;
          background-color: rgba(0,0,0,.3);
          padding: 5px;
          border-radius: 4px;
          }
          #a:hover{
            background-color: rgba(0,0,0,.5);
          }
          #pr{
            font-size: 28px;
             color: tomato;
            text-align: center;
          }
        
  </style> 
</head>
<body>
  <div id="header">
    <img id="img1" src="img/asmislg1.png" alt="logo" width="22%" height="8%" />

   </div>
  <div class="main-container">
     <?php
           
  
       include('config.php');
       include('menu.php');

      echo ' <div id="who">';

      if(isset($_SESSION['user'])){
               echo "LOGGED IN AS ".$_SESSION['user']." </div>";
           }else{
            echo "LOGGED IN AS VISITOR </div>";
           }

         
       ?>

<section id="consult">
 
<?php
      if(!isset($_SESSION['user'])){
        
         echo "<div id='p'><h1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspYou Must Login to be Able to Request and view What Requested or If You Dont Have an Account Click <a href='register.php'>HERE</a> to Open one!</h1></div>";

      }else{
       
     $sql="SELECT * FROM consultancy_requests WHERE requester_id=".$_SESSION['userid']." AND status <= 12 ";
     $sqlqr=mysqli_query($con,$sql) or die("failed to fetch: ".mysqli_error());
     $num=mysqli_num_rows($sqlqr);
     if($num!=0){
                     echo "<h1>Consultancy Requests Submitted By ".$_SESSION['user']."</h1>";
     echo "<table cellspacing=33 cellpadding=2 align='centre'>";
            echo "<th>SERVICE NAME</th>";
            echo "<th>DATE REQUESTED</th>";
            echo "<th>LOCATION ADDRESS</th>";
            echo "<th>SERVICE DATE</th>";
            echo "<th>SERVICE TIME</th>";
            echo "<th>CONTACT PHONE</th>";
            echo "<th>CONSULTANT ASSIGNED</th>";
             echo "<th>REASON FOR REJECTION(if any)</th>";
            echo "<th>CONSULT PRICE</th>";
            echo "<th>PAYMENT</th>";
            echo "<th>ACTION</th>";

            $total=0;

     while($row=mysqli_fetch_assoc($sqlqr)){
    
       $total+=$row['price'];

       echo "<tr>";
       echo "<td><strong>".$row['service_name']."</strong></td>";
       echo "<td>".$row['date_of_request']."</td>";
       echo "<td>".$row['location_address']."</td>";
       echo "<td>".$row['service_date']."</td>";
       echo "<td>".$row['service_time']."</td>";
       echo "<td>".$row['contact_phone']."</td>";
       echo "<td>";  

       if ($row['status']==4) {

          echo "<div id='pend'>Rejected</div>";
       }
       elseif ($row['consultant_assigned']=='') {

        echo "<div id='pend'>Pending</div>";

       }else{

        echo $row['consultant_assigned'];
       }
       echo "<td>".$row['rejected_comment']."</td>";

        echo "<td>$ ".$row['price']."</td>";

       if ($row['status']==2) {
        echo "<td>PAID</td>";

       }elseif ($row['status']==1) {
        echo "<td>TO PAY AFTER SERVICE</td>";
       }else{
           echo "<td>NOT PAID</td>";
       }

       "</td>";
       echo "<td><a href='remove_request.php?id=".$row['id']."&si=".$row['service_id']."'>REMOVE REQUEST</td>";
        echo "</tr>";

}

     $sqo="SELECT * FROM requests_orders WHERE requester_id='".$_SESSION['userid']."';";
     $qro=mysqli_query($con,$sqo);
     $ron=mysqli_num_rows($qro);
     $ro=mysqli_fetch_assoc($qro);

 echo "&nbsp&nbsp<strong id='pr'>Total Price : $ " . $ro['total_price']."</strong>";
  echo "&nbsp&nbsp&nbsp<a id='a' href='request_checkout.php'>CHECKOUT</a><br>";

}else{
  echo "<h2>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspYou Didn't Request Any Consultancy Yet!</h2>";
}
}
?>

</section>
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