<?php

// require_once __DIR__  . '/../src/DataBase.php';
// require_once __DIR__ . '/../src/users.php';
// require_once __DIR__ . '/../src/contacts.php';
// require_once __DIR__ . '/../src/RememberMe.php';
require_once __DIR__ . '/../vendor/autoload.php';

$db = new DataBase();
$con = $db->connecte();

$user = new Users($con);

$contact = new Contacts($con);

$rememberMe = new RememberMe($con);