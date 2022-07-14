<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Exercice 1</title>
</head>
<body>
      <?php
      # Déclaration des varibles 
      $Number_1 = 2;
      $Number_2 = 3;
      $Number_3 = 8; 

      #Appel de la fonction Calcul_Moyenne 
      $Moyenne = Calcul_Moyenne($Number_1, $Number_2, $Number_3); 

      # Affichage 
      echo "Number 1 = ", $Number_1, "<br>";
      echo "Number 2 = ", $Number_2, "<br>";
      echo "Number 3 = ", $Number_3, "<br>";
      echo "Moyenne = ", $Moyenne, "<br>";

      # Décalarttion de la fonction Calcul_Moyenne 
      function Calcul_Moyenne($a, $b, $c){
            return ($a + $b + $c) / 3; 
      }
?>
      
</body>
</html>
