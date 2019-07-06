<?php
class Connection{
    public $conn;
    public function __construct(){
        $this->conn = new PDO('mysql:host=localhost;dbname=c8task','root','');
        //Check if connected: if($this->conn){ echo "Connected"; }
    }
    
    public function insertData($name,$model,$type,$price){
        try{
            $statement = $this->conn->prepare(
                "INSERT INTO mobiles(name,model,type,price) VALUES (:name,:model,:type,:price)"
            );

            $statement->execute(
                array(
                    ':name' => $name,
                    ':model' => $model,
                    ':type' => $type,
                    ':price' => $price
                )
            );
            echo "Inserted<br>";
        }
        catch (Exception $e){
            echo "error: ".$e->getMessage();
        }
    }
    
    public function getAll($query) {
        $statement = $this->conn->prepare($query);
        $statement->execute();
        return $statement->fetchAll();
    }
}
?>