<?php
    echo "<h1> Exercice 1 :</h1>";
    $phrase = "HALLA Senia";
    echo "Phrase = ".$phrase."<br>"; #"<br> \n"
    #<br> : permet de sauter la ligne dans navigateur 
    # \n permet de sauter la ligne au niveau du code source 
    echo "Phrase en minuscule = ".strtolower($phrase)."<br>";
    echo "Phrase en majuscule = ".strtoupper($phrase)."<br>";
    echo "Nombre de mots = ".str_word_count($phrase)."<br>";
?>