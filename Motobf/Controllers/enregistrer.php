<?php
require_once '../Models/Connexion.php';
require_once '../Models/MotoManager.php';

// use App\Entity\$Moto;
// use App\Manager\MotoManager;


 $motoManager=new MotoManager();
 if (isset($_POST)) {
    $motoManager->enregistrer( 
       $_POST['marque'],
        $_POST['modele'],
        $_POST['cylindre'],
        $_POST['categorie'],
         $_POST['numero'],
         $_POST['mar_id'],
         $_POST['prix'],
     );
 }

// $moto = new Moto();
// $moto->setMarque($_POST['marque'])
//  ->setModele($_POST['modele'])
// ->setCylindre($_POST['cylindre'])
// ->setCatégorie($_POST['categorie'])
// ->setNuméro_de_serie($_POST['numero'])
// ->setPrix($_POST['prix']);

// $motoManager = new MotoManager();

// $saveisOK= $MotoManager->save($moto);

// if($saveisOK){
//     $message="tout s'est bien passé";
// }else{
//     $message="tout s'est pas bien passé";
// }

header('location:../Views/liste.php?rep=Opération réussi');


?>
