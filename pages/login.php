<?php
session_start();
require_once '../config/config.php';

$name = $_POST['name'];
$password = $_POST['password'];
$result = $user->Login($name,$password);


if($result != null){
    print_r($result);
}else{
   $_SESSION['erreur'] = $name . ' Not fond';
   header("location: /../index.php");
   exit();
}