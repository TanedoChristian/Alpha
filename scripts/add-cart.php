<?php

session_start();
include '../model/User.php';


if(isset($_REQUEST['product'])){
    $product = trim($_REQUEST['product']);
    $buyer = trim($_SESSION['username']);
    $user = new User;
    $user->setAddToCart($product, $buyer);
    header('location: ../view/add-to-cart.php');
}








?>