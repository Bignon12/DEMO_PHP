<?php 
$title = "Page contact";
require_once "config.php";
require "functions.php";
$creneaux = creneaux_html(CRENEAUX);
require "header.php";
?>

<div class = "row">
    <div class = "col-md-8">
        <h2> Nous contacter</h2>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque ipsa dolorum veniam est expedita harum optio distinctio in quis illum dignissimos quibusdam recusandae, magni aut cum repellat excepturi tempora. Natus?</p>
    </div>
    <div class = "col-md-4">
        <h3>Heures d'ouverture</h3>
        <?=$creneaux?>
    </div>
</div>



<?php require "footer.php" ?>