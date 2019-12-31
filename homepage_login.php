<!-- Login -->

		<div id="page_identification">	
			<div id="login_welcome">
				<div id="welcome_text">• Bienvenue sur l'extranet de GBAF •</div>
				<div id="pleaselogin_text">Veuillez vous identifier.</div>
			</div>
			<br />		

			<div id="formulaire_login">
				<div class="element_username">

				<form action="index.php" method="post">

					<label for="username_login">Identifiant<br /></label>
					<input type="text" id="username_login" name="username_login" required 
					minlength="4" maxlength="20" size="25">
				</div>
				<div class="element_password">
					<label for="password_login">Mot de passe<br /></label>
					<input type="password" id="password_login" name="password_login" required 
					minlength="4" maxlength="20" size="25">
				</div>
				<div class="element_valider">
					<br /><button>Valider</button>	
				</div>
				</form>
			</div>
	
			<div id="login_createaccount">	
				Pas encore de compte ? <a href="#">Créer un compte</a>
			</div>


<!-- Creation de compte -->

			<div id="creation_compte">
				<p>
					Créer un compte
				</p>
				<label for="name">Nom :</label>
				<input type="text" id="name" name="name" required 
				minlength="4" maxlength="20" size="20">
				<label for="firstname">Prénom :</label>
				<input type="text" id="firstname" name="firstname" required 
				minlength="4" maxlength="20" size="20">
				<label for="username">Identifiant :</label>
				<input type="text" id="username" name="username" required 
				minlength="4" maxlength="20" size="20">
				<label for="password">Mot de passe :</label>
				<input type="password" id="password" name="password" required 
				minlength="4" maxlength="20" size="20">
				<label for="secretquestion">Question secrète :</label>
				<input type="text" id="secretquestion" name="secretquestion" required 
				minlength="4" maxlength="20" size="20">
				<label for="answer_secretquestion">Réponse à la question secrète :</label>
				<input type="text" id="answer_secretquestion" name="answer_secretquestion" required 
				minlength="4" maxlength="20" size="20">
				<button>Valider</button>
			</div>
		</div>