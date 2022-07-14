<!DOCTYPE html>
<html lang="en">
      <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>QCM</title>
      </head>
      <body>
      <form action="QCM_Ch.php" method="post">
            <label>1. les a? </label><br>
            <input type="checkbox" name="1[]" value="a">a<br><!-- True -->
            <input type="checkbox" name="1[]" value="a1">a <br><!-- True -->
            <input type="checkbox" name="1[]" value="no_a2">x<br> 

            <label>2. les b? </label><br>
            <input type="checkbox" name="2[]" value="no_b">x<br>
            <input type="checkbox" name="2[]" value="b1">b<br> <!-- True -->
            <input type="checkbox" name="2[]" value="no_b2">x<br>

            <br>
            <input type="submit" name="submitButton" value="Afficher Résultat">
      </form>

      <?php 
            if(isset($_POST["submitButton"])){
                  $score = 0;  
                  $answers = array("1" => array("0" => "a", "1" => "a1"),
                                   "2" => array("0" => "b1") );
                            
                  for ($i=1; $i<sizeof($_POST); $i++){
                        for($j=0; $j< count($_POST[$i]); $j++){
                              if(in_array_r($_POST[$i][$j],$answers)){  
                                          $score++;
                              }
                              else{
                                    $score = $score - 0.5; 
                              }
                        }
                  }
                  echo "Vous avez : ".$score." resp"; 
            }

            /* Fonction equivalente de in_array pour les tab multi dim  */
            function in_array_r($elem, $tab, $strict = false) {
                  foreach ($tab as $item) {
                        if (($strict ? $item === $elem : $item == $elem) || (is_array($item) && in_array_r($elem, $item, $strict))) {
                              return true;
                        }
                  }
                  return false;
            }
      ?>
      </body>
</html>