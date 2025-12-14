<?php
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../config/auto.php';

if(!isset($_SESSION['user_id'])){
    header('location: /../index.php');
    exit();
}
$profil = $user->FindUserByID($_SESSION['user_id'])
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title> Gestion Contact</title>
</head>
<body>

<?php
// if(isset($_SESSION['erreur'])){
//     echo '<h3 class="text-center text-danger mt-4">' . $_SESSION['erreur'] . '</h3>';
//     unset($_SESSION['erreur']);
// }

// if(isset($_SESSION['name'])){
//     echo '<h3 class="text-center text-success">' . $_SESSION['name'] . '</h3>';
//     echo '<br>';
//     print_r($_SESSION['result']);
//     echo '<br>';
//     echo  '<h3 class="text-center text-success">' .date('Y-m-d H:i:s',$_SESSION['time'])  . '</h3>';
//     unset($_SESSION['name']);
//     unset($_SESSION['result']);
//     unset($_SESSION['time']);
// }
?>

<div class="container mt-5">
    <div class="card shadow-sm p-4">

        <h3 class="text-center mb-4"> Profil</h3>

        <div class="mb-3">
            <label class="form-label fw-bold">Name :</label>
            <div class="form-control"><?= $profil['name'] ?></div>
        </div>

        <div class="mb-3">
            <label class="form-label fw-bold">date iscription</label>
            <div class="form-control"><?= $profil['date_inscription'] ?></div>
        </div>

        <div class="mb-3">
            <label class="form-label fw-bold">date login</label>
            <div class="form-control"><?= date('Y-m-d H:i:s',$_SESSION["time"]) ?></div>
        </div>

        <a href="contact.php" class="btn btn-primary w-100 mt-3">go to page contact</a>

    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/validation.js"></script>
</body>
</html>
