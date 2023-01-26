<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
       <meta charset="utf-8">
<meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

      <link rel="stylesheet" href="main.css">
      <link rel="stylesheet" type="text/css" href="style.css">

      <style type="text/css">
        #container{
          position: absolute;
          top: 6%;
          left: 15%;
          background-color: rgba(0,0,0,.1);
          padding: 70px;
          padding-right: 600px;
          padding-left: 200px;
          padding-bottom: 0;
          border-radius: 7px;
        }
        #sub{
            border:none;
            background-color: rgba(0,0,0,.3);
            padding: 8px;
            padding-right: 40px;
            padding-left: 40px;
            border-radius: 5px;
            margin-left: 7px;
        }
        input{
          border:none;
          padding: 6px;
        }
        a{
          text-decoration: none;
          color: black; 
        }
        #prompt{
          position: absolute;
          top: 15%;
          left: 12%;
          color: tomato;

        }
        #log{
          padding: 6px;
          padding-left: 29px;
          padding-right: 29px;
          background-color: rgba(0,0,0,.3);
          border-radius: 5px;
        }
        p{
        	text-align: center;
        }
        .str{
          color: red;
        }
      </style>
</head>
<body>
      <div id="header">
    <img id="img1" src="img/asmislg1.png" alt="logo" width="22%" height="8%" />

   </div>
      <div class="main-container">
          <?php
            include('menu.php');
            ?>
               <?php
              if (isset($_GET['sc'])) {
             echo "<div id='prompt'>";
             echo "<h1>Successfully Registered!</h1>";
             echo "<h2>Click <a href='login.php'>HERE</a> to Login.</h2>";
             echo "</div>";

              }else{


                ?>
            <div id="container">
                       

       	<table cellpadding="10" cellspacing="10">
       		<h1>REGISTER</h1>
       		<form method="POST" action="register_script.php">
       		<tr>
          <td><label><label class="str">*</label>Name </label></td> 
       		<td><input type="text" name="name" size="35" placeholder="Enter your full name"  onkeyup="this.value=this.value.replace(/[^a-zA-Z ]/,'');" maxlength="35" minlength="3" required="required"></td></tr>
       		<tr><td><label><label class="str">*</label>E-Mail </label></td> 
       		<td><input type="text" name="email" size="35" placeholder="Enter your valid Email " pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"  maxlength="30" minlength="11"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required></td></tr>
       		<tr><td><label><label class="str">*</label>Phone No </label></td> 
       		<td><input type="text" name="phone" size="35" placeholder="Enter your valid Phone" onkeyup="this.value=this.value.replace(/[^0-9+ ]/,'');" maxlength="14" minlength="6"  pattern="[0-9 ]+$" title="Only letters are allowed." required></td></tr>
          <tr><td><label><label class="str">*</label>Address </label></td> 
       		<td><input type="text" name="address" size="35" placeholder="Enter your Address" onkeyup="this.value=this.value.replace(/[^a-zA-Z0-9/ ]/,'');" maxlength="55" minlength="3"  required></td></tr>
       		<tr><td><label><label class="str">*</label>Username </label></td> 
       		<td><input type="text" name="uname" size="35" placeholder="Enter Username of choice" onkeyup="this.value=this.value.replace(/[^a-zA-Z0-9 ]/,'');" maxlength="15" minlength="3" required></td></tr>
       		<tr><td><label><label class="str">*</label>Password </label></td> 
       		<td><input type="password" name="pass" size="35" placeholder="Enter Password of choice" onkeyup="this.value=this.value.replace(/[^a-zA-Z0-9 ]/,'');" maxlength="10" minlength="4"   required></td></tr>
       		<tr><td><label><label class="str">*</label>Confirm Password </label></td> 
       		<td><input type="password" name="cpass" size="35" placeholder="Re enter Password" onkeyup="this.value=this.value.replace(/[^a-zA-Z0-9 ]/,'');" maxlength="10" minlength="4" required></td></tr>
       		<td></td>
       		<td><input type="submit" name="sub" id="sub" value="Register"><input type="reset" name="reset" id="sub" value="Reset"></td><tr><td></td>
           <td >If Registered <a id="log" href="login.php">Login</a></td></tr>
        	
             </form>
       </table> 
       </div>  
       <?php } ?>   
<footer>
  <style type="text/css">
    #table{
      position: absolute;
      top: 7%;
      left: 10%;
      font-size: 100%;
    }
    .tr{
      position: relative;
      left:80%;
    }
    #label{
      position: absolute;
      top: 9%;
      left: 3%;
      font-size: 85%;
      
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