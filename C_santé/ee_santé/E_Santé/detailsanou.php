 <!Doctype html>
<html>
  <header>
  <meta charset='utf-8'>
  <title></title>
  <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="styled.css">
<?php
  include('header.php');
    include('class_patient.php');
   
    
$patient=new Patient();
if(isset($_GET['id'])){
  $one=$patient->get($_GET['id']);
}
function val($ct){
    if($ct!=""){

        echo $ct;
    }
}

function check($a,$b){
  if($a==$b){
    echo 'checked';
  }
}

function select($a,$b){
  if($a==$b){
    echo 'selected';
  }
}
?>
 

 
  <body>
  <div class="card-body">
  <h4 >Detail du patient </h4>


  <form method="post" action="modifpatient.php" enctype="multipart/form-data" data-toggle="validator" id="frm">
  <input type="text" name="id" class="form-control m-2" hidden value="<?php val($one['Id'])?>">
  <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Id</h5><hr>
                          <p class="card-text"><?php val($one['id'])?></p>
                        </div>
                      </div> <br>

                        <div class="row">
                        <div class="col-sm-6">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Nom</h5><hr>
                              <p class="card-text"><?php val($one['nom'])?></p>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Prénom</h5><hr>
                              <p class="card-text"><?php val($one['prenom'])?></p>
                            </div>
                          </div>
                        </div>
                      </div><br>

                      <div class="row">
                        <div class="col-sm-6">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Date de naissance</h5><hr>
                              <p class="card-text"><?php val($one['date_de_naissance'])?></p>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Lieu de Résidence</h5><hr>
                              <p class="card-text"><?php val($one['lieu_de_residence'])?></p>
                            </div>
                          </div>
                        </div>
                      </div><br>
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Genre</h5><hr>
                          <p class="card-text"><?php val($one['genre'])?></p>
                        </div>
                      </div> <br>
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Profession</h5><hr>
                              <p class="card-text"><?php val($one['profession'])?></p>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Telephone</h5><hr>
                              <p class="card-text"><?php val($one['telephone'])?></p>
                            </div>
                          </div>
                        </div>
                      </div><br>

                    
                  <h2>Antécédant Médicaux</h2>
                  <div class="row">
                        <div class="col-sm-6">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Groupe sanguin</h5><hr>
                              <p class="card-text"><?php val($one['groupe_sanguin'])?></p>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Elecetrophorèse</h5><hr>
                              <p class="card-text"><?php val($one['electrophorese'])?></p>
                            </div>
                          </div>
                        </div>
                      </div><br>
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Maladie Génétique</h5><hr>
                          <p class="card-text"><?php val($one['maladie_hereditaire'])?></p>
                        </div>
                      </div> <br>
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Allergies</h5><hr>
                          <p class="card-text"><?php val($one['allergie'])?></p>
                        </div>
                      </div> <br>
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Sérologie</h5><hr>
                          <p class="card-text"><?php val($one['serologie'])?></p>
                        </div>
                      </div> <br>
                        
                       
                        <div class="row">
                        <div class="col-sm-6">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Date de la dernière visite</h5><hr>
                              <p class="card-text"><?php val($one['date_de_la_derniere_visite'])?></p>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">medecin traitant</h5><hr>
                              <p class="card-text"><?php val($one['medecin_traitant'])?></p>
                            </div>
                          </div>
                        </div>
                      </div><br>
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Email du medecin</h5><hr>
                              <p class="card-text"><?php val($one['email_du_medecin'])?></p>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Telephone du medecin</h5><hr>
                              <p class="card-text"><?php val($one['telephone_du_medecin'])?></p>
                            </div>
                          </div>
                        </div>
                      </div><br>
                        
                         <br>
                         <h2>Personne à prévénir en cas de besoin</h2> <br>
                         <div class="row">
                        <div class="col-sm-6">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Nom</h5><hr>
                              <p class="card-text"><?php val($one['nom_accompagnant'])?></p>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Prenom</h5><hr>
                              <p class="card-text" ><?php val($one['prenom_accompagnat'])?></p>
                            </div>
                          </div>
                        </div>
                      </div><br>
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Telephone</h5><hr>
                              <p class="card-text"><?php val($one['telaccompagnant'])?></p>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Profession</h5><hr>
                              <p class="card-text"><?php val($one['profession_accompagnant'])?></p>
                            </div>
                          </div>
                        </div>
                      </div><br>
                   
                    <br> <br> <br>
                  <div>
                  <a href="formulaire_details.php" class="btn btn-success m-2">Mettre a jour</a>
                  </div>
            <br><br><br>
           
    </div> 

            
                        <?php
            require('footer.php')
        ?>
    </div> 
  </body>
</html>
