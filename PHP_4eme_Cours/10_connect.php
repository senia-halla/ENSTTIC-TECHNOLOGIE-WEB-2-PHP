<?php 
      try{
            /* Nom de la source = data source name dsn */
            $dsn = 'mysql:host=localhost;dbname=agence';
            /* nom utilisateur = user */
            $user = 'root'; 
            /* mot de passe = password */
            $password = '';
            /* Options */
            $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',  /* Communication avec serveur codage utf8  */
                              PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION); /* PHP génére une exception en cas d'erreur */
            /* Instanciation de la connexion */
            $con = new PDO($dsn, $user, $password, $options);
            echo "Connexion à la base de données établie";
      }
      catch(Exception $e){
            die("Erreur de connexion à la base de données <br>".$e->getMessage());
            /* Unknown database if the name of the database doesn't exist
            php_network_getaddresses: getaddrinfo failed : The host doesn't exist
            could not find drive : there is syntax errors on the declaration of the dsn => exemple: spaces   */
      }
?>
<!-- PDO propose 2 méthodes pour exécution des requetes :
 1. query : utilisé pour les méthode select
 => Retourne un jeu de résultats en tant qu'objet
 2. exec : utilisé pour les requete d'insertion (insert)
                                    de mise à jour (update)
                                    de suppression (delete)
=> Retourne le nombre de lignes affectés 
-->


<!-- 
      Comment récupérer les données => afficher les enregistrement recu par le serveur
      La méthode fetch => retourne Tableau contenant tout les champs d'enregistrement

 -->

 <?php 
      try{
            $dsn = 'mysql:host=localhost;dbname:agence';
            $user = 'root';
            $password = '';
            $con = new PDO($dsn, $user, $password); 
      }catch(Exception $e){
            die($e->getMessage());
      }
 ?>