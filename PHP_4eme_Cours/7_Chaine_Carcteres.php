<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Chaine de caractere</title>
</head>
<body>
      <?php 
            echo "<h2> Simple Functions : </h2>";
            $msg = "hello world";
            echo "1 - Length = ", strlen($msg), "<br>" ; #  11 taille de la chaine : Nombre de caractere 
            echo "2 - Number of Words = ", str_word_count($msg), "<br>"; #2 : Nombre de mots 
            echo "3 - Lowercase = ", strtolower($msg),"<br>"; # hello world : Transformartion en miniscule 
            echo "4 - Uppercase = ", strtoupper($msg),"<br>"; #HELLO WORLD : Transformation en Majuscule 
            echo "5 - Uppercase first caracter = ", ucfirst($msg), "<br>"; #Hello world : Premier caractere en majuscule upper char first 
            echo "6 - Uppercase first caracter of each word = ", ucwords($msg), "<br>"; #Hello World : Premier caratcetre de chaque mot en majuscule 
            echo "7 - Reverse Message = ", strrev($msg), "<br>"; #dlrow olleh : Inverser les caractéres 
            $msg = "      hello world      ";
            echo "8 - Remove Spaces = <pre>",trim($msg),"</pre> <br>"; #hello world : Enlever tout les espaces 
            echo "9 - Remove spaces = <pre>",rtrim($msg),"</pre> <br>"; #       hello world => supprimé espace à la fin 
      ?>

      <?php 
            echo "<h2> Searching Strings : </h2>";
            $msg = "Hello World"; 
            echo '1- strpos($msg, "W") = ',strpos($msg, "W"),"<br>"; # chaine , caractere => retourne position au niveau de la chaine => sensible aux maj et min   
            echo '2- stripos($msg, "w") = ', stripos($msg, "w"), "<br>"; # stripos => insensible à la casse 
            echo '3- strrpos($msg, "l") = ', strrpos($msg, "l"), "<br>"; # on cherche derniere position d'un caractere 
            echo '4- strripos($msg, "L") = ', strripos($msg, "L"), "<br>"; # strripos => insensible à la casse 
            $email = "name@example.com";
            echo '4- strstr($email, "@") = ', strstr($email, "@"), "<br>"; # retourne sous chaine qui vient aprés caractére (3 eme parametre par defaut false : indique APRES )
            echo '5- strstr($email, "@", true) = ', strstr($email, "@", true), "<br>"; # retoune sous chaine qui vien avant (du au 3 eme parametre = True )
            echo '6- str_repeat($msg, 2) = ', str_repeat($msg, 2), "<br>"; # chaine de cacter répéter n fois (sans espace)
            echo '7- str_pad($msg, 16) = ', str_pad($msg, 16), "<br>"; #chaine, longeur, sous chaine => longeur chaine < longeur => remplir avec sous chaine => padding 
            echo '8- str_pad($msg, 16,"*") = ',str_pad($msg, 16,"*"),"<br>"; # caractere * => par defaut ajoute a la fin 
            echo '9- str_pad($msg, 16,"*",STR_PAD_BOTH) = ', str_pad($msg, 16,"*",STR_PAD_BOTH), "<br>"; #STR_PAD_BOTH constante prédéfini => ajouter caracter au début et a la fin 
            echo '10- substr($msg,3,5) = ', substr($msg,3,5), "<br>"; # sous chaine : à partir de position 3 => 5 carctere 
            echo '11- explode("@", $email) = ', var_dump(explode("@", $email)), "<br>"; # découper chaine en segment en fonction de caractere | retourne un tableau 
      ?>  

      <?php 
            echo "<h2>Manipulating Strings : </h2>";
            $msg = "Hello World"; 
            echo '1- strtr($msg, "hlo", "dfb") = ',strtr($msg, "hlo", "dfb"), "<br>"; # strtr : chaine, tab de carac va etre remplacé, tab car qui va remplacé => carac par carac 
            # h = d, l = f, o = b    
            echo '2- str_replace("llo", "den", $msg) = ', str_replace("llo", "den", $msg), "<br>"; #remlacé sous chiane  1 avec sous chaine  2 dans la chaine msg 
            echo '3- substr_replace($msg, "test", 2) = ', substr_replace($msg, "test", 2), "<br>"; #chiane , sous chaine à inserer , à partir de quel position commencer remplaceemtn 
            # elle sera placé complétement => et remplce tout ce qui vient aprés position 2 
            echo '4- substr_replace($msg, "test", 2, 4) = ', substr_replace($msg, "test", 2, 4), "<br>"; # chaine, sous chiane à insérer, position , longueur  
      ?>

      <?php 
            echo "<h2>Comparing strings :</h2>";
            $msg1 = "Hello World";
            $msg2 = "hello world"; 
            echo '1- strcmp($msg1, $msg2) = ', strcmp($msg1, $msg2), "<br>"; # 2 chaines => 0 égalité, -1 1ere inférieur, 1 1ere supérieru  Sensible à la casse 
            echo '2- strcasecmp($msg1, $msg2) = ',strcasecmp($msg1, $msg2), "<br>"; # insensible à la casse 
            echo '3- strnatcmp($msg1, $msg2) = ', strnatcmp($msg1, $msg2), "<br>"; # algo qui reproduit processus humain caractere par caractere => sensible à la casse 
            echo '4- strnatcasecmp($msg1, $msg2) = ', strnatcasecmp($msg1, $msg2), "<br>"; # insensible à la casse 
            $msg3 = "Hello freinds"; 
            echo '5- substr_compare($msg1, $msg3, 7, 5) = ', substr_compare($msg1, $msg3, 7, 5), "<br>"; # chaine 1 chiane 2 commencer comparaison à position 7, longuer 5
      ?>

      <?php
            echo "<h2> Print Strings : </h2>";
            $today = "January 7, 2022"; 
            print $today."<br>"; #pas de formateur 
            printf("%s <br>", $today); #affichage formaté 
            $elementsOfDate = sscanf($today, "%s %d%s %d"); #construction d'une list d'éléments => extraite en ustisant les formateurs
            echo var_dump($elementsOfDate), "<br>";
            list($month, $day, $comma, $year) = $elementsOfDate; #affectation a des variables en utilisant list 
            printf("month = %s, day = %d, year = %d <br>", $month, $day, $year);
            $msg = sprintf("month = %s, day = %d, year = %d <br>", $month, $day, $year); #construit chaine de caractere => pas d'affichage 
            echo $msg;
      ?>

      
</body>
</html>