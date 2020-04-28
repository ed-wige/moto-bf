<?php
class Moto{
    private $_id;
  private $_marque;
  private $_modele;
  private $_cylindre;
  private $_categorie;
  private $_numero_de_serie;
  private $_prix;
  
  // public function __construct(array $data){
  //   $this->hydrate($data);
  // }
  
  
  public function hydrate(array $data){
    foreach ($data as $key => $value){
      $method='set'.ucfirst($key);
      if(method_exists($this,$method)){
        $this->$method($value);
      }
    }
  }

   //les setteurs
   public function setId($id){
    $id=(int)$id;
    if ($id>0){
     $this->_id=$id;
    }
  }

  public function setMarque($marque){
    if (is_string($marque)){
      $this->_marque=$marque;
    }
  }

  public function setModele($modele){
    if (is_string($modele)){
      $this->_modele=$modele;
    }
  }

  public function setCylindre($cylindre){
    if (is_string($cylindre)){
      $this->_cylindre=$cylindre;
    }
  }

  public function setCatégorie($categorie){
    if (is_string($categorie)){
      $this->_categorie=$categorie;
    }
  }

  public function setNuméro_de_serie($numero_de_serie){
    if (is_string($numero_de_derie)){
      $this->_numero_de_serie=$numero_de_derie;
    }
  }

  public function setPrix($prix){
    if (is_string($prix)){
      $this->_prix=$prix;
    }
  }


   //les getters
   public function id(){
    return $this->_id;
   }

   public function marque(){
    return $this->_marque;
   }

   public function modele(){
    return $this->_modele;
   }

   public function cylindre(){
    return $this->_cylindre;
   }

   public function categorie(){
    return $this->_categorie;
   }

   public function numero_de_serie(){
    return $this->_numero_de_serie;
   }

   public function prix(){
    return $this->_prix;
   }
}
