<?php

	session_start();

	if( isset($_SESSION['user_id']) ){
		header("Location: /");
	}

	require_once 'database.php';

	$message = '';

	if(!empty($_POST['email']) && !empty($_POST['password'])):
		$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
		if(filter_var($email, FILTER_VALIDATE_EMAIL)){		
		
			// check if the email exist in the database
			$sql = "SELECT email FROM users WHERE email = :email";
			$stmt = $connection->prepare($sql);
			$stmt->bindParam(':email', $email);
			$stmt->execute();
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
			if($row != null){
				$message = 'Sorry email already exists';
			} else {
				$password = htmlspecialchars($_POST['password']);
				// Enter the new user in the database
				$sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
				$stmt = $connection->prepare($sql);

				$stmt->bindParam(':email', $email);
				$passwordHash = password_hash($password, PASSWORD_BCRYPT);
				$stmt->bindParam(':password', $passwordHash);

				if( $stmt->execute() ):
					$message = 'Successfully created new user';
				else:
					$message = 'Sorry there must have been an issue creating your account';
				endif;
			}

		} else {
			$message = 'Sorry your email is invalid';
		}

	endif;

?>

<!DOCTYPE html>
<html>
<head>
	<title>Register Below</title>
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

	<h1>Register</h1>
	<span>or <a href="login.php">login here</a></span>

	<form action="register.php" method="POST">
		
		<input type="text" placeholder="Enter your email" name="email">
		<input type="password" placeholder="and password" name="password">
		<input type="password" placeholder="confirm password" name="confirm_password">
		<input type="submit">

	</form>

</body>
</html>