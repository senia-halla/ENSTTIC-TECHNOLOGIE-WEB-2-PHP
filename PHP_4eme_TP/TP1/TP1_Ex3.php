<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Exercice 3</title>
</head>
<body>
      <?php 
      echo " Exercice 3  ";
      # Déclaration Variable 
      $number_1 = 8; 
      


      pair_impair($number_1);
      

      #Fonction pair_impair 
      function pair_impair($a){
            if (is_int($a)){
                  if ($a % 2 == 0){
                        echo "<br> Le numéro $a est PAIR !";
                  }
                  else {
                        echo "Le numéro $a est IMPAIR ! <br>";
                  }
            }
            else {
                  echo "Ce Numéro N'est pas un entier ! <br>";
            }
      }
?>    
</body>
</html>
