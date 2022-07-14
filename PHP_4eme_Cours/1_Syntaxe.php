<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Bases : Syntaxe - Variable - Constante </title>
</head>
<body>
      <!--Syntaxe PHP-->
      <?php
            echo "Hello World ! <br>";
            
            //Ceci est un commentaire 
            /*
            Ceci aussi 
            est un commentaire sur deux lignes  
            */
            #Un autre commentaire

            // Variable 
            $Nom = "HALLA";
            $Prenom = "Senia";
            echo $Nom," ", $Prenom;
            echo "<br>";

            #Concatenation 
            #ECHO 
            echo "Mon Nom ", $Nom,"<br>";
            echo "Mon Nom ".$Nom."<br>";
            echo "Mon Nom $Nom <br>";

            echo 'Mon Nom $Nom <br>';
            echo 'Mon Nom '.$Nom.'<br>';
            echo 'Mon Nom ', $Nom,'<br>';

            #PRINT : PREND UN SEUL ARGUMENT 
            #ERROR LIGNE 38 print "Mon Prenom ", $Prenom,"<br>";
            print "Mon Prenom ".$Prenom."<br>";
            print "Mon Prenom $Prenom <br>";

            print 'Mon Prenom '.$Prenom.'<br>';
            #ERREUR LIGNE 43 : print 'Mon Prenom ', $Prenom,'<br>';
            print 'My Name is $Prenom <br>';

            // Constante 
            define("PI", 3.14);
            echo "PI = ", PI,"<br>";

      ?> 
</body>
</html>