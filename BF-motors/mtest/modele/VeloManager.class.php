<?php
class VeloManager
{
    private $_db;
 
    // Le constructeur prend en paramettre l'instance PDO
    public function __construct($db)
    {
        $this->_db=$db;
    }
    public function add(Velo $velo)
    {
        $resq=$this->_db->prepare("INSERT INTO velo(marque, imat,couleur) VALUES(:marque, :imat; :couleur)");
        $resq->bindValue(':marque', $moto->getMarque());
        $resq->bindValue(':imat', $moto->getImat());
        $resq->bindValue(':couleur', $moto->getCouleur());
        $resq->execute();
    }
    public function get($id)
    {
      $sql=$this->_db->query("SELECT * FROM velo WHERE id=".$imat);
      $row=$sql->fetch();
      $sql->closeCursor();
      $vot=new Velo($row);
      return $vot;
    }

    public function liste()
    {
        $moto=[];
        $resq=$this->_db->query('SELECT * FROM velo ORDER BY imat');
        $donnee=$resq->fetchAll();
        $resq->closeCursor();
        foreach ($donnee as $donnees)
        {
            $velo[]=new Velo ($donnees);
        }
        return $velo;
    }

    public function liste_yamaha()
    {
        $moto=[];
        $resq=$this->_db->query('SELECT * FROM velo WHERE marque="yamaha"');
        $donnee=$resq->fetchAll();
        $resq->closeCursor();
        foreach ($donnee as $donnees)
        {
            $velo[]=new Velo ($donnees);
        }
        return $velo;
    }

    public function liste_kaiser()
    {
        $moto=[];
        $resq=$this->_db->query('SELECT * FROM velo WHERE marque="kaiser"');
        $donnee=$resq->fetchAll();
        $resq->closeCursor();
        foreach ($donnee as $donnees)
        {
            $velo[]=new Velo ($donnees);
        }
        return $velo;
    }


    public function delete($imat)
    {
        $resq=$this->_db->exec("DELETE * FROM velo WHERE id=".$imat);
        return $resq>0;
    }

    public function update(Velo $velo)
    {
         try{ 
                $sql=$this->_db->prepare('UPDATE velo SET marque=:marque,imat=:imat,couleur=:couleur, WHERE id=:imat');
                $d=$sql->execute(array('marque'=>$velo->getMarque(),
                'imat'=>$velo->getImat(),
                'couleur'=>$velo->getCouleur(),
                'id'=>$velo->getImat()
              ));  
         } catch (Exception $ex) {
             echo $ex->getMessage();
         }
       }
}