
<?php
// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=bdonnée;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
$pseudo = $_POST['pseudo'];
$message = $_POST['message'];

// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO minichat (pseudo, message) VALUES(?, ?)');
$req->execute(array($_POST['pseudo'], $_POST['message']));


// Redirection du visiteur vers la page du minichat
// header('Location: projet.php');
// Récupération des 10 derniers messages
$reponse = $bdd->query('SELECT pseudo, message FROM minichat ORDER BY ID DESC LIMIT 0, 10');

// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
echo '<table border="1">';
while ($donnees = $reponse->fetch())
{
	echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
} 

$reponse->closeCursor();iok
?>