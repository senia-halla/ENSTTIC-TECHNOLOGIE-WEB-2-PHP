<!DOCTYPE html>
<html lang="en">
      <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>TP3 - Exercice 1</title>
      </head>
      <body>

            <form action="TP3_Ex1.php" method="post">
                  <label>Commentaire : </label>
                  <textarea name="text" rows="10" cols="50"></textarea>
                  <input type="submit" name="submitButton" value="Nombre des Mots">
            </form>

            <?php
                  if(isset($_POST['submitButton']) && isset($_POST['text'])){
                        echo "<h2> Texte Saisie : </h2> <p>".$_POST['text']."</p>";
                        echo "<h2> Nombre de Mots : </h2> <p>".str_word_count($_POST['text'])."</p>";
                  }
            ?>
      </body>
</html>