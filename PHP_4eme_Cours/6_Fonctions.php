<?php
      # 1. function
      function myFunction($arg1, $arg2,$argn){
            echo "This is my Function <br>";
            return 0;
      }
      #myFunction(); Erreur => nous devons donné des arguments 
      myFunction(1,2,3);

      #2. Passing arguments by value 
      $tab = [2,3]; 
      sumTab($tab); 
      function sumTab($input){
            echo '$input[0] + $input[1] = ' , $input[0] + $input[1], "<br>" ;
      }

      #3. Passing arguments by refreces 
      $x = 2; 
      $y = 5; 
      sum($x, $y);
      echo "The result is $x";
      echo "<br>";

      function sum(&$a, &$b){
            $a += $b;
      }

      #4. Default Argument values
      echo bringCoffe(1), "<br>"; 
      echo bringCoffe(0, null), "<br>";
      echo bringCoffe(5,"Expresso"), "<br>"; 

      function bringCoffe($number, $what = "Cappucino"){
            return "bring me $number cup(s) of $what";
      }

      #5. Local and Global varibles 
      $a = 2; 
      function setValue1($value){
            $a = $value;
            echo $a; # a est une varible local => utilisé qu'a l'intérieur de la fonction 
      }

      setValue1(10); 
      echo "a = $a <br>"; # a = 2 et non pas 10 

      #6. Global Variable
      $a = 2; # a est une variable globale 
      function setValue2($value){
            global $a; 
            $a = $value; 
      } 

      setValue2(10);
      echo "a = $a <br>"; # a = 10 

      #7. Global Variable using $_GLOBALS 
      $a = 2; # $a is a global variable 
      function setValue3($value){
            $GLOBALS['a'] = $value ; # The global Variable $a | La variable super Globale 
      }

      setValue3(10); 
      echo "a = $a <br>"; # a = 10

?>
