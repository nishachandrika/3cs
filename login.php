<?php
session_start();
$message="";
if(count($_POST)>0) {
 $con = mysqli_connect('localhost','root','','bookstore') or die('Unable To connect');
$result = mysqli_query($con,"SELECT * FROM login WHERE uname='" . $_POST["uname"] . "' and password = '". $_POST["password"]."'");
$row  = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["id"] = $row['id'];
$_SESSION["uname"] = $row['uname'];
} else {
$message = "Invalid Username or Password!";
}
}
if(isset($_SESSION["id"])) {
header("Location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Bookstore </title>
      <!-- Meta tags -->
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="keywords" content="Gaze Sign up & login Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
         />
      <script>
         addEventListener("load", function () { setTimeout(hideURLbar, 0); }, false); function hideURLbar() { window.scrollTo(0, 1); }
      </script>
      <!-- Meta tags -->
      <!--stylesheets-->
      <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//style sheet end here-->
      <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">
   </head>
   <body>
      <div class="mid-class">
         <div class="art-right-w3ls">
            <h2>Log In</h2>
            <form action="#" method="post">
               <div class="main">
                  <div class="form-left-to-w3l">
                     <input  type="text" name="uname" placeholder="Username" required="">
                  </div>
                  <div class="form-left-to-w3l ">
                     <input type="password" name="password"  placeholder="Password" required="">
                     <div class="clear"></div>
                  </div>
               </div>
               
               
               <div class="clear"></div>
               <div class="btnn">
                  <button type="submit" name="submit" value="Login">Log In</button>
               </div>
            </form>
            <div class="clear"></div>
                  </div>
             <div class="art-left-w3ls">
            <h1 class="header-w3ls">
               Bookstore
            </h1>
         </div>
      </div>
   </body>
</html>
