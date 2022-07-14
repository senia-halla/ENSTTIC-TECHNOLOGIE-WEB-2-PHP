<?php 
      function dbConnect(){
            try{
                  $dsn = 'mysql:host=localhost;dbname=agence';
                  $user = 'root';
                  $password = '';
                  $options = array(
                        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                  );
                  return new PDO($dsn, $user, $password, $options); /* return $db */   
            }catch(Exception $e){
                  die("Erreur de connexion à la base de doonées <br>".$e->getMessage());
            }
      }

      function getApartments(){
            $db = dbConnect();
            return $db->query("SELECT * FROM logment"); /* return appartments */
      }

      function getApartmentsOfType($type){
            $db = dbConnect();
            $request = $db->prepare("SELECT * FROM logment WHERE type_logt = :type");
            $request->bindParam(':type', $type, PDO::PARAM_STR);
            $request->execute();
            $apartments = $request->fetchAll(PDO::FETCH_ASSOC);
            $request->closeCursor();
            return $apartments;
      }