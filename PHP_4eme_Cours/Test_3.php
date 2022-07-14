<?php 
echo "<h4> Exercice 1 </h4>";
$chaine_1 = "HeLLo WorLD"; 
$chaine_1 = strtolower($chaine_1);
$chaine_1 = ucwords($chaine_1);
echo $chaine_1; 

echo "<h4> Exercice 2 </h4>";
$chaine_2 = "PHP 5"; 
echo "<ul>";
for($i=0; $i<strlen($chaine_2); $i++){
      echo "<li> $chaine_2[$i] </li>";
}
echo "</ul>";

echo "<h4> Exercice 3 </h4>";
$nom = "HaLLa";
$prenom = "SENIA";
$prenom = strtolower($prenom);
$prenom = ucwords($prenom); 
$nom = strtoupper($nom);
echo $nom," ",$prenom;

echo "<h4> Exercice 4 </h4>";
$nom1 = "Senia"; 
$nom2 = "Assala"; 
$nom3 = "Yacine";
$nom_array = array($nom1, $nom2, $nom3);
sort($nom_array);
print_r($nom_array);

echo "<h4> Exercice 5 <h5>";
$chaine_3 = array("zut !", "zut zut !", "pas ... !");
foreach($chaine_3 as $chaine){
      if(strstr($chaine, "zut")){
            print("$chaine <br>");
      }
}








?>