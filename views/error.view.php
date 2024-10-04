<?php 
ob_start(); 
?>

<?= $msg; ?>

<style>
<?php
$content = ob_get_clean();
$titre = "Erreur !!!";
require "template.php";
include "css/style.css" 
?>
</style>