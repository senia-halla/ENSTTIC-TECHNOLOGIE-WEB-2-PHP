<?php
      #if .. else 
      $a = 11.5; 
      $b = 28; 
      $c = 21; 

      if($a > $b){
            echo "$a est supérieur à $b <br>"; 
      }
      else{ 
            echo "$a est inférieur ou égal à $b <br>";
      }
      
      #if .. else if ... else 
      if($a > $b && $a > $c){
            echo "$a est supérieur à $b et $c <br>";
      }
      elseif($b > $c){
            echo "$b est supérieur à $a et $c <br>"; 
      }
      else{
            echo "$c est supérieur à $a et $b <br>"; 
      }

      #Switch  
      $i = 1; 
      switch($i){
            case 0: 
                  echo "i = 0"; 
                  break ; 
            case 1: 
                  echo "i = 1"; 
                  break; 
            case 2: 
                  echo "i = 2"; 
                  break; 
            default :
                  echo "No Match";
                  break;

      }
?>