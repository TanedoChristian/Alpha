<?php 

session_start();

include '../database/database.php';


    if(isset($_POST['product'])){
        $_SESSION['product'] = $_POST['product'];
      
    }

    
    $product = trim($_SESSION['product']);
    



if(isset($_POST['submit'])){

    $username = trim($_SESSION['username']);    
    $comment = $_POST['comment'];

    $database = new Database;
    $connection = $database->getConnection();


    $statement = $connection->prepare('INSERT INTO comment (username,comment,product_name) values(:username, :comment, :product_name)');
    $statement->bindParam(":username", $username, PDO::PARAM_STR);
    $statement->bindParam(":comment", $comment, PDO::PARAM_STR);
    $statement->bindParam(":product_name", $product, PDO::PARAM_STR);

    $statement->execute();
    
}



function getImg($product){
    $database = new Database;
    $connection = $database->getConnection();

    $statement = $connection->prepare("SELECT * from product where product_name =:productName");
    $statement->bindParam(":productName", $product, PDO::PARAM_STR);
    $statement->execute();

    $result = $statement->fetchAll();
    
    foreach($result as $r){
        return $r['product_img'];
    }

}


function getTitle($product){
    $database = new Database;
    $connection = $database->getConnection();

    $statement = $connection->prepare("SELECT * from product where product_name =:productName");
    $statement->bindParam(":productName", $product, PDO::PARAM_STR);
    $statement->execute();

    $result = $statement->fetchAll();
    
    foreach($result as $r){
        $title = $r['product_tag'] . " > " . $r['product_category'] . " > " . $r['product_name'];
        return $title;
    }
}

function getPrice($product){
    $database = new Database;
    $connection = $database->getConnection();

    $statement = $connection->prepare("SELECT * from product where product_name =:productName");
    $statement->bindParam(":productName", $product, PDO::PARAM_STR);
    $statement->execute();

    $result = $statement->fetchAll();
    
    foreach($result as $r){
        $title = $r['product_price'];
        return $title;
    }
}




$productImage = getImg($product);
$title = getTitle($product);
$productPrice = getPrice($product);



$database = new Database;
$connection = $database->getConnection();

$statement = $connection->prepare('SELECT * from comment where product_name =:product');
$statement->bindParam(":product", $product);
$statement->execute();

 $result = $statement->fetchAll();

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
                echo "<a href= http://localhost/Alpha/scripts/logout.php> LOGOUT </a>";
            } else {
                echo "Login";
            }
            ?>
        </a> </span>
        </div>
    </div>


    <div class="navbar flex">
        <div class="header-logo flex">
            <h2> <a href="http://localhost/Alpha/index.php" class="alpha-logo"> Alpha </a> </h2>
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