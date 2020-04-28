<?php
/**
 * 
 * retourne une connexion PDO a la base de donnée
 * @return PDO
 * */
 require_once 'Moto.php';

abstract class Model {
  
    private static $_bdd;
    private static  function setBdd (){
      self::$_bdd=new PDO('mysql:host=localhost;dbname=bf-motors','root','');
      self::$_bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
      
    }
    protected function add($marque, $modele, $cylindre, $categorie, $numero, $prix)
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
    protected function get($id)
     {
       $sql=$this->_db->query("SELECT * FROM moto WHERE id=".$id);
       $row=$sql->fetch();
       $sql->closeCursor();
       $mot=new Moto($row);
       return $mot;
     }
  
     protected function liste()
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
      protected function delete($id)
      {
          $resq=$this->_db->exec("DELETE * FROM moto WHERE id=".$id);
          return $resq>0;
      }
  
      protected function update(Moto $moto)
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
    




  
   
  
