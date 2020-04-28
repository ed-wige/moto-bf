<?php

class ControleurFormulaire {
$motoManager=new MotoManager(); 
$moto=new Moto();
$numero_de_serie=" ";
$marque=" ";
$modele=" ";
$prix=" ";
$cylindre=" ";
//constructeur

$titre="Save";
 if(isset($_GET["numero_de_serie"])){
     $moto=$motoManager-> get($_GET["numero_de_serie"]);
     $titre="Mettre ajour";

$numero_de_serie='value="'.$moto->getNumero_de_serie().'"';
$marque='value="'.$moto->getmarque().'"';
$modele='value="'.$moto->getModele().'"';
$prix='value="'.$moto->getPrix().'"';
$cylindre='value="'.$moto->getCylindre().'"';
}
if(isset($_POST["numero"]) AND isset($_POST["marque"]) AND isset($_POST["modele"]) AND isset($_POST["cylindre"])
AND isset($_POST["categorie"]) AND isset($_POST["prix"])){
    $_POST["disponibilite"]="stock";
    $_POST["nombre"]="";
    $moto=new Moto($_POST);
    if($serie!=" "){
     $motoManager->misejour($moto);
    }else{
        $motoManager->enregistrer($moto);
    }

   header("location:index.php?page=liste");
    
}

$contenu="../vues/formulaire.php";
require("../vues/app.vue.php");
?>
