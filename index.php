<?php
 if($_GET['user'] > 0) {
 	include('./home.php');
 } else {
 	include('./login.php');
 } 
?>