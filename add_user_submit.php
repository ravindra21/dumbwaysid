<?php
include('./connection.php');
$name = $_POST['name'];
$email = $_POST['email'];

$sql = "INSERT INTO user('name','email') VALUES('$name','$email')";
if($conn->query($sql) === TRUE){
	echo "new image added successfully";
} else{
	echo "error: ".$sql.'<br>'.$conn->error;
}

$conn->close();
?>