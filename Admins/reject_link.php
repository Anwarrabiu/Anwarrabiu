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
 
     #comt{
      position: absolute;
      top: 100px;
      left: 15%;
      background-color: rgba(0,0,0,.3);
      padding-left: 10%;
      padding-right: 20%;
      padding-bottom: 10%;
      padding-top: 2%;
      border-radius: 4px;
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
<div id="comt">
 <form method="POST" action="reject_request.php?id=<?php echo $_GET['id']; ?>">

  <table>
    <tr>
      <td><label><h2>What is Your Reason For Rejecting This Particular Request!</h2></label></td>
    </tr>
    <tr>
      <td><textarea name="comment" cols="55" rows="8" onkeyup="this.value=this.value.replace(/[^a-zA-Z0-9/ ]/,'');" maxlength="30" minlength="3" required></textarea></td>
    </tr>
    <tr>
      <td>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="submit" value="Continue Rejecting">
      </td>
    </tr>
  </table>
   

 </form>
</div>

<?php
     }
?>
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