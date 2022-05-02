<?php

session_start();


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/main.css">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Rubik&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <script  defer src="public/js/app.js"></script>
    <!-- Bootstrap -->
    
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Alpha</title>
    
</head>
<body>
    
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
                echo "<a href= scripts/logout.php> LOGOUT </a>";
            } else {
                echo "LOGIN";
            }
            ?>
        </a> </span>
        </div>
    </div>

    <div class="navbar flex">
        <div class="header-logo flex">
            <h2> ALPHA </h2>
            <span><i class="material-icons md-48 user-profile">fitness_center</i></span>
	    <ul>
		<li><a> Men </a></li>
		<li><a> Women </a></li>
		<li><a> Basketball </a></li>
		<li><a> Boxing </a></li>
		<li><a> Running </a></li>
		<li><a> Gym </a></li>


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
    

    <main class="flex-column">
        <div class="image-banner-container flex">
            <div class="first-image" id="first-image">
                <img src="public/img/bike.webp" alt="" id="image">
            </div>
            <div class="second-image flex">
               
               
                
            </div>

            
        </div>
        <div class="dot-container flex">
            <p class="shop"> Shop Now </p>
        </div>
        <div class="category-list flex">
            <div class="circle-container">
                <div class="circle-wrapper">
                    <div class="circle men">
                        <img src="public/img/men.png" alt="" class="circle-img">
                    </div>
                    <p> Men</p>
                </div>
                <div class="circle-wrapper">
                    <div class="circle">
                        <img src="public/img/Ellipse 2.png" alt="" class="circle-img">
                    </div>
                    <p> Women</p>
                </div>
                <div class="circle-wrapper">
                    <div class="circle">
                        <img src="public/img/Ellipse 3.png" alt="" class="circle-img">
                    </div>
                    <p> Basketball</p>
                </div>
                <div class="circle-wrapper">
                    <div class="circle">
                        <img src="public/img/Ellipse 4.png" alt="" class="circle-img">
                    </div>
                    <p> Boxing</p>
                </div>
                <div class="circle-wrapper">
                    <div class="circle">
                        <img src="public/img/Ellipse 5.png" alt="" class="circle-img">
                    </div>
                    <p> Running</p>
                </div>
                <div class="circle-wrapper">
                    <div class="circle">
                        <img src="public/img/Ellipse 6.png" alt="" class="circle-img">
                    </div>
                    <p> Gym</p>
                </div><div class="circle-wrapper">
                    <div class="circle">
                        <img src="public/img/Ellipse 7.png" alt="" class="circle-img">
                    </div>
                    <p> Others</p>
                </div>
                
            </div>
        </div>
        
        
        <div class="flash-deals">
            <h1> FLASH DEALS </h1>
            <div class="deals-container flex">
                <div class="deals-card">
                    <img src="public/img/Rectangle 4.png" alt="">
                </div>
                <div class="deals-card">
                <img src="public/img/Rectangle 5.png" alt="">
                </div>
                <div class="deals-card">
                <img src="public/img/Rectangle 6.png" alt="">
                </div>
                <div class="deals-card">
                <img src="public/img/Rectangle 7.png" alt="">
                </div>
                <div class="deals-card">
                <img src="public/img/rectangle8.webp" alt="">
                </div>
                <div class="deals-card">
                <img src="public/img/rectangle9.webp" alt="">
                </div>
            </div>
        </div>
    </main>
    
      <!-- Site footer -->
      <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify"> Alpha.com project for INTPROG-31 </p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Tools </h6>
            <ul class="footer-links">
              <li>HTML</a></li>
              <li>CSS</a></li>
              <li>JAVASCRIPT</a></li>
              <li>MYSQL</a></li>
              <li>PHP</a></li>

            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="#home-section">Home</a></li>
              <li><a href="view/contact-us.php">Contact Us</a></li>
              <li><a href="view/about-us.php">About Us</a></li>
              <li><a href=""></a></li>
              <li><a href=""></a></li>
              <li><a href=""></a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by Alpha </p>
            </p>
          </div>
        </div>
      </div>
</footer>



</body>
</html>
