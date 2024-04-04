<?php

$erreur = null;
$succes = null;
$email = null;
    if (!empty($_POST["email"])){
        $email = $_POST["email"];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $filename = __DIR__ . DIRECTORY_SEPARATOR . "emails" . DIRECTORY_SEPARATOR . date("m.d.y");
            file_put_contents($filename, $email . PHP_EOL, FILE_APPEND);
            echo "Votre email a bien été enregistré";
        } else {
            echo "Votre e-mail est invalide";
        }
    }
    

require "header.php"
?>

<h1>S'inscrire à la Newsletter</h1>


<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis nostrum autem id velit tempora enim, molestiae, repellat accusamus inventore sit eligendi sint! Adipisci molestiae eum inventore aperiam suscipit, explicabo at!</p>


<form action = "newsletter.php" method = "post" class = form-inline></form>
    <div class = "form-group">
        <input type = "email" name = "email" placeholder = "Entrer votre email" class="form-control">
    </div>
    <button type ="submit" class= "btn btn-primary">S'inscrire</button>
</form>

<?php require "footer.php" ?>



