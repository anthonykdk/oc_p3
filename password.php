<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="style.css" />
		<title>Réinitialiser le mot de passe</title>
	</head>

	<body>

<?php
	require 'header_login.php';

    require_once('includes/functions.php');

    $pageTitle ='Nouveau mot de passe';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') 
    {
        if ($_POST['change_pass_form'] == 'username') 
        {
            $username = htmlspecialchars($_POST['username'] );
            $userExist = getUser($username);
            $question = $userExist['question'];
                if (empty($userExist)) 
                {
                $errorUsername = 'Utilisateur inconnu';
                }
        }
        if ($_POST['change_pass_form'] == 'question') 
        {
            $answer = htmlspecialchars($_POST['answer']);
            $username = $_POST['username'];
            $answerExist = getAnswer($answer, $username);
            if (empty($answerExist)) 
            {
                $errorAnswer = 'Réponse incorrecte';
                $userExist = getUser($username);
                $question = $userExist['question'];
            }
        }
        if ($_POST['change_pass_form'] == 'newpass') 
        {
            $username = $_POST['username'];
            $newpass = htmlspecialchars($_POST['newpass']);
            $checkpass = htmlspecialchars($_POST['checkpass']);
            if (empty($newpass) OR strlen($newpass) > 20 OR strlen($newpass) < 4) 
            {
                $errorPass = 'Le mot de passe est vide ou est trop long ou trop court';
            } 
            else
            {
                if ($newpass != $checkpass) 
                {
                    $diffPass = 'Le mot de passe n\'est pas identique';
                } 
                else 
                {
                    $pass_hache = password_hash($newpass, PASSWORD_DEFAULT);
                    updatePass($pass_hache, $username);
                    header('Location: index.php');
                    exit();
                }
            }
        }
    }
?>

<h2 id="titre_creeruncompte">Réinitialiser le mot de passe</h2>

<br />
<br />

<?php
    if ($_SERVER['REQUEST_METHOD'] != 'POST' OR isset($errorUsername)) 
    { 
?>
        <form method="post">
            <input type="hidden" name="change_pass_form" value="username" />
            <label for="username">Saisissez votre identifiant : </label><input type="text" name="username" id="username" value="<?= isset($_POST['username']) ? $username : '' ?>" required />
             <p class="error"><?= isset($errorUsername) ? $errorUsername : '' ?></p>

             <button>
              <a href="javascript:history.go(-1)">Retour</a>
              </button>

            
              <input type="submit" value="Valider">

         </form>
<?php
 	}
    else
    {
    }

    if ($_POST['change_pass_form'] == 'username' AND !isset($errorUsername) OR isset($errorAnswer))
    {
?>

        <label id="your_question">Votre question secrète :</label>
        <p id="question"><?= $question; ?></p>
         <form method="post">
             <input type="hidden" name="change_pass_form" value="question" />
              <input type="hidden" name="username" value="<?= $username; ?>" />
              <label for="answer">Réponse : </label><input type="text" name="answer" id="answer" value="<?= isset($_POST['answer']) ? $answer : '' ?>" required />
               <p class="error"><?= isset($errorAnswer) ? $errorAnswer : '' ?></p>
              
               <button>
               <a href="javascript:history.go(-1)">Retour</a>
               </button>

              <input type="submit" value="Valider">
        
        </form>
 <?php
  	}
    else
    {
    }

    if ($_POST['change_pass_form'] == 'question' AND !isset($errorAnswer) OR isset($diffPass) OR isset($errorPass)) 
    {
?>
        <form method="post">
             <input type="hidden" name="change_pass_form" value="newpass" />
             <input type="hidden" name="username" value="<?= $username; ?>" />
             <p><label for="newpass">Nouveau mot de passe : </label><br /><input type="password" name="newpass" id="newpass" /><p/>
              <p class="error"><?= isset($errorPass) ? $errorPass : '' ?></p>
              <p><label for="checkpass">Confirmation du mot de passe : </label><br /><input type="password" name="checkpass" id="checkpass" /></p>
               <p class="error"><?= isset($diffPass) ? $diffPass : '' ?></p>
	
             <button>
                <a href="javascript:history.go(-1)">Retour</a>
             </button>
                
            <input type="submit" value="Valider">
        </form>
  <?php
    }
    else
    {
    }

	require 'footer.php';
?>

	</body>
</html>