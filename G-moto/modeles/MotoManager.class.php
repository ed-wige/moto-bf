<?php

include_once('Moto.class.php');
class MotoManager
{
    private $base;
    function __construct(){
        $this->base=$GLOBALS["base"];
    }

    function getmarque($marque=""){
        $motoliste=[];
        $get=$this->base->query("SELECT * FROM moto");
        if ($marque!=""){
            $get=$this->base->prepare("SELECT * ,COUNT(marque) as nombre FROM moto WHERE marque=:mark");
           $get->execute(array("mark"=>$marque));
        }
        $don= $get->fetchAll();
        foreach($don as $key=>$tom) {
            $moto=new Moto($tom);
            $motoliste[$key]=$moto;
        }
        return $motoliste;
    }

    function getNombre($marque=""){
        $nb=$this->base->query("SELECT COUNT(marque) as nombre  FROM moto");
        if ($marque!=""){
            $nb=$this->base->prepare("SELECT COUNT(marque) as nombre FROM moto WHERE marque=:mark");
            $nb->execute(array("mark"=>$marque));
        }
        $nomb=$nb->fetch();
        return $nomb["nombre"];
    }

    function get($serie){
        $tomo=$this->base->prepare("SELECT * FROM moto WHERE numero_de_serie=:serie");
       $tomo->execute(array(
            "serie"=>$serie
        ));
        return new Moto($tomo->fetch()); 
    }

    function enregistrer($motoregister){
        print_r($motoregister);
        $inserer=$this->base->prepare("INSERT INTO moto(Numero_de_serie, marque, Modele, Cylindre, Categorie, Prix) VALUES (:numeros,:marques,:modeles,:cylindres,:categories,:prixx)");
        $inserer->execute(array(
    
            ":numeros"=>$motoregister-getNumero_de_serie(),
            ":marques"=>$motoregister->getMarque(),
            ":modeles"=>$motoregister->getModele(),
            ":cylindres"=>$motoregister->getCylindre(),
            ":categories"=>$motoregister->getCategorie(),
            ":prixx"=>$motoregister->getPrix()
        ));
    }
    
    function misejour($motojour){
        $modi=$this->base->prepare("UPDATE moto SET Numero_de_serie=:numeros,marque=:marques,Modele=:modeles,Cylindre=:cylindres,Categorie=:categories,Prix=:prixx WHERE numero_de_serie=:numeros");
        $modi->execute(array(
    
            ":numeros"=>$motojour->getNumero_de_serie(),
            ":marques"=>$motojour->getMarque(),
            ":modeles"=>$motojour->getModele(),
            ":cylindres"=>$motojour->getCylindre(),
            ":categories"=>$motojour->getCategorie(),
            ":prixx"=>$motojour->getPrix()
        ));
    }
    
    function supprimer($motodelete){
        $supr=$this->base->prepare("DELETE FROM moto WHERE numero_de_serie=:numeros");
        $supr->execute(array(
            "numeros"=>$motodelete
        ));
    }
    
    function stock_vente($statu){
            $nb=$this->base->prepare("SELECT COUNT(marque) as nombre FROM moto WHERE disponibilite=:stat");
            $nb->execute(array("stat"=>$statu));
        $nomb=$nb->fetch();
        return $nomb["nombre"];
    }
    
}