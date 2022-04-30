<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../public/css/main.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</head>
<body>
<div class="navbar view-login-navbar flex">
        <div class="header-logo flex">
            <h2 class="view-login-h1"> <a href="../index.php"> ALPHA </a></h2>
            
            <span><i class="material-icons md-48 user-profile view-login">fitness_center</i></span>
        </div>
</div>
<section class="login-section-container-page flex">
  <div class="login-container-page flex" id="login">
    <div class="login-page">
     
      <h1 id=""> CHANGE PASSWORD </h1>
      <form action="../scripts/validate-change-password.php" method = "POST" class="inputs">
        <div class="input-container">
        <input type="text" placeholder="Email" name="email">
        <input type="password" placeholder="Password" name="password">
          <input type="password" placeholder="Password" name="change-pass">
          <input type="password" placeholder="Confirm Password" name="change-confirm">
          <h3 class="h3">
          <?php
          session_start();
            if(isset($_SESSION['error-change'])){
              echo $_SESSION['error-change'];
              session_destroy();
            }
          ?>
          </h3>
          <input type="Submit" value="Change Password" class="login-button" name="submit">
        </div>
      </form>
    </div>
  </div>
  <div class="image-banner" id="banner">
  <h1>ALPHA</h1>
   <h2 class="view-login-h2"> Sports and LifeStyle </h2>
   <div class="view-signup-btn flex" onclick="displayNone()">
    <h3><span  id="signup"><a href="login.php" class="white">Login</a>    </span></h3>
    <span><i class="material-icons md-48 east">east</i></span>
   </div>   
  </div>
</section>
</body>
</html>


