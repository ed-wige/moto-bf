<div class="d-flex justify-content-between p-4">
<span class=""><b>Nombres :<?php echo $nombre?></b></span>
<div class="d-flex">
<span class="pt-1"><b>Filtrer par marque :</b></span>
<a href="index.php?page=liste" class="btn btn-light">TOUS</a>
<a href="index.php?page=liste&marque=Yamaha" class="btn btn-light">YAMAHA</a>
<a href="index.php?page=liste&marque=Rato" class="btn btn-light">RATO</a>
<a href="index.php?page=liste&marque=Kaizer" class="btn btn-light">KAIZER</a>
</div>
</div>
<table class="table table-bordered">
  <thead class="table-info">
    <tr>
    <th scope="col">Numéro de serie</th>
    <th scope="col">Marque</th>
      <th scope="col">Modèle</th>
      <th scope="col">Cylindre</th>
      <th scope="col">Catégorie</th>
      <th scope="col">Prix</th>
      <th>Options</th>

    </tr>
  </thead>
  <tbody>
  <?php
        foreach ($motoliste as $moto) {
        ?>
        <tr>
          <td><?php echo $moto->getmodele(); ?></td>
          <td><?php echo $moto->getmarque(); ?></td>
          <td><?php echo $moto->getcouleur(); ?></td>
          <td><?php echo $moto->getcylindre(); ?></td>
          <td><?php echo $moto->getdisponibilite() ?></td>
          <td><?php echo $moto->getserie(); ?></td>
          <td><?php echo $moto->getPrix() ?></td>
          <td>
           <a href="index.php?page=ins_up&serie=<?php echo $moto->getserie(); ?>" class="btn btn-success">Update</a>
           <a href="index.php?page=vente&serie=<?php echo $moto->getserie(); ?>" class="btn btn-info" <?php toUpdate($moto->getdisponibilite()) ?>>Vendre</a>
           <a href="index.php?page=liste&serie=<?php echo $moto->getserie(); ?>" class="btn btn-danger">Delete</a>
           
           </td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>
    
</body>
</html>