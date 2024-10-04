<?php 
ob_start(); 
?>

<div class="info">
<p>lis! une phrase entendu toute ma vie. Ma plateforme permet aux lecteurs de développer leur plaisir de lecture . Il rassemble 
    les ouvrages d'une quarantaine de ses éditeurs Editis (Robert Laffont, Lonely Planet, Pocket, Plon, Perrin, Presses de lacité, 
    First, la Découverte, Sonatine, Nathan, cherche midi, le Robert, Julliard...) . La lecture est le progrès de l'humain.</p>
</div>

<?php
$content = ob_get_clean();
$titre = "A Propos";
require "template.php";
?>