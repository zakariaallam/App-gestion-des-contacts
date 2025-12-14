<?php
require_once __DIR__ . '/../config/config.php';

    $id = $_POST['id'];
    $C_NAME = $_POST['C_name'];
    $C_PHONE = $_POST['C_phone'];
    $C_EMAIL = $_POST['C_email'];
    $C_adress = $_POST['C_adress'];
    $ID_USER = $_SESSION['user_id'];

      

if($_POST['btnSend'] == 'Modifier'){

  $contact->property($C_NAME,$C_PHONE,$C_EMAIL,$C_adress,$ID_USER);
  $contact->ModifierContact($id);
  header("location: /../pages/contact.php");
  exit();
}

if($_POST['btnSend'] == "Ajoute"){
   $contact->property($C_NAME,$C_PHONE,$C_EMAIL,$C_adress,$ID_USER);

      $contact->AjouteContact();
      header("location: /../pages/contact.php");
      exit();
}