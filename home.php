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
	<?php
		include('./connection.php');
		$sql = "SELECT * FROM image_blog";
		$result = $conn->query($sql);
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){ 
				$sql = "SELECT name FROM user where id = $row[user_id]";
				$result = $conn->query($sql);
				$row = $result->fetch_row();
				$name = $row[0];
		?>
				<div>
					<img src="<?php echo $row["file_image"] ?>">
					<h3><?php echo $row["title"] ?></h3>
					<h4><?php echo $name ?></h4>
					<a href="./detail.php?user_id=<?php echo $row["user_id"]; ?>user=<?php echo $_GET["user"]; ?>&id=<?php echo $row["id"] ?>">View Detail</a>
				</div>
	<?php	}
		}
	?>
</body>
</html>
