<?php
class Compte{
    private $id;
    private $nom;
    private $prenom;
    private $login;
    private $pass;


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
    if (is_string($id)){
      $this->id=$id;
    }
  }

  public function setNom($nom){
    if (is_string($nom)){
      $this->nom=$nom;
    }
  }

  public function setPrenom($prenom){
    if (is_string($prenom)){
      $this->prenom=$prenom;
    }
  }

  public function setLogin($login){
    if (is_string($login)){
      $this->login=$login;
    }
  }

  public function setPass($pass){
    if (is_string($pass)){
      $this->pass=$pass;
    }
  }

  //les getters
  public function id(){
    return $this->id;
   }

   public function nom(){
    return $this->nom;
   }

   public function prenom(){
    return $this->prenom;
   }

   public function login(){
    return $this->login;
   }

   public function pass(){
    return $this->pass;
   }

   public function __construct(array $data){
    $this->hydrate($data);
 }
}