<?php
	session_start();
?>

<html>
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="style.css" />
		<title>Mon compte</title>
	</head>
	
	<body>

<?php
	require 'header.php';
?>

	<div class="page_identification">	
	<div id="formulaire_inscription">

	<h2 id="titre_creeruncompte">Mon compte</h2>

		<div id="pleasecomplete_registration">
			<p>
				Informations concernant votre compte.
			</p>
		</div>

		<form>

		<div id="block_namefirstname">
			<div class="blocknf_name">
				<label for="name">Nom</label> <br />
				<input type="text" id="name_registration" name="name" required 
				minlength="4" maxlength="20" size="50"> 
			</div>
			<div class="blocknf_firstname">
				<label for="firstname">Prénom</label> <br />
				<input type="text" id="firstname_registration" name="firstname" required 
				minlength="4" maxlength="20" size="50"> 
			</div>
		</div>

		<div id="block_usernamepassword">
			<div class="block3">
				<label for="username">Identifiant</label> <br />
				<input type="text" id="username_registration" name="username" required 
				minlength="4" maxlength="20" size="50"> 
			</div>
			<div class="block4">
				<label for="password">Mot de passe</label> <br />
				<input type="password" id="password_registration" name="password" required 
				minlength="4" maxlength="20" size="50"> 
			</div>
		</div>

		<div id="block_questionanswer">
			<div class="blockq_secretquestion">
				<SELECT name="question" size="1" required id="question_secrete">
					<OPTION selected>--- Choisir une question secrète ---
					<OPTION>Nom de mon premier employeur ?
					<OPTION>Métier de mon grand père ?
					<OPTION>Nom de mon premier animal de companie ?
					<OPTION>Nom de mon film préféré ?
		
				</SELECT>
			</div>
			<div class="blockq_answer">
				<label for="answer_secretquestion">Réponse</label> <br />
				<input type="text" id="answerquestion_registration" name="answer" required 
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
			<button name="submit">Modifier</button>
			</div>
		</div>

		</form>

	</div>

	</div>

<?php
	require 'footer.php';
?>

	</body>
</html>