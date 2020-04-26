<?php
class MotoManager
{
    private $_db;
 
    // Le constructeur prend en paramettre l'instance PDO
    public function __construct($db)
    {
        $this->_db=$db;
    }
    public function add(Moto $moto)
    {
        $resq=$this->_db->prepare("INSERT INTO moto(Numero_de_serie, marque, Modele, Cylindre, Categorie, Prix) VALUES(:Numero_de_serie, :marque, :Modele:, :Cylindre, :Categorie, :Prix)");
        $resq->bindValue(':numero', $moto->getNumero_de_serie());
        $resq->bindValue(':marque', $moto->getmarque());
        $resq->bindValue(':modele', $moto->getModele());
        $resq->bindValue(':cylindre', $moto->getCylindre());
        $resq->bindValue(':categorie', $moto->geCategorie());
        $resq->bindValue(':prix', $moto->getPrix());
        $resq->execute();
    }

    public function get($Numero_de_serie)
   {
     $sql=$this->_db->query("SELECT * FROM moto WHERE numero= $Numero_de_serie");
     $row=$sql->fetch();
     $sql->closeCursor();
     $mot=new Moto($row);
     return $mot;
   }
//    function getAll(){
//     $patients=$this->base->query("SELECT * FROM patients");
//     return $patients->fetchAll();
// }
    public function getliste()
    {
        $moto=[];
        $resq=$this->_db->query('SELECT * FROM moto ORDER BY numero');
        $donnee=$resq->fetchAll();
        $resq->closeCursor();
        foreach ($moto as $moto)
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

    public function delete($numero_de_serie)
    {
        $resq=$this->_db->exec("DELETE * FROM moto WHERE Numero_de_serie= .$Numero_de_serie");
        return $resq>0;
    }

    public function update(Moto $moto)
    {
         try{ 
                $sql=$this->_db->prepare('UPDATE moto SET Numero_de_serie=:Numero_de_serie, marque=:marque, Modele=:Modele, Cylindre=:Cylindre, Categorie=:Categorie WHERE Numero_de_serie=:Numero_de_serie');
                $d=$sql->execute(array('marque'=>$moto->getMarque(),
                'modele'=>$moto->getModele(),
                'cylindre'=>$moto->getCylindre(),
                'categorie'=>$moto->getCategorie(),
                'numero'=>$moto->getNumero_de_serie(),
                'prix'=>$moto->getPrix()
              ));  
         } catch (Exception $ex) {
             echo $ex->getMessage();
         }
       }
}