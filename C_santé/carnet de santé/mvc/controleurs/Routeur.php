<?php
class Routeur{
  private $_ctrl;
  private $_view;
  
  public function routeReq(){
    try {
      
      // charger toutes les classes
      
    function chargeur ($class){
        include('models/'.$class.'.php');
        
      };
      spl_autoload_register('chargeur');
        
        $url='';
        // le contoleur est inclus selon l'action de l'utilisateur
        if (isset($_GET['url'])) {
          $url=explode('/',filter_var($_GET['url'],FILTER_SANITIZE_URL));
          
          $controleur=ucfirst(strtolower($url[0]));
          
          $controleurClass='Controleur'.$controleur;
          
          $fichierControleur='controleurs/'.$controleurClass.'.php';
          
          
          if(file_exists($fichierControleur)){
            require_once($fichierControleur);
            self::$_ctrl=new $controleurClass($url);
            
            
          }else {
            throw new Exception('Page introuvable');
          }
        }else{
          require_once('controleurs/ControleurAccueil.php');
          self::$_ctrl= new ControleurAccueil($url=null);
          
        }
        
     
      //gestion des erreurs
      
    } catch (Exception $e) {
      $errorMsg=$e->getMessage();
      require_once('views/errorMsg.php');
      
      
    }
    
  }
}





