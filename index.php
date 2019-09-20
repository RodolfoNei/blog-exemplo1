<?php
	require('config/config.php');
	require('config/db.php');

	// Create Query	
	$query = 'SELECT * FROM posts ORDER BY create_at DESC';

	// Get Result
	$result = mysqli_query($conn, $query);
	
	// Fetch Data
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);	

	// Free Result
	mysqli_free_result($result);
	
	// Close Connection
	mysqli_close($conn);
?>

<!doctype html>
<html>
	<?php include 'inc/head.php'; ?>
	<body>
		
		<?php include 'inc/header.php'; ?>

		<section class="container">
			
			<h2 class="display-3 bg-info text-white p-2">posts -></h2>
			<hr>
			<?php foreach($posts as $post) : ?>
				<div class="well">
					<h3 class="display-4"><?php echo $post['title']; ?></h3>
					<p><small>Created on <?php echo $post['create_at']; ?> by <?php echo $post['author']; ?></small></p>
					<a class="btn btn-info" href="<?php echo ROOT_URL; ?>post.php?id=<?php echo $post['id']; ?>">Read More</a>
				</div>
				<hr>					
			<?php endforeach; ?>
				
		</section>
		
	</body>
</html>
