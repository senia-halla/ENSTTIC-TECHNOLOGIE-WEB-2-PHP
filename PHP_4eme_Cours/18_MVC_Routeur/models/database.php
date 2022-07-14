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