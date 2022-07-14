<!DOCTYPE html>
<html lang="en">
      <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Cookies</title>
      </head>
      <body>
            <h1>$_COOKIE["numberOfVisits"]</h1>
            <?php 
                  echo $_COOKIE["PHPSESSID"];
                  echo $_COOKIE["numberOfVisits"];
                  
                  if(isset($_COOKIE["numberOfVisits"])){
                        setcookie("numberOfVisits", ++$_COOKIE["numberOfVisits"], time() + 24*3600);
                        echo "<p>Vous avez déja visiter cette page ",$_COOKIE["numberOfVisits"]," fois </p>";
                  } else{
                        setcookie("numberOfVisits",1, time() + 24*3600);
                        echo "<p>C'est votre premiere visite </p>";
                  }         
            ?>

            
      </body>
</html>