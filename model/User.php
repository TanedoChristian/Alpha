<?php


include '../database/database.php';



class User {

    private $connection;

    public function __construct(){
        $database = new Database;
        $this->connection = $database->getConnection();
    }   


    public function setAddToCart($product, $buyer){


        $sql = "INSERT INTO add_to_cart(product_name, user) values(:p, :b)";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(':p', $product);
        $statement->bindParam(':b', $buyer);
        $statement->execute();


    }

    public function getAddToCart($username){

        $sql = "SELECT *, count(*) as count, count(*) * product.product_price as price from product inner join add_to_cart on add_to_cart.product_name = product.product_name where user =:user group by product.product_name";


        $statement = $this->connection->prepare($sql);
        $statement->bindParam(':user', $username);
        $statement->execute();

        $result = $statement->fetchAll();

        return $result;

    }


    public function removeProduct($user, $product) {
        $sql = "DELETE from add_to_cart where user =:u and product_name =:p";
        $statement = $this->connection->prepare($sql);

        $statement->bindParam(':u' , $user);
        $statement->bindParam(':p', $product);

        $statement->execute();

    }

    public function subtractProduct($id, $buyer){
        $sql = "DELETE from add_to_cart where id =:id";
        $statement = $this->connection->prepare($sql);

        $statement->bindParam(':id', $id);
        $statement->execute();
    }

    public function getTotalPrice($buyer){
        $sql = "SELECT sum(product.product_price) as total from product inner join add_to_cart on add_to_cart.product_name = product.product_name where add_to_cart.user =:user";
        $statement = $this->connection->prepare($sql);
        
        $statement->bindParam(':user', $buyer);
        $statement->execute();
        $result = $statement->fetch();

        return $result;
    }

    public function getCustomerInfor($buyer){
        $sql = "SELECT * from register where username =:b";
        $statement = $this->connection->prepare($sql);

        $statement->bindParam(':b', $buyer);
        $statement->execute();
        $result = $statement->fetch();
        
        return $result;
    }


    public function setCodOrder($firstname, $lastname, $address, $phone_number, $landmark, $productName, $qty, $zipCode){
        $sql = "INSERT INTO cod_order (firstname,lastname, address, phone_number,landmark,  zipcode, product_name, qty, category) values(:firstname, :lastname, :addr, :phone, :landmark, :zip, :product_name, :qty, 'cod')";
        $statement = $this->connection->prepare($sql);

        $statement->bindParam(':firstname', $firstname);
        $statement->bindParam(':lastname', $lastname);
        $statement->bindParam(':addr', $address);
        $statement->bindParam(':phone', $phone_number);
        $statement->bindParam(':landmark', $landmark);
        $statement->bindParam(':zip', $zipCode);
        $statement->bindParam(':qty', $qty);
        $statement->bindParam(':product_name', $productName);
   

        $statement->execute();

       
    }


}




















?>