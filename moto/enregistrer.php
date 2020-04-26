<?php
require_once 'MotoManager.php';
$motoManager=new MotoManager();
if (isset($_POST)) {
    $motoManager->enregistrer( 
        $_POST['marque'],
        $_POST['modele'],
        $_POST['cylindre'],
        $_POST['categorie'],
        $_POST['numero_de_serie'],
        $_POST['prix'],
    );
    header('location:liste.php?rep=Opération réussi');
}

?>
