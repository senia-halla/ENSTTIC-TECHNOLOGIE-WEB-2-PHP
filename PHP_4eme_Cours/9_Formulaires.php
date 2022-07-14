<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Formulaires</title>
</head>
<body>
      <!-- formulaires en php -->
      <form action="9_Formulaires.php" method="get">
            Name <br>
            <input type="text" name="theName"> <br> <br>

            E-mail <br>
            <input type="email" name="theEmail"> <br> <br>

            Favorite Subject(s) <br>
            <input type="checkbox" name="subjects[]" value="math"> Math 
            <input type="checkbox" name="subjects[]" value="coding"> Coding
            <input type="checkbox" name="subjects[]" value="english"> English <br>

            Gender <br>
            <input type="radio" name="gender" value="m"> Male 
            <input type="radio" name="gender" value="f"> Female

            <input type="submit" name="submitButton" value="Submit">
      </form>

      <?php 
            /*
            Variable super globale : Variable prédéfini géré par PHP et disponible sur chque script 
            pour formulaire il y'a 3 : $_GET, $_POST, $_REQUEST  
            Utilisé pour sauvegarder donnés envoyés par utilisateur 
            */
            if(isset($_GET["submitButton"])){ /* isset vérifie si la variable existe => vérifier si j'ai recu donnée d'un user */
                  /* Tableau associatif donc on passe la clés -Correspond au name du bouton- */
                  print_r($_GET);
                  /* $_GET Tableau associatif contenant les données saisies par utilisateur */
                  echo $_GET['theName'];
                  /* 
                  Array(
                        [theName] => Senia
                        [theEmail] => senia.halla@intiic.dz
                        [subjects] => Array([0] => coding [1] => math)
                        [gender] => f
                        [submitButton] => Submit
                  )
                  */
            }
            
            /* exit(1)*/
            /* 
            En programmation backend Il ne faut jamais faire confiance au client
            Besoin de données cohérents 
            => On effectue un filtrage au niveau backend 
            => il y'a deuc types de filtres : filtre pour nettoyage et filtre pour validation 
            */

            if(isset($_GET['theEmail'])){
                  $email = $_GET['theEmail'];
                  $email = filter_var($_GET["theEmail"], FILTER_SANITIZE_EMAIL);  /* Nettoyer email => enleve les espces */  
                  echo "email nettoyer = ", $email, "<br>";
                  if(filter_var($_GET["theEmail"], FILTER_VALIDATE_EMAIL)){  /* Valider email => retourne un boolean  */
                        echo "L'email est valid";
                        echo "email valider = ", $email, "<br>";
                  } 
                  else {
                        echo "L'email est invalid";
                  }   
            }

            /* exit(1)*/
            /* Distabiliser serveur => injecter des scripts au niveau des input */
            if(isset($_GET['theName'])){
                  echo "Your name : ",$_GET['theName'],"<br>";
            }
            if(isset($_GET['theName'])){
                  echo "your name : ",htmlspecialchars($_GET['theName']),"<br>";
                  /*htmlspecialchars transform script en char : début de balise remplacé par &gt
                  => Empeche l'éxécution du script*/
            }
      ?>
</body>
</html>