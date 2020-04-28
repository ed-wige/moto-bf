<!Doctype html>
<html>
  <header>
  <meta charset='utf-8'>
  <title>gestion</title>
  <link rel="stylesheet" href="style/bootstrap4/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</headerd>
<body>

<form method="post" action="enregistrer.php" enctype="multipart/form-data" data-toggle="validator" id="frm">
        <h2>Informations du patient  </h2> <br>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Marque</label>
                      <input type="text" name="marque" class="form-control" id="inputnom" required>   
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">Modèle</label>
                      <input type="text" name="modele" class="form-control" id="inputprenom" required>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Cylindre</label>
                      <input type="text" name="cylindre" class="form-control" id="inputprenom" required>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Catégorie</label>
                      <input type="text" name="categorie" class="form-control" id="inputville" required>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Numéro de serie</label>
                      <input type="text" name="modèle" class="form-control" id="inputprenom" required>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Prix</label>
                      <input type="text" name="prix" class="form-control" id="inputville" required>
                    </div>
                  </div>
                  <hr>
                    <button type="button" class="btn btn-primary">Enregistrer</button>
                    <button type="button" class="btn btn-danger">Supprimer</button>
            <br><br><br>
            <div class="card-footer text-muted">
 <h3> Copyright © 2020 Simplon.co, Burkina</h3>
  </div>