<!-- Modal -->
<div class="modal fade" id="Sinup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Inscription</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" action="../pages/inscription.php" id="Sinup">
                <div class="modal-body">

                    <!-- Nom complet -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Nom complet</label>
                        <input name="name" type="text" class="form-control" id="name" placeholder="Votre nom complet">
                        <span id="SnameError" class="text-danger small"></span>
                    </div>

                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Adresse email</label>
                        <input name="email" type="email" class="form-control" id="email" placeholder="email@example.com">
                        <span id="SemailError" class="text-danger small"></span>
                    </div>

                    <!-- Mot de passe -->
                    <div class="mb-3">
                        <label for="password" class="form-label">Mot de passe</label>
                        <input name="password" type="password" class="form-control" id="password" placeholder="Mot de passe">
                        <span id="SpassError" class="text-danger small"></span>
                    </div>

                    <!-- Confirmer mot de passe -->
                    <div class="mb-3">
                        <label for="confirmPassword" class="form-label">Confirmer le mot de passe</label>
                        <input name="comfirm_pass" type="password" class="form-control" id="confirmPassword" placeholder="Confirmer le mot de passe">
                        <span id="ScomfirmError" class="text-danger small"></span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="sinup" class="btn btn-primary w-100">S’inscrire</button>
            </form>
        </div>
    </div>
</div>
</div>