<header class="container">
	<div>
		<h1 class="display-1">my blog</h1>
		<p class="lead">Olá, seja bem-vindo</p>
	</div>
	<div class="text-right">
		<a class="btn btn-dark btn-lg" href="login.php" role="button">Login</a>
		<a class="btn btn-dark btn-lg" href="addpost.php" role="button">Add Post</a>
		<a class="btn btn-info btn-lg" href="<?php echo ROOT_URL; ?>" role="button">Home</a>
		<form action="inc/logout.php" method="POST">
			<button type="submit" name="logout-submit" class="btn btn-danger my-2">Logout</button>
		</form>
	</div>
	<hr>
</header>

