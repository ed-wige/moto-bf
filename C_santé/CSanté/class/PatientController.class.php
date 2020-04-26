<?php
class PatientController
{
  private $_db; // Instance de PDO

  public function __construct($db)
  {
    $this->_db=($db);
  }

  public function ajouter( $patient)
  {
    $q = $this->_db->prepare("INSERT INTO patient SET nom =:nom, prenom =:prenom, date_de_naissance =:date_de_naissance, lieu_de_éésidence =:lieu_de_résidence,
     genre =:genre, profession =:profession, téléphone =:téléphone, groupe_sanguin =:groupe_sanguin, electrophorèse =:electrophorèse, 
    maladie_génétique =:maladie_génétique, allergies =:allergies, sérologie =:sérologie, date_de_la_dernière_visite =:date_de_la_dernière_visite,
     médecin_traitant =:médecin_traitant, email_du_médecin =:email_du_médecin, téléphone_du_médecin=:téléphone_du_médecin");

    $q->bindValue(':nom', $patient->getNom());
    $q->bindValue(':prenom', $patient->getPrenom());
    $q->bindValue(':date_de_naissance', $patient->getDate_de_naissance());
    $q->bindValue(':lieu_de_résidence', $patient->getLieu_de_Résidence());
    $q->bindValue(':profession', $patient->getProfession());
    $q->bindValue(':téléphone', $patient->getTéléphone());
    $q->bindValue(':groupe_sanguin', $patient->getGroupe_Sanguin());
    $q->bindValue(':electrophorèse', $patient->getelectrophorèse());
    $q->bindValue(':maladie_génétique', $patient->getMaladie_Génétique());
    $q->bindValue(':allergies', $patient->getAllergies());
    $q->bindValue(':sérologie', $patient->getSérologie());
    $q->bindValue(':date_de_la_dernière_visite', $patient->getDate_de_la_dernière_visite());
    $q->bindValue(':médecin_traitant', $patient->getMédecin_traitant());
    $q->bindValue(':email_médecin', $patient->getEmail_du_médecin());
    $q->bindValue(':téléphone_médecin', $patient->getTéléphone_du_médecin());

    $q->execute();
  } 
  
  public function get($id)
  {
    $sql=$this->_db->query("SELECT * FROM patient WHERE id=".$id);
    $row=$sql->fetch();
    $sql->closeCursor();
    $p=new Patient($row);
    return $p;
  }
  

  public function delete($id)
  {
    $sql=$this->_db->exec("DELETE  FROM patient WHERE id=".$id);
    return $sql>0;
  }

  // public function get($id)
  // {
  //   $id = (int) $id;

  //   $q = $this->_db->query('SELECT * FROM patient WHERE id = '.$id);
  //   $donnees = $q->fetch(PDO::FETCH_ASSOC);

  //   return new Pe($donnees);
  // }

  public function getList()
  
  {
    $patient=[];
    $sql=$this->_db->query("SELECT * FROM patient ORDER BY nom, prenom ASC");
    $rows=$sql->fetchAll();
    $sql->closeCursor();
    
    foreach ($rows as $row) {

    $patient[]=new Patient($row);
    }
    return $patient;
  }

  public function update(Patient $patient)
  {
    try{
      $q = $this->_db->prepare("UPDATE patient SET Nom =:nom, prenom =:prenom, date_de_naissance =:date_de_naissance, lieu_de_résidence   =:lieu_de_résidence,
      genre =:genre, profession =:profession, téléphone =:téléphone, groupe_sanguin =:groupe_sanguin, electrophorèse =:electrophorèse, 
      maladie_génétique =:maladie_génétique, allergies =:allergies, sérologie =:sérologie, date_de_la_dernière_visite =:date_de_la_dernière_visite,
      médecin_traitant =:médecin_traitant, email_du_médecin =:email_du_médecin, téléphone_du_médecin=:téléphone_du_médecin WHERE id=:id");

      $d=$sql->execute(array('nom'=>$patient->getNom(),
    'prenom'=> $patient->getPrenom(),
    'date_de_naissance'=> $patient->getDate_de_naissance(),
    'lieu_de_résidence'=>$patient->Lieu_de_Résidence(),
    'profession'=>$patient->getProfession(),
    'téléphone'=>$patient->getTéléphone(),
    'groupe_sanguin'=>$patient->getGroupe_Sanguin(),
    'electrophorèse'=>$patient->getelectrophorèse(),
    'maladie_génétique'=>$patient->getMaladie_Génétique(),
    'allergies'=>$patient->getAllergies(),
    'sérologie'=>$patient->getSérologie(),
    'date_de_la_dernière_visite'=>$patient->getDate_de_la_dernière_visite(),
    'médecin_traitant'=>$patient->getMédécin_traitant(),
    'email_médecin'=>$patient->getEmail_du_médecin(),
    'téléphone_médecin'=>$patient->getTéléphone_du_médecin(),
    'id'=>$patient->getId()
        ));  
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
  }
}

           

    // $q->execute();
  

//   public function setDb(PDO $db)
//   {
//     $this->_db = $db;
//   }
// }

