<?php
class Connection{
    public $conn;
    public function __construct(){
        $this->conn = new PDO('mysql:host=localhost;dbname=assign02','root','');
        //Check if connected:          if($this->conn){ echo "Connected"; }
    }
    
    public function insertData($name,$model,$price){
        try{
            $statement = $this->conn->prepare(
                "INSERT INTO mobiles(name,model,price) VALUES (:name,:model,:price)"
            );
            $statement->execute(
                array(
                    ':name' => $name,
                    ':model' => $model,
                    ':price' => $price
                )
            );
            echo "Inserted";
        }
        catch (Exception $e) {
            echo "error: ".$e->getMessage();
        }
    }
}
?>