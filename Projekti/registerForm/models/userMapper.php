<?php
include_once 'DBcon.php';
include_once 'userModel.php';
    class UserMapper{
        private $useri;
        private $connection;
        public function __construct($useri){
            $this->useri=$useri;
            $obj=new DBconnection();
            $this->connection= $obj->getConnection();
            
        }
        public function Insert($name,$email,$password){
            $sql= "INSERT INTO user (`Name`,Email,`Password`,isAdmin) VALUES (:emri,:email,:passi,0)"; 
            $statement = $this->connection->prepare($sql);
            $statement->bindParam(":emri", $name);
            $statement->bindParam(":email", $email);
            $statement->bindParam(":passi", $password);
            
            $statement->execute();
        }
    }
?>