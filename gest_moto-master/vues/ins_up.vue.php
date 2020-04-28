<div class="row h-100">
  <section class="col-md-6">
    <form class="d-flex flex-column justify-content-between align-items-center form m-5 pt-5 pb-5" action="" method="post">
      <div class="form-group w-100">
        <input type="text" class="form-control" placeholder="Marque" name="marque" <?php echo $marque ?>>
      </div>

      <div class="form-group w-100">
        <input type="text" class="form-control" placeholder="Model" name="modele" <?php echo $modele?>>
      </div>

      <div class="form-group w-100">
        <input type="text" class="form-control" placeholder="Prix" name="prix" <?php echo $prix?>>
      </div>

      <div class="form-group w-100">
        <input type="text" class="form-control" placeholder="Couleur" name="couleur" <?php echo $couleur?>>
      </div>

      <div class="form-group w-100">
        <input type="text" class="form-control" placeholder="Cylindre" name="cylindre" <?php echo $cylindre?>>
      </div>

      <div class="form-group w-100">
        <input type="text" class="form-control" placeholder="Numero de serie" name="numero_de_serie" <?php echo $serie ?>>
      </div>

      <div class="form-group w-100">
        <input class="form-control w-25" type="submit" value="<?php echo $titre ?>">
      </div>
    </form>
  </section>
  <section class="col-md-6 bg-info">
      <h1 style="text-align:center">Ajout D'une Nouvelle Moto</h1>
  </section>
</div>