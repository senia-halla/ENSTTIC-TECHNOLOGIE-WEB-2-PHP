<?php 
      require('database.php');
      function getApartments(){
            $db = dbConnect();
            return $db->query('SELECT * FROM logment');
      }