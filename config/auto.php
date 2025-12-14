<?php
require_once 'config.php';

if(isset($_SESSION['user_id'])){
    return;
}

if(isset($_COOKIE['remember_cookie'])){
    $hash = hash('sha256', $_COOKIE['remember_cookie']);
    $result = $rememberMe->checkTokenInDataBase($hash);

    if($result){
        session_regenerate_id(true);
        $_SESSION['user_id'] = $result['id'];
    }
}