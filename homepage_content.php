<!-- Section presentation -->

	<div id="contenu_page">
		<section id="section_presentation">
			<h1 id="titre_gbaf">GBAF, Groupement Banque Assurance Français. <br /><em>Le représentant de la profession bancaire et des assureurs en France</em></h1>
			<figure>
				<img id="image_presentation" src="images/illustration_500x197.jpg" alt="illustration de presentation" />
			</figure>
		</section>

<!-- Section acteurs -->

		<section id="section_acteurs">
			<h2 id="titre_section_acteurs">Les partenaires et acteurs du secteur bancaire</h2>
			<p id="description_partenaires_acteurs">
				Nous vous proposons un point d’entrée unique, répertoriant un grand nombre d’informations sur les partenaires et acteurs du groupe ainsi que sur les produits et services bancaires et financiers.
			</p>

<!-- Connection a la BDD -->

<?php
try // on se connecte a la BDD avec PDO
{
	$bdd = new PDO('mysql:host=anthonykondek.com;dbname=kdomaine_gbaf;charset=utf8', 'kdomaine_akondek', 'anthony2020', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); // permet de se connecter a la BDD
}
catch (Exception $e) 
{
	die('Erreur : ' . $e->getMessage()); // Si connection a la BDD impossible affichage d'une erreur
}

$reponse = $bdd->query('SELECT * FROM acteurs ORDER BY id_partners'); // On récupère tout le contenu de la table comptes_utilisateur

while ($donnees = $reponse->fetch()) // On fait une boucle avec while afin d'afficher chaque entrée une à une
{
?>
   
			<div id="conteneur_acteurs">
				<div class="bloc_acteur">
					<figure>
						<img src="<?php echo $donnees['logo']; ?>" id="logo_acteur1" alt="logo de formation and co" />
					</figure>
					<h3><?php echo $donnees['titre']; ?></h3>
					<p> 
						<?php echo $donnees['description']; ?> 
					</p>
					<a href="<?php echo $donnees['lien']; ?>">Site web du partenaire</a>
					<a id="lien_lirelasuite" href="#">Lire la suite</a>
				</div>
			</div>


<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>

		</section>

	</div>