<?php
include('./connection.php');
$title = $_POST['title'];
$content = $_POST['content'];
$file_image = $_POST['file_image'];
$user_id = $_POST['user_id'];

$sql = "INSERT INTO image_blog('title','content','file_image','user_id') VALUES('$title','$content','$file_image','$user_id')";
if($conn->query($sql) === TRUE){
	echo "new image added successfully";
} else{
	echo "error: ".$sql.'<br>'.$conn->error;
}

$conn->close();
?>
