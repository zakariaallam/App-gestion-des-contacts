<?php
session_start();
require_once '../config/config.php';

$name = $_POST['name'];
$password = $_POST['password'];
$result = $user->Login($name,$password);

if($result != null){
    $_SESSION['name'] = $name ;
    $_SESSION['time'] = time();
    $_SESSION['result'] =  $result;
    header("location: /../pages/profil.php");
    exit();
}else{
   $_SESSION['erreur'] = $name . " You D'ont have accuont please SinUp ";
   header("location: /../index.php");
   exit();
}