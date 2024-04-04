
<?php

    $title = "page tableau";
    require "header.php";

    $lignes = file (__DIR__ . DIRECTORY_SEPARATOR . "Assets" . DIRECTORY_SEPARATOR . "customers.csv");
    echo '<table class="table table-bordered table-striped">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>Prénom</th>';
    echo '<th>Nom</th>';
    echo '<th>Email</th>';
    echo '<th>Téléphone</th>';
    echo '<th>Ville</th>';
    echo '<th>Etat</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    foreach ($lignes as $k => $ligne){
        $lignes[$k] = explode (",", $ligne);
        echo '<tr>';
        foreach ($lignes[$k] as $item) {
            echo '<td>' . $item . '</td>';
        }
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';

?>

            

             
               

