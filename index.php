<?php  session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title> Gestion Contact</title>
</head>

<body class="d-flex flex-column min-vh-100">

    <?php
    include_once 'includes/header.php';
    require_once 'config/config.php';
    include_once 'includes/modelLogin.php';
    include_once 'includes/modalSinup.php'
    ?>
    <!-- BODY -->
    <main class="container my-5 text-center flex-grow-1">
        <h1 class="mb-4">Bienvenue sur ContactsApp</h1>
        <p class="lead">Gérez facilement vos contacts, ajoutez, modifiez et supprimez vos contacts en toute simplicité.</p>
        <button class="btn-primary btn btn-lg mt-3" data-bs-toggle="modal" data-bs-target="#login" >Commencer</button>
    </main>

    <?php include 'includes/footer.php' ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/validation.js"></script>
</body>

</html>