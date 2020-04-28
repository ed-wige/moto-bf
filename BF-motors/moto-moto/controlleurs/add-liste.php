<?php
  require_once ("../modeles/Connexion.class.php");
  require_once ("../autoload.php");

  $db=new Db();
  $base=$db->getBase();
  $motoManager=new MotoManager($base);
  $list_moto=$motoManager->liste();
  $list_yamaha=$motoManager->liste_yamaha();
  $list_rato=$motoManager->liste_rato();
  $list_kaiser=$motoManager->liste_kaiser();

  if (isset($_POST['Numero']) and $_POST['marque'] and $_POST['modele'] and $_POST['cylindre'] 
  and $_POST['categorie'] and $_POST['prix'])
  {
    $motoManager=new MotoManager($base);
    $motos=new Moto($_POST);
    $motoManager->add($motos);
    header("location: moto.php");
  }

  if(isset($_GET['numero']))
  {
      $motoManager->delete($_GET['numero']);
      header("location: moto.php");
  }

?>

