<?php
     $a = 10; 
     $b = 5.2; 

     #Opérations Arithmétiques 
     echo "<h3> Opérations Arithmétiques</h3>";
     echo '1.  -a = ',-$a, "<br>"; // - 10
     echo '2.  a + b = ', $a + $b, "<br>"; //15.2
     echo '3.  a - b = ', $a - $b, "<br>"; // 4.8
     echo '4.  a * b = ', $a * $b, "<br>"; // 52
     echo '5.  a / b = ', $a / $b, "<br>";  // 1.9230769230769 
     echo '6.  a % b = ', $a % $b, "<br>"; // 0
     echo '7.  a ** b = ', $a ** $b, "<br>"; // 158489.31924611 

     $a = true; 
     $b = false;  
     #Opérations Logiques
     #Dans navigateur : Faux Représenté par chaine de caractére vide 
     echo "<h3> Opérations Logiques</h3>";
     echo "1. a && b = ",$a && $b,"<br>"; // 0
     echo "3. a AND b = ",$a AND $b ,"<br>"; // 0
     echo "2. a || b = ",$a || $b, "<br>"; // 1
     echo "4. a OR b = ",$a OR $b, "<br>"; // 1
     echo "5. a XOR b = ",$a XOR $b, "<br>"; // 1 
     echo "6. !a = ", !$a,"<br>"; // 1
     echo "<br>";
       
     $c = ($a && $b); 
     echo '$c = ', var_dump($c),"<br>";
     $d = ($a AND $b); 
     echo '$d = ', var_dump($d),"<br>";

     # && est prioritaire à l'affectation 
     $c_1 = $a && $b; 
     echo '$c_1 = ', var_dump($c_1),"<br>";
     #And est moins prioritaire à l'affectation 
     $d_1 = $a AND $b; 
     echo '$d_1 = ', var_dump($d_1),"<br>";


     $a = 2; // int 
     $b = 2.0; // float 
     $c = 8; // int  
     #Opérations de comparaison 
     echo "<h3> Opérations De Comparaisons </h3>";
     echo "1. (a == b) : ", var_dump($a == $b), "<br>";
     echo "2. (a === b) : ", var_dump($a === $b), "<br>";
     echo "3. (a != b) : ", var_dump($a != $b), "<br>";
     echo "4. (a !== b) : ", var_dump($a !== $b), "<br>";
     echo "5. (a <=> b) : ", var_dump($a <=> $b), "<br>";
     echo "6. (a <=> c) : ", var_dump($a <=> $c), "<br>";
     echo "7. (c <=> a) : ", var_dump($c <=> $a), "<br>";

     $a = 7; 
     $b = 2;
     #Opérateur D'Incrémentation et Décrémentation
     echo "<h3> Opérations D'Incrémentation </h3>";
     echo '$a : ', $a , "<br>"; # => 7
     echo '$a++ : ', $a++, "<br>"; # => Afficher 7 puis incrémenter 7+1 = 8 
     echo '++$a : ', ++$a, "<br>"; # => Incrémenter 8+1 puis afficher 9 

     echo "<h3> Opérations Décrémentation </h3>";
     echo '$b : ', $b , "<br>"; # => 2
     echo '$b-- : ', $b--, "<br>"; # => afficher 2 puis décréenter 2- 1 = 1
     echo '--$b : ',--$b, "<br>"; # décrémenter 1- 1  puis afficher 0
?>
