<?php
$title = "Composer votre glace";

require "header.php";

$parfums = [
    "fraise" => 4,
    "vanille" => 3,
    "chocolat" => 5
];

$cornets = [
    "pot" => 2,
    "cornet" => 3
];

$supplements = [
    "Pépites de chocolat" => 1,
    "chantilly" => 0.5
];

?> 
<?php
$attribute ="";
$ingredients = [];
$total = 0;

if (isset($_GET["parfum"])){
    foreach($_GET["parfum"] as $parfum){
        if (isset ($parfums[$parfum])){
            $ingredients [] = $parfum;
            $total += $parfums[$parfum];
        }
    }
}

if (isset($_GET["supplement"])){
    foreach($_GET["supplement"] as $supplement){
        if (isset ($supplements[$supplement])){
            $ingredients [] = $supplement;
            $total += $supplements[$supplement];
        }
    }
}

if (isset($_GET["cornet"])){
    $cornet = $_GET["cornet"];
        if (isset ($cornets[$cornet])){
            $ingredients [] = $cornet;
            $total += $cornets[$cornet];
        }
    }

?>
<div class = "row">
    <div class = "col-md-4">
        <h2>Votre glace</h2>
        <ul>
            <?php foreach($ingredients as $ingredient): ?>
            <li><?= $ingredient ?></li>
            <?php endforeach;?>
        </ul>
        <p><strong>Prix Total: <?= $total?></strong></p>
</div>
    <div class= "col-md-8">
                <h1> Composer votre glace</h1>
            <h4>Chooisissez vos parfums</h4>
            <form action = "/jeu.php" methode = "GEt">
                <?php foreach ($parfums as $parfum => $prix): ?>
                    <div class = "checkbox">
                        <label>
                            <input type="checkbox" name = "parfum[]" value = "<?=$parfum?>" $attribute>
                            <?= $parfum ?>: <?= $prix ?> euros
                        </label>
                    </div>
                <?php endforeach; ?>
            <h4>Chooisissez votre pot</h4>
                <?php foreach ($cornets as $cornet => $prix): ?>
                    <div class = "radio">
                        <label>
                            <input type="radio" name = "cornet" value = "<?=$cornet?>">
                            <?= $cornet ?>: <?= $prix ?> euros
                        </label>
                    </div>
                <?php endforeach; ?>
                    
                <h4>Chooisissez votre supplément</h4>
                <?php foreach ($supplements as $supplement => $prix): ?>
                    <div class = "checkbox">
                        <label>
                            <input type="checkbox" name = "supplement" value = "<?=$supplement?>">
                            <?= $supplement ?>: <?= $prix ?> euro
                        </label>
                    </div>
                <?php endforeach; ?>
                <button class = "btn btn-primary" type = "submit">Composer</button>
    </div>

</div>
       
    
  
</form>
