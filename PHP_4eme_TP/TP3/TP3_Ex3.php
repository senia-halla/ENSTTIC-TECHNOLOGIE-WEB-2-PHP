<!DOCTYPE html>
<html lang="en">
      <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>TP3 - Exercice 3</title>
      </head>
      <body>
            <h1>Calculatrice</h1>
            <form method="get" action="TP3_Ex3.php">
                  <input name="a" size="5">
                  <select name="par">
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="*">*</option>
                        <option value="/">/</option>
                  </select>
                  <input name="b" size="5">
                  <br>
                  <input type="submit" value="Calculer">
            </form>
            <hr>
            
            <hr>
            
            <!-- Traitement des formulaires -->
            <?php
                  if (isset($_GET['par']) && isset($_GET['a']) && isset($_GET['b'])){
                        $par = $_GET['par'];
                        $a = $_GET['a'];
                        $b = $_GET['b'];
                        // Vérifier que a et b sont de format numérique 
                        if(!is_numeric($a)){
                              $a = 0.0;
                        }
                        if(!is_numeric($b)){
                              $b = 0.0;
                        }

                        // effectuer l'opération et afficher le résultat
                        echo "Résultat : $a $par $b = ";
                        if ($par == "+") {
                              echo $a+$b;
                        } 
                        elseif ($par == "-") {
                              echo $a-$b;
                        } 
                        elseif ($par == "*") {
                              echo $a*$b;
                        } 
                        else {
                              echo $a/$b;
                        }
                  } 
                  else {
                        echo 'Veuillez entrer les valeurs aux champs de saisie ';
                  }
            ?>
      </body>
</html>
