<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Sport</title>
</head>
<body>
      <style>
      table {
        border-style: ridge;
        width: 400px;
      }
      th,
      td {
        border-style: groove;
      }
    </style>

    <?php 
      $table_sport = ["Hockey sur glace", "Patinage artistique", "Luge", "Ski acrobatique"];
    ?>
    <table>
      <tr>
        <th>ID Sport</th>
        <th>Nom Sport</th>
      </tr>

      <tr>
        <td>325</td>
        <td> <?php echo "$table_sport[0]" ?></td>
      </tr>

      <tr>
        <td>375</td>
        <td><?php echo "$table_sport[1]" ?></td>
      </tr>

      <tr>
        <td>498</td>
        <td><?php echo "$table_sport[2]" ?></td>
      </tr>

      <tr>
        <td>117</td>
        <td><?php echo "$table_sport[3]" ?> </td>
      </tr>
     
    </table>
</body>
</html>