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


    public function setCodOrder($firstname, $lastname, $address, $phone_number, $landmark, $productName, $qty, $zipCode,$user){
        $sql = "INSERT INTO cod_order (firstname,lastname, address, phone_number,landmark,  zipcode, product_name, qty, category, user) values(:firstname, :lastname, :addr, :phone, :landmark, :zip, :product_name, :qty, 'cod', :user)";
        $statement = $this->connection->prepare($sql);

        $statement->bindParam(':firstname', $firstname);
        $statement->bindParam(':lastname', $lastname);
        $statement->bindParam(':addr', $address);
        $statement->bindParam(':phone', $phone_number);
        $statement->bindParam(':landmark', $landmark);
        $statement->bindParam(':zip', $zipCode);
        $statement->bindParam(':qty', $qty);
        $statement->bindParam(':user', $user);
        $statement->bindParam(':product_name', $productName);
   

        $statement->execute();

       
    }

    public function removeCartByUser($user){
        $sql = "DELETE from add_to_cart where user =:u";

        $statement = $this->connection->prepare($sql);
        $statement->bindParam(':u', $user);
        $statement->execute();

    }

    public function getPurchaseInfo($buyer){
        $sql = "SELECT *, count(*) as count, (SELECT product_price from product where cod_order.product_name = product.product_name) as price from cod_order where user =:user group by product_name";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(':user', $buyer);
        $statement->execute();

        $result = $statement->fetchAll();

        return $result;
    }

    public function getCustomerPurchaseInfo($buyer){
        $sql = "SELECT * from cod_order where user = :user";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(':user', $buyer);

        $statement->execute();

        $result = $statement->fetch();
        return $result;
    }

    

    public function getTotalPurchasePrice($buyer){
        $sql = "SELECT sum(product.product_price) as total from product inner join cod_order on cod_order.product_name = product.product_name where cod_order.user =:user";
        $statement = $this->connection->prepare($sql);
        
        $statement->bindParam(':user', $buyer);
        $statement->execute();
        $result = $statement->fetch();

        return $result;
    }


    public function getAllProduct($params){
        $sql = "SELECT * from product where product_category =:p or product_tag =:p";
        $statement = $this->connection->prepare($sql);

        $statement->bindParam(':p', $params);
        $statement->execute();

        $result = $statement->fetchAll();

        return $result;
    }
    


}




















?>