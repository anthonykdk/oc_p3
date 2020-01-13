<?php
	session_start();
	
	require 'includes/connect_bd.php';
?>

<!DOCTYPE html> 
<html>
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="style.css" />
		<title>Extranet de GBAF</title>
	</head>
	<body>

<?php

	require 'auth/authentification.php';
	require 'footer.php';
?>

	</body>
</html>