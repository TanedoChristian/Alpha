<?php
session_start();
include '../model/User.php';


var_dump($_POST);



if(isset($_POST['submit'])){

    $firstname = trim($_POST['firstname']);
    $lastname = trim($_POST['lastname']);
    $address = trim($_POST['address']);
    $phone = trim($_POST['phone']);
    $landmark = trim($_POST['landmark']);

    $zip = trim($_POST['zip']);
    
 
    $user = new User;

    $buyer = trim($_SESSION['username']);

    $cart = $user->getAddToCart($buyer);
    $totalPrice = $user->getTotalPrice($buyer);
    
    
    foreach($cart as $r){
        $user->setCodOrder($firstname,$lastname, $address, $phone, $landmark, $r['product_name'], $r['count'], $zip);
    }
    

}
 

?>