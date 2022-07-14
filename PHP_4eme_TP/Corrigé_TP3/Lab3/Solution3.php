<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 3</title>
  </head>
  <body>
      <h1>Calculatrice</h1>
      <form method="get" action="Solution3.php">
        <input name="a" size="5">
        <select name="par">
          <option value="+">+</option>
          <option value="-">-</option>
          <option value="*">*</option>
          <option value="/">/</option>
        </select>
        <input name="b" size="5">
        <br>
        <input type="submit" value="envoyer">
      </form>
      <hr>
      
      <hr>
      <!-- il est possible de mettre le script php dans un fichier appart -->
      <!-- Traitement des formulaires -->
      <?php
      if (isset($_GET['par']) && isset($_GET['a']) && isset($_GET['b'])){
      	$par = $_GET['par'];
      	$a = $_GET['a'];
      	$b = $_GET['b'];
        // tester si a et b correspondent à un nombre
        if(!is_numeric($a))
          $a = 0.0;
        if(!is_numeric($b))
          $b = 0.0;
        // effectuer l'opération et afficher le résultat
      	echo "le résultat du calcul précédent est : $a$par$b = ";
      	if ($par=="+") {
      		echo $a+$b;
      	} elseif ($par=="-") {
      		echo $a-$b;
      	} elseif ($par=="*") {
      		echo $a*$b;
      	} else {
      		echo $a/$b;
      	}
      } else echo 'Il faut renseigner les champs';
      ?>
  </body>
</html>
