<?php
$fileCountVisits = fopen("countVisits.txt", "r+");
//  vérifier s'il n y a pas eu d'erreur lors de la lecture
if($fileCountVisits === false){
    echo "Impossible de lire le fichier <br>";
    return false;
}
// Mettre en place une section d'exlusion mutuelle
//  flock() permet de réaliser un système simple de verrous écriture/lecture.
// Vérifier si le fichier est libre c-a-d s'il n'est pas déjà utilisé par un autre processus
while(!flock($fileCountVisits, LOCK_EX)) {  
    // attendre la libération du fichier (la ressource)
}
// Lecture du nombre de visites déjà sauvegardé dans le fichier
// et transformation du nombre du type "string" vers "int" à l'aide de la fonction intval
$counter = intval(fread($fileCountVisits, filesize("countVisits.txt")));
// Incrémentation du compteur
$counter++;
echo "Nombre de visites : $counter";
// ftruncate tronque un fichier à la taille donnée en paramètre
// dans notre cas le fichier sera tronqué à 0 c-a-d le contenu sera supprimé
ftruncate($fileCountVisits, 0); 
// positionner le pointeur du fichier au début du fichier
rewind($fileCountVisits);
// Ecrire le compteur dans le fichier
fwrite($fileCountVisits, $counter);  
// fflush veille à ce que l'écriture se termine et que rien ne reste dans le buffer d'écriture
fflush($fileCountVisits);            
// déverrouiller le fichier et libérer un seul processus déjà bloqué via la ligne 11 (voir plus haut) 
flock($fileCountVisits, LOCK_UN); 
// fermer le fichier
fclose($fileCountVisits);
?>