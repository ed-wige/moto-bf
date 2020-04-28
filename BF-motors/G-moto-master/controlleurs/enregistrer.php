<?php
  require_once ("../modeles/MotoManager.class.php");
  require_once ("../modeles/Moto.class.php");
  require_once ("../modeles/Connexion.class.php");

  if (isset($_POST['numero']) and $_POST['marque'] and $_POST['modele'] and $_POST['cylindre'] 
  and $_POST['categorie'] and $_POST['prix']);
  {  
     $motoManager=new MotoManager();
    $motos=new Moto($_POST);
    // $motoManager->add($motos);

$saveisOK= $mototManager->save($moto);

if($saveisOK){
    $message="tout s'est bien passé";
}
else{
    $message="tout s'est pas bien passé";
}




