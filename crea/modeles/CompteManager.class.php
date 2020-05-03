<?php
include_once("Compte.class.php");
class CompteManager{
    private $base;
    function __construct(){
        $this->base=$GLOBALS["base"];
    }

    function inscription($creercompte){
        //print_r($motoregister);
       $inserer=$this->base->prepare("INSERT INTO compte(nom,prenom,login,pass) VALUES(:nom,:prenom,:login,:pass)");
       $inserer->execute(array(
           "nom"=>$creercompte->nom(),
           "prenom"=>$creercompte->prenom(),
           "login"=>$creercompte->login(),
           "pass"=>$creercompte->pass()
           
   
       ));
   }

}