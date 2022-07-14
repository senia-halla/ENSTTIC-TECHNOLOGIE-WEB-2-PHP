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
      <h1>Afficher les logements : </h1>
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
                  foreach($apartments as $data){
                        echo "<tr>";
                        foreach($data as $key => $value){
                              echo "<td>$value</td>";
                        }
                        echo "</tr>";
                  }
            ?>
      
</body>
</html>