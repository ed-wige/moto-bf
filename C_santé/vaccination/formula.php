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
        <form method="post" action="enregistrer.php" enctype="multipart/form-data" data-toggle="validator" id="frm">
        <h2>Informations du patients</h2> <br>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">pseudo</label>
                      <input type="text" name="pseu" class="form-control" id="inputnom" required>
                      
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">messag</label>
                      <input type="text" name="mess" class="form-control" id="inputprenom" required>
                    </div>
                  </div>
                  <hr>
                  <input type="submit" class="btn btn-primary" value="Enregistrer">
                  <input type="reset" class="btn btn-danger" value="Reinitialiser">
            <br><br><br>
        <?php
            require('footer.php')
        ?>
    </div> 
</body>
</html>