<?php

class RememberMe {
    private $id_user;
    private $token;
    public $con;

    public function __construct($con)
    {
        $this->con = $con;
    }

    public function property($id_user,$token){
         $this->id_user = $id_user;
         $this->token = $token;
    }

    public function SendTokenToDb(){
        $sql = "INSERT INTO remember_tekens (id_user,token,expire_at) VALUES (:id,:token,NOW() + INTERVAL '30 days')";
        $stmt = $this->con->prepare($sql);
        $stmt->bindParam('id',$this->id_user);
        $stmt->bindParam('token',$this->token);
        $stmt->execute();
    }

    public function checkTokenInDataBase($token){
        $sql = "SELECT * FROM remember_tekens WHERE token = :token";
        $stmt = $this->con->prepare($sql);
        $stmt->bindParam('token',$token);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function deleteTokenFromeDB($id){
        $sql = "DELETE FROM remember_tekens WHERE id_user = :id";
        $stmt = $this->con->prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
    }
}