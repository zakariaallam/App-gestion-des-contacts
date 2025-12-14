<?php

class RememberMe {
    private $id_user;
    private $token;
    private $expire_at;
    public $con;

    public function __construct($con)
    {
        $this->con = $con;
    }

    public function property($id_user,$token,$expire_at){
         $this->id_user = $id_user;
         $this->token = $token;
         $this->expire_at = $expire_at;
    }

    public function SendTokenToDb(){
        $sql = "INSERT INTO remember_tokens (id_user,token,expire_at) VALUES (:id,:token,:expire)";
        $stmt = $this->con->prepare($sql);
        $stmt->bindParam('id',$this->id_user);
        $stmt->bindParam('token',$this->token);
        $stmt->bindParam('expire',$this->expire_at);
        $stmt->execute();
    }

    public function checkTokenInDataBase($token){
        $sql = "SELECT * FROM remember_tokens WHERE token = :token";
        $stmt = $this->con->prepare($sql);
        $stmt->bindParam('token',$token);
        $stmt->execute;
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}