<?php 
ob_start(); 
?>

<div class="intro">
<p>En cette période de crise sanitaire qui incite chacun à rester chez soi,ma Bibliothèque en ligne continuera de mettre à 
    disposition toute la richesse de ses collections et la diversité des Livres et bientot plus encore, 
    il existe des millions de ressources disponibles en ligne pour vous aider à travailler, étudier et vous détendre. </p>
</div>

<?php
$content = ob_get_clean();
$titre = "Bibliothèque en ligne";
require "template.php";
?>