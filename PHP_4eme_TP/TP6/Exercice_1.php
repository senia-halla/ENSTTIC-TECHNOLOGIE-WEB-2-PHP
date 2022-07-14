<!DOCTYPE html>
<html lang="en">
      <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Exercie 1</title>
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
            </style>
      </head>
      <body>
            <h2>Donnée departement.txt en Tableau</h2>
            <table>
                  <tr>
                        <th>id_dept</th>
                        <th>nom</th>
                        <th>id_manager</th>
                        <th>id_loc</th>
                  </tr>
                  <?php 
                  $dep=file("departement.txt");
                  foreach($dep as $ligne){
                        echo "<tr>";
                        $champs = explode(",",$ligne);
                        $champs = str_replace(array("\n", "\r"), '', $champs); /*on supprime le saut de ligne qui se trouve à la fin de chaque ligne dans le fichier department.txt*/
                        foreach ($champs as $value){
                              echo "<td>".$value."</td>";
                        }
                        echo "</tr>";
                  }
                  ?>
            </table>  
      </body>
</html>