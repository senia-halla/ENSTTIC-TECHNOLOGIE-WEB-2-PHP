<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 2</title>
  </head>
  <body>
      <h1>Conjugaison</h1>
      <form action="Solution2.php" method="post">
        <label>Verbe du premier groupe : </label>
        <input type="text" name="verbe">
        <input type="submit" name="submitButton" value="conjuguer">
      </form>
      <hr>
      
      
      <!-- il est possible de mettre le script php dans un fichier appart -->
      <!-- Traitement du formulaire -->
      <?php
        if (isset($_POST['submitButton']) && isset($_POST['verbe'])){
          $terminaison = array('je '=>'e', 'tu '=>'es', 'il/elle '=>'e', 'nous '=>'ons', 'vous '=>'ez', 'ils/elles '=>'ent');
          $verbe = htmlentities($_POST["verbe"]);
          if (strcmp(substr($verbe,-2),"er")) {
              print($verbe." n'est un verbe du premier groupe<br>\n");        
          } else {
              print("Conjuguaison du verbe ".$verbe." :<ul>\n");
              $racine = substr($verbe,0,strlen($verbe)-2);
              foreach($terminaison as $p => $t)
                  print("<li>".$p.$racine.$t."</li><br>\n");
          }
        }
      ?>
  </body>
</html>
