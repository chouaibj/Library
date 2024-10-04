<?php 
ob_start(); 
?>

<div class="row">
    <div class="col-6">
        <img src="<?= URL ?>public/images/<?= $livre->getImage(); ?>">
    </div>
    <div class="col-6">
        <p>Titre : <?= $livre->getTitre(); ?></p>
        <p>Nombre de pages : <?= $livre->getNbPages(); ?></p>
        <p>Resumé :</p>
    </div>
</div>

<style>
<?php
$content = ob_get_clean();
$titre = $livre->getTitre();
require "template.php";
include "css/style.css" 
?>
</style>