<?php
echo "<h1>Exercice 2 :</h1>";
$phrase = "HALLA Senia";
$chaineRecherche = "HALLA"; 
echo "Texte = ".$phrase."<br>";
echo "Chaine Recherchée = ".$chaineRecherche."<br>";
#Tester si $phrase contient $chainerecherche
if(strpos(strtolower($phrase), strtolower($chaineRecherche)) !== false){ #!= false
    echo "La chaine recherchée est présente dans le texte";
}
else{
    echo "La chaine recherchée n'est pas présente dans le texte";
}
#strpos retourne position 
?>