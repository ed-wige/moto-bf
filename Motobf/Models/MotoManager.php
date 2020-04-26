<?php
//  require_once 'Moto.php';
//  require_once 'Connexion.php';


class MotoManager
{
   
    private $base;
    function __construct(){

        try {
            $this->base=new PDO('mysql:host=localhost;dbname=bf-motors','root','');
        } catch (PDOException $e) {
            echo 'erreur:'.$e->getMessage();
        }

    }
    
     function enregistrer($marque,$modele, $cylindre, $categorie, $numero_de_serie, $prix)
    {
        $inserer=$this->bd->prepare("INSERT INTO moto SET marque=:marque,modele=:modele,cylindre=:cylindre, categorie=:categorie,numero_de_serie=:numero_de_serie, mar_id=:mar_id, prix=:prix");
        $inserer->execute(array(
            "marque"=>$marque,
            "modele"=>$modele,
            "cylindre"=>$cylinde,
            "categorie"=>$categorie,
            "numero_de_serie"=>$numero_de_serie,
            "mar_id"=>$mar_id,
            "prix"=>$prix,
        ));
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
    