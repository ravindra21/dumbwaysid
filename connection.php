<?php
$server = 'localhost';
$username = 'root';
$pass = 'root';
$db = 'dumbgram';
$conn = new mysqli($server, $username, $pass, $db);

if($conn->connect_error){
	die('error connection to db'.$conn->connect_error);
}

?>