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
    <h1>Afficher les logements :</h1>
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
        // la requête
        $response = $con->query("select * from logement");
        // récupération du résultat ligne par ligne
        while ($data = $response->fetch(PDO::FETCH_OBJ)){
          echo "<tr>\n";
          // récupérer chaque champ (colonne)
          foreach ($data as $key => $value) {
            echo "<td>$value</td>";
          }
          echo "</tr>";
        }
        $response->closeCursor();
     ?>
    </table>
    <h1>Afficher les locataires :</h1>
    <?php
        $response = $con->query("select * from individu");
    ?>
    <table>
      <tr>
        <th>Num_ident</th>
        <th>Num_logt</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Datenai</th>
        <th>Num_tel</th>
      </tr>
    <?php
        // récupération du résultat ligne par ligne
        while ($data = $response->fetch(PDO::FETCH_OBJ)){
          echo "<tr>\n";
          // récupérer chaque champ (colonne)
          foreach ($data as $key => $value) {
            echo "<td>$value</td>";
          }
          echo "</tr>";
        }
        $response->closeCursor();
    ?>
    </table>
    <h1>Afficher les quartiers :</h1>
    <?php
        $response = $con->query("select * from quartier");
    ?>
    <table>
      <tr>
        <th>Id_quartier</th>
        <th>Id_commune</th>
        <th>Libelle_quartier</th>
      </tr>
    <?php
        // récupération du résultat ligne par ligne
        while ($data = $response->fetch(PDO::FETCH_OBJ)){
          echo "<tr>\n";
          // récupérer chaque champ (colonne)
          foreach ($data as $key => $value) {
            echo "<td>$value</td>";
          }
          echo "</tr>";
        }
        $response->closeCursor();
     ?>
    </table>
    <h1>Afficher les tyoes de logement :</h1>
    <?php
        $response = $con->query("select * from type_logt");
    ?>
    <table>
      <tr>
        <th>type_logt</th>
        <th>charges_forfait</th>
      </tr>
    <?php
        // récupération du résultat ligne par ligne
        while ($data = $response->fetch(PDO::FETCH_OBJ)){
          echo "<tr>\n";
          // récupérer chaque champ (colonne)
          foreach ($data as $key => $value) {
            echo "<td>$value</td>";
          }
          echo "</tr>";
        }
        $response->closeCursor();      
     ?>
    </table>
  </body>
</html>
