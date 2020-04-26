 <?php
$reponse = $bdd->query('SELECT* FROM minichat');

while ($donnees = $reponse->fetch())
{
	echo $donnees['nom_maj'] . '<br />';
}

$reponse->closeCursor();

?> 