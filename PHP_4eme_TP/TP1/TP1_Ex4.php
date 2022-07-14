<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Exercice 4</title>
</head>
<body>
      <?php
      # Déclaration Variable 
      $moy = 19; 

      #Switch 
      if($moy > 10 && $moy <= 12){
            echo "Mention Assez Bien !";
      }
      elseif ($moy > 10 && $moy <= 14){
            echo "Mention  Bien !";
      }
      elseif ($moy > 14 && $moy <= 16){
            echo "Mention Trés Bien !";
      }
      elseif ($moy > 16 && $moy <= 20){
            echo "Mention Excellent !";
      }
      else{
            echo "La moyenne doit entre 10 et 20 pour avoir une mention!!!!";
      }
?>    
</body>
</html>
