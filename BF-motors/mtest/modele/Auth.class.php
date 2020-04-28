<?php
class Auth{

   private $base;
   function __construct(){
    $base=$GLOBALS["base"];
   }

    function isMin($id,$password){
        $aut=$this->base->prepare("SELECT * FROM respon WHERE username=:username AND password=:password");
        $min=$aut->execute(array(
            "username"=>$id,
            "password"=>$password
        ));
        if(count($min->fetch()!=0)){
            return $min->fetch();
        }
        else{ 
            return false;
        }
    }
}
?>
