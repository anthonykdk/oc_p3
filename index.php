<?php // on se connecte a la BDD via PDO
try
{
	$bdd = new PDO('mysql:host=anthonykondek.com;dbname=kdomaine_gbaf;charset=utf8', 'kdomaine_akondek', 'anthony2020', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage()); // Si impossible de s'y connecter affichage d'un message d'erreur
}
?>


<!-- PROBLEMATIQUE : Le fait d'enlever DOCTYPE hmtl sur cette page provoque un bug : les images des acteurs n'apparaissent plus... vraiment etrange :O. Alors que celui de la page acteur.php a pu etre enleve et pas de soucis...-->

<!DOCTYPE html> 
<html>
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="style.css" />
		<title>Extranet de GBAF</title>
	</head>
	
<!-- Corps de la page-->

	<body>

<!-- Header -->

<?php
	require 'header.php'
?>


<!-- Envoi du formulaire login -->

<?php
   	if (isset($_POST['username_login']) AND $_POST['username_login'] ==  "anthony" AND isset($_POST['password_login']) AND $_POST['password_login'] ==  "2020" ) // Controle si l'identifiant et le mot de passe correspondent...
 {
?>

<?php
	require 'homepage_content.php' // Si c'est ok on affiche le contenu de la page (presentation et liste acteurs)
?>

<?php
}
else
{
?>
	
<?php
	require 'homepage_login.php'; // Sinon on reste sur le login
}
?>


<!-- Pied de page -->

<?php
	require 'footer.php'
?>

	</body>
</html>