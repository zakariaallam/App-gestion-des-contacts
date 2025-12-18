<?php 
session_start();
require_once  __DIR__ . '/../config/config.php';
if(!isset($_POST['Logout'])) header('location: /../index.php');

if(isset($_COOKIE['remember_cookie'])){
      $rememberMe->deleteTokenFromeDB($_POST['id']);
      setcookie('remember_cookie','',time() - (86400 * 30),"/","",false,true);
      session_unset();
      session_destroy();
header('location: /../index.php');
exit();
}else{
//     header('location: /../index.php');
//     exit();
}

