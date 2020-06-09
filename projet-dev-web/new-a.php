<?php include("inc/header.inc.php"); ?>


<div class="starter-template">  
    <form method="POST" action="" enctype='multipart/form-data'>

        <div class="form-group">
            <label for="Titre">Titre</label>
            <input type="texte" class="form-control" id="Titre" name="Titre">
        </div>

        <div class="form-group">
            <label for="Entreprise">Localisation</label>
            <input type="texte" class="form-control" id="Entreprise" name="Entreprise">
        </div>

        <div class="form-group">
            <label for="Description">Description</label>
            <textarea rows="10" class="form-control" id="Description" name="Description"></textarea>
        </div>

        <div class="form-group">
            <label for="">Date du poste</label>
            <input type="texte" class="form-control" id="date" name="date">
        </div>
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Choisir une image </label>
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>

    </form>
</div>
<?php include("inc/footer.inc.php"); ?> 