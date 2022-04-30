<?php

include '../database/database.php';

session_start();



if(isset($_POST['submit'])){
    if($_POST['password'] != $_POST['confirm_password'] || !preg_match( '/[^A-Za-z0-9]+/', $_POST['password']) || strlen($_POST['password']) < 8){

        $_SESSION['password_match'] = "Password and confirm password must be match";
        $_SESSION['alpha_password'] = "Password must contain alpha numeric";
        $_SESSION['length_password'] = "Password must contain 8 characters or more";
        header('location: ../view/signup.php');
} else {

    $database = new Database;
    $connection = $database->getConnection();


    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $phoneNumber = $_POST['phone_number'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = $connection->prepare("INSERT INTO register(firstname,lastname,age,address,phone_number,email,username,password) values(?,?,?,?,?,?,?,?)");

    $sql->bindParam(1, $firstname);
    $sql->bindParam(2, $firstname);
    $sql->bindParam(3, $age);
    $sql->bindParam(4, $address);
    $sql->bindParam(5, $phoneNumber);
    $sql->bindParam(6, $email);
    $sql->bindParam(7, $username);
    $sql->bindParam(8, $password);

    $sql->execute();

    $_SESSION['account_created'] = "Account has been created";
    header('location: ../view/login.php');
    }
    
}








?>