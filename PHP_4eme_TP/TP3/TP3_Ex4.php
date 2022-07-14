<!DOCTYPE html>
<html lang="en">
      <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>TP3 - Exercice 4</title>
      </head>
      <body>
      <form action="TP3_Ex4.php" method="post">
            <label>1. Who Had Africa Cup 2019? </label><br>
            <input type="radio" name="1" value="Senegal">Senegal<br>
            <input type="radio" name="1" value="Egypt">Egypt <br>
            <input type="radio" name="1" value="Algeria">Algeria<br> <!-- True -->

            <label>2. Who had The UEFA Champions League 2016 ? </label><br>
            <input type="radio" name="2" value="FC Barcelone">FC Barcelone<br>
            <input type="radio" name="2" value="Real Madrid">Real Madrid<br> <!-- True -->
            <input type="radio" name="2" value="FC Bayern Munich">FC Bayern Munich<br>

            <label>3. Who had the world cup 2006 ? </label><br>
            <input type="radio" name="3" value="Portugal">Portugal<br>
            <input type="radio" name="3" value="France">France<br>
            <input type="radio" name="3" value="Italy">Italy<br> <!-- True -->

            <label>4. Who had the Copa America 2021 ? </label><br>
            <input type="radio" name="4" value="Chili">Chili<br>
            <input type="radio" name="4" value="Argentine">Argentine<br> <!-- True -->
            <input type="radio" name="4" value="Colombia">Colombia<br>
            <br>
            <br>
            <input type="submit" name="submitButton" value="Afficher Résultat">
      </form>
      <?php
            if(isset($_POST["submitButton"])){
                  
                  $answers = array ("1" => "Algeria", "2" => "Real Madrid", "3" => "Italy", "4" => "Argentine");
                  $score = 0;
                  
                  echo $answers[1];

                  for($i=1;$i<= sizeof($answers) ;$i++){
                        if(isset($_POST["$i"]) && ($_POST["$i"] == $answers[$i])){
                              echo "$i. Right ! <br>";
                              $score++;
                        }
                        else{
                              echo "$i. Wrong ! the right responce is : $answers[$i] <br>";
                        }
                  }
                  
                  echo "Vous avez : ".$score." bonne(s) réponse(s) parmis ",sizeof($answers),"<br>"; 
            }
      ?>
      </body>
</html>


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
                  $answers = array("1" => array("0" => "a", "1" => "a1"),
                                   "2" => array("0" => "b1")
                              );
                  $score = 0; 

                  for($i=1;$i<=sizeof($answers) ;$i++){
                        for($j=0; $j<= sizeof($answers[$i]); $j++){
                              if(isset($_POST[$i][$j]) ){
                                    if($_POST[$i][$j] == $answers[$i][$j]){
                                          $score++;
                                    }
                                    else{
                                         $score = $score - 0.5; 
                                    }             
                              }     
                        }  
                  } 
                  echo "Vous avez : ".$score." resp";
            }
      
      
      ?>
      
      </body>
</html>