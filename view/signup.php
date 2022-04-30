<?php

include '../scripts/validate-signup.php';




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
<div class="register-form-container flex" id="register">
    <h1 id=""> Register </h1>
    <form action="../scripts/validate-signup.php" class="register-form" method="post">
  <div class="name-container">
      <input type="text" placeholder="First Name" name="firstname" required>
      <input type="text" placeholder="Last Name" name="lastname" required>
  </div>
  
    <input type="number" name="age" id="" placeholder="Age" class="age" required>
    <input type="text" name="address" id="" placeholder="Address" required>
    <input type="text" name="phone_number" id="" placeholder="Phone Number" required>
    <input type="text" placeholder="johndoe@xxx.com" name="email" required>
    <input type="text" name="username" id="" placeholder="Username" required>
    <input type="password" name="password" id="" placeholder="Password" required>
    <input type="password" name="confirm_password" id="" placeholder="Confirm-Password" required>
    
    <input type="submit" value="Submit" class="submit" name="submit">
   

  </form>

  <div class="error-container">
  <?php
        if(isset($_SESSION['alpha_password']))
        {
            echo $_SESSION['alpha_password'] ."<br>";
        } 
        if(isset($_SESSION['password_match']))
        {
            echo $_SESSION['password_match'] ."<br>";
        }
        if(isset($_SESSION['length_password']))
        {
            echo $_SESSION['length_password'];
        }
        

        session_destroy();
    ?>
  </div>


  </div>

  

 



</section>
















