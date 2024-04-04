
<?php
function repondre_oui_non($phrase){ 
    while(true) {
        $reponse = readline($phrase ."o/n: ");
        if ($reponse === "o") 
        {
            return true;
        }
        elseif ($reponse === "n")
        {
            return false;
        }
    } 
}
function demander_creneau($phrase=("veuillez entrer un créneau")){
    echo $phrase, "\n";
    while(true){
        $ouverture = (int)readline("Entrez l'heure d'ouverture ");
        if ($ouverture >= 0 && $ouverture <= 23) {
            break;  
        }   
    }
    while(true){
        $fermeture = (int)readline("Entrez une heure de fermèture ");
        if ($fermeture >=0 && $fermeture <=23 && $fermeture > $ouverture){
            break;
        }
    }
    return[$ouverture, $fermeture];
}

function demander_creneaux($phrase= "veuillez entrer un créneau"){
    $creneaux = [];
    $continuer = true;
    while ($continuer){
        $creneaux[]= demander_creneau();
        $continuer = repondre_oui_non("Voulez-vous continuer");
    }
    return $creneaux;
}
$creneaux = demander_creneaux("veuillez entrer vos créneaux");


function creneaux_html(array $creneaux){
    $phrase = [];
    foreach($creneaux as $creneau){ 
        $phrase []= "de {$creneau[0]}h à {$creneau[1]}h";  
    }
    return implode ( "et", $phrase);
}


?>   

