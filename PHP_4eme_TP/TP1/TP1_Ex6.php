<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Table Multiplication</title>
</head>
<body>
      <style>
      table {
        border-style: ridge;
        width: 200px;
      }
      th,
      td {
        border-style: groove;
      }
    </style>

    <?php
      #Variable 
      $multip = 6; 
      Mult_Table($multip);

      function Mult_Table($a){
            echo "<table>";
            echo "<tr>
                        <th>Multiplication</th>
                        <th>Résultat</th>
                  </tr>";
                  
            for ($i=1;$i<=10;$i++){
                  echo "<tr>
                              <td> $i x $a </td>
                              <td>", $i * $a,"</td>
                        </tr>";
            }
            echo "</table>";
      }    
    ?>
</body>
</html>