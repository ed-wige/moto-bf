<?php
  require_once ("../modeles/Connexion.php");
  require_once ("../autoload.php");

  $db=new Db();
  $base=$db->getBase();
  $motoManager=new MotoManager($base);
  $list_moto=$motoManager->liste();
//   $list_yamaha=$motoManager->liste_yamaha();
//   $list_rato=$motoManager->liste_rato();
//   $list_kaiser=$motoManager->liste_kaiser();

  if (isset($_POST['marque']) and $_POST['modele'] and $_POST['cylindre'] and $_POST['categorie'] 
  and $_POST['numero'] and $_POST['prix'])
  {
    $motoManager=new MotoManager($db);
    $motos=new Moto($_POST);
    $motoManager->add($motos);
    header("location: mot.php");
  }

  if(isset($_GET['id']))
  {
      $motoManager->delete($_GET['id']);
      header("location: mot.php");
  }

?>

