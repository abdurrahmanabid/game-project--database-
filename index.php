<?php
  include("indexphp.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/3966/3966194.png" type="image/png">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="style.css" />
    <title> Authentication  </title>
  </head>
  <body>
    <style>
      body{
        background-color: #121212;
        color: white;
      }
      .wrapper{
        box-shadow: 0 0 20px #00BCD4;
      }
    </style>
    <!--Login-->
    <div class="margin"></div>
    <div class="wrapper loginSection w3-animate-zoom">
      <div class="title" style='color: #00BAD2;'>Log-in</div>
      <form action="Assets/login.php" method="post">
        <div class="field">
          <label>User Name</label>
          <input name="username" type="text"  required />
          
        </div>
        <div class="field">
          <label>Password</label>
          <input type="password" name="password" required />
        </div>
        <div class="content">
          <div class="pass-link">
            <a href="Assets/forget.php">Forgot password?</a>
          </div>
        </div>
        <div class="field">
          <input type="submit" value="Login" class="login-button"  />
        </div>




        <div class="signup-link">
          Not a member?
          <a href="#" class="getRegistration">Signup now</a>
        </div>
      </form>
    </div>

    <!--Regi-->
    <div class="wrapper registrationSection w3-animate-zoom">
      <div class="title">Registration</div>
      <form action="" method="post" onsubmit="return validateForm()">
        <div class="field">
          <label>Name</label>
          <input class="name" name="name" type="text" required />
          
        </div>
        <div class="field">
          <label>Userneme</label>
          <input class="uName" name="uName" type="text" required />
        </div>

        <div class="field">
          <label>Email Address</label>
          <input class="email" name="email" type="email" required />
        </div>
        <div class="field">
          <label>Password</label>
          <input class="pass" name="pass" type="password" required />
        </div>





        <div class="field">
          <label>Re-Enter Your Password </label>
          <input class="rePass" name="rePass" type="password" required />
        </div>
        
        <div class="field">
          <input type="submit" class="login-button" value="Signup" />
        </div>
        <div class="signup-link">
          You are a member? <a href="#" class="getLogin">Login now</a>
        </div>
      </form>
    </div>
    <script src="hide.js"></script>
    <script>
      function validateForm() {
    var password = document.querySelector('.pass').value;
    var rePassword = document.querySelector('.rePass').value;
  
    if (password !== rePassword) {
      alert("Passwords do not match. Please re-enter.");
      return false; // Prevent form submission
    }
  
    return true; // Allow form submission
  }
    </script>
  </body>
</html>