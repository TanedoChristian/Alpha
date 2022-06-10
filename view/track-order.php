<?php
session_start();

$buyer = $_SESSION['username'];

if(isset($_SESSION['order-success'])){
    echo '<script language="javascript">';
    echo 'alert("Order Successfully")';
    echo '</script>';
}

unset($_SESSION['order-success']);

include '../model/User.php';

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
		<li><a  class="test" href="edit-profile.php"> Edit Profile </a></li>
		<li><a  class="test"> To Ship </a></li>
       

	   </ul>
        </div>

        <div class="search-bar flex">
        <input type="text" placeholder="Search" id="search" value="">
            <div class="search-icon-container flex">
                <a id="search-btn"> <i class="material-icons md-60 search-icon">search</i></a>
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

 
    <section class="">
  <div class="container h-50">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <p><span class="h2">To Ship </span>
        <?php
           
            $user = new User;
            $result = $user->getAddToCart($buyer);
            $purchase = $user->getPurchaseInfo($buyer);
            $totalPrice = $user->getTotalPrice($buyer);
            $customer = $user->getCustomerInfor($buyer);
          
            foreach($purchase as $r){
                
                echo <<<HERE


                <div class="card mb-2" style ="">
                <div class="card-body p-1">

                    <div class="row align-items-center justify-content-center">
            
                    <div class="col-md-2 d-flex justify-content-center">
                        <div>
                        <p class="small mb-4 pb-2 font-weight-bold" style="font-weight:bold;">Product</p>
                        <p class="lead fw-normal mb-0">$r[product_name]</p>
                        </div>
                    </div>
    
                    <div class="col-md-2 d-flex justify-content-center">
                        <div>
                        <p class="small mb-4 pb-2" style="font-weight:bold;">Quantity</p>
                    
                        <p class="lead fw-normal mb-0">$r[count]</p>
                        
                        
                        </div>
                        
                    </div>
                    
            
                    <div class="col-md-3  d-flex justify-content-center">
                        <div>
                        <p class="small mb-4 pb-2" style="font-weight:bold;">Total</p>
                        <p class="lead fw-normal mb-0">PHP  $r[price]</p>
                        </div>
                    </div>
                    </div>

                </div>
                </div>
                HERE;
            }
                ?>

<?php

    $purchaseInfo = $user->getCustomerPurchaseInfo($buyer);
    $totalPurchase = $user->getTotalPurchasePrice($buyer);

   ?>

<div class="card mb-5">
                <div class="card-body p-4" style="background-color: #eee; ">

                <p class="mb-0 me-5 d-flex align-items-center">
                        <span class="small text-muted me-2">Customer:</span> <span
                        class="lead fw-normal"><?php echo $purchaseInfo['firstname'] . ' '.$purchaseInfo['lastname']?></span>
                </p>
                <p class="mb-0 me-5 d-flex align-items-center">
                        <span class="small text-muted me-2">Address:</span> <span
                        class="lead fw-normal"><?php echo $purchaseInfo['address']?></span>
                </p>
                <p class="mb-0 me-5 d-flex align-items-center">
                        <span class="small text-muted me-2">Landmark:</span> <span
                        class="lead fw-normal"><?php echo $purchaseInfo['landmark']?></span>
                </p>
                <p class="mb-0 me-5 d-flex align-items-center">
                        <span class="small text-muted me-2">Zip Code:</span> <span
                        class="lead fw-normal"><?php echo $purchaseInfo['zipcode']?></span>
                </p>
                <p class="mb-0 me-5 d-flex align-items-center">
                        <span class="small text-muted me-2">Phone Number:</span> <span
                        class="lead fw-normal"><?php  echo $purchaseInfo['phone_number']?></span>
                </p>





                    <div class="float-end">
                    <p class="mb-0 me-5 d-flex align-items-center">
                        <span class="small text-muted me-2">Shipping Fee:</span> <span
                        class="lead fw-normal">PHP 150.00</span>
                    </p>
                    <p class="mb-0 me-5 d-flex align-items-center">
                        <span class="small text-muted me-2">Order total:</span> <span
                        class="lead fw-normal">PHP <?php echo $totalPurchase['total'] + 150?>.00</span>
                    </p>
                    
                    </div>

                </div>
                </div>
                

            </div>
            </div>
            
        </div>

        
 