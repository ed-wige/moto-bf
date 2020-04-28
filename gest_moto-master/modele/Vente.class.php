<?php
class Vente{
    private $base;
   function __construct(){
    $this->base=$GLOBALS["base"];
   }
   function vendre($donnee){
       $sell=$this->base->prepare("INSERT INTO vente(nom,numero_de_serie,prenom,somme,telephone) VALUE(:nom,:serie,:prenom,:somme,:telephone)");
       $sell->execute(array(
           "nom"=>$donnee["vnom"],
           "prenom"=>$donnee["vprenom"],
           "serie"=>$donnee["vserie"],
           "somme"=>$donnee["vsomme"],
           "telephone"=>$donnee["vtelephone"]
       ));
   }
}
?>