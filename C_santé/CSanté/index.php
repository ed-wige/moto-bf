<?php 
require_once './fonction/bd.php';
require_once 'autoload.php';

$bd= bd();
$patient_ctrl =new PatientController($bd);
$list_patient=$patient_ctrl->getList();

if(isset($_GET['id']))
{
    $patient_ctrl->delete($_GET['id']);
    header("location: index.php");
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


       <h4>LISTE DES PATIENTS</h4>
            <div class="cont-table" id="header">
            <table class="table table-bordered table-responsive-sm">
            <thead>
            <tr>
                                <th class="text-center">
                                    N°
                                </th>
                                <th class="text-center">
                                    Nom
                                </th>
                                <th class="text-center">
                                    Prenom
                                </th>
                                <th class="text-center">
                                    Date de naissance
                                </th>

                                <th class="text-center">
                                    Lieu de Résidence
                                </th>

                                <th class="text-center">
                                    Genre
                                </th>
                                <th class="text-center">
                                    Profession
                                </th>

                                <th class="text-center">
                                    Téléphone
                                </th>
                                <th class="text-center">
                                    Groupe Sanguin
                                </th>
                                <th class="text-center">
                                    Electrophorèse
                                </th>
                                <th class="text-center">
                                    Maladie Génétique
                                </th>
                                <th class="text-center">
                                    Allergies
                                </th>
                                <th class="text-center">
                                    Sérologie
                                </th>
                                <th class="text-center">
                                    Date de la dernière viste
                                </th>
                                <th class="text-center">
                                    Médecin traitant
                                </th>
                                <th class="text-center">
                                    Email du médecin
                                </th>
                                <th class="text-center">
                                    Téléphone du médecin
                                </th>

                                <th class="text-center">
                                   <a href="detail_patient.php"> Detail</a>
                                </th>

                                <th class="text-center">
                                    Edite
                                </th>

                                <th class="text-center">
                                    Delete
                                </th>

                            </tr>
                            </thead>
                           <tbody>
                           <tr>             
                           <?php    
                                       foreach($list_patient as $key => $value) {
                                       ?>
                                         <tr>
                                            <td><?=$key+1?></td>
                                            <td><?=$value->getNom()?></td>
                                            <td><?=$value->getPrenom()?></td>
                                            <td><?=$value->getDate_de_naissance()?></td>
                                            <td><?=$value->getLieu_de_Résidence()?></td>
                                            <td><?=$value->getGenre()?></td>
                                            <td><?=$value->getProfession()?></td>
                                            <td><?=$value->getTéléphone()?></td>
                                            <td><?=$value->getGroupe_Sanguin()?></td>
                                            <td><?=$value->getElectrophorèse()?></td>
                                            <td><?=$value->getMaladie_Génétique()?></td>
                                            <td><?=$value->getAllergies()?></td>
                                            <td><?=$value->getSérologie()?></td>
                                            <td><?=$value->getDate_de_la_dernière_visite()?></td>
                                            <td><?=$value->getMédecin_traitant()?></td>
                                            <td><?=$value->getEmail_du_médecin()?></td>
                                            <td><?=$value->getTéléphone_du_médecin()?></td>
                                            <td><a href="detail_patient.php?id=<?= $value->getId()?>" type="button"> </a></td>
                                            <td><a href="modif_patient.php?id=<?= $value->getId()?>"  type="button"></a></td>
                                            <td><a href="index.php?id=<?= $value->getId()?>" type="button"> </a></td>
             
                                         </tr>
                                        <?php
                                        }
                                        ?>   
                                    </tr>
                            </table>      
                </div>
                
                <div class="buttons">
                    <div class='button'>
                       <a href="ajouter_patient.php"> <input class="btn btn-outline-success" id="btn-ajout" type="submit" value="Nouveau"> </a>
                    </div>
                </div>
                <div class="card-footer text-muted">
           <p> © 2020 Copyright: Simplon.co Burkina Faso </p>
</div>
</body>
</html>
