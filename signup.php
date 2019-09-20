<?php
	require('config/config.php');
	require('config/db.php');

	// Check if user clicked the submit button
	if(isset($_POST['signup-submit']) {
		// Get Form Data
		$username = mysqli_real_escape_string($conn, $_POST['uid'];
		$email = mysqli_real_escape_string($conn, $_POST['mail'];
		$password = mysqli_real_escape_string($conn, $_POST['pwd'];
		$passwordRepeat = mysqli_real_escape_string($conn, $_POST['pwd-repeat'];
	}
?>

<!doctype html>
<html>
	<?php include 'inc/head.php'; ?>
	<body>

		<?php include 'inc/header.php' ?>

		<section class="container">
			<h2 class="display-3 mx-3">signup -></h2>

			<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" class="col-5">
				<input type="text" name="uid" placeholder="Nome" class="form-control my-1">
				<input type="text" name="mail" placeholder="E-mail" class="form-control my-1">
				<input type="password" name="pwd" placeholder="Password" class="form-control my-1">
				<input type="password" name="pwd-repeat" placeholder="Repetir password" class="form-control my-1">
				<button class="btn btn-dark" type="submit" name="signup-submit my-1">Cadastrar</button>	
			</form>

		</section>
	</body>

</html>
