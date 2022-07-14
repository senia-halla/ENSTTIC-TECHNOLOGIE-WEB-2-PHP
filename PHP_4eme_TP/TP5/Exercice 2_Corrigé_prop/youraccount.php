<?php
  session_start();
  if(!isset($_SESSION["user_id"]))
	  header('location:index.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Welcome to your account</title>
  </head>
  <body>
  <?php
    $userEmail = $_SESSION['email'];
    echo "<h1>Welcom $userEmail</h1>";
  ?>
  <h3><a href="logout.php">Logout</a></h3>
  </body>
</html>