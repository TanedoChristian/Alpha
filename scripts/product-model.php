<?php

include '../database/database.php';


session_start();




if(isset($_POST['category'])){

    $_SESSION['category'] = $_POST['category'];
    $_SESSION['gender'] = $_POST['gender'];


    $category = $_SESSION['category'];
    $gender = $_SESSION['gender'];

}

$tagName = trim($_SESSION['gender']);


if($_SESSION['category'] == "Basketball Shoes"){
    $category = "BasketballShoes";
}

$category = trim($_SESSION['category']);







$database = new Database;
$connection = $database->getConnection();



$statement = $connection->prepare('SELECT * from product where product_tag =:tag and product_category =:category');
$statement->bindParam(":tag", $tagName, PDO::PARAM_STR);
$statement->bindParam(":category", $category, PDO::PARAM_STR);
$statement->execute();


$result = $statement->fetchAll();

$title = $tagName . " /" . $category;



function getTitle($product,$tag){
    $database = new Database;
    $connection = $database->getConnection();

    $statement = $connection->prepare("SELECT * from product where product_category =:productName and product_tag=:tag");
    $statement->bindParam(":productName", $product, PDO::PARAM_STR);
    $statement->bindParam(":tag", $tag, PDO::PARAM_STR);
    $statement->execute();

    $result = $statement->fetchAll();
    
    foreach($result as $r){
        $title = $r['product_tag'] . " > " . $r['product_category'];
        return $title;
    }
}


$trail = getTitle($category, $tagName);







?>