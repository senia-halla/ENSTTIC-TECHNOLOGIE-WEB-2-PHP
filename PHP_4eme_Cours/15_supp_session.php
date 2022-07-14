<?php 
/* Supprimer une session */
session_start();
session_destroy();
/* supprimer une variable de session
unset($_SESSION["nom_variable"])
*/
?>