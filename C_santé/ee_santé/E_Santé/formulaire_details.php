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
        <br>
        <form method="post" action="modifpatient.php" enctype="multipart/form-data" data-toggle="validator" id="frm">
        <h2>Informations du patient  </h2> <br>
        <div class="form-group col-md-6">
                      <label for="inputEmail4">Id</label>
                      <input type="text" name="id" class="form-control" id="inputnom" required>   
                    </div>
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
                      <input type="date"name="date" class="form-control" id="inputdate_de_naissance" required>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Lieu de Résidence</label>
                      <input type="text" name="residence" class="form-control" id="inputville" required>
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
                      <input type="number" name="telephone" maxlength="8" class="form-control" id="inputtext"   pattern="[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}" required>
                    </div>
                  </div>
                        <h2>Antécédant Médicaux</h2>
                        <div  class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputState">Groupe Sanguin</label>
                          <select id="inputState" class="form-control" name="gs">
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
                          <select id="inputState" class="form-control" name="elect">
                           <option selected>Choisir</option>
                          <option>AA</option>
                          <option>AS</option>
                          <option>SS</option>
                          </select>
                        </div>
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlTextarea1">Maladie Génétique</label>
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="maladie"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlTextarea1">Allergies</label>
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="allergie"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlTextarea1">Sérologie</label>
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="serologie"></textarea>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputEmail4">Date de la dernière visite</label>
                              <input type="date"name="datevisit" class="form-control" id="inputdate_de_naissance" required>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputEmail4">medecin traitant</label>
                              <input type="text" name="mdcname" class="form-control" id="inputville" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputEmail4">Email du medecin</label>
                              <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="mdcemail">
                            </div>
                            <div class="form-group col-md-6">
                            <label for="inputCity">Téléphone du Medecin</label>
                            <input type="number" name="mdctel" maxlength="8" class="form-control" id="inputtext"   pattern="[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}" required>
                          </div>
                        </div>
                         <br>
                         <h2>Personne à prévénir en cas de besoin</h2> <br>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputEmail4">Nom</label>
                          <input type="text"name="nomp" class="form-control" id="inputnom" required>
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputPassword4">Prenom</label>
                          <input type="text"name="prenomp" class="form-control" id="inputprenom" required>
                        </div>
                      </div>
                      <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="inputCity">Téléphone</label>
                            <input type="number" name="telp" maxlength="8" class="form-control" id="inputtext"   pattern="[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}" required>
                          </div>
                          <div class="form-group col-md-6">
                          <label for="inputCity">Profession</label>
                          <input type="text"name="professionp"  class="form-control" id="inputtext" required>
                        </div>
                    </div>
                    <hr>
                    <input type="submit" class="btn btn-primary" value="Enregistrer">
                    <input type="reset" class="btn btn-danger" value="Reinitialiser">
            </form>
            <br><br><br>
        <?php
            require('footer.php')
        ?>
    </div> 
</body>
</html>

