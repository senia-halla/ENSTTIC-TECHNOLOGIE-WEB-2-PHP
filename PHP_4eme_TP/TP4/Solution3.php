<?php
      try{
        // nom de la source = data source name (dsn)
        $dsn = 'mysql:host=localhost;dbname=agence';
        // nom d'utilisateur (user)
        $user = 'root';
        // mot de passe (password)
        $password = '';
        // options
        $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        // instanciation de la connexion
        $con = new PDO($dsn, $user, $password, $options);
      }catch(Exception $e){
        die("Erreur de connexion à la base de données<br>".$e->getMessage());
      }        
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TP 4</title>
    <style>
            td, th {
                border: 1px solid black;
                border-left: none;
                border-right: none;
                text-align: left;
                padding: 2px;
            }
            table {
                border: 1px solid black;
                width:50%;
                border-collapse: collapse;
            }
            th {
              background-color: #DC143C;
              color: white;
            }
            tr:nth-child(odd){
              background-color: #DCDCDC;
            }

      </style>
  </head>
  <body>
    <h1>Afficher les logements du type choisi par l'utilisateur :</h1>
    <form action="" method="post">
      <input type="submit" value="Afficher les logement de type : ">
      <select name="typeLogt">
        <?php
          // la requête
          $response = $con->query("select loyere from type_logt");
          // récupération du résultat ligne par ligne
          while ($data = $response->fetch(PDO::FETCH_OBJ)){
            // récupérer chaque champ (colonne)
            foreach ($data as $key => $value) {
              echo "<option value='$value'>$value</option>";
            }
          }
          $response->closeCursor();
          $con = null; // déconnexion        
         ?>
      </select>
    </form>
    <!-- <?php
        if(isset($_REQUEST["typeLogt"])){
          try{
            // instanciation de la connexion
            $con = new PDO($dsn, $user, $password, $options);

            // la requête préparée
            $value = "F3";
            $myRequest = $con->prepare("select * from logement where type_logt = :type");
            $myRequest->bindParam(':type', $_REQUEST["typeLogt"], PDO::PARAM_STR);
            $myRequest->execute();
    ?>
    <br>
    <table>
      <tr>
        <th>Num</th>
        <th>Type</th>
        <th>Id_quartier</th>
        <th>Adresse</th>
        <th>Superficie</th>
        <th>Loyer</th>
      </tr>
    <?php
        // récupération du résultat ligne par ligne
        while ($data = $myRequest->fetch(PDO::FETCH_OBJ)){
          echo "<tr>\n";
          // récupérer chaque champ (colonne)
          foreach ($data as $key => $value) {
            echo "<td>$value</td>";
          }
          echo "</tr>";
        }
        $myRequest->closeCursor();
        $con = null; // déconnexion
        }catch(Exception $e){
            echo "Erreur lors de la récupération des données !";
            echo $e;
        }
        echo "</table>";
      }
    ?>
     -----------------------------Partie 2 :---------------------------------- -->
    <h1>Afficher les logements du type choisi par l'utilisateur :</h1>
    <form action="" method="post">
      <input type="submit" value="Afficher les logement de type : ">
      
    </form>
    <?php
        if(isset($_REQUEST["loyer"])){
          try{
            // la requête préparée
            $value = "";
            $myRequest = $con->prepare("select * from logement where logement <= ?");
            $myRequest->bindParam('?', $_REQUEST["logoment"], PDO::PARAM_STR);
            $myRequest->execute();
    ?>
    <br>
    <table>
      <tr>
        <th>Num</th>
        <th>Type</th>
        <th>Id_quartier</th>
        <th>Adresse</th>
        <th>Superficie</th>
        <th>Loyer</th>
      </tr>
    <?php
        // récupération du résultat ligne par ligne
        while ($data = $myRequest->fetch(PDO::FETCH_OBJ)){
          echo "<tr>\n";
          // récupérer chaque champ (colonne)
          foreach ($data as $key => $value) {
            echo "<td>$value</td>";
          }
          echo "</tr>";
        }
        $myRequest->closeCursor();
        $con = null; // déconnexion
        }catch(Exception $e){
            echo "Erreur lors de la récupération des données !";
            echo $e;
        }
        echo "</table>";
      }

      /* Saisir  un forfait  => afficher tout les loyer qui ont un forfait minimum que celui saisie par utilisateur
        vous etes entrain de courir dans tout les sens sauf dans le bon sens 
      */
    ?>
  </body>
</html>
