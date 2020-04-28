<?php
 require_once ("../modeles/Connexion.php");
 require_once ("../autoload.php");
$db=new Db();
$base=$db->getBase();
$moto_manag =new MotoManager($base);

if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $valuer=$moto_manag->get((int)$id);
}
  
  if (isset($_POST['marque']) and $_POST['modele'] and $_POST['cylindre'] and $_POST['categorie'] 
  and $_POST['numero'] and $_POST['prix'] and isset($_POST['id']))
  {
      $motoManager=new MotoManager($bd);
      $moto=new Moto($_POST);
      $motoManager->update($moto);
      header("location: mot.php");
  }
?>
