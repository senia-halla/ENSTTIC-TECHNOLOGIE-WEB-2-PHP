<?php 
try{
      $dsn = "mysql:host=localhost;dbname=agence";
      $user = "root";
      $password = "";
      $options = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
      );
      $con = new PDO($dsn, $user, $password, $options);
      echo "Connexion établie à la base de données";
}catch(Exception $e){
      die("Connexion Impossible à la base de données".$e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Exercice 2</title>
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
      <h2> Les logement F1 : marqueur interrogatif</h2>
      <table>
            <tr>
                  <th>num_logt</th>
                  <th>libelle_quartier</th>
                  <th>superficie</th>
                  <th>loyer</th>
            </tr>
            <?php 
            $requete = $con->prepare("select * from logement where type_logt = ?");
            $requete->execute(array('F1'));
            while($data = $requete->fetch(PDO::FETCH_OBJ)){
                  echo "<tr>";
                  echo "<td>".$data->num_logt."</td>";
                  echo "<td>".$data->id_quartier."</td>";
                  echo "<td>".$data->superficie."</td>";
                  echo "<td>".$data->loyer."</td>";
                  echo "</tr>";
            }
      ?>
      </table>

      
      <h2>Les locataires d'un F3 : marqueur Nominatifs</h2>
      <table>
            <tr>
                  <th>num_ident</th>
                  <th>nom</th>
                  <th>prenom</th>
                  <th>num_logt</th>
                  <th>superficie</th>
                  <th>loyer</th>
                  <th>charges_forfait</th>
            </tr>
            <?php 
                  $request = $con->prepare("select num_ident, nom, prenom, logement.num_logt, superficie, loyer, charges_forfait 
                                              from individu, logement, type_logt 
                                              where individu.num_logt = logement.num_logt and 
                                                    type_logt.type_logt = logement.type_logt and
                                                    logement.type_logt = :type"
                                          );
                  $request->execute(array('type'=>'F3'));
                  while ($data = $request->fetch(PDO::FETCH_OBJ)){
                        echo "<tr>\n";
                        // récupérer chaque champ (colonne)
                        foreach ($data as $key => $value) {
                              echo "<td>$value</td>";
                        }
                        echo "</tr>";
                  }
                  $request->closeCursor();
            ?>
      </table>


      <h2>Les locataires d'un F3 de superficie > 120 m2</h2>
      <table>
            <tr>
                  <th>num_ident</th>
                  <th>nom</th>
                  <th>prenom</th>
                  <th>num_logt</th>
                  <th>superficie</th>
                  <th>loyer</th>
                  <th>charges_forfait</th>
            </tr>
            <?php 
            $request = $con->prepare("select num_ident, nom, prenom, logement.num_logt, superficie, loyer, charges_forfait 
                                      from individu, logement, type_logt 
                                      where individu.num_logt = logement.num_logt and 
                                            type_logt.type_logt = logement.type_logt and
                                            logement.type_logt = :type and 
                                            superficie > :sup_min"
                                    );
            $type = "F3";
            $sup_min = 120;
            $request->bindParam(':type',$type, PDO::PARAM_STR);
            $request->bindParam(':sup_min', $sup_min, PDO::PARAM_INT);
            $request->execute();
            while ($data = $request->fetch(PDO::FETCH_OBJ)){
                        echo "<tr>\n";
                        // récupérer chaque champ (colonne)
                        foreach ($data as $key => $value) {
                              echo "<td>$value</td>";
                        }
                        echo "</tr>";
                  }
                  $request->closeCursor();
            ?>
      </table>    
</body>
</html>