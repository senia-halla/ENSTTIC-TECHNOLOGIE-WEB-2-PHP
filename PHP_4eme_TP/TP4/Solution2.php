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
    <h1>Afficher les logements de type F3 (ou F1) :</h1>
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
        // la requête préparée
        $value = "F3";
        $myRequest = $con->prepare("select * from logement where type_logt = :type");
        $myRequest->bindParam(':type', $value, PDO::PARAM_STR);
        $myRequest->execute();
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

     ?>
    </table>
    <h1>Afficher les locataires d'un F3 :</h1>
    <table>
      <tr>
        <th>Num_ident</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Num_logt</th>
        <th>Superficie</th>
        <th>Loyer</th>
        <th>Charges</th>
      </tr>
    <?php
        // la requête préparée
        $value = "F3";
        $myRequest = $con->prepare("select num_ident, nom, prenom, logement.num_logt, superficie, loyer, charges_forfait from individu, logement, type_logt where individu.num_logt = logement.num_logt and type_logt.type_logt = logement.type_logt and logement.type_logt = :type");
        $myRequest->bindParam(':type', $value, PDO::PARAM_STR);
        $myRequest->execute();
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
    ?>
    </table>
    <h1>Afficher les locataires d'un F3 ayant une superficie > 120m<sup>2</sup> :</h1>
    <table>
      <tr>
        <th>Num_ident</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Num_logt</th>
        <th>Superficie</th>
        <th>Loyer</th>
        <th>Charges</th>
      </tr>
    <?php
        // la requête préparée
        $value = "F3";
        $value2 = 120;
        $myRequest = $con->prepare("select num_ident, nom, prenom, logement.num_logt, superficie, loyer, charges_forfait from individu, logement, type_logt where individu.num_logt = logement.num_logt and type_logt.type_logt = logement.type_logt and logement.type_logt = :type and superficie > :sup");
        $myRequest->bindParam(':type', $value, PDO::PARAM_STR);
        $myRequest->bindParam(':sup', $value2, PDO::PARAM_INT);
        $myRequest->execute();
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
     ?>
    </table>
  </body>
</html>
