<?php

require_once __DIR__  . '/../src/DataBase.php';
require_once __DIR__ . '/../src/users.php';

$db = new DataBase();
$con = $db->connecte();

$user = new Users($con);