<?php
	//error_reporting(0);
    session_start();
	$dbc=mysqli_connect("localhost","root","");
    $db='mcs';
	if(!$dbc)
		echo "Error";
	else
		echo "";
	$d=mysqli_select_db($dbc,$db);
	if($d)
		echo"";
	else
		echo"not connected";
?>  
