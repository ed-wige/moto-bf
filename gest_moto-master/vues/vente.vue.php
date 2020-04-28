<?php
//include('../stylesheet.php');
?>
<div class="d-flex h-100">
  <section class="col-md-6">
    <form class="d-flex flex-column justify-content-between align-items-center form m-5 pt-5 pb-5" action="" method="post">
    <input type="text" hidden name="vserie" value="<?php echo $_GET["serie"]?>">
      <div class="form-group w-100">
        <input type="text" class="form-control" placeholder="Nom acheteur" name="vnom">
      </div>

      <div class="form-group w-100">
        <input type="text" class="form-control" placeholder="Prenom acheteur" name="vprenom">
      </div>

      <div class="form-group w-100">
        <input type="text" class="form-control" placeholder="Somme versee" name="vsomme">
      </div>

      <div class="form-group w-100">
        <input type="text" class="form-control" placeholder="Telephone" name="vtelephone">
      </div>
      <div class="form-group w-100">
        <input class="form-control w-25" type="submit" value="Vendre">
      </div>
    </form>
  </section>
  <section class="col-md-6 bg-info">
      <h1 style="text-align:center">Vendre une Moto</h1>
  </section>
</div>