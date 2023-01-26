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
  <img id="img1" src="img/logo1.png" alt="logo" width="8%" />
  <img id="img2" src="img/logo2.png" alt="logo" width="8%" />
   </div>
  <div class="main-container">
     <?php
           if($_SESSION['roll']!='admin'){   

               header("location:intrusion.php");
             }else{
       include('config.php');
       include('menu.php');


       if(isset($_POST['submit1'])){
        $sq="INSERT INTO consultancy_services(name,description) VALUES('".$_POST['name']."','".$_POST['desc']."')";
        $sqr=mysqli_query($con,$sq) or die("failed to add consultancy_services!");

         header("location: update_consultancy.php"); 
       }


       if(isset($_POST['submit2'])){
        $sq1="INSERT INTO consultants(consultant_name,identifier,password,phone,e_mail,address,profession) VALUES('".$_POST['c_name']."','".$_POST['identifier']."','".$_POST['password']."','".$_POST['phone']."','".$_POST['email']."','".$_POST['address']."','".$_POST['profession']."')";
        $sqr1=mysqli_query($con,$sq1) or die("failed to add consultants!");

         header("location: update_consultancy.php"); 
       }

      
       ?>
    <fieldset><legend>SELECT</legend>
         <table>
           <tr><td><input type="radio" name="sel" value="field1" checked onclick="f1()">Services/Consultancies Update</td>
           <td><input type="radio" name="sel" value="field2" onclick="f2()">Addition of Consultants</td></tr>
         </table>
       </fieldset>
      <fieldset id="field1"><legend><strong>Services/Consultancies Update</strong></legend>
       <table>
         <form action="update_consultancy.php" method="POST" class="frm">
            <tr>
             <td><label>Service name</label></td>
           </tr>
           <tr>
             <td><input type="text" name="name" size="41"></td>
           </tr>
           <tr>
             <td><label>Description</label></td>
           </tr>
           <tr>
             <td><textarea name="desc" cols="35" rows="7"></textarea></td>
           </tr>
           <tr>
             <td><input type="submit" name="submit1" class="act" value="ADD Service"></td>
           </tr>
         </form>
       </table>
     </fieldset>
  
    <fieldset id="field2"  ><legend><strong> Addition of Consultants</strong></legend>
       <table>
         <form action="update_consultancy.php" method="POST" class="frm">
           <tr>
             <td><label>Consultant name</label></td>
           </tr>
            <tr>
             <td><input type="text" name="c_name" size="41"></td>
           </tr>
            <tr>
             <td><label>Identifier</label></td>
           </tr>
            <tr>
             <td><input type="text" name="identifier" size="41"></td>
           </tr>
            <tr>
             <td><label>Password</label></td>
           </tr>
            <tr>
             <td><input type="password" name="password" size="41"></td>
           </tr>
           <tr>
             <td><label>Phone No</label></td>
           </tr>
            <tr>
             <td><input type="text" name="phone" size="41"></td>
           </tr>
           <tr>
             <td><label>E-mail</label></td>
           </tr>
            <tr>
             <td><input type="text" name="email" size="41"></td>
           </tr>
           <tr>
             <td><label>Address</label></td>
           </tr>
            <tr>
             <td><textarea name="address" cols="35" rows="7" size="41"></textarea></td>
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
 <footer>
      <p class="text-center">this is a footer</p>
    </footer>
</div>
 
</body>
</html>