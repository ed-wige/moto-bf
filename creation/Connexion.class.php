<?php
class Connexion
{
    private $base;
    function __construct()
    {
        $this->base=new PDO("mysql:host=localhost;dbname=bdcrea","root","");
       }
       function getBase(){
       return $this->base;
       }
    }
    ?>