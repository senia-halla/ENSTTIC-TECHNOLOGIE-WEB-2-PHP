<!DOCTYPE html>
<html lang="en">
      <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Exercice 2</title>
      </head>
      <body>
            <?php 
                  analyseFile("beacons.txt");

                  function analyseFile($file_name){
                        $file = file_get_contents($file_name);
                        echo "La taille du fichier = ".filesize($file_name)." Octets <br>";
                        $file2lower = strtolower($file);
                        $fileWords = explode(" ",$file2lower);
                        echo "Nombre total des mots est : ".count($fileWords)."<br>";
                        $words = array_count_values($fileWords); #clés : les mots / valeur : count
                        arsort($words);
                        echo "Liste des 20 mots les plus répétés";
                        echo "<ul>";
                              $i=0;
                              foreach($words as $word => $num_rep){
                                    echo "<li> $word : $num_rep </li>";
                                    $i++; 
                                    if($i == 20) break;
                              }
                        echo "</ul>";
                        return true;
                  }
            ?> 
      </body>
</html>