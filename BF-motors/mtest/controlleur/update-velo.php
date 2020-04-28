<?php
 require_once ("../modele/Connexion.class.php");
 require_once ("../autoload.php");
$db=new Db();
$base=$db->getBase();
$veloManager=new VeloManager($base);

if(isset($_GET['id']))
{
    $id=$_GET['imat'];
    $valuer=$veloManager->get((int)$id);
}
  
  if (isset($_POST['marque']) and  and $_POST['couleur'] and isset($_POST['imat']))
  {
      $veloManager=new veloManager($base);
      $velo=new Velo($_POST);
      $veloManager->update($velo);
      header("location: motos.php");
  }
?>
