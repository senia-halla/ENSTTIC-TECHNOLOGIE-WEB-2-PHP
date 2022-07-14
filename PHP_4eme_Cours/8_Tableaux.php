<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Les Tableaux</title>
</head>
<body>
      <?php 
            /* Tableau associtif => pour chaque valeur il y a une clés => entier ou chaine de caracter */
            /* Indexed Array */
            /* 0 => "apple", 1 => "orange" */
            $tab1 = ["apple", "orange"]; #on précise pas la cées => par défaut nombre entier indexà
            echo var_dump($tab1). "<br> <br>"; /* peremet d'afficher tableau en entier (avec types des éléments) */
            print_r($tab1); /* peremet d'afficher tableau en entier (sans types des éléments) */
            $tab1[] = "lemon"; /* add lemon to $tab1 => index suivant automatiquement  */
            echo "<br>",$tab1[2],"<br>"; /* lemon */

            /* Associative array */
            /* "fruit1" => "apple", "fruit2" => "orange" */
            /* key => value */
            $tab2 = array("fruit1" => "apple", "fruit2" => "orange");
            echo var_dump($tab2). "<br> <br>";
            print_r($tab2);
            $tab2["fruit3"] = "lemon";
            $tab2[] = "fig"; /* key = 0 : generation d'index entier automatiquement  */
            #echo "<br>", $tab2[2],"<br>"; /* Undefined array key 2 */
            print_r($tab2);
            unset($tab1[0]);
            unset($tab2);
            print_r($tab1);
            echo "<br> <br> <br> <br>";
      ?>

      <?php 

            /* Tri en fonction des valeures */
            echo "<h2> sort </h2>";
            $tab1 = ['intagram', 'facebook', 'twitter']; /* Attribuer les clés */
            print_r($tab1);
            echo "<br>";
            sort($tab1); /* On modifie la valeur des clés */
            print_r($tab1);
            echo "<br>";
            /* 
            Trier de facon ascendante des éléments du tableau passer en argument
            => on entregistre les éléments trier dans le meme tableau 
            */

            echo "<h2> rsort </h2>";
            $tab1 = ['intagram', 'facebook', 'twitter']; /*  On attribue les clés */
            rsort($tab1); /* On modifie la valeur des clés  */
            print_r($tab1);
            echo "<br>";
            /* 
            Trier de facon descendante des éléments du tableau passer en argument
            => on entregistre les éléments trier dans le meme tableau 
            */

            echo "<h2> asort </h2>";
            $tab1 = ['intagram', 'facebook', 'twitter']; /* On attribue les clés  */
            print_r($tab1);
            echo "<br>";
            asort($tab1); /* On modifie pas les valeurs des clés  */
            print_r($tab1);
            echo "<br>";
            /* Ascendant => Association clés / valeurs est préservés  */

            echo "<h2> arsort </h2>";
            $tab1 = ['intagram', 'facebook', 'twitter'];
            arsort($tab1);
            print_r($tab1);
            echo "<br>";
            /* descendant => Association clés / valeurs est préservés */


            /* Tri en fonction des clés */
            echo "<h2> ksort </h2>";
            $tab2 = ['intagram' => 6.5, 'facebook' => 5.1, 'twitter' => 8.3];
            print_r($tab2);
            echo "<br>";
            ksort($tab2);
            print_r($tab2);
            echo "<br>";
            /* Ascendant */

            echo "<h2> krsort </h2>";
            $tab2 = ['intagram' => 6.5, 'facebook' => 5.1, 'twitter' => 8.3];
            krsort($tab2);
            print_r($tab2);
            echo "<br>";
            /* Descendant */

            echo "<h2> Comparing Arrays </h2>";
            $tab1 = [6.0, 5.1, 8.3];
            $tab2 = ['intagram' => 6.0, 'facebook' => 5.1, 'twitter' => 8.3];
            echo '($tab1 === $tab2) = ', var_dump($tab1 === $tab2), "<br>"; /* => False */
            /* === : clés et valeurs identique => true (Types et valeurs) */
            echo '($tab1 == $tab2) = ', var_dump($tab1 == $tab2), "<br>";
            /* === : clés et valeurs identique => true (Valeurs sans types) */
            echo "<br>";
      ?>

      <?php 
            /* Multidimensional array => chaque élément du tableau est un tableau */
            $mystore = array (
                  "samsung s10 plus" => array(156000, 65, 20),
                  "huawei p30 lite" => array(44500, 28, 10),
                  "xiaomi redmi note 8" => array(42000, 80, 46)
            );

            echo "<h4> xiaomi redmi note 8 </h4>";
            echo "Price = ", number_format($mystore["xiaomi redmi note 8"][0],2, ",", " "), "<br>" ; /* Formater l'affichage  */
            echo "Stock = ", $mystore['xiaomi redmi note 8'][1], "<br>";
            echo "sold = ", $mystore['xiaomi redmi note 8'][2], "<br>";

            $mystore = array (
                  "samsung s10 plus" => array(156000, 65, 20),
                  "huawei p30 lite" => array(44500, 28, 10),
                  "xiaomi redmi note 8" => array(42000, 80, 46)
            );
            echo "<h4> List of prices : <h4> <ul>";
            foreach($mystore as $key => $value){
                  echo "<li> $key : $value[0] </li>";
            } 
            echo "</ul>";
      ?>
</body>
</html>