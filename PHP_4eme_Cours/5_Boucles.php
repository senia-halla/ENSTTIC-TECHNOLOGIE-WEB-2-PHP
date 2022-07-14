<?php
      //La boucle While 
      $i = 1; #Compteur 
      echo "<h3> Boucle While ... </h3> <ul>";
      while($i <= 7){ # Condition de la boucle 
            echo "<li> Jour $i </li>"; 
            $i++; #Incrémentation
      }
      echo "</ul>";

      //La boucle do .. While 
      $i = 1; #Compteur 
      echo "<h3> Boucle Do ... While</h3> <ul>";
      do { 
            echo "<li> Jour $i </li>"; 
            $i++; #Incrémentation
      } while($i <= 7);
      echo "</ul>";

      // La boucle for 
      echo "<h3> Boucle For ... </h3> <ul>";
      for($i=1; $i <= 7; $i++) { 
            echo "<li> Jour $i </li>"; 
      }
      echo "</ul>"; 


?>
