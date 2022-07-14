<?php 
      try{
            $dsn = 'mysql:host=localhost;dbname=agence';
            $user = 'root'; 
            $password = '';
            $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION); 
            $con = new PDO($dsn, $user, $password, $options);
            echo "Connexion à la base de données établie";
      }
      catch(Exception $e){
            die("Erreur de connexion à la base de données <br>".$e->getMessage());
      }
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Cours PHP et Base de Données</title>
      <style>
            td, th{
                  border: 1px solid black; 
                  border-left : none; 
                  border-right : none; 
                  text-align : left; 
                  padding : 2px; 
            }
            table{
                  border : 1px solid black; 
                  width : 50%; 
                  border-collapse : collapse ;  
            }
            th{
                  background-color : #DC143C; 
                  color : white; 
            }
            tr:nth-child(odd){
                  background-color : #DCDCDC; 
            }
      </style>
</head>
<body>
      <h1>Afficher les logements</h1>
      <table>
            <tr>
                  <th>Num</th>
                  <th>Type</th>
                  <th>Id_quartier</th>
                  <th>Adresse</th>
                  <th>Superficies</th>
                  <th>Loyer</th>
            </tr>
            <?php 
                  /* La requete */
                  $response = $con->query("select * from logement"); /* => de type PDOStatment */
                  /* Récupération des résultats ligne par ligne */
                 /*  while ($data = $response->fetch()){
                        echo "<tr>\n";
                        for($i=0;$i<6;$i++){
                              echo "<td>$data[$i]</td>";
                        } */
                  /* while($data = $response->fetch(PDO::FETCH_OBJ)){   => un objet ou les prpriété correspond au nom des attribut  
                        echo "<tr>\n"; 
                        echo "<td>".$data->num_logt."</td>";
                        echo "<td>".$data->type_logt."</td>";
                        echo "<td>".$data->id_quartier."</td>";
                        echo "<td>".$data->adresse."</td>";
                        echo "<td>".$data->superficie."</td>";
                        echo "<td>".$data->loyer."</td>"; */
                  
                  while($data = $response->fetch(PDO::FETCH_ASSOC)){  /* Clés représente les nom des attribut   */
                        echo "<tr>\n"; 
                        echo "<td>".$data['num_logt']."</td>";
                        echo "<td>".$data['type_logt']."</td>";
                        echo "<td>".$data['id_quartier']."</td>";
                        echo "<td>".$data['adresse']."</td>";
                        echo "<td>".$data['superficie']."</td>";
                        echo "<td>".$data['loyer']."</td>"; 



                        /* Récupérer chaque cham -colonne- */
                        /* 
                        foreach($data as $key=> $value){
                              echo "<td>$value</td>"
                        }
                        */
                        echo "</tr>";
                  }
                  $response->closeCursor();
            ?>
      </table>    
</body>
</html>