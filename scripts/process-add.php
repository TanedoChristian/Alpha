<?php

session_start();

include '../model/User.php';

$buyer = trim($_SESSION['username']);

$user = new User;

    if(isset($_REQUEST['add-to-cart'])){
        $add =  trim($_REQUEST['add-to-cart']);
        $user->setAddToCart($add, $buyer);
        header('location: ../view/add-to-cart.php');
}





?>