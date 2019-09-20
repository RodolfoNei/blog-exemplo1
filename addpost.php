<?php
	require('config/config.php');
	require('config/db.php');

	// Check for submit
	if(isset($_POST['submit'])) {
		// Get form data
		$title = mysqli_real_escape_string($conn, $_POST['title']);
		$body = mysqli_real_escape_string($conn, $_POST['body']);
		$author = mysqli_real_escape_string($conn, $_POST['author']);

		$query = "INSERT INTO posts(title, author, body) VALUES('$title', '$author', '$body')";

		if(mysqli_query($conn, $query)) {
			header('Location: '.ROOT_URL.'');
		} else {
			echo 'ERROR: '. mysqli_error($conn);
		}
	}
?>

<!doctype html>
<html>
	<?php include('inc/head.php'); ?>

	<body>

		<?php include('inc/header.php'); ?>

		<section class="container">

			<h2 class="display-3">add post -></h2>

			<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
				<div class="form-group">
					<label>Título:</label>
					<input type="text" name="title" class="form-control">
				</div>
				<div class="form-group">
					<label>Autor:</label>
					<input type="text" name="author" class="form-control">
				</div>
				<div class="form-group">
					<label>Texto:</label>
					<textarea name="body" class="form-control"></textarea>
				</div>
				<input type="submit" name="submit" value="Submit" class="btn btn-primary">
			</form>

		</section>
	</body>
</html>


