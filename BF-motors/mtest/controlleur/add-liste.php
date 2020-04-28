<?php
  require_once ("../modele/Connexion.class.php");
  require_once ("../autoload.php");

  $db=new Db();
  $base=$db->getBase();
  $veloManager=new VeloManager($base);
  $list_velo=$veloManager->liste();
  $list_yamaha=$veloManager->liste_yamaha();
//   $list_rato=$veloManager->liste_rato();
  $list_kaiser=$veloManager->liste_kaiser();

  if (isset($_POST['marque']) and $_POST['imat'] and $_POST['couleur'])
  {
    $veloManager=new VeloManager($base);
    $velos=new Velo($_POST);
    $veloManager->add($velos);
    header("location: motos.php");
  }

  if(isset($_GET['id']))
  {
      $veloManager->delete($_GET['id']);
      header("location: motos.php");
  }

?>

