<!DOCTYPE html>
<html lang="en">
      <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>TP3 - Exercice 2</title>
      </head>
      <body>
            <h1>Conjugaison</h1>
            <form action="TP3_Ex2.php" method="post">
            <label>Verbe du premier groupe : </label>
            <input type="text" name="verbe">
            <input type="submit" name="submitButton" value="conjuguer">
            </form>
            
            <hr>
            
            <?php
                  if (isset($_POST['submitButton'])){
                        $terminaison = array('je '=>'e','tu '=>'es', 'il/elle '=>'e', 'nous '=>'ons', 'vous '=>'ez', 'ils/elles '=>'ent');
                        $verbe = htmlentities($_POST["verbe"]);
                        if(strcmp(substr($verbe,-2),"er")) {
                              print($verbe." n'est un verbe du premier groupe<br>\n");        
                        } 
                        else {
                              print("Conjuguaison du verbe ".$verbe." :<ul>\n");
                              $racine = substr($verbe,0,strlen($verbe)-2);
                              foreach($terminaison as $p => $t){
                                    print("<li>".$p.$racine.$t."</li><br>\n");
                              }
                        }
                  }
            ?>
      </body>
</html>
