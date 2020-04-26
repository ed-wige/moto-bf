<?php 
require_once './fonction/bd.php';
require_once 'autoload.php';

$bd= bd();
$patient_ctrl =new PatientController($bd);
if(isset($_POST['nom']) and $_POST['prenom'] and $_POST['date_de_naissance'] and $_POST['lieu_de_résidence'] and $_POST['genre'] 
and $_POST['profession'] and $_POST['téléphone'] and $_POST['groupe_sanguin'] and $_POST['electrophorèse'] and $_POST['maladie_génétique'] 
and $_POST['allergies'] and $_POST['sérologie'] and $_POST['date_de_la_dernière_visite'] and $_POST['médecin traitant'] 
and $_POST['email_du_médecin'] and $_POST['téléphone_du_médecin']);

{
    $patient_ctrl =new PatientController($bd);
    $patient =new Patient($_POST);
    $patient_ctrl->ajouter($patient);
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
    <div class="card text-center">
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
        <br>
        <div>
        <h2>Informations du patients</h2> <br>
        <form method="post" action="patient.class.php" enctype="multipart/form-data" data-toggle="validator" id="frm">
      
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Nom</label>
                      <input type="text" name="nom" class="form-control" id="inputnom" required>
                      
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">Prenom</label>
                      <input type="text" name="prenom" class="form-control" id="inputprenom" required>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Date de naissance</label>
                      <input type="date"name="date_de_naissance" class="form-control" id="inputdate_de_naissance" required>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Lieu de Résidence</label>
                      <input type="text" name="lieu_de_résidence" class="form-control" id="inputville" required>
                    </div>
                  </div>
                  <div class="form-row">
                      <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
                      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="genre" required>
                        <option >Genre</option>
                        <option value="Homme">Homme</option>
                        <option value="Femme">Femme</option>
                        <option value="Autre">Autre</option>
                      </select>
                      
                    </div> <br>
                  <div class="form-row">          
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">Profession</label>
                      <input type="text" name="profession"class="form-control" id="inputprenom" required>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="phone">Téléphone</label>
                      <input type="number" name="téléphone" maxlength="8" class="form-control" id="inputtext"   pattern="[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}" required>
                    </div>
                  </div>
                        <h2>Antécédant Médicaux</h2>
                        <div  class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputState">Groupe Sanguin</label>
                          <select id="inputState" class="form-control" name="groupe_sanguin" required>
                           <option selected>Choisir</option>
                          <option>A+</option>
                          <option>A-</option>
                          <option>B+</option>
                          <option>B-</option>
                          <option>AB+</option>
                          <option>AB-</option>
                          <option>O+</option>
                          <option>O-</option>
                          </select>
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputState">Electrophorèse</label>
                          <select id="inputState" class="form-control" name="electrophorèse" required>
                           <option selected>Choisir</option>
                          <option>AA</option>
                          <option>AS</option>
                          <option>SS</option>
                          </select>
                        </div>
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlTextarea1">Maladie Génétique</label>
                          <textarea class="form-control"  name="maladie_génétique" id="exampleFormControlTextarea1" rows="3"></textarea required>
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlTextarea1">Allergies</label>
                          <textarea class="form-control" name="allergies" id="exampleFormControlTextarea1" rows="3"></textarea  required>
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlTextarea1">Sérologie</label>
                          <textarea class="form-control"  name="sérologie" id="exampleFormControlTextarea1" rows="3"></textarea reqired>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputEmail4">Date de la dernière visite</label>
                              <input type="date" name="date_de_la_dernière_visite" class="form-control" id="inputdate_de_naissance" required>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputEmail4">Médecin traitant</label>
                              <input type="text" name="médecin_traitant" class="form-control" id="inputville" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputEmail4">Email du médecin</label>
                              <input type="email" name="email_du_médecin" class="form-control" id="inputEmail4" placeholder="Email" required>
                            </div>
                            <div class="form-group col-md-6">
                            <label for="inputCity">Téléphone du Médecin</label>
                            <input type="number" name="téléphone_du_médecin" maxlength="8" class="form-control" id="inputtext"   pattern="[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}" required>
                          </div>
                        </div>
                         <br>
                         <!-- <h2>Personne à prévénir en cas de besoin</h2> <br>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputEmail4">Nom</label>
                          <input type="text"name="nom_tuteur" class="form-control" id="inputnom" required>
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputPassword4">Prenom</label>
                          <input type="text"name="prenom_tuteur" class="form-control" id="inputprenom" required>
                        </div>
                      </div>
                      <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="inputCity">Téléphone</label>
                            <input type="number" name="telephone_tuteur" maxlength="8" class="form-control" id="inputtext"   pattern="[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}" required>
                          </div>
                          <div class="form-group col-md-6">
                          <label for="inputCity">Profession</label>
                          <input type="text"name="profession"  class="form-control" id="inputtext" required>
                        </div>
                    </div> -->
                    <hr>
                    <div class="buttons">
                <div class='button'>
                    <input class="btn btn-outline-success" id="btn-ajout" type="submit" value="Ajouter">
                </div>
                <div class='button'>
                   <a href="index.php"> <button class="btn btn-outline-danger" id="btn-ajout"> Retour </button></a>
                </div>
            </div>
            </form>
            </div>

           
                    <!-- <button type="button" class="btn btn-primary">Enregistrer</button>
                    <button type="button" class="btn btn-danger">Supprimer</button>
            <br><br><br>
            </div> -->
                <div class="card-footer text-muted">
           <p> © 2020 Copyright: Simplon.co Burkina Faso </p>
</div>
</body>
</html>
