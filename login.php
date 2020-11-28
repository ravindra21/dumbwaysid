<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
include('./connection.php');
$sql = 'select * from user';
$result = $conn->query($sql);
if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){ ?>
		<div>
			<h3>
			<a href="./index.php?user=<?php echo $row["id"]; ?>"> <?php echo $row["name"]; ?></a>
			</h3>
		</div>	
<?php	
	}
}
?>

</body>
</html>
