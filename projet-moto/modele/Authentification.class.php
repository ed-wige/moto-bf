<?php
class Authentification{

   private $base;
   function __construct(){
    $base=$GLOBALS["base"];
   }

    function isAdmin($id,$password){
        $aut=$this->base->prepare("SELECT * FROM compte WHERE login=:login AND password=:pwd");
        $admin=$aut->execute(array(
            "login"=>$id,
            "pwd"=>$password
        ));
        if(count($admin->fetch()!=0)){
            return $admin->fetch();
        }
        else{ 
            return false;
        }
    }
}
?>
