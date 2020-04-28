<?php

include("../vues/authentification.php");

function verif()
{
$db=new Db();
$base=$db->getBase();
if(isset($_POST['user']) AND isset($_POST['pwd']))
{
    $user=htmlspecialchars($_POST['user']);
    $pwd=htmlspecialchars($_POST['pwd']);

        $requette=$base->prepare('SELECT * FROM admin WHERE Username =:user AND Password =:pwd');
        $requette->execute(array('user'=>$user, 'pwd'=>$pwd));
        $rep=$requette->fetch();
        if($rep)
        {
            header('location:controlleur/index.php?page=formulaire');
        }


        else
        {
            header("location:index.php?page=loginn");

        }
}    
}