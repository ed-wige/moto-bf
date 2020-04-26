<?php
class PatientManager
{
  private $_db; // Instance de PDO

  public function __construct($db)
  {
    $this->setDb($db);
  }
  // $db = new PDO('mysql:host=localhost;dbname=basedd', 'root', '');

  public function add(patient $perso)
  {
    $q = $this->_db->prepare('INSERT INTO patient(Id, Nom, Prenom, Date_de_naissance, Lieu_de_Résidence, Genre,Profession, Téléphone, Groupe Sanguin, Électrophorèse, Maladie_Génétique, Allergies, Sérelogie, Date_de_la_dernière_visite, Médecin_traitant, Email_du_médecin, Téléphone_du_médécin) VALUES (:id), (:nom), (:prenom), (:date_de_naissance), (:lieu_de_résidence), (:genre),(:profession), (:téléphone),(:groupe_sanguin), (:electrophorèse), (:maladie_génétique), (:allergies), (:sérelogie), (:date_de_la_dernière_visite), (:médecin_traitant), (:email_du_médecin), (:téléphone_du_médécin)');

    $q->bindValue(':nom', $perso->nom());
    $q->bindValue(':prenom', $perso->prenom());
    $q->bindValue(':date_de_naissance', $perso->date_de_naissance());
    $q->bindValue(':lieu_de_résidence', $perso->lieu_de_résidence());
    $q->bindValue(':profession', $perso->profession());
    $q->bindValue(':téléphone', $perso->téléphone());
    $q->bindValue(':groupe_sanguin', $perso->groupe_sanguin());
    $q->bindValue(':électrophorèse', $perso->électrophorèse());
    $q->bindValue(':maladie_génétique', $perso->maladie_génétique());
    $q->bindValue(':allergies', $perso->allergie());
    $q->bindValue(':sérologie', $perso->sérologie());
    $q->bindValue(':date_de_la_dernière_visite', $perso->date_de_la_dernière_visite());
    $q->bindValue(':médécin_traitant', $perso->médécin_traitant());
    $q->bindValue(':email_médecin', $perso->email_médecin());
    $q->bindValue(':téléphone_médecin', $perso->téléphone());

    $q->execute();
    $perso->hydrate([
      'id' => $this->_db->lastInsertId(),
      'degats' => 0,
    ]);
  }
  
  public function count()
  {
    return $this->_db->query('SELECT COUNT(*) FROM patient')->fetchColumn();
  }
  

  public function delete(patient $perso)
  {
    $this->_db->exec('DELETE FROM patient WHERE id = '.$perso->id());
  }

  public function get($id)
  {
    $id = (int) $id;

    $q = $this->_db->query('SELECT * FROM patient WHERE id = '.$id);
    $donnees = $q->fetch(PDO::FETCH_ASSOC);

    return new Pe($donnees);
  }

  public function getList()
  {
    $persos = [];

    $q = $this->_db->query('SELECT * FROM patient ORDER BY nom');

    while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
    {
      $persos[] = new patient ($donnees);
    }

    return $persos;
  }

  public function update(Patient $perso)
  {
    $q = $this->_db->prepare('UPDATE patient SET allergies = :allergie, sérologie = :sérologie, maladie_génétique = :maladie_génétique, date_de_la_dernière_visite= :date_de_la_dernière_visite WHERE id = :id');

    $q->bindValue(':maladie_génétique', $perso->maladie_génétique());
    $q->bindValue(':allergies', $perso->allergie());
    $q->bindValue(':sérologie', $perso->sérologie());
    $q->bindValue(':date_de_la_dernière_visite', $perso->date_de_la_dernière_visite());

    $q->execute();
  }

  public function setDb(PDO $db)
  {
    $this->_db = $db;
  }
}

