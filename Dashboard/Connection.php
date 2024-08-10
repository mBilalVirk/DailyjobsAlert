<?php
	//error_reporting(0);
    session_start();
ob_start();

	$dbc=mysqli_connect("localhost","root","","mcs");
	if(!$dbc)
		echo "Error";
	
?>  
