<?php 
      require('./models/allapartments.php');
      $response = getApartments();
      require('./views/apartmentsview.php');