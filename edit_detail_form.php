<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<header>
		<h1>DumbGram</h1>
		<nav>
			<a href="add_image_form.php?user=<?php echo $_GET["user"]; ?>">Add Image Blog</a>
			<a href="add_user_form.php">Add User</a>
		</nav>
	</header>
	<div>
		<?php $id = $_GET["id"]; ?>
		<form action="edit_detail_submit.php?id=<?php echo $id ?>" method="POST">
			<?php
			$sql = "SELECT * FROM image_blog";
			$result = $conn->query($sql);

			if($result->num_rows > 0){
				while($row = $result->fetch_assoc()){
			?>
					<input type='text' name="file_image" value="<?php echo $row["file_image"] ?>" />
					<input type="text" name="title" value="<?php echo $row["title"] ?>" />
					<textarea name="content"><?php echo $row["content"] ?></textarea>
					<button type='submit' name='edit' value='true'>Edit</button>
			<?php
				}
			}
			?>
		</form>
	</div>
</body>
</html>
