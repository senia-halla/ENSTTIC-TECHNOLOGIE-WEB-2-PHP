<?php 
      require('database.php');
      function getApartmentsOfType($type){
            $db = dbConnect();
            $request = $db->prepare('SELECT * FROM logment WHERE type_logt = :type');
            $request->bindParam(':type', $type, PDO::PARAM_STR);
            $request->execute();
            $apartments = $request->fetchAll(PDO::FETCH_ASSOC);
            $request->closeCursor();
            return $apartments;
      }