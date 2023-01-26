<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Requests View</title>
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
      font-size: 23px;
    }
     #sub{
            border:none;
            background-color: rgba(0,0,0,.3);
            padding: 5px;
            padding-right: 40px;
            padding-left: 40px;
            border-radius: 5px;
        }
        button{
        	border:none;
        	background-color: rgba(0,0,0,.3);
        	padding: 8px;
        	border-radius: 3px;
        }
         button:hover{
          background-color: rgba(0,0,0,.6);
        }
         #sub:hover{
          background-color: rgba(0,0,0,.6);
        }
        h2{
        	color: tomato;
        	text-align: center;
        }
        h3,form{
        	text-align: center;
        }
        th{
        	font-size: 16px;
        }

  </style> 
</head>
<body>
  <div id="header">
    <img id="img1" src="img/asmislg1.png" alt="logo" width="22%" height="8%" />

   </div>
  <div class="main-container">
     <?php
            if($_SESSION['roll']!='admin'){   

               header("location:../login.php");
             }else{
  
       include('config.php');
       include('menu.php');     

       
           	    
   
   ?>

  <fieldset id="consult"><legend>REQUESTS REPORT</legend>
<br><br>
  <form action="report.php" method="POST">
  <label><strong>FROM</strong></label>&nbsp	
  <input type="date" name="date_search1">&nbsp&nbsp
  
  <label><strong>TO<strong></label>&nbsp	
  <input type="date" name="date_search2">&nbsp
   
  <input type="submit" name="submit" id="sub" value="SEARCH">
</form>
<table ></table>
 
  <?php
  if (isset($_POST['submit'])) {

  
       $sq="SELECT * FROM consultancy_requests WHERE date_of_request >= '".$_POST['date_search1']."' AND date_of_request <= '".$_POST['date_search2']."'  order by id desc";
       $sqr=mysqli_query($con,$sq) or die("failed to fetch requests!".mysqli_connect_error());
       $nm=mysqli_num_rows($sqr);


      
            echo "<table cellspacing=20 cellpadding=2 align='center'> ";
            echo "<th>S/N</th>";
            echo "<th>NAME OF SERVICE</th>";
            echo "<th>DATE OF REQUEST</th>";
            echo "<th>PERSON REQUESTS</th>";
            echo "<th>SERVICE DATE</th>";
            echo "<th>SERVICE TIME</th>"; 

            $sn=1;      

            if($nm==0) {
                    echo "<h2>No Records in This Range!</h2>";
                              }else{                  

            while($row=mysqli_fetch_assoc($sqr)){
              $id=$row['id'];
              $requester_id=$row['requester_id'];

              $a="SELECT name FROM users WHERE id='".$requester_id."'";
              $aq=mysqli_query($con,$a) or die("failed to fetch name");
              $r=mysqli_fetch_assoc($aq);

              
                
        echo "<tr>";
        echo "<td>".$sn++."</td>";
        //echo "<td>".$row['id']."</td>";
        echo "<td>".$row['service_name']."</td>";
        echo "<td>".$row['date_of_request']."</td>";
        echo "<td>".$r['name']."</td>";
        echo "<td>".$row['service_date']."</td>";
        echo "<td>".$row['service_time']."</td>";
 
        echo "</tr>";
       

       }   
}
              //echo "<br><br>";    
                  echo "<h3><strong>RECORDS SEARCH FROM &nbsp ".$_POST['date_search1']." &nbsp TO &nbsp ".$_POST['date_search2']."</strong></h3> ";       
                 // echo "<br>";
    
       echo "</form>";
        echo "</table>";
        echo "</fieldset>";

        echo "<br>";
        echo "<button onclick='printfc()'>Print this page</button>";
              
 }
}
  
      echo "<tr><td></td></tr>";
      echo "<tr><td></td></tr>";
      ?>
   
<script type="text/javascript">
	function printfc(){
		window.print();
	}
</script>

  
</div>
 
  
<style type="text/css">
   #table{
    position: absolute;
    left: 60%;
    bottom: 5%;
    color: white;
   }
   #label{
    position: absolute;
    left: 3%;
    bottom: 2%;
    color: white;
    font-size: 85%;
   }
   #s{
    color: black;
   }

 </style>

  
</body>
</html>