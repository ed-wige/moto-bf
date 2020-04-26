<?php
class Patient
{
    private $id;
    private $nom;
    private $prenom;
    private $date_de_naissance;
    private $lieu_de_résidence;
    private $genre;
    private $profession;
    private $téléphone;
    private $groupe_sanguin;
    private $electrophorèse;
    private $maladie_génétique;
    private $allergies;
    private $sérologie;
    private $date_de_la_denière_visite;
    private $médecin_traitant;
    private $email_du_médecin;
    private $téléphone_du_médecin;


     
    public function __construct(array $donnee){

      foreach ($donnee as $key => $value) {
  
          $methode='set'.ucfirst($key);
          
          if((method_exists($this,$methode))){
            $this->$methode($value);
          }
      }
    }
//les setteurs

public function setId($id)
{
     $this->id=$id;  
}

  public function setNom($nom)
{
   $this->nom=$nom;
}

  public function setPrenom($prenom)
{
      $this->prenom=$prenom;
}


  public function setDate_de_naissance($_date_de_naissance)
{ 
      $this->date_de_naissance=$_date_de_naissance;
}

  public function setLieu_de_Résidence($lieu_de_résidence)
{
    $this->lieu_de_résidence=$lieu_de_résidence;
}
  

  public function setGenre($genre)
{
   $this->genre=$genre;
}
  

  public function setProfession($profession)
{
  $this->profession=$profession;
}
  

  public function setTéléphone($téléphone)
{
  $this->téléphone=$téléphone;
}


  public function setGroupe_Sanguin($groupe_sanguin)
  {
    $this->groupe_sanguin=$groupe_sanguin;
  
  }

  public function setElectrophorèse($electrophorèse)
  {
    $this->electrophorèse=$electrophorèse;
  }
  
public function setMaladie_Génétique($maladie_génétique)
{
  $this->maladie_génétique=$maladie_génétique;
}
  
public function setAllergies($allergies)
{
      $this->allergies=$allergies;
}
  

  public function setSérologie($sérologie)
{
  $this->sérologie=$sérologie;
}
  
public function setDate_de_la_dernière_visite($date_de_la_dernière_visite)
{
  $this->date_de_la_dernière_visite=$date_de_la_dernière_visite;
}
  

  public function setMédecin_traitant($médecin_traitant)
{
  $this->médecin_traitant=$médecin_traitant;
}
  

  public function setEmail_du_médecin($email_du_médecin)
{
  $this->email_du_médecin=$email_du_médecin;
}
  

  public function setTéléphone_du_médecin($téléphone_du_médecin)
{
  $this->téléphone_du_médecin=$téléphone_du_médecin;
}


  //les getters

  public function getId()
{
  return $this->id;
}
   
   public function getNom()
{
    return $this->nom;
}
   
   
 public function getPrenom()
{
    return $this->prenom;
}

   public function getDate_de_naissance()
{
    return $this->date_de_naissance;
}

   public function getLieu_de_Résidence()
{
  return $this->lieu_de_résidence;
}

   public function getGenre()

{
    return $this->genre;
}

   public function getProfession()
{
    return $this->profession;
}

   public function getTéléphone()
{
    return $this->téléphone;
}
   public function getGroupe_Sanguin()
{
    return $this->groupe_sanguin;
}

   public function getElectrophorèse()
{
    return $this->electrophorèse;
}

   public function getMaladie_Génétique(){
    return $this->maladie_génétique;
   }

   public function getAllergies()
   {
    return $this->allergies;
   }

   public function getSérologie()
   {
    return $this->sérologie;
   }

   public function getDate_de_la_dernière_visite()
   {
    return $this->date_de_la_dernière_visite;
   }
   
   public function getMédecin_traitant()
   {
    return $this->médecin_traitant;
   }

   public function getEmail_du_médecin()
   {
    return $this->email_du_médecin;
   }

   public function Téléphone_du_médecin()
   {
    return $this->téléphone_du_médecin;
   } 

}