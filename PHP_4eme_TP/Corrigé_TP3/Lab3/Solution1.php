<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 7</title>
  </head>
  <body>
    <form action="Solution1.php" method="post">
      <label>Votre texte : </label>
      <textarea name="texte" rows="8" cols="80"></textarea>
      <input type="submit" name="submitButton" value="compter le nombre de mots">
    </form>
    <?php
      if(isset($_POST['submitButton']) && isset($_POST['texte'])){
        echo "\n<h5>Votre texte : </h5>\n<p>".$_POST['texte']."</p>\n";
        echo "\n<h3>Nombre de mots = ".str_word_count($_POST['texte'])."</h3>\n";
      }
     ?>
  </body>
</html>