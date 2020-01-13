<div id="contenu_page">
	<section id="section_presentation">
		<h1 id="titre_gbaf">Groupement Banque-Assurance Français <br /><em>Le représentant de la profession bancaire et des assureurs en France.</em></h1>
			<figure>
				<img id="image_presentation" src="images/illustration_500x197.jpg" alt="illustration de presentation" />
			</figure>
	</section>

	<section id="section_acteurs">
		<h2 id="titre_section_acteurs">Les partenaires et acteurs du secteur bancaire</h2>
		<p id="description_partenaires_acteurs">
			Nous vous proposons un point d’entrée unique, répertoriant un grand nombre d’informations sur les partenaires et acteurs du groupe ainsi que sur les produits et services bancaires et financiers.
		</p>

<?php
	$reponse = $db->query('SELECT * FROM actors ORDER BY id_partner'); 
	while ($donnees = $reponse->fetch()) 
	{
?>
   
	<div id="conteneur_acteurs">
		<div class="bloc_acteur">
			<figure>
				<img src="<?php echo $donnees['logo']; ?>" id="logo_acteur1" alt="logo de formation and co" />
			</figure>
			<h3><?php echo $donnees['title']; ?></h3>
			<p> 
				<?php echo $donnees['description']; ?> 
			</p>

			<a id="lien_vers_acteur_index" href="<?php echo $donnees['link']; ?>">Site web du partenaire</a>

			<form method="GET" action="actor.php">

				<a id="lien_lirelasuite" href="actor.php?id=<?php echo $donnees['id_partner']; ?>">Afficher la suite </a>
	
			</form>

		</div>
	</div>

<?php
	}
$reponse->closeCursor();
?>

		</section>
	</div>