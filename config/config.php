<?php
ini_set('session.use_strict_mode',1);
session_set_cookie_params([
    'lifetime' => 0,
    'path' => '/',
    'secure' => true,
    'httponly' => true,
     'samesite' => 'Strict',

]);
session_start();

require_once __DIR__  . '/../src/DataBase.php';
require_once __DIR__ . '/../src/users.php';
require_once __DIR__ . '/../src/contacts.php';
require_once __DIR__ . '/../src/RememberMe.php';

$db = new DataBase();
$con = $db->connecte();

$user = new Users($con);

$contact = new Contacts($con);

$rememberMe = new RememberMe($con);