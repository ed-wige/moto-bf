<?php
require_once '../Models/Moto.php';
require_once '../Models/Model.php';

$moto=new Moto();
if (isset($_POST)) {
    $moto->add( 
        $_POST['marque'],
        $_POST['modele'],
        $_POST['cylindre'],
        $_POST['categorie'],
        $_POST['numero'],
        $_POST['prix'],
    );
    header('location:../Views/liste.php?rep=Opération réussi');
}

?>
