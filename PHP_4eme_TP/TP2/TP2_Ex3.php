<?php
    echo "<h1>Exercice 3 :</h1>";
    $terminaison = array(
        'je '=>'e',
        'tu '=>'es',
        'il/elle '=>'e',
        'nous '=>'ons',
        'vous '=>'ez',
        'ils/elles '=>'ent'
    );

    $verbe = "travailler";

    if (strcmp(substr($verbe,-2),"er")) {
        print($verbe." n'est un verbe du premier groupe<br>\n");        
    } 
    
    else {
        print("Conjuguaison du verbe ".$verbe." :<br>\n");
        $racine = substr($verbe,0,strlen($verbe)-2);
        foreach($terminaison as $p => $t){
            print($p.$racine.$t."<br>"); 
      }
    }
?>