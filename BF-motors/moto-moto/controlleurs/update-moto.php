<?php
 require_once ("../modele/Connexion.class.php");
 require_once ("../autoload.php");
$db=new Db();
$base=$db->getBase();
$motoManager=new MotoManager($base);

if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $valuer=$motoManager->get((int)$id);
}
  
  if (isset($_POST['cathegorie']) and $_POST['marque'] and $_POST['model'] and $_POST['cylindre'] 
  and $_POST['numero_seri'] and $_POST['prix'] and isset($_POST['id']))
  {
      $motoManager=new MotoManager($base);
      $moto=new Moto($_POST);
      $motoManager->update($moto);
      header("location: motos.php");
  }
?>
