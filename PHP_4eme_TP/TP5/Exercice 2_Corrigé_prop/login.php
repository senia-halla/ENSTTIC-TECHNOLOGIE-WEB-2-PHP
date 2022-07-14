<?php

	session_start();

	if( isset($_SESSION['user_id']) ){
		header("Location: youraccount.php");
	}

	require_once 'database.php';

	if(!empty($_POST['email']) && !empty($_POST['password'])):
		$email = htmlspecialchars($_POST['email']); 
		$records = $connection->prepare('SELECT id,email,password FROM users WHERE email = :email');
		$records->bindParam(':email', $email);
		$records->execute();
		$results = $records->fetch(PDO::FETCH_ASSOC);
		// var_dump($connection,$records,$results)
		// var_dump($records->rowCount())
		$message = '';
		$password = htmlspecialchars($_POST['password']);
		if( $records->rowCount() === 1 && password_verify($password, $results['password']) ){

			$_SESSION['user_id'] = $results['id'];
			$_SESSION['email'] = $results['email'];
			header("Location: youraccount.php");

		} else {
			$message = 'Sorry, those credentials do not match';
		}

	endif;

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Below</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
</head>
<body>

	<div class="header">
		<a href="index.php">Your Website</a>
	</div>

	<?php if(!empty($message)): ?>
		<p><?= $message ?></p>
	<?php endif; ?>

	<h1>Login</h1>
	<span>or <a href="register.php">register here</a></span>

	<form action="login.php" method="POST">
		
		<input type="text" placeholder="Enter your email" name="email">
		<input type="password" placeholder="and password" name="password">

		<input type="submit">

	</form>

</body>
</html>