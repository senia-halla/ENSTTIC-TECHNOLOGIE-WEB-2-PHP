<?php
    // inclure le fichier contenant la classe Calculatrice

    include("Calculatrice.php"); /* Fichier ajouter et executé */
    /* 
    include
    include_once => inclusion une seule fois : ne pas appeler fichier plusieurs fois durant execution
    [L'execution ne s'arrete pas si le nom de fichier n'existe pas]

    require
    require_once
    [Le meme principe mais si le nom du fichier n'esxiste pas l'execution s'arrete ]
    */
    $calc = new Calculatrice(5, 0); /* Instantation */
    echo $calc->add()."<br>"; 
    echo $calc->mul()."<br>"; 
    echo $calc->sub()."<br>"; 
    echo $calc->div()."<br>"; 
?>