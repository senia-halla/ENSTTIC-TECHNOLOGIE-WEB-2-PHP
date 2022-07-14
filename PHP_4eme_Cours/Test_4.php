<?php
echo "<h4>Exercice 1:</h4>";
$tab_multi = array(
      "H" => array("prenom" => "S", "age" => 20, "wilaya" => "O"),
      "A" => array("prenom" => "H", "age" => 22, "wilaya" => "E")
); 
print_r($tab_multi);

echo "<h4>Exercice 2:</h4>";
foreach($tab_multi as $key => $value){
      print("$key => ");
      foreach($value as $x => $y){
            print("$y ");
      }
      echo "<br>";
}


?>