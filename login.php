 <?php 
     session_start();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Log in</title>
   <meta charset="utf-8">
<meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="main.css">
<style type="text/css">
  #login{
          position: absolute;
          top: 10%;
          left: 15%;
          background-color: rgba(0,0,0,.1);
          padding: 70px;
          padding-right: 600px;
          padding-left: 200px;
          padding-bottom: 122px;
          border-radius: 7px;
        }
         input{
          border:none;
          padding: 6px;
          border-radius: 3px;
        }
        a{
          text-decoration: none;
          color: black; 
        }
         #log{
          padding: 6px;
          padding-left: 29px;
          padding-right: 29px;
          background-color: rgba(0,0,0,.3);
          border-radius: 5px;
        }
        #log:hover{
          background-color: rgba(0,0,0,.6);
        }
        .here{
          font-size: 25px;
          color: tomato;
        }
        #erro{
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
     include('loginmenu.php');

     echo "<div id='login'>";
        
 	echo '<h3>Log in with your account or click <a class="here" href="register.php">HERE</a> to open one! </h3>';
 	 

         include("config.php");

               if (isset($_GET['err'])) {
               	   echo "<label id='erro'>Please login with correct credentials or click <a class='here' href='register.php'>HERE</a> to open an account.</label>";
                   } 
                
           
                              
                if(isset($_POST['submit'])){
                   
                   $u=$_POST['name'];
                   $p=$_POST['pass'];

                   $sq="SELECT * FROM users WHERE username='$u' AND password='$p';";
                   $sqr=mysqli_query($con,$sq) or die("fail to fetch");
                   $ftch=mysqli_fetch_assoc($sqr);
                   $sqnm=mysqli_num_rows($sqr);

                   $sqq="SELECT * FROM consultants WHERE identifier='$u' AND password='$p';";
                   $sqrr=mysqli_query($con,$sqq) or die("fail to fetch");
                   $ftche=mysqli_fetch_assoc($sqrr);
                   $num=mysqli_num_rows($sqrr);

                   $sqqq="SELECT * FROM admins WHERE username='$u' AND password='$p';";
                   $sqrre=mysqli_query($con,$sqqq) or die("fail to fetch");
                   $ftchee=mysqli_fetch_assoc($sqrre);
                   $adnum=mysqli_num_rows($sqrre);
                  

                   if($sqnm==1){    

                      $_SESSION['user']=$ftch['username'];
                      $_SESSION['userid']=$ftch['id'];               	                      
                      $_SESSION['loggedin']=1;  
                      $_SESSION['roll']=$ftch['roll'];

                   $sqn="SELECT id FROM orders WHERE user_id='".$_SESSION['userid']."' AND status < 4";  
                   $sqnqr=mysqli_query($con,$sqn) or die("fail to query ordernum");
                   $sqnftch=mysqli_fetch_assoc($sqnqr); 

                      $_SESSION['ordernum']=$sqnftch['id'];      

                       
                        header("location:index.php");
                      
                        
               }elseif($num==1){

                      $_SESSION['user']=$ftche['identifier'];
                      $_SESSION['userid']=$ftche['id'];                                      
                      $_SESSION['loggedin']=1;  
                      $_SESSION['roll']="consultant";

                      header("location:admins/tasks.php");

               }elseif($adnum==1){

                      $_SESSION['user']=$ftchee['username'];
                      $_SESSION['userid']=$ftchee['id'];                                      
                      $_SESSION['loggedin']=1;  
                      $_SESSION['roll']="admin";

                      header("location:admins/index.php");

               }else{
                       header("location:login.php?err=1");
                   }
                
               }else{
                         echo '<table>

    <form  method="POST">
      <tr>
        <td><label>Username&nbsp &nbsp</label></td>
        <td><input type="text" name="name" placeholder="Enter username" size="35" required></td></tr>
        <tr><td><label>Password&nbsp&nbsp </label></td>
           <td><input type="password" name="pass" size="35" placeholder="Enter password" maxlength="8" required></td></tr>
        <tr><td></td><td><input type="submit" name="submit" id="log" value="Log in"></td></tr>
      </tr>
    </form>
  </table>
  <br><br><br>';
                      

               }


                   ?>
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