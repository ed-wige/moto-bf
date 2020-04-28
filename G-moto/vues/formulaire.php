<div class="row h-100">
<form method="post" action="" enctype="multipart/form-data" data-toggle="validator" id="frm">
        <h2> Enregistrer une moto  </h2> <br>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Numéro de serie</label>
                      <input type="text" name="numero" class="form-control" id="inputprenom" <?php echo $numero_de_serie ?>required>
                    </div>
                      <label for="inputEmail4">Marque</label>
                      <input type="text" name="marque" class="form-control" id="inputnom" <?php echo $marque ?>required>   
                    </div>
                    
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Modele</label>
                      <input type="text" name="modele" class="form-control" id="inputprenom" <?php echo $modele ?> required>
                    </div>
                      <label for="inputEmail4">Cylindre</label>
                      <input type="text" name="cylindre" class="form-control" id="inputprenom" <?php echo $cylindre ?>required>
                    </div>
                    
                  </div>
                  <div class="form-row">
                  <div class="form-group col-md-6">
                      <label for="inputEmail4">Catégorie</label>
                      <input type="text" name="categorie" class="form-control" id="inputville" <?php echo $categorie ?>required>
                    </div>
                    
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Prix</label>
                      <input type="text" name="prix" class="form-control" id="inputville" <?php echo $prix ?>required>
                    </div>
                  </div>
                  <div class="form-group w-100">
        <input class="form-control w-25" type="submit" value="<?php echo $titre ?>">

      </div>
     </form> 
                  <hr>
                  <hr>
                  <section class="col-md-6 bg-info">
      <h1 style="text-align:center">Ajout D'une Nouvelle Moto</h1>
  </section>
  </div>
          
    </script>