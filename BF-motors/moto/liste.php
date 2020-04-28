<!Doctype html>
<html>
  <header>
  <meta charset='utf-8'>
  <title>gestion</title>
  <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</headerd>
<body>
<table class="table table-bordered">
  <thead class="table-info">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Marque</th>
      <th scope="col">Modèle</th>
      <th scope="col">Cylindre</th>
      <th scope="col">Catégorie</th>
      <th scope="col">Numéro de serie</th>
      <th scope="col">Prix</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($motoManager->getAll() as $motoManager) {
    ?>
    <td><a href="../traitement/supprimer.php?id=<?php echo $motoManager['Id'];?>" class="text-danger">&#10060 </a><a href="detail.php?id=<?php echo $motoManager['Id'];?>">&#9998</a></td>

    <tr>
      <th scope="row">1</th>
      <td><?php echo $motoManager['marque'];?></td>
      <td><?php echo $motoManager['modele'];?></td>
      <td><?php echo $motoManager['cylindre'];?></td>
      <td><?php echo $motoManager['categorie'];?></td>
      <td><?php echo $motoManager['numero_de_serie'];?></td>
      <td><?php echo $motoManager['prix'];?></td>
    </tr>
    <?php  
  }
  ?>
   
  </tbody>
</table>

    
</body>
</html>