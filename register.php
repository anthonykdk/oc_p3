<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="style.css" />
		<title>Inscription</title>
	</head>
	
	<body>

<?php
	require 'header_login.php';
?>

	<div class="page_identification">	
	<div id="formulaire_inscription">

	<h2 id="titre_creeruncompte">Créer un compte</h2>

		<div id="pleasecomplete_registration">
			<p>
				Veuillez remplir le formulaire ci-dessous.
			</p>
		</div>

		<form action="includes/register_post.php" method="POST">


		<div id="block_namefirstname">
			<div class="blocknf_name">
				<label for="name">Nom</label> <br />

				<input type="text" id="name_registration" name="name" autofocus required 
				minlength="4" maxlength="20" size="50"> 

			</div>
			<div class="blocknf_firstname">
				<label for="firstname">Prénom</label> <br />

				<input type="text" id="firstname_registration" name="firstname" autofocus required 
				minlength="4" maxlength="20" size="50"> 

			</div>
		</div>

		<div id="block_usernamepassword">
			<div class="block3">
				<label for="username">Identifiant</label> <br />

				<input type="text" id="username_registration" name="username" autofocus required 
				minlength="4" maxlength="20" size="50"> 

			</div>
			<div class="block4">

				<label for="password">Mot de passe</label> <br />
				<input type="password" id="password_registration" name="password" autofocus required 
				minlength="4" maxlength="20" size="50"> 

			</div>

			<div class="block4">
				<label for="password">Confirmation du mot de passe</label> <br />

				<input type="password" id="password_registration" name="repeat_password" autofocus required 
				minlength="4" maxlength="20" size="50"> 
			</div>

		</div>

		<div id="block_questionanswer">
			<div class="blockq_secretquestion">
				<select name="question" id="maquestion">
					<option>--- Choisir une question secrète ---</option>
					<option>Nom de mon premier employeur ?</option>
					<option>Métier de mon grand père ?</option>
					<option>Nom de mon premier animal de companie ?</option>
					<option>Nom de mon film préféré ?</option>
				</select>

			</div>
			<div class="blockq_answer">
				<label for="answer_secretquestion">Réponse</label> <br />
				<input type="text" id="answerquestion_registration" name="answer" 
				minlength="4" maxlength="20" size="50"> 
			</div>
		</div>

		<div id="block_validation">

			<div class="element_valider">
			<button name="submit">S'inscrire</button>
			</div>
		</div>

		</form>

		<div class="prev_button">
			<button>
			<a href="javascript:history.go(-1)">Retour</a>
			</button>
		</div>


	</div>

	</div>

<?php
	require 'footer.php';
?>

	</body>
</html>