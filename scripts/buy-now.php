<?php

session_start();

include '../model/User.php';

$buyer = trim($_SESSION['username']);

$user = new User;

    if(isset($_REQUEST['add-to-cart']) && isset($_SESSION['username'])){
        $add =  trim($_REQUEST['add-to-cart']);
        $user->setAddToCart($add, $buyer);
        header('location: ../view/checkout.php');
    } else {
        header('location: ../view/review-product.php');
    }





?>