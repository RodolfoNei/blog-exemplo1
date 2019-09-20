<?php
	require('config/config.php');
	require('config/db.php');
?>

<!doctype html>
<html>
	<?php include 'inc/head.php'; ?>
	<body>

		<?php include 'inc/header.php' ?>

		<section class="container">
			<h2 class="display-3 mx-3">login -></h2>

			<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" class="col-5">
				<div class="form-group">
					<input type="text" name="username" class="form-control" placeholder="Username">
				</div>
				<div class="form-group">
					<input type="password" name="pwd" class="form-control" placeholder="Password">
				</div>
				<input type="submit" name="submit" value="Submit" class="btn btn-primary">
			</form>

			<div class="text-right">
				<p class="d-inline">Ainda não é registrado?</p>
				<a href="signup.php">Cadastre-se!</>
			</div>

		</section>
	</body>

</html>

