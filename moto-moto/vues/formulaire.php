
<!Doctype html>
<html>
  <header>
  <meta charset='utf-8'>
  <title>gestion</title>
  <link rel="stylesheet" href="../style/bootstrap4/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</headerd>
<body>

<div class="card-header">
         
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
           <!-- <a class="nav-link active" href="#">Navbar</a> -->
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
           </button>
         
           <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="nav nav-pills card-header-pills">
                   <li class="nav-item">
                     <a class="nav-link active" href="Authentification.php">Authentification</a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link active" href="formulaire.php">Nouvel Enregistrement</a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link active" href="liste.php">Liste des moto</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link active" href="aide.php">Aide</a>
                   </li>
                 </ul>
             <form class="form-inline my-2 my-lg-0">
               <input class="form-control mr-sm-2" type="search" placeholder="Recherche" aria-label="Search">
               <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
             </form>
           </div>
         </nav>
       </div>

<form method="post" action="../Controllers/enregistrer.php" enctype="multipart/form-data" data-toggle="validator" id="frm">
        <h2>Informations du patient  </h2> <br>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Marque</label>
                      <input type="text" name="marque" class="form-control" id="inputnom" required>   
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Modele</label>
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
                      <input type="text" name="numero" class="form-control" id="inputprenom" required>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Prix</label>
                      <input type="text" name="prix" class="form-control" id="inputville" required>
                    </div>
                  </div>
                  <hr>
                  <hr>
                  <input type="submit" class="btn btn-primary" value="Enregistrer">
                  <input type="reset" class="btn btn-danger" value="Reinitialiser">
            <br><br><br>
            <br><br><br>
            <div class="card-footer text-muted">
 <h3> Copyright © 2020 Simplon.co, Burkina</h3>
  </div>