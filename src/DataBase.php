<?php

class DataBase {
    private  $DNS = 'pgsql:host=db;dbname=Contact';
    private $DB_USER = 'user';
    private $DB_PASS = 'root123';
    public $con;

    public function connecte(){
       $this->con = null;

       try{
        $this->con = new PDO($this->DNS,$this->DB_USER,$this->DB_PASS);
        $this->con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
       }
       catch(PDOException $e){
           echo "Erreur : " . $e->getMessage();
       }

       return $this->con;
    }


}