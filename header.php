<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $title; ?>
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body> 
    <header>
        <div class="d-flex justify-content-between">
            <img src="Assets/img/jarditou_logo.jpg" title="Logo jarditou" alt="logo jarditou" class="w-25 img-fluid">
            <span>Tout le jardin</span>
        </div>
    </header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">Jarditou.com</a>
        <ul class="nav">
            <li class="nav-item <?php if ($nav === 'index') {"active";}?>">
                <a class="nav-link" href="index.php">Accueil</a>
            </li>
            <li class="nav-item <?php if ($nav === 'contact') {"active";}?>">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="tableau.php">Tableau</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true"></a>
            </li>
        </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Votre promotion" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Rechercher</button>
            </form>
          </div>
        </div>
      </nav>
    <!-- <img class=" col-12" src="Assets/img/promotion.jpg" title="image entete" alt="image entete"> -->
    </body>
</html>