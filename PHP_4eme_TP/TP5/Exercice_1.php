<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercise 1</title>
  </head>
  <body>
    <form action="" method="post">
      <input type="text" name="nuser" placeholder="username">
      <input type="password" name="pass" placeholder="password">
      <input type="submit" name="connect" value="login">
    </form>
    <?php
	// 1- récupérer le nom d'utilisateur ainsi que le mot de passe
      if(isset($_POST['nuser']) and isset($_POST['pass'])){
		 // 2- verifier si le visteur a déjà atteint ses 3 essais (3 tentative de connexion)
		 // dans le cas où le visiteur a atteint ses 3 essais, on doit vérifier s'il a attendu 1 minute ou pas
        if(!isset($_SESSION['t']) or
        (isset($_SESSION['t']) and (time() -$_SESSION['t']) > 60)){

          if(isset($_SESSION['t'])) session_unset();
			
		  // 3 - vérifier le nom d'utilisateur et le mot de passe
          if($_POST['nuser'] == "admin" and $_POST['pass'] == "admin"){
            echo "<p>Connected</p>";
          } else {
			// 4 - dans le cas où le visiteur ne procure pas le bon mot de passe alors on comptabilise l'essai
            echo "<p>le nom d'utilisateur ou le mot de passe est incorrect (essai ".$_SESSION["countS"].")</p>";

            if(isset($_SESSION['countS'])) $_SESSION['countS']++;
            else $_SESSION['countS'] = 1;
			// 5 - si le nombre d'essais atteint 3 alors on initialise la variable $_SESSION['t']
            if($_SESSION['countS'] == 3)
              $_SESSION['t'] = time();
          }
      }
      else echo "il faut attendre 1 minute avant de se reconnecter";  
      }
     ?>
  </body>
</html>
