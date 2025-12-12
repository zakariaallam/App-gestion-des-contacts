<?php
session_start();
require_once __DIR__ . '/../config/config.php';

    $C_NAME = $_POST['C_name'];
    $C_PHONE = $_POST['C_phone'];
    $C_EMAIL = $_POST['C_email'];
    $C_adress = $_POST['C_adress'];
    $ID_USER = $_SESSION['result']['id'];
    echo $C_NAME . $C_PHONE . $C_EMAIL . $C_adress . $ID_USER ;

      $contact->property($C_NAME,$C_PHONE,$C_EMAIL,$C_adress,$ID_USER);

      $contact->AjouteContact();
      header("location: /../pages/profil.php");
      exit();