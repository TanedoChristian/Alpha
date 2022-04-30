<?php

include '../database/database.php';
session_start();

$database = new Database;
$connection = $database->getConnection();


if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = $connection->prepare('SELECT * from register where email = :email and password = :password');
    $sql->bindParam(":email", $email);
    $sql->bindParam(":password", $password);

    $sql->execute();
    $result = $sql->rowCount();
    
   
    if($result >=1){
        
        if($_POST['change-pass'] == $_POST['change-confirm']){
            $sql = $connection->prepare('UPDATE register set password = ? where email = ?');
            $sql->bindParam(1, $_POST['change-pass']);
            $sql->bindParam(2, $_POST['email']);
            $sql->execute();
            header('location: ../view/login.php');
        } else {
            $_SESSION['error-change'] = "Incorrect Password";
            header('location: ../view/change-password.php');
        }

    } else {
        $_SESSION['error-change'] = "Incorrect Account";
        header('location: ../view/change-password.php');
    }
}



?>