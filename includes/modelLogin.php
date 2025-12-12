<!-- Modal -->
<div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <?php
      if(isset($_SESSION['erreur'])){
         echo "<div class='alert alert-danger text-center' id='erreur_login'>".$_SESSION['erreur']."</div>";
        unset($_SESSION['erreur']);
      }
      ?>
      <form method="post" action="../controle/login.php" id="login">
        <div class="modal-body">

          <!-- Email -->
          <div class="mb-3">
            <label for="name" class="form-label fw-bold">User Name :</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name">
            <span id="nameError" class="text-danger"></span>
          </div>

          <!-- Password -->
          <div class="mb-3">
            <label for="password" class="form-label">Password :</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
            <span id="passError" class="text-danger"></span>
          </div>
        </div>
        <div class="modal-footer">
          <button  type="submit" name="login" class="btn btn-primary w-100">Login</button>
      </form>
    </div>
  </div>
</div>
</div>