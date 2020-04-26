<!Doctype html>
<html>
  <header>
  <meta charset='utf-8'>
  <title></title>
  <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">

<?php
  include('header.php');
include('class_vacci.php');

$vaccin=new Vaccin();
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
     <table class="table table-striped table-bordered table-reponsive">
  <thead>
  <th></th>
  <th>pseudo</th>
  <th>messag</th>
  </thead>
  <tbody>
  <?php
  foreach ($vaccin->getAll() as $vaccin) {
  ?>
  <tr>
  <td><a href="supprimer.php?id=<?php echo $vaccin['id'];?>" class="text-danger">&#10060 </a><a href="detail.php?id=<?php echo $vaccin['id'];?>">&#9998</a></td>
  <td><?php echo $vaccin['pseudo'];?></td>
  <td><?php echo $vaccin['messag'];?></td>
  </tr>
  <?php  
  }
  ?>
  </tbody>
  </table>
  </body>
</html> 