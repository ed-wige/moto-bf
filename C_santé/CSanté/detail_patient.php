<?php
require_once './fonction/bd.php';
require_once 'autoload.php';

$bd=bd();
$patient_ctrl =new PatientController($bd);
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $valuer=$patient_ctrl->get((int)$id);
    //echo $id;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
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
          <a class="nav-link active" href="#">Acceuil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="ajouter_patient.php">Ajouter patient</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="index.php">Liste des patients</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="#">Aide</a>
        </li>
      </ul>
  <form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="search" placeholder="Recherche" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
  </form>
</div>
</nav>
</div>

       <h4 >Detail du patient </h4>

<div id='formulaire_bircof'>
   
            <label for="">Nom:</label> <span> <?= $valuer->getNom()?> </span> <br>
            <label for="">Prenom:</label> <span><?= $valuer->getPrenom()?></span> <br>
            <label for="">Date de naissance:</label><span> <?= $valuer->getDate_de_naissance()?> </span>  <br>
            <label for="">Lieu de Résidence:</label> <span> <?= $valuer->getLieu_de_Résidence()?> </span>  <br>
            <label for="">Genre:</label><span> <?= $valuer->getGenre()?> </span>  <br>
            <label for="">Profession:</label><span> <?= $valuer->getProfession()?> </span>  <br>
            <label for="">Téléphone:</label><span> <?= $valuer->getTéléphone()?> </span>  <br>
            <label for="">Groupe Sanguin:</label><span> <?= $valuer->getGroupe_Sanguin()?> </span>  <br>
            <label for="">electrophorèse:</label><span> <?= $valuer->getelectrophorèse()?> </span>  <br>
            <label for="">Maladie Génétique:</label> <span> <?= $valuer->getMaladie_Génétique()?> </span> <br>
            <label for="">Allergies:</label> <span> <?= $valuer->getAllergies()?> </span> <br>
            <label for="">Sérologie:</label> <span> <?= $valuer->getSérologie()?> </span> <br>
            <label for="">Date de la dernière visite:</label> <span> <?= $valuer->getDate_de_la_dernière_visite()?> </span> <br>
            <label for="">Médecin traitant:</label> <span> <?= $valuer->getMédecin_traitant()?> </span> <br>
            <label for="">Email du médecin:</label> <span> <?= $valuer->getEmail_du_médecin()?> </span> <br>
            <label for="">Téléphone du médecin:</label> <span> <?= $valuer->getTéléphone_du_médecin()?> </span> <br>







</div>    
                <div class='button'>
                    <a href="index.php"> <button class="btn btn-outline-danger" id="btn-ajout"> Retour </button></a>
                </div>
                </div>
                <div class="card-footer text-muted">
           <p> © 2020 Copyright: Simplon.co Burkina Faso </p>
</div>
</body>
</html>