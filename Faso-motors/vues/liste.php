<!Doctype html>
<html>
  <header>
  <meta charset='utf-8'>
  <title>gestion</title>
  <?php
  // include('../include/header.php');
  require_once ("../modeles/Moto.class.php");

$moto=new Moto();
function val($ct){
    if($ct!=""){
        echo $ct;
    }
}
?>
  </header>
  <body>
  <?php
      if(isset($_GET['rep']))
      {
        echo '<h5>'.$_GET['rep'].'</h5>';
      }
     ?>
  <link rel="stylesheet" href="../style/bootstrap4/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</headerd>
<body>
<table class="table table-bordered">
  <thead class="table-info">
    <tr>
    <th scope="col">Numéro de serie</th>
    <th scope="col">Marque</th>
      <th scope="col">Modèle</th>
      <th scope="col">Cylindre</th>
      <th scope="col">Catégorie</th>
      <th scope="col">Prix</th>
    </tr>
  </thead>
  <tbody>
     <?php
    foreach ($moto->getliste() as $moto) {
    ?> 
     <!-- <td><a href="../traitement/supprimer.php?id=<?php echo $moto['Id'];?>" class="text-danger">&#10060 </a><a href="detail.php?id=<?php echo $moto['Id'];?>">&#9998</a></td>  -->

    <tr>
      <th scope="row">1</th>
      <td><?php echo $moto['numero'];?></td>

      <td><?php echo $moto['marque'];?></td>
      <td><?php echo $moto['modele'];?></td>
      <td><?php echo $moto['cylindre'];?></td>
      <td><?php echo $moto['categorie'];?></td>
      <td><?php echo $moto['prix'];?></td>
    </tr>
    <?php  
  }
  ?>
   
  </tbody>
</table>

    
</body>
</html>