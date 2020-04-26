<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card text-center">
        <?php
            require('header.php');
        ?>
    
        <div class="card-body">
          <h5 class="card-title">Bienvenue</h5>
          <p class="card-text">Registre de carnet electronique des patients</p>
          <a href="nouvelenregistrement.html" class="btn btn-primary">suivant</a>
        </div>
   
        <?php
            require('footer.php')
        ?>
    </div> 
</body>
</html>