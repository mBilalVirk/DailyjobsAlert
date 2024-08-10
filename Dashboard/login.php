<?php
    require('Connection.php');
    
?>
<html>
	<head>
		<title>
			 Dashboard| login
		</title>
		<link href="Style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div id="wrapper">
			<div id="nav">
				<div id="title">
					
				</div><!-- end of title -->
				<div id="manu">
					
					
				</div><!-- end of manu -->
				<div id="manu1">
					
				</div><!-- end of manu1 -->
			</div><!-- end of nav -->
			<div id="page_body">
				<div id="side_manu">
					<div id="side_manus">
						<div id="side_manus">
						
					</div><!-- end of side_manus -->
					</div><!-- end of side_manus -->	
				</div><!-- end of side_manu -->
				<div id="main_body">
					<div id="dash">
						<div id="dash_a"><a href="dash.php"><h1>DASHBOARD</h1></a></div><!-- end of dash_a -->
						<div id="space">
					
					</div><!-- end of space -->
						<div id="home">
							
						</div><!-- end of home -->
					</div><!-- end of dash -->
					<div id="dash_body">
						<div id="LogIn">
							<h1>Log In</h1>
                    	<form method="POST" action="">
                        	<table>
                            	<tr>
                                	<td><span>Enter id:</span></td>
                                	<td><input type="text" name="admin" required="required"></td>
                            	</tr>
                            	<tr>
                                	<td><span>Enter password:</span></td>
                                	<td><input type="password" name="password" required="required" ></td>
                            	</tr>
                            	<tr>
                                	<td></td>
									<td><input type="submit" name="Login" onmousedown="" value="login"></td>
                            	</tr>
								<tr>
                                	<td></td>
									<td><a href="#">Forget Password</a></td>
                            	</tr>
                        </table>
                	</form>
						</div>
						
						
						
					</div><!-- end of dash_body -->
					
					
					
					
				</div><!-- end of main_body -->
			</div><!-- end of nav -->
			<div id="footer">
				<a href="#">About Us</a> | <a href="#">Contact Us</a> | <a href="#">More</a>
			</div><!-- end of footer -->
		</div><!-- end of wrapper -->
		
	</body>
	
	
	
	<?php
	

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
            $_SESSION['admin']=$admin;
		      header('location:dash.php');
		}
        else
        {
        
        echo "<script>alert('Incorrect Password:');</script>";
        
        }
    
								 	
}
?>
</html>	