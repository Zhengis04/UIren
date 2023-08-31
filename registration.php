<?php
session_start();
?>
<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login and Registration page</title>
      <link rel="stylesheet" href="style.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
      <div class="wrap">
         <div class="text-title">
            <div class="title login">
               Login 
            </div>
            <div class="title signup">
               Register
            </div>
         </div>
         <div class="form-container">
            <div class="slide-controls">
               <input type="radio" name="slide" id="login" checked>
               <input type="radio" name="slide" id="signup">
               <label for="login" class="slide login">Login</label>
               <label for="signup" class="slide signup">Signup</label>
               <div class="slider-tab"></div>
            </div>
            <div class="innerform">
               <form action="regis.php" method="POST" class="login">
                  <div class="field">
                     <input type="text" placeholder="Email Address" required name="login">
                  </div>
                  <div class="field">
                     <input type="password" placeholder="Password" required name="pass">
                  </div>
                  <div class="pass-link">
                     <a href="#">Reset the password</a>
                  </div>
                  <div class="field button">
                     <div class="button-layer"></div>
                     <input type="submit" value="Login">
                  </div>
                  <div class="signup-link">
                     Don't have an account? <a href="">Signup</a>
                  </div>
               </form>
               <form action="regis.php" method="POST" class="signup">
                  <div class="field">
                     <input type="text" placeholder="Email Address" required name="login">
                  </div>
                  <div class="field">
                     <input type="password" placeholder="Password" required name="pass">
                  </div>
                  <div class="field">
                     <input type="password" placeholder="Confirm password" required>
                  </div>
                  <div class="field btn">
                     <div class="button-layer"></div>
                     <input type="submit" value="Signup" action="registration.php">
                  </div>
               </form>
            </div>
         </div>
      </div>
      <script>
         const loginText = document.querySelector(".text-title .login");
         const loginForm = document.querySelector("form.login");
         const loginButton = document.querySelector("label.login");
         const signupButton = document.querySelector("label.signup");
         const signupLink = document.querySelector("form .signup-link a");
         signupButton.onclick = (()=>{
           loginForm.style.marginLeft = "-50%";
           loginText.style.marginLeft = "-50%";
         });
         loginButton.onclick = (()=>{
           loginForm.style.marginLeft = "0%";
           loginText.style.marginLeft = "0%";
         });
         signupLink.onclick = (()=>{
           signupButton.click();
           return false;
         });
      </script>
   </body>
</html>
<?php
    $server="localhost";
    $user="root";
    $password="";
    $db="account";
    $con=mysqli_connect($server, $user, $password, $db);
    $email=$_POST['login'];
    $password=$_POST['pass'];
    $sql_insert=mysqli_query($con,"insert into login (Login,Password) values ('$email','$password')");
    if(!$sql_insert)
    {
      echo "error";
      header('location: registration.html');
    }
    else
    {
      header('location: page.html');
    }
?>