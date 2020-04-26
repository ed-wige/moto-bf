<?php
  require_once '../Models/Connexion.php'; 
  require_once '../Models/Model.php';





  class Moto extends Model{
      
        protected $pdo;
        protected $table;
           
           public function __construct(){
                 $this->pdo=getpdo();
           }

    
   public function add($marque, $modele, $cylindre, $categorie, $numero, $prix)
  {
      $resq=$this->bd->prepare("INSERT INTO moto SET marque=:marque,cylindre=:cylindre, categorie=:categorie,  modele=:modele,  numero=:numero, prix=:prix");
      $resq->bindValue(':marque', $moto->getMarque());
      $resq->bindValue(':modele',$moto->getModèle());
      $resq->bindValue(':cylindre', $moto->getCylindre());
      $resq->bindValue(':categorie', $moto->getCatégorie());
      $resq->bindValue(':numero',$moto->getNuméro_de_serie());
      $resq->bindValue(':prix', $moto->getPrix());
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
          
            }catch (Exception $ex) {
             echo $ex->getMessage();
         }
       }
}
  
