<?php 

include("Connection.php");
session_destroy();
header("Location: login.php");


?>