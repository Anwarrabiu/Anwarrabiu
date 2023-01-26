<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Consultancies</title>
   <meta charset="utf-8">
<meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="main.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	
  <script type="text/javascript">
    function f1(){
     document.getElementById('field1').style.display='block';
     document.getElementById('field2').style.display='none';
 
    }
    function f2(){
      document.getElementById('field1').style.display='none';
      document.getElementById('field2').style.display='block';
 
    }
  </script>
  <style type="text/css">
    frm{
      position: absolute;
      top: 70px;
      left: 70px;
    }
    fieldset{
      display: inline-block;
      width: 90%;  
      max-width: 90%;    
      position: relative;
      top: 20px;
      left: 5%;
      right: 5%;
      border-bottom-width: 70px;
      background-color: rgba(0,0,0,.2);
    }
   legend{
      font-weight: bolder;
    }
     .act{
          border:none;
          background-color: rgba(0,0,0,.3);
          padding: 8px;
          border-radius: 3px;
        }
        .act:hover{
          background-color: rgba(0,0,0,.6);
        }
         input,select,textarea{
          border:none;
          padding: 6px;
          border-radius: 3px;}

  </style>

</head>
<body onload="f1()">
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


       if(isset($_POST['submit1'])){
        $sq="INSERT INTO consultancy_services(name,description) VALUES('".$_POST['name']."','".$_POST['desc']."')";
        $sqr=mysqli_query($con,$sq) or die("failed to add consultancy_services!");

         header("location: consultancy_addition.php"); 
       }


       if(isset($_POST['submit2'])){
        $sq1="INSERT INTO consultants(consultant_name,identifier,password,phone,e_mail,address,profession) VALUES('".$_POST['c_name']."','".$_POST['identifier']."','".$_POST['password']."','".$_POST['phone']."','".$_POST['email']."','".$_POST['address']."','".$_POST['profession']."')";
        $sqr1=mysqli_query($con,$sq1) or die("failed to add consultants!");

         header("location: consultancy_addition.php"); 
       }

      
       ?>
    <fieldset><legend>SELECT</legend>
         <table align="center">
           <tr><td><input type="radio" name="sel" value="field1" checked onclick="f1()">Services/Consultancies Update</td>
           <td><input type="radio" name="sel" value="field2" onclick="f2()">Addition of Consultants</td></tr>
         </table>
       </fieldset>
      <fieldset id="field1"><legend><strong>SERVICES/CONSULTANCIES Update</strong></legend>
       <table align="center" cellpadding="9">
         <form action="consultancy_addition.php" method="POST" class="frm">
            <tr>
             <td><label>Service name</label></td>
           </tr>
           <tr>
             <td><input type="text" name="name" pattern="[A-Za-z ]+$" size="41" required></td>
           </tr>
           <tr>
             <td><label>Description</label></td>
           </tr>
           <tr>
             <td><textarea name="desc" cols="35" rows="7" pattern="[A-Za-z0-9/ ]+$" required></textarea></td>
           </tr>
           <tr>
             <td><input type="submit" name="submit1" class="act" value="ADD Service"></td>
           </tr>
         </form>
       </table>
     </fieldset>
  
    <fieldset id="field2"  ><legend><strong> ADDITION OF CONSULTANTS</strong></legend>
       <table align="center" cellpadding="5">
         <form action="consultancy_addition.php" method="POST" class="frm">
           <tr>
             <td><label>Consultant name</label></td>
           </tr>
            <tr>
             <td><input type="text" name="c_name" size="41"  pattern="[A-Za-z ]+$"  required></td>
           </tr>
            <tr>
             <td><label>Identifier</label></td>
           </tr>
            <tr>
             <td><input type="text" name="identifier" size="41" pattern="[A-Za-z0-9 ]+$" required></td>
           </tr>
            <tr>
             <td><label>Password</label></td>
           </tr>
            <tr>
             <td><input type="password" name="password" size="41" pattern="[A-Za-z0-9 ]+$" required></td>
           </tr>
           <tr>
             <td><label>Phone No</label></td>
           </tr>
            <tr>
             <td><input type="text" name="phone" size="41" pattern="[0-9+ ]+$" required></td>
           </tr>
           <tr>
             <td><label>E-mail</label></td>
           </tr>
            <tr>
             <td><input type="text" name="email" size="41" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required></td>
           </tr>
           <tr>
             <td><label>Address</label></td>
           </tr>
            <tr>
             <td><textarea name="address" cols="35" rows="7" size="41" pattern="[A-Za-z0-9/ ]+$" required></textarea></td>
           </tr>
           <tr>
             <td><label>Profession</label></td>
           </tr>
            <tr>
             <td><select name="profession">
                  <option>select profession</option>
                <?php
                   $q="SELECT name FROM consultancy_services";
                   $qr=mysqli_query($con,$q) or die("Failed to fetch consultancy_services");
                   $qn=mysqli_num_rows($qr);
                   while($row = mysqli_fetch_assoc($qr)){
             
                    echo "<option value='".$row['name']."'>".$row['name']."</option>";
      }
                ?>


             </select></td>

           </tr>
           <tr><td></td></tr>
           <tr><td></td></tr>
           <tr><td></td></tr>
           <tr><td><input type="submit" name="submit2" class="act" value="ADD Consultant"></td></tr>
         
         </form>
       </table>
        </fieldset>

<?php } ?>
<br><br><br><br><br>
  
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