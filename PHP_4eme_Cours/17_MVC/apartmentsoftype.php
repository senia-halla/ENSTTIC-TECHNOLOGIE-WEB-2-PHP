<?php 
      /* c'est un autre controlleur */
      require('model.php');
      if(isset($_GET['type'])){
            $type = filter_var($_GET['type'], FILTER_SANITIZE_STRING);
            $type = htmlspecialchars($type);
            $apartments = getApartmentsOfType($type);
            require('appartmentsoftypeview.php');
      }else{
            echo "Error : No type defined";
      }