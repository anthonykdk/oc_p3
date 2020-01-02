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

<!-- Creation de compte -->

<div class="page_identification">	
<div id="formulaire_inscription">

<h2 id="titre_creeruncompte">Mot de passe oublié</h2>


	<div id="pleasecomplete_registration">
		<p>
			Veuillez remplir le formulaire ci-dessous.
		</p>
	</div>

	<div id="form_resetpassword">
		<div class="element_rp_username">
			<label for="username">Identifiant</label> <br />
			<input type="text" id="username_reset_password" name="username" required 
			minlength="4" maxlength="20" size="50"> 
		</div>
		<div class="element_rp_question">
			<br />
			<SELECT name="question_secrete" size="1" required id="question_secrete">
				<OPTION selected>--- Choisir une question secrète ---
				<OPTION>Nom de mon premier employeur ?
				<OPTION>Métier de mon grand père ?
				<OPTION>Nom de mon premier animal de companie ?
				<OPTION>Nom de mon film préféré ?
				<OPTION>Mon surnom ?
			</SELECT>
		</div>
		<div class="element_rp_answer">
			<label for="answer_secretquestion">Réponse secrète</label> <br />
			<input type="text" id="answerquestion_registration" name="answerquestion" required 
			minlength="4" maxlength="20" size="50"> 
		</div>
	</div>

		<div id="block_validation">
			<div class="prev_button">
				<button>
				<a href="javascript:history.go(-1)">Retour</a>
				</button>
			</div>
			<div class="element_valider">
			<button>Valider</button>
			</div>
		</div>

</div>

</div>


<!-- Pied de page -->

<?php
	require 'footer.php'
?>

	</body>
</html>