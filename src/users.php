<?php

class Users {
    private $name;
    private $password;
    private $con;

    public function __construct($con)
    {
        $this->con =  $con;
    }

    public function checkUserIsFond($name){
        $sql = "SELECT name FROM users WHERE name = :name";
        $stmt = $this->con->prepare($sql);
        $stmt->bindParam('name',$name);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function FindUserByID($id){
        $sql = "SELECT * FROM users WHERE id = :id";
        $stmt = $this->con->prepare($sql);
        $stmt->bindParam('id',$id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function Sinup($name,$password){
       $sql = "INSERT INTO users(name,password) VALUES (:name,:pass)";
       $stmt = $this->con->prepare($sql);
       $stmt->bindParam('name',$name);
       $stmt->bindParam('pass',$password);
       $stmt->execute();
    }

    public function Login($name){
            $sql = "SELECT * FROM users WHERE name = :username ";
            $stmt = $this->con->prepare($sql);
            $stmt->bindParam('username',$name);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
}