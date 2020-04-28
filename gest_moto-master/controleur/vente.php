<?php
if(isset($_POST["vnom"]) AND isset($_POST["vprenom"]) AND isset($_POST["vsomme"]) AND isset($_POST["vtelephone"]) AND isset($_POST["vserie"])){
    $manageur=new Mmanager();
    $moto=$manageur->get($_POST["vserie"]);
    $moto->setdisponibilite('vendu');
    print_r($moto);
    $sold=new Vente();
    $sold->vendre($_POST);

    $manageur->misejour($moto);

    header("location:index.php?page=liste");
}

 $contenu="../vues/vente.vue.php";
 require("../vues/app.vue.php");
?>