<?php 
session_start();
if(!isset($_SESSION['user_id'])){
    header('location: /../index.php');
    exit();
}
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/modalDelete.php';
$btnSend = 'Ajoute';
$name = "";
$phone = "";
$email = "";
$adress = "";
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Gestion des Contacts</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container py-5">

    <!-- Titre -->
    <h1 class="mb-4 text-center">Gestion des Contacts</h1>

    <div class="row">

        <!-- ====================== A. LISTE DES CONTACTS ====================== -->
        <div class="col-lg-7 mb-4">

            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Liste des contacts</h5>
                </div>

                <div class="card-body">

                    <?php
                    $listContact = $contact->AffichierContact($_SESSION['user_id']);
                    ?>
                    <!-- Message si la liste est vide -->
                    <div class="alert alert-info <?php if($listContact) echo 'd-none' ?? ''?>">
                        Aucun contact enregistré.
                    </div>

                    <!-- Tableau des contacts -->
                    <table class="table table-striped table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th>Nom</th>
                                <th>Téléphone</th>
                                <th>E-mail</th>
                                <th>Adresse</th>
                                <th style="width: 130px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach($listContact as $row):?>
                             <tr>
                                <td><?= $row['name'] ?></td>
                                <td><?= $row['telephone'] ?></td>
                                <td><?= $row['email'] ?></td>
                                <td><?= $row['adress'] ?></td>
                                <td>
                                    <form action="contact.php" method="get">
                                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                        <button class="btn btn-sm btn-warning modifierContact">Modifier</button>
                                    </form>
                                    <form action="/controle/deleteContect.php" method="post" class="suprimierContact">
                                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                        <button class="btn btn-sm btn-danger " data-bs-toggle="modal" data-bs-target="#deleteModal">Supprimer</button>
                                    </form>
                                    <!-- <a href="#" class="btn btn-sm btn-danger">Supprimer</a> -->
                                </td>
                            </tr>
                            <?php endforeach?>
            
                        </tbody>
                    </table>

                </div>
            </div>

        </div>

        <?php
        if(isset($_GET['id'])){
            $btnSend = 'Modifier';
            $result = $contact->FindContactByID($_GET['id']);
            $name = $result['name'];
            $phone = $result['telephone'];
            $email = $result['email'];
            $adress = $result['adress'];
        }
        ?>
        <!-- ====================== B. FORMULAIRE ====================== -->
        <div class="col-lg-5">

            <div class="card shadow-sm">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0">Ajouter / Modifier un contact</h5>
                </div>

                <div class="card-body">

                    <form method="post" action="../controle/contact_Control.php" id="contactFOrm">
                        
                        <!-- id -->
                        <input type="hidden" name="id" value="<?= $_GET['id'] ?? ''?>">

                        <!-- Nom -->
                        <div class="mb-3">
                            <label class="form-label">Nom <span class="text-danger">*</span></label>
                            <input name="C_name" type="text" class="form-control" placeholder="Nom complet" value="<?= $name ?>">
                            <span id="CnameError" class="text-danger small"></span>
                        </div>

                        <!-- Téléphone -->
                        <div class="mb-3">
                            <label class="form-label">Téléphone</label>
                            <input name="C_phone" type="text" class="form-control" placeholder="+212..." value="<?= $phone ?>">
                            <span id="CphoneError" class="text-danger small"></span>
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label class="form-label">E-mail <span class="text-danger">*</span></label>
                            <input name="C_email" type="email" class="form-control" placeholder="email@example.com" value="<?= $email ?>">
                            <span id="CemailError" class="text-danger small"></span>
                        </div>

                        <!-- Adresse -->
                        <div class="mb-3">
                            <label class="form-label">Adresse</label>
                            <textarea name="C_adress" class="form-control" rows="3" placeholder="Adresse complète"><?= $adress ?></textarea>
                        </div>

                        <!-- Boutons -->
                         <input type="hidden" name="btnSend" value="<?= $btnSend ?>">
                        <button type="submit" id="btnAjoteContact" class="btn btn-success w-100" ><?= $btnSend ?></button>

                    </form>

                </div>
            </div>

        </div>

    </div>
</div>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/main.js"></script>
<script src="../assets/js/validation.js"></script>
</body>
</html>
