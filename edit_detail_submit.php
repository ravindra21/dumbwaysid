<?php
include('./connection.php');
$id = $_GET["id"];
$title = $_POST['title'];
$content = $_POST['content'];
$file_image = $_POST['file_image'];

$sql = "UPDATE image_blog SET title='$title' content='$content' file_image='$file_image' WHERE id=$id";
if($conn->query($sql) === TRUE){
	echo "image update successfully";
} else{
	echo "error: ".$sql.'<br>'.$conn->error;
}

$conn->close();
?>
