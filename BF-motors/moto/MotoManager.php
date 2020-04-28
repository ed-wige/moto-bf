<?php
require_once '..Models/Connexon.php';
require_once 'Controllers/autoload.php'
class MotoManager
{
    private $_db;
 
    // Le constructeur prend en paramettre l'instance PDO
    // public function __construct($db)
    // {
    //     $this->_db=$db;
    // }
    public function add(MotoManager $motoManager)
    {
        $resq=$this->_db->prepare("INSERT INTO moto SET marque=:marque,cylindre=:cylindre, categorie=:categorie,  modele=:modele,  numero_de_serie=:numero_de_serie, prix=:prix");
        $resq->bindValue(':marque', $motoManager->getMarque());
        $resq->bindValue(':modele',$motoManager->getModèle());
        $resq->bindValue(':cylindre', $motoManager->getCylindre());
        $resq->bindValue(':categorie', $motoManager->getCatégorie());
        $resq->bindValue(':numero_de_serie',$motoManager->getNuméro_de_serie());
        $resq->bindValue(':prix', $motoManager->getPrix());
        $resq->execute();
    }

    public function get($id)
   {
     $sql=$this->_db->query("SELECT * FROM moto WHERE id=".$id);
     $row=$sql->fetch();
     $sql->closeCursor();
     $mot=new Moto($row);
     return $mot;
   }

    public function liste()
    {
        $moto=[];
        $resq=$this->_db->query('SELECT * FROM moto ORDER BY marque');
        $donnee=$resq->fetchAll();
        $resq->closeCursor();
        foreach ($donnee as $donnees)
        {
            $moto[]=new Moto ($donnees);
        }
        return $moto;
    }

    // public function liste_yamaha()
    // {
    //     $moto=[];
    //     $resq=$this->_db->query('SELECT * FROM moto WHERE marque="yamaha"');
    //     $donnee=$resq->fetchAll();
    //     $resq->closeCursor();
    //     foreach ($donnee as $donnees)
    //     {
    //         $moto[]=new Moto ($donnees);
    //     }
    //     return $moto;
    // }

    // public function liste_rato()
    // {
    //     $moto=[];
    //     $resq=$this->_db->query('SELECT * FROM moto WHERE marque="rato"');
    //     $donnee=$resq->fetchAll();
    //     $resq->closeCursor();
    //     foreach ($donnee as $donnees)
    //     {
    //         $moto[]=new Moto ($donnees);
    //     }
    //     return $moto;
    // }

    // public function liste_kaiser()
    // {
    //     $moto=[];
    //     $resq=$this->_db->query('SELECT * FROM moto WHERE marque="kaiser"');
    //     $donnee=$resq->fetchAll();
    //     $resq->closeCursor();
    //     foreach ($donnee as $donnees)
    //     {
    //         $moto[]=new Moto ($donnees);
    //     }
    //     return $moto;
    // }

    public function delete($id)
    {
        $resq=$this->_db->exec("DELETE * FROM moto WHERE id=".$id);
        return $resq>0;
    }

    public function update(Moto $moto)
    {
        //echo $patient->getId();
         try{ 
                $sql=$this->_db->prepare('UPDATE moto SET marque=:marque,modele=:modele,cylindre=:cylindre,categorie=:categorie,
                numero_de_serie=:numero_de_serie,prix=:prix WHERE id=:id');
                $d=$sql->execute(array('categorie'=>$moto->getCatégorie(),
                'marque'=>$moto->getMarque(),
                'modele'=>$moto->getModèle(),
                'cylindre'=>$moto->getCylindre(),
                'numero_de_serie'=>$moto->getNuméro_de_serie(),
                'prix'=>$moto->getPrix(),
                'id'=>$moto->getId()
              ));  
         } catch (Exception $ex) {
             echo $ex->getMessage();
         }
       }
}