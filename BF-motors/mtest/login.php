<?php
require_once ("modele/Connexion.class.php");

 function verif()
{
$db=new Db();
$base=$db->getBase();
if(isset($_POST['username']) AND isset($_POST['password']))
{
    $user=htmlspecialchars($_POST['username']);
    $pwd=htmlspecialchars($_POST['password']);

        $requette=$base->prepare('SELECT * FROM respon WHERE username=:username AND password =:password');
        $requette->execute(array('username'=>$username, 'password'=>$password));
        $rep=$requette->fetch();
        if($rep)
        {
            return 'ok';
        }
        else
        {
            $erreur="mot de passe ou nom d'utilisateur incorect";
            return $erreur;
        }
}    
}

?>