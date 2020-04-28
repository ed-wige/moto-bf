<?php
require_once "../Models/Login.php"
require_once "../Models/connexon.php";


?> 

<!Doctype html>
<html>
  <header>
  <meta charset='utf-8'>
  <title>gestion</title>
  <link rel="stylesheet" href="../Style/bootstrap4/css/bootstrap.min.css">
  <link rel="stylesheet" href="../Style/style.css">
</headerd>
<body>


<div class="card text-center">
  <div class="card-header">
    <h1>BF-Motors, la référence</h1>
  </div>
  <div class="card-body">
  <h2>Bienvenu sur la plateforme de gestion de vente de motos</h2><br>
  <div class="row">
    <div class="col-sm-6">
    <form class="form-signin" action="../Models/Administration.php" method="POST">
      <h1 class="h3 mb-3 font-weight-normal">Entrez vos identifiants</h1><br>
      <label for="inputEmail" class="sr-only">Nom d'utilisateur</label>
      <input type="text" id="inputusername" class="form-control" placeholder="username"  name="username"required autofocus><br><br>
      <label for="inputPassword" class="sr-only">Mot de passe</label>
      <input type="text" id="inputPassword" class="form-control" placeholder="Password" name="password" required><br>
      <div class="checkbox mb-3">
        <label><input type="checkbox" value="remember-me">Se souvenir de moi</label>
      </div>
      <input class="btn btn-lg btn-primary btn-block"  value="Connexion" type="submit">
    </form>
    </div>
    <div class="col-sm-6"><img src="../Style/img/moto.jpg" width="50%"class="img-fluid" alt="Responsive image"></div><br>
  </div>
  </div>
  <div class="card-footer text-muted">
 <h3> Copyright © 2020 Simplon.co, Burkina</h3>
  </div>
</div>
</body>
</html>
</body>
