<?php

require_once __DIR__ . '/../config/config.php';

$name = $_POST['name'];
$password = $_POST['password'];
$rgxName = "/^[A-z0-9]{3,20}$/";
$resulta = $user->checkUserIsFond($name);

if (preg_match($rgxName, $name) && strlen($password) > 5) {
    if ($resulta == null) {
        $hashPassword = password_hash($password,PASSWORD_DEFAULT);
        $res = $user->Sinup($name, $hashPassword);
        header('location: /../pages/profil.php');
        exit();
    }

    if ($resulta != null) {
        echo 'the name is alrady inscrer';
    }
}
