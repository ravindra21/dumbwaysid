<?php
include('./connection.php');
$id = $_GET['id'];

$sql = "delete from image_blog where id = $id";

if($conn->query($sql) === TRUE){
	echo "image deleted successfully";
} else{
	echo "error: ".$sql.'<br>'.$conn->error;
}

$conn->close();
?>