<?php
//chargement de la class
require_once("Info.php");

//instanciation d'un objet
$Info_Sidiki = new Info();

//instanciation d'un autre objet
$info_Martial = new Info();

$Info_Sidiki->enregister_patient();
$Info_Sidiki->afficher_patient();
$Info_Sidiki->supprimer_patient();