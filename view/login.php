<?php



include '../scripts/validate-signup.php';

if(isset($_SESSION['account_created'])){
  echo '<script>alert("Account has been  Created");</script>';
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/main.css">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Rubik&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
    <!-- Bootstrap -->
    <style> 
    <?php

   

?>
  </style>
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Alpha</title>
    <script src="../public/js/app.js"></script>
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
     
      <h1 id=""> LOGIN </h1>
      <form action="../scripts/validate-login.php" method = "POST" class="inputs">
        <div class="input-container">
          <input type="text" placeholder="Username" name="username">
          <input type="password" placeholder="Password" name="password">
          <a href="change-password.php">Forgot Password? </a>
          <h3 class="h3">
          <?php
            if(isset($_SESSION['error'])){
              echo $_SESSION['error'];
            } else {
              echo "";
            }
          ?>
          </h3>
          <input type="Submit" value="Log In" class="login-button" name="submit">
        </div>
      </form>
    </div>
  </div>

  

 



</section>
