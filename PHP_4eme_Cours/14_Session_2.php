<?php 
      /* Lecture de la variable de session  */
      session_start();
      if(empty($_SESSION["name"])){
            $msg = "Who are you ?";
      }else{
            $msg = "Hello ".$_SESSION["name"];
      }
      echo "<h2> $msg </h2>";
?>