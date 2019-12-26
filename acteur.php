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
			<div class="commentaire">
				<div class="firstname_comment">Prenom</div>
				<div class="date_comment">Date</div>
				<div class="text_comment">Texte</div>
			</div>
			<div class="commentaire">
				<div class="firstname_comment">Prenom</div>
				<div class="date_comment">Date</div>
				<div class="text_comment">Texte</div>
			</div>
			<div class="commentaire">
				<div class="firstname_comment">Prenom</div>
				<div class="date_comment">Date</div>
				<div class="text_comment">Texte</div>
				</div>
			</section>

<!-- Pied de page -->
	<?php
	include 'footer.php'
	?>
	</body>
</html>