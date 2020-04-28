<?php
$manageur=new Mmanager();
$admin=new Admin();
$stock=$manageur->stock_vente('stock');
$vendu=$manageur->stock_vente('vendu');

if(isset($_POST['pass']) AND isset($_POST['passconfirm'])){
    if($_POST['pass']==$_POST['passconfirm']){
        $admin->changePassWord($_POST['pass'],$_SESSION["identifiant"]);
        $reponse="mot de passe changer avec succes";
    }else{
        $reponse=" les mots de passe ne correspondent pas,Reessayez!!";
    }
    echo('<script> alert('.$reponse.')</script>');
}

if(isset($_GET['deconnect'])){
    session_destroy();
    header('location:index.php?page=connexion');
}
$contenu="../vues/accueil.vue.php";
require("../vues/app.vue.php");


?>