<?php include("inc/header.inc.php"); ?>
<form class="form-inline">
  <label class="sr-only" for="inlineFormInputName2">Name</label>
  <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="email">
  </div>
  <div class="form-group">
    <label align    for="inputPassword6">Password</label>
    <input type="password" id="inputPassword6" class="form-control mx-sm-3" aria-describedby="passwordHelpInline">
    <small id="passwordHelpInline" class="text-muted">
    </small>
  </div>

  <div class="form-check mb-2 mr-sm-2">
    <input class="form-check-input" type="checkbox" id="inlineFormCheck">
    <label class="form-check-label" for="inlineFormCheck">
      Remember me
    </label>
  </div>

</form>
<button type="button" class="btn btn-primary btn-sm">se connecter</button>
<button type="button" class="btn btn-secondary btn-sm" onClick="document.location.href='register.php'">s'enregistrer</button>