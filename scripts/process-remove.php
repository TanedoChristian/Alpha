<?php

session_start();

include '../model/User.php';


$username = trim($_SESSION['username']);

if(isset($_REQUEST['product'])){
    
    $user = new User;
    $product = trim($_REQUEST['product']);
    $user->removeProduct($username, $product);
    header('location: ../view/add-to-cart.php');
}






?>