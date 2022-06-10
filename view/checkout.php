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

<div class="spacer">

</div>

  <section class="">
  <div class="container h-50">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <p><span class="h2">CHECKOUT </span>
        <?php
            
            $user = new User;
            $result = $user->getAddToCart($buyer);
            $totalPrice = $user->getTotalPrice($buyer);
            $customer = $user->getCustomerInfor($buyer);
          
            foreach($result as $r){
                
                echo <<<HERE


                <div class="card mb-2" style ="">
                <div class="card-body p-1">

                    <div class="row align-items-center">
                    <div class="col-md-2">
                        <img src="../public/img/product/$r[product_img]"
                        class="img-fluid" alt="Generic placeholder image">
                    </div>
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

            
<div class="card mb-5">
                <div class="card-body p-4">
              
                    <div class="float-end">
                    <p class="mb-0 me-5 d-flex align-items-center">
                        <span class="small text-muted me-2">Shipping Fee:</span> <span
                        class="lead fw-normal">PHP 150.00</span>
                    </p>
                    <p class="mb-0 me-5 d-flex align-items-center">
                        <span class="small text-muted me-2">Order total:</span> <span
                        class="lead fw-normal">PHP <?php echo $totalPrice['total'] + 150?>.00</span>
                    </p>
                    
                    </div>

                </div>
                </div>
                

            </div>
            </div>
            
        </div>
        

<div class="checkout-info-container">
    <div class="card-checkout">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<div class="container">
  <div id="Checkout" class="inline" style="">
      <h1 class="primary" style="color: white; background-color: #e52b1b;"> Via Card</h1>
      <div class="card-row">
          <span class="visa"></span>
          <span class="mastercard"></span>
          <span class="amex"></span>
          <span class="discover"></span>
      </div>
      <form>
      <div class="form-group">
              <label for="PaymentAmount">Customer Name</label>
              <div class="amount-placeholder">
    
                  <span style="font-weight: bold;"><?php echo $customer['firstname'] .' '. $customer['lastname']; ?></span>
              </div>
          </div>
          <div class="form-group">
              <label for="PaymentAmount">Address</label>
              <div class="amount-placeholder">
                  <span style="font-weight: bold;"><?php echo $customer['address']?></span>
              </div>
          </div>
      
          <div class="form-group">
              <label or="NameOnCard">Name on card</label>
              <input id="NameOnCard" class="form-control" type="text" maxlength="255"></input>
          </div>
          <div class="form-group">
              <label for="CreditCardNumber">Card number</label>
              <input id="CreditCardNumber" class="null card-image form-control" type="text"></input>
          </div>
          <div class="expiry-date-group form-group">
              <label for="ExpiryDate">Expiry date</label>
              <input id="ExpiryDate" class="form-control" type="text" placeholder="MM / YY" maxlength="7"></input>
          </div>
       
          <div class="zip-code-group form-group">
              <label for="ZIPCode">ZIP/Postal code</label>
              <div class="input-container">
                  <input id="ZIPCode" class="form-control" type="text" maxlength="10"></input>
                  <a tabindex="0" role="button" data-toggle="popover" data-trigger="focus" data-placement="left" data-content="Enter the ZIP/Postal code for your credit card billing address."><i class="fa fa-question-circle"></i></a>
              </div>
          </div>
          <button id="PayButton" class="btn btn-block btn-success submit-button" type="submit" style="background-color: #e52b1b; border-radius: 20px">
              <span class="align-middle">Submit</span>


          </button>
      </form>
  </div>
  
</div>



</div>


<div class="or-payvia">
    <h3> --OR-- </h3>
</div>


<div class="cod-payment">

<button class="btn btn-block btn-success submit-button" id="btn-modal" type="submit" style="background-color: #e52b1b; border:none; padding: 10px 50px; border-radius: 20px">
              <span class="align-middle"> Via COD</span>
</button>
</div>
</div>

  </section>


  <section class="h-100 h-custom"">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
            <div id="modal">
          <div class="card-body p-4 p-md-5" id="modal-content">
          <span id="close"><i class="material-icons md-48 black" id="close"> close </i></span>
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">COD Info</h3>
            

            <form class="px-md-2" action="../scripts/cod-order.php" method="POST">

            <div class="col-md-6 mb-4">

            <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline datepicker">
                    <input type="text" class="form-control" id="exampleDatepicker1" value="<?php echo $customer['firstname']?>" name="firstname" />
                    <label for="exampleDatepicker1" class="form-label">Firstname</label>
    
                  </div>

                </div>
                <div class="col-md-6 mb-4">
                <input type="text" class="form-control" id="exampleDatepicker1" value="<?php echo $customer['lastname']?>" name="lastname" />
                    <label for="exampleDatepicker1" class="form-label">Lastname</label>
               
                </div>
              </div>
<div class="col-md-6 mb-4">
                <input type="text" class="form-control" id="exampleDatepicker1" placeholder="ex: 3450" name="zip"/>
                    <label for="exampleDatepicker1" class="form-label">Add Postal Code</label>
               
                </div>

</div>

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline datepicker">
                    <input type="text" class="form-control" id="exampleDatepicker1" value="<?php echo $customer['address']?>" name="address"/>
                    <label for="exampleDatepicker1" class="form-label">Address</label>
    
                  </div>

                </div>
                <div class="col-md-6 mb-4">
                <input type="text" class="form-control" id="exampleDatepicker1" value="<?php echo $customer['phone_number']?>" name="phone"/>
                    <label for="exampleDatepicker1" class="form-label">Phone Number</label>
               
                </div>
              </div>

          

              <div class="row mb-4 pb-2 pb-md-0 mb-md-5">
                <div class="col-md-6">

                  <div class="form-outline">
                    <input type="text" id="form3Example1w" class="form-control" name="landmark"/>
                    <label class="form-label" for="form3Example1w">Add LandMark</label>
                  </div>

                </div>
              </div>
              <div class="flex">
            
              </div>
              <br>
              <input type="submit" class="btn btn-success btn-lg mb-1" style="background-color: #e52b1b; border: none;" name="submit">

            </form>

          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>





        

            

