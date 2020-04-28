<?php
session_start();
require_once('Models/connexion.php');

class AuthManager 
{
    private $_admiManager;

    public function __construct()
    {    
        if (isset($url)) 
        {
            throw new Execption ('La page est introuvable');
        }
        else 
        {
            $this->administrateurs();
        }
    }

    public function administrateurs()
    {
        $bd = bdd();
        $log = new AdmiManager($bd);
        if (isset($_POST['username']) AND $_POST['password']) 
        {
            $log = new AdmiManager($bd);
            $log->connexion();
        }
        elseif (!(isset($_POST['username']) AND $_POST['password'])) 
        {
            $this->_admiManager = new AdmiManager($bd) ;
            $this->_admiManager->connexion();
            require_once('Views/Authentification.php');
        }
        else 
        {            
            require_once('Views/Authentification.php');
            $msg = "l'identifiant ou le mot de passe est incorecte";
        }
    }
}