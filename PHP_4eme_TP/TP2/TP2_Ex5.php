<?php
    echo "<h1>Exercice 5 :</h1>";
    function likes( $names ) {
        switch (count($names)) {
            case 0 : return "no one likes this";
        	case 1 : return $names[0]." likes this";
        	case 2 : return $names[0].",".$names[1]." like this";
        	case 3 : return $names[0].", ".$names[1]." and ".$names[2]." like this";
        	default : return $names[0].", ".$names[1]." and ".(count($names)-2)." others like this";
        }
    }
    #whoLike = []
    #whoLike = ["Peter"]
    #whoLike = ["Jacob", "Alex"]
    #whoLike = ["Max", "John", "Mark"]
    $whoLike = ["Alex", "Jacob", "Mark", "Max"];
    echo likes($whoLike);
?>