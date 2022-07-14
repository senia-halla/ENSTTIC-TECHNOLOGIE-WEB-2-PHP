<?php 
/* Connect to the data base */
try{
      $dsn = 'mysql:host=localhost;dbname=agence';
      $user = 'root';
      $password = '';
      $options = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
      );
      $con = new PDO($dsn, $user, $password, $options);
      echo "Connexion établie à la base de données <br>";
}catch(Exception $e){
      die("Erreur de connexion à la base de données <br>".$e->getMessage());

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Exercice 1</title>
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
      <h2>Tableau des logements : fetch(PDO::FETCH_OBJ)</h2>
      <table>
            <tr>
                  <th>num_logt</th>
                  <th>Type_logt</th>
                  <th>id_quartier</th>
                  <th>adresse</th>
                  <th>superficie</th>
                  <th>loyer</th>
            </tr>
            <?php 
            $response = $con->query("select * from logement ");
            while($data = $response->fetch(PDO::FETCH_OBJ)){
                  echo "<tr>";
                  foreach($data as $key => $value){
                        echo "<td>$value</td>";
                  }
                  echo "</tr>";
            }
            $response->closeCursor();
            ?>
      </table>

      <h2>Tableau des locataires : fetch()<h2>
      <table> 
            <tr>
                  <th>num_ident</th>
                  <th>num_logt</th>
                  <th>nom</th>
                  <th>prenom</th>
                  <th>Date de naissance</th>
                  <th>Numéro de téléphone</th>
            </tr>
            <?php 
            $response = $con->query("select * from individu");
            while($data = $response->fetch()){
                  echo "<tr>";
                  for($i=0;$i<6;$i++){
                        echo "<td> $data[$i] </td>";
                  }
                  echo "</tr>";
            }
            $response->closeCursor();
            ?>
      </table>

      <h2>Tableau des quartiers : fetch(PDO::FETCH_ASSOC)</h2>
      <table>
            <tr>
                  <th>id_quartier</th>
                  <th>id_commune</th>
                  <th>libelle_quartier</th>
            </tr>
            <?php 
            $response = $con->query('select * from quartier');
            while($data = $response->fetch(PDO::FETCH_ASSOC)){
                  echo "<tr>";
                  echo "<td>".$data["id_quartier"]."</td>";
                  echo "<td>".$data["id_commune"]."</td>";
                  echo "<td>".$data["libelle_quartier"]."</td>";
                  echo "</tr>";
            }
            $response->closeCursor();
            ?>
      </table>

      <h2>Tableau des types de logement : PDO::FETCH_OBJ</h2>
      <table>
            <tr>
                  <th>type_logt</th>
                  <th>charges_forfait</th>
            </tr>
            <?php 
            $response = $con->query("select * from type_logt"); 
            while($data = $response->fetch(PDO::FETCH_OBJ)){
                  echo "<tr>";
                  echo "<td>".$data->type_logt."</td>";
                  echo "<td>".$data->charges_forfait."</td>";
                  echo "</tr>";
            }
            $response->closeCursor(); 
            ?>
      </table>   
</body>
</html>