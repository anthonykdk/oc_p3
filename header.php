<header>

<?php
	if (isset($_POST['username_login']) AND $_POST['username_login'] !=  NULL AND isset($_POST['password_login']) AND $_POST['password_login'] !=  NULL )
{
?>	
	<div id="myaccount"><a href="#">Mon compte</a> | <a href="#">Deconnexion</a></div>
<?php
}
?>

	<div id="header_content">

		<div class="elementh_logo">
			<figure>
				<a href="index.php"><img id="logo_header" src="images/logo.png" alt="logo de GBAF" /></a>
			</figure>	
		</div>

		<div class="namefirstame"> 
			<?php if (isset($_POST['username_login']) AND $_POST['username_login'] !=  NULL AND isset($_POST['password_login']) AND $_POST['password_login'] !=  NULL )
				{
			?>
				<img id="logo_login" src="images/logo_login.png" alt="icone utilisateur">

			<?php
				 echo $_POST['username_login'];?> <?php echo $_POST['password_login'];
				}
			?>

		</div>
	
	</div>

</header>



