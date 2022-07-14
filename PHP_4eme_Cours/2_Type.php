<?php
      #Varibles et types 
      $x = 12; //Integer 
      #$x = "Hello World"; // String 
      $y = 1.25; // Float
      $z = true; // Bool 
      $Name = "Senia" ; // String 
      $Tab = [14, 25, 118, 0, 1.25, "Hi"]; // Array 
      $Test = NULL; // NULL Varible => déclaration sans affecter une valeur 

      #Type d'une variable 
      echo "x : ",gettype($x), "<br>";
      echo "y : ",gettype($y), "<br>";
      echo "z : ",gettype($z), "<br>";
      echo "Name : ",gettype($Name), "<br>";
      echo "Tab : ",gettype($Tab), "<br>";
      echo "Test : ",gettype($Test), "<br>";
      echo "<br>";

      #Type et Valeur d'une variable 
      echo "x : ",var_dump($x), "<br>";
      echo "y : ",var_dump($y), "<br>";
      echo "z : ",var_dump($z), "<br>";
      echo "Name : ",var_dump($Name), "<br>";
      echo "Tab : ",var_dump($Tab), "<br>";
      echo "Test : ",var_dump($Test), "<br>";
      echo "<br>";

      #Vérifier Type d'une varible 
      $x = "10";
      echo var_dump(is_int($x)), "<br>";
      echo var_dump(is_float($x)), "<br>";
      echo var_dump(is_bool($x)), "<br>";
      echo var_dump(is_string($x)), "<br>";
      echo var_dump(is_array($x)), "<br>";
      echo var_dump(is_object($x)), "<br>";
      echo var_dump(is_resource($x)), "<br>";
      echo var_dump(is_numeric($x)), "<br>";
      echo "<br>";
      
      #Convertir => Transtypage 
      $x = 5; # => Integer
      echo var_dump($x), "<br>"; 

      #$x = (float)$x; 
      #echo var_dump($x), "<br>";

      $x = settype($x, "float");
      echo var_dump($x), "<br>";
?>