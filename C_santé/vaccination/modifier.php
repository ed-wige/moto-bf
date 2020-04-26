<?php 
include('class_vacci.php');

$vaccin=new Vaccin();
if (isset($_POST)) {
    $vaccin->modifier($_POST['pseu'],$_POST['mess']
);
header('location:accueil.php?rep=vaccin Enregistre avec succes');
}
?>