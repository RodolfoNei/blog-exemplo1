<?php
	require('config/config.php');
	require('config/db.php');

	// Check for Delete Submit
	if(isset($_POST['delete'])) {
		// Get Post Data
		$delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']);

		$query = "DELETE FROM posts WHERE id = {$delete_id}";

		if(mysqli_query($conn, $query)) {
			header('Location: '.ROOT_URL.'');
		} else {
			echo 'ERROR: '. mysqli_error($conn);
		}

	}


	// Get Id
	$id = mysqli_real_escape_string($conn, $_GET['id']);

	// Create Query
	$query = 'SELECT * FROM posts WHERE id ='.$id;

	// Get Result
	$result = mysqli_query($conn, $query);

	// Fetch Data
	$post = mysqli_fetch_assoc($result);

	// Free Result
	mysqli_free_result($result);

	// Close Connection
	mysqli_close($conn);
?>

<!doctype html>
<html>
	<?php include 'inc/head.php' ?>
	<body>

		<?php include 'inc/header.php' ?>

		<section class="container">
			<h2><?php echo $post['title']; ?></h2>
			<p><?php echo $post['body']; ?></p>
			<p><small><i>Escrito por <?php echo $post['author']; ?></i></small></p>

			<form class="float-right" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<input type="hidden" name="delete_id" value="<?php echo $post['id']; ?>">
				<input type="submit" name="delete" value="Delete" class="btn btn-danger">
			</form>
			<a href="<?php echo ROOT_URL; ?>editpost.php?id=<?php echo $id ?>" class="btn btn-primary">Editar</a>

		</section>

	</body>

</html>

