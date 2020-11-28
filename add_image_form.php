<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<header>
		<h1>DumbGram</h1>
		<nav>
			<a href="add_user_form.php">Add User</a>
		</nav>
	</header>
	<div>
		<form action="add_image_submit.php" method="POST">
			<input type='text' name="file_image" placeholder="image url..." />
			<input type='hidden' name="user_id" value="<?php echo $_GET["user"] ?>" />
			<input type="text" name="title" placeholder="image title.." />
			<textarea name="content" placeholder="your content here..."></textarea>
			<button type='submit' name='edit' value='true'>Add Image</button>
		</form>
	</div>
</body>
</html>
