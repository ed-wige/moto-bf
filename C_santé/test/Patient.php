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
    private $_groupesanguin;
    private $_electrophorèse;
    private $_maladie_genetique;
    private $_allergie;
    private $serologie;
    private $_date_de_la_deniere_visite;
    private $_medecin_traitant;
    private $_email_du_medecin;
    private $_telephone_du_medecin
}// Un tableau de données doit être passé à la fonction (d'où le préfixe « array »).
public function hydrate(array $donnees)
{

}

public function id() { return $this->_id; }
public function nom() { return $this->_nom; }
public function forcePerso() { return $this->_forcePerso; }
public function degats() { return $this->_degats; }
public function niveau() { return $this->_niveau; }
public function experience() { return $this->_experience; }



public function __construct(array $basedd)

{
    // // attention sans vérifier l'existance des index dans le tableau cette façon de faire est une source d'ennuie assurée.
    // $this->Id = $basedd['id'];
    // $this->Nom = $basedd['nom'];
    // $this->Prenom = $basedd['prenom'];
    // $this->Date_de_naissance = $basedd['date_de_naissance'];
    // $this->Lieu_de_Résidence = $basedd['lieu_de_résidence'];
    // $this->Genre = $basedd['genre'];
    // $this->Profession = $basedd['profession'];
    // $this->Téléphone = $basedd['téléphone'];
    // $this->Groupe_sanguin = $basedd['groupe_sanguin'];
    // $this->Electrophorèse = $basedd['electrophorèse'];
    // $this->maladie_génétique = $basedd['maladie_genetique'];
    // $this->Allergie = $basedd['allergie'];
    // $this->Serologie = $basedd['serologie'];
    // $this->Date_de_naissance = $basedd['date_de_naissance'];
    // $this->Médécin_traitant = $basedd['médécin_traitant'];
    // $this->Email_du_médécin = $basedd['email_du_medecin'];
    // $this->Téléphone_du_médécin= $basedd['téléphone du médecin'];






}
public function getid()
{
    return $this->id;
}

public function setid($id)
{
    $this->Id = $id;
}

public function getnom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setnom($nom)
    {
        $this->nom = $nom;
    } ,

    public function getprenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $nom
     */
    public function setprenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function getdate_de_naissance()
    {
        return $this->date_de_naissance;
    }

    /**
     * @param mixed $nom
     */
    public function setdate_de_naissance($date_de_naissance)
    {
        $this->date_de_naissance = $date_de_naissance;
    }

    public function getlieu_de_residence()
    {
        return $this->lieu_de_residence;
    }

    /**
     * @param mixed $nom
     */
    public function setlieu_de_resisdence($lieu_de_résidence)
    {
        $this->lieu_de_residence = $lieu_de_residence;
    }
    public function getgenre()
    {
        return $this->genre;
    }

    /**
     * @param mixed $nom
     */
    public function setgenre($genre)
    {
        $this->genre = $genre;
    }

    public function getprofession()
    {
        return $this->profession;
    }

    /**
     * @param mixed $nom
     */
    public function setprofession($profession)
    {
        $this->profession = $profession;
    }


    public function gettéléphone()
    {
        return $this->téléphone;
    }

    /**
     * @param mixed $nom
     */
    public function settéléphone($téléphone)
    {
        $this->téléphone = $téléphone;
    }


    public function getgroupe_sanguin()
    {
        return $this->groupe_sanguin;
    }

    /**
     * @param mixed $nom
     */
    public function setgroupe_sanguin($groupe_sanguin)
    {
        $this->groupe_sanguin = $groupe_sanguin;
    }

    public function getelectrphorese()
    {
        return $this->electrophorèse;
    }

    /**
     * @param mixed $nom
     */
    public function setelectrophorèse($electrophorèse)
    {
        $this->electrophorèse = $electrophorese;
    }

    public function getmaladie_genetique()
    {
        return $this->maladie_genetique;
    }

    /**
     * @param mixed $nom
     */
    public function setmaladie_genetique($maladie_genetique)
    {
        $this->maladie_genetique = $maladie_genetique;
    }

    public function getallergie()
    {
        return $this->allergie;
    }

    /**
     * @param mixed $nom
     */
    public function setallergie($allergie)
    {
        $this->allergie = $allergie;

    }
    public function getserologie()
    {
        return $this->serologie;
    }

    /**
     * @param mixed $nom
     */
    public function setserologie($seroloie)
    {
        $this->serologie = $serologie;
    }
    public function getdate_de_la_derniere_visite()
    {
        return $this->date_de_la_derniere_visite;
    }

    /**
     * @param mixed $nom
     */
    public function setdate_de_la_derniere_visite($date_de_la_derniere_visite)
    {
        $this->date_de_la_derniere_visite = $date_de_la_derniere_visite;
    }
    public function getmedecin_traitant()
    {
        return $this->medecin_traitant;
    }

    /**
     * @param mixed $nom
     */
    public function setmedecin_traitant($medecin_traitant)
    {
        $this->allergie = $medecin_traitant;

        public function getemail_medecin()
        {
            return $this->email_medecin;
        }
    
        /**
         * @param mixed $nom
         */
        public function setemail_medecin($email_medecin)
        {
            $this->email_medecin = $email_medecin;
        }

        public function gettelephone_medecin()
        {
            return $this->telephone_medecin;
        }
    
        /**
         * @param mixed $nom
         */
        public function telephonr_medecin($téléphone_medecin)
        {
            $this->telephone_medecin = $telephone_medecin;
        }

        class listeManager extends Databasa{
            public function getPatient(){
  
     
                return self::getAll('patient');
              }
              
              
            }
        }