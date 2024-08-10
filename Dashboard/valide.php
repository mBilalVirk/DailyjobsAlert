<?php 


$admin = $_SESSION['admin'];

if (!isset($admin)) {
	header("Location: login.php");
}



?>