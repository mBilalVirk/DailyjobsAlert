<?php
	include("Connection.php");

if(isset($_POST['Login']))
    {	
        $login = false;
        $admin = $_POST['admin'];
		$password =  $_POST['password'];
        $sql = " SELECT * FROM `adminlogin` WHERE `Admin _name` = '$admin' AND `Admin_password` = '$password';";	
        $q=mysqli_query($dbc, $sql);
        $row = mysqli_num_rows($q);
        if($row==1)
        {   
            
            $login = true;
            $_SESSION['admin']='$admin';
		      header('location:dash.php');
		}
        else
        {
        
        echo "<script>alert('Incorrect Password:');</script>";
            
        header('location:login.php');
             
        }
    
								 	
}
?>
