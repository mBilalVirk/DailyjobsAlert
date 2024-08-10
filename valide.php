<?php


$user_id = $_SESSION['id'];

if (!isset($user_id)) {
	header("Location: login.php");
}
