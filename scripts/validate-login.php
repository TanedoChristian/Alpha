<?php


include '../database/database.php';
session_start();

$database = new Database;
$connection = $database->getConnection();


if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = $connection->prepare('SELECT * from register where username = :username and password = :password');
    $sql->bindParam(":username", $username);
    $sql->bindParam(":password", $password);

    $sql->execute();
    $result = $sql->rowCount();
    
   
    if($result >=1){

        $_SESSION['username'] = $username;
        header( "location: ../index.php" ); 

    } else {
        $_SESSION['error'] = "Error: Account not found";
        header('location: ../view/login.php');
    }
   
}















?>