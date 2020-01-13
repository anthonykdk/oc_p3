<?php
  if (isset($_POST['username_login']) AND isset($_POST['password_login'])) // on teste si il y a des valdeurs envoyees en username et password par l'utilisateur
  {

    if (!empty($_POST['username_login']) AND !empty($_POST['password_login'])) 
      {

      $username = $_POST['username_login'];
      $password = $_POST['password_login'];
           
      $req = $db->prepare('SELECT id_user FROM users WHERE username = :username AND password = :password'); 
      $req-> execute(array('username' => $username, 'password' => $password));

      $resultat = $req->fetch();
                     
      if (!$resultat)
      {
            
        require 'header_login.php';
        require 'formulaire_login.php';
?>
        <script type= "text/javascript" src="auth/login_error_box.js"></script>
<?php
  
      }
      else
      {

        $_SESSION['username'] = $username;
    

       require 'header.php';
        require 'homepage.php';
    
      }

      $req->closeCursor();
 
    }
    else
    {


      echo 'Renseignez un identifiant et un mot de passe';

    }

  }
  else
  {

    require 'header_login.php';
    require 'auth/formulaire_login.php';

  }
?>