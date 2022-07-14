<?php 
      require('./models/apartmentsoftype.php');
      if(isset($_GET['type'])){
            $type = filter_var($_GET['type'], FILTER_SANITIZE_STRING);
            $type = htmlspecialchars($type);
            $apartments = getApartmentsOfType($type);
            require('./views/apartmentsoftypeview.php');
      }else{
            throw new Exception('Error : type of apartment not defined !');
      }