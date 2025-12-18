<?php
session_start();
require_once '../config/config.php';

$name = $_POST['name'];
$password = $_POST['password'];
$remember = isset($_POST['remember']);
$result = $user->Login($name,$password);
if($result && password_verify($password,$result['password'])){
    $_SESSION['user_id'] = $result['id'];
    $_SESSION['time'] = time();
    if($remember){
        $token = bin2hex(random_bytes(32));
        $hash = hash('sha256',$token);
        $rememberMe->property($result['id'],$hash,'30 day');
        $rememberMe->SendTokenToDb();

        setcookie(
            "remember_cookie",
            $token,
            time() + (86400 * 30),
            "/",
            "",
            true,
            true

        );
    }
    
    header('location: /../pages/profil.php');
    exit();
}else{
       $_SESSION['erreur'] = $name . " You D'ont have accuont please SinUp ";
   header("location: /../index.php");
   exit();
}


// if($result != null){
//     $_SESSION['name'] = $name ;
//     $_SESSION['time'] = time();
//     $_SESSION['result'] =  $result;
//     header("location: /../pages/profil.php");
//     exit();
// }else{
//    $_SESSION['erreur'] = $name . " You D'ont have accuont please SinUp ";
//    header("location: /../index.php");
//    exit();
// }