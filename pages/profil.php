<?php
session_start();
require_once __DIR__ . '/../config/config.php';

if(!isset($_SESSION['user_id'])){
    header('location: /../index.php');
    exit();
}
// if(isset($_POST['submit'])){
//     if($_POST[''] ===)
// }

$profil = $user->FindUserByID($_SESSION['user_id']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title> Gestion Contact</title>
</head>
<body data-bs-theme="light">
<div class="text-end">
<button id="dark" class="rounded-circle btn btn-dark"><i class="fa-solid fa-moon "></i></button>
<button id="light" class="rounded-circle btn btn-Light"><i class="fa-regular fa-lightbulb"></i></button>
</div>
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

        <form action="/controle/logout.php" method="post">
            <input type="hidden" value="<?= $profil['id'] ?? '' ?>" name="id">
            <button name="Logout" class="btn btn-danger w-100 mt-3"> Logout </button>
        </form>

    </div>
</div>

<!-- Bootstrap JS -->
 <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/validation.js"></script>
</body>
</html>
