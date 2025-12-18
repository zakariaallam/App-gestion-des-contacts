<?php
session_start();
require_once 'config.php';

if(isset($_SESSION['user_id'])) header('location: /../pages/profil.php');

if(isset($_COOKIE['remember_cookie'])){
    $hash = hash('sha256', $_COOKIE['remember_cookie']);
    $result_R = $rememberMe->checkTokenInDataBase($hash);
    if($result_R){
        $_SESSION['user_id'] = $result_R['id_user'];
        header('location: /../pages/profil.php');
        exit();
    }
}