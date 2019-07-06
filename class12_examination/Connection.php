<?php
class Connection{
    public $conn;
    public function __construct(){
        $this->conn = new PDO('mysql:host=localhost;dbname=c12exam','root','');
    }
    
    public function insertData($tasks){
        try{
            $statement = $this->conn->prepare(
                "INSERT INTO task(tasks) VALUES (:tasks)"
            );

            $statement->execute(
                array(':tasks' => $tasks)
            );
            echo "<center>Inserted<br></center>";
        }
        catch (Exception $e){
            echo "error: ".$e->getMessage();
        }
    }
    
    public function insertCompleteTask($tasks){
        try{
            $statement = $this->conn->prepare(
                "INSERT INTO task_done(tasks) VALUES (:tasks)"
            );

            $statement->execute(
                array(':tasks' => $tasks)
            );
        }
        catch (Exception $e){
            echo "error: ".$e->getMessage();
        }
    }
    
    public function getAll($query,$array){ //SELECT query works here + Search
        $statement = $this->conn->prepare($query);
        $statement->execute($array);
        return $statement->fetchAll();
    }
    
    public function update($query,$array){ //EDIT, DELETE & Others queries work here
        $statement = $this->conn->prepare($query);
        $statement->execute($array);
        echo "<center>Updated!</center>";
    }
    
    public function updateCT($query,$array){ //EDIT, DELETE & Others queries work here
        $statement = $this->conn->prepare($query);
        $statement->execute($array);
    }
}
?>