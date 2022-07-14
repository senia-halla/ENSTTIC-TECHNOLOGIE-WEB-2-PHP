<?php 
      session_start();
      if(empty($_SESSION["name"])){
            $_SESSION["name"] = "Senia"; /* Création d'une variable de session name */
            $msg = "it's your first visit ".$_SESSION["name"];
      } else {
            $msg = "Hello ".$_SESSION["name"];

      }
      echo "<h2> $msg </h2>";
      echo "<p> ID de votre session = ".session_id()."</p>"
?>