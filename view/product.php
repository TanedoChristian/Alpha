<?php
session_start(); 




if(isset($_POST['category'])){

     $_SESSION['category'] = $_POST['category'];
     $_SESSION['gender'] = $_POST['gender'];
 
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
    <script  defer src="../public/js/app.js"></script>
    <!-- Bootstrap -->
    
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Alpha</title>
    
</head>
<body >
    
    <div class="header flex" id="home-section">
        <div class="login-container flex">
            <span class="signup"><a href="view/signup.php"> 
            <?php
            
            if(isset($_SESSION['username'])){
                echo "";
            } else {
                echo "Sign up";
            }
            ?>

            </a> </span>
            <div class="line"></div>
            <span class="login"><a href="view/login.php"> 
            
            <?php
            
            if(isset($_SESSION['username'])){
                echo "<a href= ../scripts/logout.php> LOGOUT </a>";
            } else {
                echo "Login";
            }
            ?>
        </a> </span>
        </div>
    </div>

    <div class="navbar flex">
        <div class="header-logo flex">
        <h2 class="view-login-h1"> <a href="../index.php"> ALPHA </a></h2>
            <span><i class="material-icons md-48 user-profile">fitness_center</i></span>
	    <ul class="category">
		<li><a  class="test"> Men </a></li>
		<li><a  class="test"> Women </a></li>
        <li><a  class="test"> Gym Equipments </a></li>

	   </ul>
        </div>

        <div class="search-bar flex">
            <input type="text" placeholder="Search">
            <div class="search-icon-container flex">
                <i class="material-icons md-60 search-icon">search</i>
            </div>
            
        </div>

        <div class="shopping-cart-container flex">
            <span><i class="material-icons md-48 user-profile">
            <?php
            if(isset($_SESSION['username'])){
                echo "<p>" . $_SESSION['username'] . '</p>';
            } else {
                echo "account_circle";
            }
            
             
             ?>
             </i></span>
            <span><i class="material-icons md-48">
            <?php
            if(isset($_SESSION['username'])){
                echo "shopping_cart";
            } else {
                echo "";
            }
            ?>
            </i></span>
        </div>
    </div>


<main>
    <div class="product-header flex">
        <h1> 
                <?php
                    if(isset($_SESSION['gender'])){
                        echo $_SESSION['category'] . "/" . $_SESSION['gender'];
                    }
                ?>

        </h1>
    </div>
    <div class="product-view-container">

               <div class="product-card">
                    <img src="../public/img/Rectangle 4.png" alt="">
                    <h3> Nike Escape 3 </h3>
                    <p> Php 200.00 </p>
                </div>    
                <div class="product-card">
                    <img src="../public/img/Rectangle 4.png" alt="">
                    <h3> Nike Escape 3 </h3>
                    <p> Php 200.00 </p>
                </div>
                <div class="product-card">
                    <img src="../public/img/Rectangle 4.png" alt="">
                    <h3> Nike Escape 3 </h3>
                    <p> Php 200.00 </p>
                </div>
                <div class="product-card">
                    <img src="../public/img/Rectangle 4.png" alt="">
                    <h3> Nike Escape 3 </h3>
                    <p> Php 200.00 </p>
                </div>
                <div class="product-card">
                    <img src="../public/img/Rectangle 4.png" alt="">
                    <h3> Nike Escape 3 </h3>
                    <p> Php 200.00 </p>
                </div>     


    </div>
</main>