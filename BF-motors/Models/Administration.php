<?php

class Administration 
{
    public function connectAdmin($Sanou, $Ouédraogo){
        $ei = new identification;
        $ei->connexion($Sanou, $Ouédraogo);
    }
}
?>