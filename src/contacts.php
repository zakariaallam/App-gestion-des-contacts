<?php

class Contacts {
    private $name;
    private $telephone;
    private $email;
    private $adress;
    private $id_user;
    private $con;

    public function __construct($con){
        $this->con = $con;
    }

    public function property($name , $telephone,$email,$adress,$id_user){
         $this->name = $name;
         $this->telephone = $telephone;
         $this->email = $email;
         $this->adress = $adress;
         $this->id_user = $id_user;
    }

    public function AjouteContact(){
          $sql = "INSERT INTO contacts (name,telephone,email,adress,id_user) VALUES (:name,:telephone,:email,:adress,:id_user)";
          $stmt = $this->con->prepare($sql);
          $stmt->bindParam('name',$this->name);
          $stmt->bindParam('telephone',$this->telephone);
          $stmt->bindParam('email',$this->email);
          $stmt->bindParam('adress',$this->adress);
          $stmt->bindParam('id_user',$this->id_user);
          $stmt->execute();
          return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function AffichierContact($id){
        $sql = "SELECT * FROM contacts WHERE id_user = :id";
        $stmt = $this->con->prepare($sql);
        $stmt->bindPAram(':id',$id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function FindContactByID($id){
        $sql = "SELECT * FROM contacts WHERE id = :id";
        $stmt = $this->con->prepare($sql);
        $stmt->bindParam('id',$id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function ModifierContact($id){
        $sql = "UPDATE contacts SET name = :name ,telephone = :phone, email = :email , adress = :adress WHERE id = :id";
        $stmt = $this->con->prepare($sql);
        $stmt->bindParam('name',$this->name);
        $stmt->bindParam('phone',$this->telephone);
        $stmt->bindParam('email',$this->email);
        $stmt->bindParam('adress',$this->adress);
        $stmt->bindParam('id',$id);
        $stmt->execute();
    }

    public function DeletContact($id){
        $sql = "DELETE FROM contacts WHERE id = :id";
        $stmt = $this->con->prepare($sql);
        $stmt->bindParam('id',$id);
        $stmt->execute();
    }
}