<?php


class Vaccin{

private $bd;

function __construct(){

    try{
        $this->bd=new PDO('mysql:host=localhost; dbname=bdonnée', 'root', '');
        
    }
    catch (PDOException $e){
        echo 'Erreur: '.$e->getMessage();
    }

    
}
public function enregistrer($pseu, $mess) {
    $inserer=$this->bd->prepare("INSERT INTO minichat(pseudo, messag) VALUES(:pseudo, :messag)");

$inserer->execute(array(
    "pseudo"=>$pseu,
    "messag"=>$mess,
));
}
public function modifier($id, $pseu, $mess){
    $mod=$this->bd->prepare("UPDATE minichat SET(pseudo=:pseudoM, messag=:messagM WHERE id=:id");  

$mod->execute(array(
    "pseudoM"=>$pseu,
    "messagM"=>$mess,
    "id"=>$id,
));
}
function supprimer($id){
    $supr=$this->bd->prepare("DELETE FROM minichat WHERE id=:id");
    $supr->execute(array(
        "id"=>$id
    ));
}
function getAll(){
    $vaccin=$this->bd->query("SELECT * FROM minichat");
    return $vaccin->fetchAll();
}
function get($id){
    $vaccin=$this->bd->prepare("SELECT * FROM minichat WHERE id=:id");
    $vaccin->execute(array(
        "id"=>$id
    ));
    return $vaccin->fetch();
}
}
?>
