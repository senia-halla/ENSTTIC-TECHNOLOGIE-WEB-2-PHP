<?php 
// Turn off all error reporting
error_reporting(0);
$x = "PostgreSQL";
$y = "MySQL";
$z = &$x; 
$x = "PHP 5";
$y = &$x; 
/* 
x = y = z = "PHP 5"
*/
echo '<h4> Affichage  </h4>';
echo "x : $x <br>";
echo "y : $y <br>";
echo "z : $z <br>"; 
echo '<h4> Affichage avec $GLOBALS </h4>';
echo 'x : '.$GLOBALS["x"].'<br>';
echo 'y : '.$GLOBALS["y"].'<br>';
echo 'z : '.$GLOBALS["z"].'<br>';
echo '<h4> PHP Info : phpinfo() </h4>';
/* echo phpinfo() */

echo '<h4> Exercice 5 </h4>';

$x1 = "PHP 5"; 
$a1[] = &$x1; 
$y1 = "5eme version de PHP";
$z1 = $y1*10;
$x1.=$y1;
$y1*=$z1;
$a1[0] = "MySQL"; 

echo 'x : '.$GLOBALS["x1"].'<br>';
echo 'y : '.$GLOBALS["y1"].'<br>';
echo 'z : '.$GLOBALS["z1"].'<br>';
echo 'a : '.$a1[0].'<br>';

/* 
x : MySQL
y : 250
z : 50
a : MySQL
*/

echo '<h4> Exercice 6 </h4>';
$x2 = "7 personnes";
$y2 = (integer) $x2;
$x2 = "9E3";
$z2 = (double) $x2;
echo 'x : '.$GLOBALS["x2"].'<br>';
echo 'y : '.$GLOBALS["y2"].'<br>';
echo 'z : '.$GLOBALS["z2"].'<br>';
/* 
x : 9E3
y : 7
z : 9000
*/

echo '<h4> Exercice 7 </h4>';
$a = "0";  #False
$b = "TRUE";  #True
$c = FALSE; #False
$d = ($a || $b); #True 
$e = ($a && $c); #False
$f = ($a XOR $b);  #True

echo 'a : '.$GLOBALS["a"].'<br>';
echo 'b : '.$GLOBALS["b"].'<br>';
echo 'c : '.$GLOBALS["c"].'<br>';
echo 'd : '.$GLOBALS["d"].'<br>';
echo 'e : '.$GLOBALS["e"].'<br>';
echo 'f : '.$GLOBALS["f"].'<br>';
/* 
a : 0
b : TRUE
c :
d : 1
e :
f : 1
*/
?>