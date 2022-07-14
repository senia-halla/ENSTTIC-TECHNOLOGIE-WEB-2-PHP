<?php 
try{
      $dsn = 'mysql:host=localhost;dbname=agence';
      $user = 'root';
      $password = '';
      $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                       PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
      $con = new PDO($dsn, $user, $password, $options);
      echo "Connexion établie à la base de données";

}catch(Exception $e){
      die("Connxion impossible à la base de données".$e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="en">
      <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Exercice 3</title>
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
            <h2>Afficher locataires d'un type de logement choisi par User</h2>
            <form action="" method="post">
            <input type="submit" value="Afficher les logement de type : ">
            <select name="type_logt">
            <?php
            // la requête
            $response = $con->query("select type_logt from type_logt");
            // récupération du résultat ligne par ligne
            while ($data = $response->fetch(PDO::FETCH_OBJ)){
                  // récupérer chaque champ (colonne)
                  foreach ($data as $key => $value) {
                        echo "<option value='$value'>$value</option>";
                  }
            }
            $response->closeCursor();        
            ?>
            </select>
            </form>

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
                        if(isset($_POST["type_logt"])){
                              $request = $con->prepare("select num_ident, nom, prenom, logement.num_logt, superficie, loyer, charges_forfait 
                                                      from individu, logement, type_logt 
                                                      where individu.num_logt = logement.num_logt and 
                                                            type_logt.type_logt = logement.type_logt and
                                                            logement.type_logt = :type"
                                                      );
                              $request->bindParam(':type',$_POST["type_logt"],PDO::PARAM_STR);
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
                        } 
                  ?>
            </table>


            <h2>Afficher locataire d'un loyer supérieur à 20000 :</h2>
            <form action="" method="post">
                  <label for="sup">Loyer inférieur à :</label>
                  <input type="int" id="sup" name="sup">
                  <input type="submit" value="Afficher">
            </form>

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
                        if(isset($_POST["sup"])){
                              if(is_numeric($_POST["sup"])){
                                    $request = $con->prepare("select num_ident, nom, prenom, logement.num_logt, superficie, loyer, charges_forfait 
                                                      from individu, logement, type_logt 
                                                      where individu.num_logt = logement.num_logt and 
                                                            type_logt.type_logt = logement.type_logt and
                                                            logement.loyer < ?"
                                                      );
                                    $request->bindParam(1,$_POST["sup"],PDO::PARAM_INT);
                                    $request->execute();
                                    while($data = $request->fetch(PDO::FETCH_OBJ)){
                                          echo "<tr>";
                                          foreach($data as $key=>$value){
                                                echo "<td> $value </td>";
                                          }
                                          echo "</tr>";
                                    }

                              }
                        }

                  ?>
            </table>
            


      </body>
</html>