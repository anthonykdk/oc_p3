<?php
    session_start(); 

    if (!isset($_SESSION['username'])) 
    {
        header('Location: index.php');
        exit();
    }

	require 'includes/connect_bd.php';

?>

<html>
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="style.css" />
		<title>Acteurs de GBAF</title>
	</head>

	<body>

<?php
	require 'header.php';
	
    if(isset($_GET['id']) AND !empty($_GET['id'])) 
    {
        $get_id = htmlspecialchars($_GET['id']);
        $acteurs = $db->prepare('SELECT * FROM actors WHERE id_partner = ?');
        $acteurs->execute(array($get_id));
  
        if($acteurs->rowCount() == 1)
        {
        $acteurs = $acteurs->fetch();
        $titre = $acteurs['title'];
        $contenu = $acteurs['description'];
?>

    <section id="section_acteur">
        <figure>
            <img src="<?php echo $acteurs['logo']; ?>" alt="logo de l'acteur">
        </figure>
        <h2><?php echo $acteurs['title']; ?></h2>
        <a id="lien_vers_acteur" href="<?php echo $acteurs['link']; ?>">Site web du partenaire</a>
        <?php echo $acteurs['description']; ?>
    </section>

    <section id="section_commentaires">
     
        <h3>Avis sur l'acteur</h3>
            
        <form method="post" action="comment.php" TARGET=_BLANK>
            
            <button>Nouveau commentaire</button>

        </form>

<?php

        if(isset($_GET['id']) AND !empty($_GET['id'])) 
        {
            $get_id = htmlspecialchars($_GET['id']);
            $comments = $db->prepare('SELECT id_comment, firstname, DATE_FORMAT(date, "%d/%m/%Y") AS date, text FROM comments WHERE id_actor = ?');
            $comments->execute(array($get_id));
  
            while ($comm = $comments->fetch())
            { 
?>
            <div class="commentaire">
                <div class="firstname_comment"><?php echo $comm['firstname']; ?></div>
                <div class="date_comment">Le <?php echo $comm['date']; ?> </div>
                <div class="text_comment"> <p><?php echo $comm['text']; ?> </p> </div>
            </div>
<?php
            }


        $comments->closeCursor();
?>

<?php
        } 
        }
        else 
        {
            die('Cet acteur n\'existe pas encore !');
    }
    }
    else 
    {
        die('Erreur');
        echo $get_id;
    }
?>


    </section>

<?php
	include 'footer.php';
?>
	
	</body>
</html>