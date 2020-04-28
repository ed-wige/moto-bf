<?php
$manageur=new Mmanager(); 
$moto=new Moto();
$marque=" ";
$modele=" ";
$prix=" ";
$couleur=" ";
$cylindre=" ";
$serie=" ";

$titre="Save";
 if(isset($_GET["serie"])){
     $moto=$manageur-> get($_GET["serie"]);
     $titre="Mettre ajour";

$marque='value="'.$moto->getmarque().'"';
$modele='value="'.$moto->getmodele().'"';
$prix='value="'.$moto->getprix().'"';
$couleur='value="'.$moto->getcouleur().'"';
$cylindre='value="'.$moto->getcylindre().'"';
$serie='value="'.$moto->getserie().'"';
}
if(isset($_POST["marque"]) AND isset($_POST["prix"]) AND isset($_POST["modele"]) AND isset($_POST["couleur"]) AND isset($_POST["cylindre"])
AND isset($_POST["numero_de_serie"])){
    $_POST["disponibilite"]="stock";
    $_POST["nombre"]="";
    $moto=new Moto($_POST);
    if($serie!=" "){
     $manageur->misejour($moto);
    }else{
        $manageur->enregistrer($moto);
    }

   header("location:index.php?page=liste");
    
}

$contenu="../vues/ins_up.vue.php";
require("../vues/app.vue.php");
?>