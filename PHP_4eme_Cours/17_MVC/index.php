<?php 
      /* Généralement le controleur est nomé index.php */
      require('model.php');
      $response = getApartments(); /* Fonction de model.php */
      require('view.php');