<!DOCTYPE html>
<html lang="en">
      <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>MVC</title>
            <link rel="stylesheet" href="./css/tablestyle.css">
      </head>
      <body>
            <h1>Afficher les logements</h1>
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
            <br> <br>
            <form action="apartmentsoftype.php" method="get">
                  <input type="submit" value="Afficher les logements de type : ">
                  <select name="type">
                        <option value="F1">F1</option>
                        <option value="F1">F2</option>
                        <option value="F1">F3</option>
                  </select>
            </form>
      </body>
</html>