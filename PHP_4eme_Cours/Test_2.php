<?php 
#Exercie 1: 
echo "<h4> Exercice 1 : <h4>";
$x1 = 15; 

if(!($x1 % 3) && !($x1 % 5)){
      echo "Le nombre est à la fois multiple de 3 et de 5";
}else {
      echo "Le nombre n'est pas multiple de 3 et de 5 à la fois";
}

echo "<h4> Exercice 2 : <h4>";
$age = 30; 
$sexe = "F";

if ($sexe === "F" && $age >= 21 && $age <=40){
      echo "Vous etes les bienvenues !";
}else {
      echo "Vous n'etes les bienvenus !";
}

echo "<h4> Exercice 3 : <h4>";

while (true){
      $num1 = rand(0,10);
      $num2 = rand(0,10);
      $num3 = rand(0,10);
      echo "Num 1 : $num1 <br>";
      echo "Num 2 : $num2 <br>";
      echo "Num 3 : $num3 <br>";

      if(!($num1 % 2) && ($num2 % 2) && ($num3 % 2)){
            echo "SUCESS !! <br> <br>";
            break ;
      }
      else{
            echo "Fail .. Again ! <br> <br>";
      }
}

echo "<h4> Exercice 4 : <h4>";
for($i=1; $i<=9; $i++){
      $j = $i*100;
      $tab[$i] = "$j PHP 75";
      print("<ul>");
      print("<li> $tab[$i] </li>");
      print("</ul>");
}

echo "<h4> Exercice 5 : <h4>";
$nombre_choisi = 111;
$nombre_rand = rand(100,999);
$compteur = 0;
while($nombre_choisi !== $nombre_rand){
      $nombre_rand = rand(100,999);
      $compteur++;
}
print("SUCCES ! $nombre_rand est le nombre choisi !<br>");
print("vous avez eu besoin de $compteur tentative pour trouver la bonne réponse");

echo "<h4> Exercice 6 : <h4>";
$str = "ABCDEFGHIJKLMNOPQRSTUVWXYZ"; 
for($i=11;$i<=36;$i++){
      $index = rand(0, strlen($str) - 1);
      $tab_2[$i] = $str[$index];
      print("$i - $tab_2[$i] <br>");
}
#print_r($tab_2)
print("<h3> foreach </h3>");
foreach($tab_2 as $value){
      print("$value <br>");
}

echo "<h4> Exercice 7 : <h4>";
$entier_rand = rand(0,100);
$multiple = 7;
$compteur = 0;  
/* 
      entier_rand / multiple = 0
*/

while(true){
      if(!($entier_rand % $multiple)){
            break; 
      }
      else{
            $compteur++;
            $entier_rand = rand(0,100);
      }
}
print("Vous avez eu besoin de $compteur pour trouver $entier_rand qui est un multiple de $multiple");

echo "<h4> Exercice 8 : <h4>";
function pgcd( $a , $b ){
      if (( $a <= 0 ) || ( $b <= 0 )){
            return ("Veuillez passer 2 nombres strictement positifs"); 
      }

      while ($b > 0) { 
            $r = $a % $b; 
            $a = $b; 
            $b = $r; 
      } 
      return $a; 
}
$num1 = 5;
$num2 = 10; 
$pgcd = pgcd($num1, $num2);
print("$pgcd est le plus grand diviseur commun de $num1 et $num2 ");
?>