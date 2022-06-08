<?php

include '../model/User.php';

session_start();




$buyer = trim($_SESSION['username']);


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
            <span class="signup"><a href="http://localhost/Alpha/view/signup.php"> 
            <?php
            
            if(isset($_SESSION['username'])){
                echo "";
            } else {
                echo "Sign up";
            }
            ?>

            </a> </span>
            <div class="line"></div>
            <span class="login"><a href="http://localhost/Alpha/view/login.php"> 
            
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
        <a href="http://localhost/Alpha/index.php"> <h2> ALPHA </h2></a>
            <span><i class="material-icons md-48 user-profile">fitness_center</i></span>
	    <ul class="category">
		<li><a  class="test"> Men </a></li>
		<li><a  class="test"> Women </a></li>
        <li><a  class="test"> Equipments </a></li>

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
                echo "<p class=upper>" . strtoupper($_SESSION['username']) . '</p>';
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
    
    <div class="dropdown-header-container" id="dropdown" >
	<div class="dropdown-ul-container">
        
        <ul>
            <li><a href="" class="main-dropdown">Shoes</a></li>
             <li><a class="b">Basketball</a></li>
            
		</ul>

		<ul>
            <li><a href="" class="main-dropdown">Apparel</a></li>
            <li><a  class="b">Bicycle</a></li>
             <li><a class="b">Basketball Jersey</a></li>
            
		</ul>
        <ul>
            <li><a href="" class="main-dropdown">Equipments</a></li>
            <li><a class="b">Bicycle </a></li>
        </ul>
        
        


	</div>
    </div>



  <section class="vh-100">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <p><span class="h2">My Shopping Cart </span>
        <?php
            
            $user = new User;
            $result = $user->getAddToCart($buyer);
            $totalPrice = $user->getTotalPrice($buyer);

          
            foreach($result as $r){
                
                echo <<<HERE


                <div class="card mb-4" style ="">
                <div class="card-body p-4">

                    <div class="row align-items-center">
                    <div class="col-md-2">
                        <img src="../public/img/product/$r[product_img]"
                        class="img-fluid" alt="Generic placeholder image">
                    </div>
                    <div class="col-md-2 d-flex justify-content-center">
                        <div>
                        <p class="small mb-4 pb-2 font-weight-bold" style="font-weight:bold;">Name</p>
                        <p class="lead fw-normal mb-0">$r[product_name]</p>
                        </div>
                    </div>
    
                    <div class="col-md-2 d-flex justify-content-center">
                        <div>
                        <p class="small mb-4 pb-2" style="font-weight:bold;">Quantity</p>
                    
                        <p class="lead fw-normal mb-0">$r[count]</p>
                        
                        
                        </div>
                        
                    </div>
                    
                    <div class="col-md-2 d-flex justify-content-center">
                        <div>
                        <p class="small mb-4 pb-2" style="font-weight:bold;">Price</p>
                        <p class="lead fw-normal mb-0">PHP $r[product_price]</p>
                        </div>
                    </div>
                    <div class="col-md-2 d-flex justify-content-center">
                        <div>
                        <p class="small mb-4 pb-2" style="font-weight:bold;">Total</p>
                        <p class="lead fw-normal mb-0">PHP  $r[price]</p>
                        </div>
                    </div>
                    <div class="col-md-2 d-flex justify-content-center">
                        <div>
                        <p class="small mb-4 pb-2" style="font-weight:bold;">Action </p>
                        <a href="http://localhost/Alpha/scripts/minus-cart.php?product=$r[id]" class="btn btn-danger btn-cart">- </a>
                        <a href="http://localhost/Alpha/scripts/add-cart.php?product=$r[product_name]" class="btn btn-danger btn-cart">+ </a>
                        <a href='http://localhost/Alpha/scripts/process-remove.php?product=$r[product_name]' class="btn btn-danger btn-cart">Remove</a>
                        </div>
                    </div>
                    </div>

                </div>
                </div>
                HERE;
            }
                ?>

                <div class="card mb-5">
                <div class="card-body p-4">

                    <div class="float-end">
                    <p class="mb-0 me-5 d-flex align-items-center">
                        <span class="small text-muted me-2">Order total:</span> <span
                        class="lead fw-normal">PHP <?php echo $totalPrice['total'] ?></span>
                    </p>
                    </div>

                </div>
                </div>

                <div class="d-flex justify-content-end">
                <button type="button" class="btn btn-light btn-lg me-2 bg-danger" style="color:white"><a href="checkout.php">Check Out</a> </button>
                </div>

            </div>
            </div>
        </div>
        </section>


