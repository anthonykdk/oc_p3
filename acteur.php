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
	include 'header.php'
	?>

<!-- Section acteur -->

		<section id="section_acteur">
			<figure>
				<img src="images/logo_acteur1.png" alt="logo acteur 1">
			</figure>
			<h2>Formation&co</h2>
			<a id="lien_vers_acteur" href="#">Site web de Formation&co</a>
			<p>
				Formation&co est une association française présente sur tout le territoire.
				Nous proposons à des personnes issues de tout milieu de devenir entrepreneur grâce à un crédit et un accompagnement professionnel et personnalisé.
			</p>
			<ul>Notre proposition :</ul>
					<li>un financement jusqu’à 30 000€ ;</li>
					<li>un suivi personnalisé et gratuit ;</li>
					<li>une lutte acharnée contre les freins sociétaux et les stéréotypes.</li>
			<p>
				Le financement est possible, peu importe le métier : coiffeur, banquier, éleveur de chèvres… . Nous collaborons avec des personnes talentueuses et motivées.
				Vous n’avez pas de diplômes ? Ce n’est pas un problème pour nous ! Nos financements s’adressent à tous.	
			</p>
		</section>
		
<!-- Section commentaires -->

		<section id="section_commentaires">
			<h3>X commentaires</h3>
			<button>Nouveau commentaire</button>
			<button>Likes</button>

<!-- Connection a la BDD -->
<?php
try // on se connecte a la BDD avec PDO
{
	$bdd = new PDO('mysql:host=anthonykondek.com;dbname=kdomaine_gbaf;charset=utf8', 'kdomaine_akondek', 'anthony2020', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); // permet de se connecter a la BDD
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage()); // On affiche une erreur si la connection a la BDD est impossible
}

$reponse = $bdd->query('SELECT * FROM commentaires ORDER BY id_comments'); // On récupère tout le contenu de la table comptes_utilisateur

while ($donnees = $reponse->fetch()) // On fait une boucle avec while afin d'afficher chaque entrée une à une
{
?>		
			<div class="commentaire">
				<div class="firstname_comment"><?php echo $donnees['prenom']; ?> </div>
				<div class="date_comment"> <?php echo $donnees['date']; ?> </div>
				<div class="text_comment"> <p><?php echo $donnees['texte']; ?> </p> </div>
			</div>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>

		</section>

<!-- Pied de page -->

	<?php
	include 'footer.php'
	?>
	
	</body>
</html>