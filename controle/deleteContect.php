<?php

require_once __DIR__ . '/../config/config.php';
$id = $_POST['id'];
if($id){
    $contact->DeletContact($id);
    header('location: /../pages/contact.php');
    exit();
}