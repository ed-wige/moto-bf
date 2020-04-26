<?php
  require_once ("../modele/Connexion.class.php");
  require_once ("../autoload.php");

  $db=new Db();
  $base=$db->getBase();
  $motoManager=new MotoManager($base);
  $list_moto=$motoManager->liste();
  $list_yamaha=$motoManager->liste_yamaha();
  $list_rato=$motoManager->liste_rato();
  $list_kaiser=$motoManager->liste_kaiser();

  if (isset($_POST['cathegorie']) and $_POST['marque'] and $_POST['model'] and $_POST['cylindre'] 
  and $_POST['numero_seri'] and $_POST['prix'])
  {
    $motoManager=new MotoManager($base);
    $motos=new Moto($_POST);
    $motoManager->add($motos);
    header("location: motos.php");
  }

  if(isset($_GET['id']))
  {
      $motoManager->delete($_GET['id']);
      header("location: motos.php");
  }

?>

