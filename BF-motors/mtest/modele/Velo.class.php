<?php
class Velo
{
    private $marque;
    private $imat;
    private $couleur;

    // Appel du constructeur
 
    public function __construct(array $donnee){

        foreach ($donnee as $key => $value) {
    
            $methode='set'.ucfirst($key);
            
            if((method_exists($this,$methode))){
              $this->$methode($value);
            }
        }
      }
     
      // Liste des getters

    public function getMarque()
    {
        return $this->marque;
    }
    public function getImat()
    {
        return $this->imat;
    }
    public function getCouleur()
    {
        return $this->couleur;
    }

    
    // Liste des setters

    public function setMarque($marque)
    {
        $this->marque=$marque;
    }
    public function setImat($imat)
    {
        $this->imat=$imat;
    }
    public function setCouleur($couleur)
    {
        $this->couleur=$couleur;
    }