<?php include("inc/header.inc.php"); ?>
<form>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault01">Prénom</label>
      <input type="text" class="form-control" id="validationDefault01" value="" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationDefault02">Nom</label>
      <input type="text" class="form-control" id="validationDefault02" value="" required>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault03">Ville</label>
      <input type="text" class="form-control" id="validationDefault03" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault04">pays</label>
      <select class="custom-select" id="validationDefault04" required>
        <option selected disabled value="">Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault05">Département</label>
      <input type="text" class="form-control" id="validationDefault05" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationDefault03">Adresse</label>
      <input type="text" class="form-control" id="validationDefault03" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationDefault03">numéro de téléphone</label>
      <input type="text" class="form-control" id="validationDefault03" required>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        J'accepte les conditions d'utlisations
      </label>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">enregistrer</button>
</form>