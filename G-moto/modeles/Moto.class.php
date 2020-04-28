<?php
class Moto{
  private $numero_de_serie="";
  private $marque="";
  private $modele="";
  private $cylindre="";
  private $categorie="";
  private $prix="";


  //les getters
  public function getNumero_de_serie(){
    return $this->numero_de_serie;
   }

   public function getMarque(){
    return $this->marque;
   }

   public function getModele(){
    return $this->modele;
   }

   public function getCylindre(){
    return $this->cylindre;
   }

   public function getCategorie(){
    return $this->categorie;
   }

   public function getPrix(){
    return $this->prix;
   }

   //les setters

   public function setNumeroserie($nouvelserie){
     $this->numero_de_serie=$nouvelserie;
   }

   public function setMarque($nouvelmarque){
     $this->marque=$nouvelmarque;
   }

   public function setmodele($nouveaumodele){
     $this->modele=$nouveaumodele;
   }

   public function setCylindre($nouveaucylindre){
     $this->cylindre=$nouveaucylindre;
   }

   public function setCategorie($nouvelcategorie){
     $this->categorie=$nouvelcategorie;
   }

   public function setPrix($nouveauprix){
     $this->prix=$nouveauprix;
   }

   function __construct($donnee=array()){
    if(count($donnee)!=0){
    $this->setModele($donnee["modele"]);
    $this->setCylindre($donnee["cylindre"]);
    $this->setNumeroserie($donnee["numero_de_serie"]);
    $this->setMarque($donnee["marque"]);
    $this->setPrix($donnee["prix"]);
    }
}

}
