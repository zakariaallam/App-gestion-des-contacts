<div class="modal fade" id="deleteModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title">Confirmation de suppression</h5>
      </div>

      <div class="modal-body">
        <p>
          Tapez <strong>delete</strong> pour confirmer la suppression.
        </p>
        <input type="text" id="deleteInput" class="form-control">
        <span id="deleteError" class="text-danger small"></span>
      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">
          Annuler
        </button>
        <button class="btn btn-danger" id='btnModalDelete'>
          Supprimer
        </button>
      </div>

    </div>
  </div>
</div>