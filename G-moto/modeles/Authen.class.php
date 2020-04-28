<?php
class Authen{

   private $base;
   function __construct(){
    $base=$GLOBALS["base"];
   }

    function isAuthen($id,$password){
        $aut=$this->base->prepare("SELECT * FROM admin WHERE username=:username AND password=:pwd");
        $conn=$aut->execute(array(
            "username"=>$id,
            "pwd"=>$password
        ));
        if(count($nasa->fetch()!=0)){
            return $nasa->fetch();
        }
        else{ 
            return false;
        }
    }
}
?>

