<?php
class Patient
{
    private $_id;
    private $_nom;
    private $_prenom;
    private $_date_de_naissance;
    private $_lieu_de_résidence;
    private $_genre;
    private $_profession;
    private $_téléphone;
    private $_groupe_sanguin;
    private $_electrophorèse;
    private $_maladie_genetique;
    private $_allergie;
    private $_serologie;
    private $_date_de_la_deniere_visite;
    private $_medecin_traitant;
    private $_email_du_medecin;
    private $_telephone_du_medecin;



        public function __construct(array $data){
            $this->hydrate($data);
          }
          
          
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

  public function setNom($nom){
    if (is_string($nom)){
      $this->_nom=$nom;
    }
  }

  public function setPrenom($prenom){
    if (is_string($prenom)){
      $this->_prenom=$prenom;
    }
  }


  public function setDate_de_naissance($_date_de_naissance){
    if (is_string($_date_de_naissance)){
      $this->_date_de_naissance=$_date_de_naissance;
    }
  }

  public function setLieu_deRésidence($lieu_de_résidence){
    if (is_string($lieu_de_résidence)){
      $this->_lieu_de_résidence=$lieu_de_résidence;
    }
  }

  public function setGenre($genre){
    if (is_string($genre)){
      $this->_genre=$genre;
    }
  }

  public function setProfession($profession){
    if (is_string($profession)){
      $this->_profession=$profession;
    }
  }

  public function setTéléphone($téléphone){
    if (is_string($téléphone)){
      $this->_téléphone=$téléphone;
    }
  }

  public function setGroupe_Sanguin($groupe_sanguin){
    if (is_string($groupe_sanguin)){
      $this->_groupe_sanguin=$groupe_sanguin;
    }
  }

  public function setElectrophorèse($electrophorèse){
    if (is_string($electrophorèse)){
      $this->_electrophorèse=$electrophorèse;
    }
  }

  public function setMaladie_Génétique($maladie_genetique){
    if (is_string($maladie_genetique)){
      $this->_maladie_genetique=$maladie_genetique;
    }
  }

  public function setAllergies($allergies){
    if (is_string($)){
      $this->_allergies=$allergies;
    }
  }

  public function setSérologie($sérologie){
    if (is_string($sérologie)){
      $this->_sérologie=$sérologie;
    }
  }

  public function setDate_de_la_dernière_visite($date_de_la_dernière_visite){
    if (is_string($date_de_la_dernière_visite)){
      $this->_date_de_la_dernière_visite=$date_de_la_dernière_visite;
    }
  }

  public function setMédecin_traitant($médecin_traitant){
    if (is_string($médecin_traitant)){
      $this->_médecin_traitant=$médecin_traitant;
    }
  }

  public function setEmail_du_médecin($email_du_médecin){
    if (is_string($email_du_médecin)){
      $this->_email_du_médecin=$email_du_médecin;
    }
  }

  public function setTéléphone_du_médecin($téléphone_du_médecin){
    if (is_string($téléphone_du_médecin)){
      $this->_téléphone_du_médecin=$téléphone_du_médecin;
    }
  }

  //les getters

  public function id(){
    return $this->_id;
   }
   
   public function nom(){
    return $this->_nom;
   }
   
   
 public function prenom(){
    return $this->_prenom;
   }

   public function date_de_naissance(){
    return $this->_date_de_naissance;
   }

   public function lieu_de_résidence(){
    return $this->_lieu_de_résidence;
   }

   public function genre(){
    return $this->_genre;
   }

   public function profession(){
    return $this->_profession;
   }

   public function téléphone(){
    return $this->_téléphone;
   }
   public function groupe_sanguin(){
    return $this->_groupe_sanguin;
   }

   public function electrphorèse(){
    return $this->_electrphorèse;
   }

   public function maladie_génétique(){
    return $this->_maladie_génétique;
   }

   public function allergies(){
    return $this->_allergies;
   }

   public function sérologie(){
    return $this->_sérologie;
   }

   public function date_de_la_dernière_visite(){
    return $this->_date_de_la_dernière_visite;
   }
   
   public function médecin_traitant(){
    return $this->_medecin_traitant;
   }

   public function email_du_médecin(){
    return $this->_email_médecin;
   }

   public function téléphone_du_médecin(){
    return $this->_téléphone_du_médecin;
   }

}