<div id="page_identification">	
	<div id="login_welcome">
		<div id="welcome_text">• Bienvenue •</div>
		<div id="pleaselogin_text">Veuillez vous authentifier.</div>
	</div>
	<br />		

	<div id="formulaire_login">

		<div class="element_username">

		<form action="index.php" method="POST">

			<label for="username_login">Identifiant<br /></label>
			<input type="text" id="username_login" name="username_login" value="<?= isset($_POST['username']) ? $_POST['username'] : '' ?>" required 
			minlength="4" maxlength="20" size="25">
		</div>

		<div class="element_password">
			<label for="password_login">Mot de passe<br /></label>
			<input type="password" id="password_login" name="password_login" required 
			minlength="4" maxlength="20" size="25">
		</div>

		<div class="element_valider">
			<br /><button>Connexion</button>
		</div>

		</form>
		
	</div>
	
	<div id="login_createaccount">	
		Impossible de vous connecter ? <br /><br /><a href="register.php">Créer un compte</a> <br /> <a href="password.php">Mot de passe oublié</a>
	</div>