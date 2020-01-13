<!DOCTYPE html> 
<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Laisser un commentaire</title>
    </head>

    <body>

    <center>

    <h2>Laisser un commentaire sur l'acteur</h2>
    <br />

    <form method="POST" action="comment_post.php">


      <div id="fullform_comment">

        <label> Votre prenom : <br />
        <input type="text " name="firstname" value="Anthony" disabled /> <br />
        <label> Votre nom : <br />
        <input type="text " name="name" value="Kondek" disabled /> <br />
        <label> Votre commentaire : <br />
        <input type="text" name="your_comment" id="form_writecomment" autofocus required/> <br />

        <h3>Aimez-vous cet acteur ?</h3>
        <input type="radio" id="like_actor" name="likeordislike" value="like_actor" checked>
        <label for="like_actor">Je like</label>
        <input type="radio" id="dislike_actor" name="likeordislike" value="dislike_actor">
        <label for="dislike_actor">Je dislike</label>
    
        <br />
        <br />
        <input type="submit" value="Poster le commentaire" id="PostButton" />

        </form>

        <br />

        <button><a href="#" onClick="window.close()">Annuler et revenir à la page précédente</a></button>

      </div>


    </center>

    </body>
</html>