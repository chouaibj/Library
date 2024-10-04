<?php 
ob_start(); 
?>

<form method="POST" action="<?= URL ?>livres/av" enctype="multipart/form-data">
    <div class="form-group">
        <label for="titre">Titre : </label>
        <input type="text" class="form-control" id="titre" name="titre">
    </div>
    <div class="form-group">
        <label for="nbPages">Nombre de pages : </label>
        <input type="number" class="form-control" id="nbPages" name="nbPages">
    </div>
    <div class="form-group">
        <label for="image">Image : </label>
        <input type="file" class="form-control-file" id="image" name="image">
    </div>
    <div class="valid-ajout">
    <button type="submit" class="btn btn-primary">Valider</button>
    </div>
</form>

<style>
<?php
$content = ob_get_clean();
$titre = "Ajout d'un livre";
require "template.php";
include "css/style.css" 
?>
</style>