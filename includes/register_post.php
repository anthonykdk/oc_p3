<?php
    require ('insert_bd.php');
    
    if (isset($_POST['submit']) AND !empty($_POST['firstname']) AND !empty($_POST['name']) AND !empty($_POST['username']) AND !empty($_POST['question']) AND !empty($_POST['answer']) AND !empty($_POST['password']) 
    AND (strlen($_POST['password']) >= 4 ) AND ($_POST ['password'] == $_POST['repeat_password']))
    { 
        $firstname = htmlentities($_POST['firstname']);
        $name = htmlentities($_POST['name']);
        $username = htmlentities($_POST['username']);
        $password = htmlentities ($_POST['password']);
        $question = htmlentities($_POST['question']);
        $answer = htmlentities($_POST['answer']);
        $req = insert($firstname, $name, $username, $password, $question, $answer);
        if ($req !== NULL) 
        {
            header('Location: ../index.php');
        }
        else 
        {
            echo 'Erreur dans base de donnée';
        }
    }
    else
    {
        echo 'Il semble y avoir une erreur'; 
        echo   ' <p> <a href="register.php"> Recommencer </a> </p>';
    }
