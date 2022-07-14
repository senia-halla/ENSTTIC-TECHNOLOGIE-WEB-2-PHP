<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 4</title>
    <style media="screen">
      label {
        font-size: 18px;
      }
    </style>
  </head>
  <body>
    <form action="" method="post">
      <label>1. Quelle est le plus grand pays d'afrique ? </label><br>
      <input type="radio" name="1" value="1">Tunisie<br>
      <input type="radio" name="1" value="2">Mali<br>
      <input type="radio" name="1" value="3">Algérie<br>

      <label>2. Quelle est le plus haut sommet d'afrique ? </label><br>
      <input type="radio" name="2" value="1">Kilimandjaro<br>
      <input type="radio" name="2" value="2">Mont Kenya<br>
      <input type="radio" name="2" value="3">Ras Dashan<br>

      <label>3. Quelle est le plus long fleuve d'afrique ? </label><br>
      <input type="radio" name="3" value="1">Lomami<br>
      <input type="radio" name="3" value="2">Tana<br>
      <input type="radio" name="3" value="3">Nil<br>

      <label>4. Quelle est la capitale du Togo ? </label><br>
      <input type="radio" name="4" value="1">Lomé<br>
      <input type="radio" name="4" value="2">Niamey<br>
      <input type="radio" name="4" value="3">Bamako<br>
      <br>
      <br>
      <input type="submit" name="submitButton" value="Valider">
    </form>
    <?php
    if(isset($_POST["submitButton"])){
      $resultat = 0;
      $reponces = array ("1" => 3, "2" => 1, "3" => 3, "4" => 1);
      for($i=1;$i<=4;$i++)
        if(isset($_POST["$i"])){
          if($_POST["$i"] == $reponces[$i])
              $resultat++;
        }
      echo "\n<h3>Votre score : ".$resultat."/4</h3>\n";
    }
    ?>
  </body>
</html>