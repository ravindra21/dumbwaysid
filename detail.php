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
		<?php
			include('./connection.php');
			$id = $_GET['id'];
			$user_id = $_GET['user_id'];
		?>
		<?php if($_GET["user"] == $_GET["user_id"]) { ?>
			<a href="edit_detail_form.php?user=<?php echo $_GET["user"]; ?>&id=<?php echo $id ?>">Edit</a>
			<a href="delete_detail.php?user=<?php echo $_GET["user"]; ?>&id=<?php echo $id ?>">Delete</a>
		<?php } ?>
		<?php
		$sql = "SELECT * FROM image_blog";
		$result = $conn->query($sql);

		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){ 
				$sql = "SELECT name FROM user where id = $row[user_id]";
				$result = $conn->query($sql);
				$row = $result->fetch_row();
				$name = $row[0];
		?>
				<img src="<?php echo $row["file_image"] ?>" />
				<h3><?php echo $row["title"] ?></h3>
				<h4>by : <?php echo $name ?></h4>
				<p><?php echo $row["content"] ?></p>
		<?php
			}
		}
		?>
	</div>
</body>
</html>
