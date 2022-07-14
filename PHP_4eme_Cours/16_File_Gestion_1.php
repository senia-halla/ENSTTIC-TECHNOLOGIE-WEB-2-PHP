<?php 
/* echo "<h2>file_get_contents :</h2>";
$myFile = file_get_contents("myFile.txt");
echo $myFile;
echo "<h2>file :</h2>";
$lines = file('myFile.txt');
foreach($lines as $line_num => $line){
      echo "Line $line_num : $line <br>";
}  */


/* --------------------------------------------------- */

/*file_put_contents('myFile.txt', 'Hello World'); 
file_put_contents('myFile.txt', ', How are you ?', FILE_APPEND); */

/* --------------------------------------------------- */

/* echo "<h2>fgetc :</h2>";
$myFile = fopen('myFile.txt', 'r');
if(!$myFile){
      echo "Impossible to open myFile.txt";
}else{
      while(($char = fgetc($myFile)) !== false){
            echo "$char";
      }
}
fclose($myFile); */

/* --------------------------------------------------- */

/* echo "<h2>fgets </h2>";
$myFile2 = fopen('myFile.txt', 'r');
if(!$myFile2){
      echo "Impossible to open myFile2.txt";
}else{
      while(($line = fgets($myFile2))!== false){
            echo "$line <br>";
      }
}
fclose($myFile2); */

/* --------------------------------------------------- */

/* echo "<h2> fread : </h2>";
$myFile2 = fopen("myFile.txt", 'rb');
if(!$myFile2){
      echo "Impossible to open myFile.txt";
}
else{
      $content = fread($myFile2, filesize('myFile.txt'));
      echo nl2br($content); #remplacer les saut de lignes par des balises br
      fclose($myFile2);
} */

/* --------------------------------------------------- */



?>