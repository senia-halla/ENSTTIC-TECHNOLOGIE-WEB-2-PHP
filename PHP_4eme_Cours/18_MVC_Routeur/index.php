<?php 
      /* Le controlleur frontale : Le routeur */
      try{
            if(isset($_GET['action'])){
                  if($_GET['action'] == 'apartmentsoftype'){
                        require('./controllers/apartmentsoftype.php');
                  }
                  else{
                        require('./controllers/allapartments.php');
                  }
            }
            else{
                  require('./controllers/allapartments.php');
            }
      }catch(Exception $e){
            echo "Error : ".$e->getMessage();
      }
