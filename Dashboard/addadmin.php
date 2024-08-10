<?php
    require('Connection.php');
    include('valide.php');
    if(isset($_SESSION['admin'])==true)
        $user = $_SESSION['admin'];
?>
<html>
	<head>
		<title>
			 Dashboard| Add new Admin
		</title>
		<link href="Style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div id="wrapper">
			<div id="nav">
				<div id="title">
					<a href="#"><img src="img/web-admin.png"  height="30px" width="30px" style="float: left;margin-left: 20px; margin-top: 5px;margin-right: 5px;"> <h1>Admin</h1></a>
				</div><!-- end of title -->
				<div id="manu">
					<a href="#">
						<img src="img/white_menu_icon.gif" height="40px" width="40px" style="float: left;margin-left: 20px; margin-top: 5px;margin-right: 5px;line-height: 50px;">
					</a>
					
                    
					   <form style="margin-top:0;" method="POST" >
                       
                          <input type="submit" name="logout" onmousedown="" value="LOG OUT">
				        </form>
                     <?php
                        if(isset($_POST['logout']))
                        {
                            session_destroy();
                            header("login.php");
                        }
                    ?>
                    
				</div><!-- end of manu -->
				<div id="manu1">
					
				</div><!-- end of manu1 -->
			</div><!-- end of nav -->
			<div id="page_body">
				<div id="side_manu">
					<div id="side_manus">
						
						<a href="dash.php"><img src="img/home.png">   Dashboard</a>
					</div><!-- end of side_manus -->
					<div id="side_manus">
						<a href="/daily/index.php" target="_blank">Website</a>
					</div><!-- end of side_manus -->
					<div id="side_manus">
						<a href="postjob.php">Post New Job</a>
					</div><!-- end of side_manus -->
					<div id="side_manus">
						<a href="Updatejob.php">Update Jobs</a>
					</div><!-- end of side_manus -->
					<div id="side_manus">
						<a href="Jobstable.php">Jobs Table</a>
					</div><!-- end of side_manus -->
					<div id="side_manus">
						<a href="addadmin.php">Add New Admin</a>
					</div><!-- end of side_manus -->
					<div id="side_manus">
						<a href="Users.php">Register Users</a>
					</div><!-- end of side_manus -->
                    <div id="side_manus">
						<a href="Application.php">Application</a>
					</div><!-- end of side_manus -->
					
				</div><!-- end of side_manu -->
				<div id="main_body">
					<div id="dash">
						<div id="dash_a"><a href="#"><h1>DASHBOARD</h1></a></div><!-- end of dash_a -->
						<div id="space">
					
					</div><!-- end of space -->
						<div id="home">
							<h3 style="float: left;color:#5BC2E7;">NewAdmin</h3><h3 style="float: left">/</h3><h3 style="float: left;text-transform:uppercase; margin-right:20px"><?php echo"$user";?></h3>
								
						</div><!-- end of home -->
					</div><!-- end of dash -->
					<div id="dash_body">
						<div id="Form">
                   			<h1>ADD NEW ADMIN</h1>
                    	
                            <form method="POST" action="">
                        	<table>
                            	<tr>
                                	<td><span>Enter New Admin Name:</span></td>
                                	<td><input type="text" name="Name" required="required"></td>
                            	</tr>
                            	<tr>
                                	<td><span>Enter new Admin Password:</span></td>
                                	<td><input type="password" name="password" required="required" ></td>
                            	</tr>
                            	<tr>
                                	<td></td>
									<td><input type="submit" name="addadmin" onmousedown="" value="ADD"></td>
                            	</tr>
								
                        </table>
                	</form>
                            <?php
										 if(isset($_POST['addadmin']))
											{	
												//echo "im pressed";
												$Name=$_POST['Name'];
												$pass=$_POST['password'];
												$q=mysqli_query($dbc,"INSERT INTO adminlogin(`Admin _name`, `Admin_password`) VALUES ('$Name','$pass')");
                                             if($q)
										          {
										              echo "<script>alert('Admin Add successfully');</script>";
										          }
											}
								 	
										
								 	
								 ?>
                </div><!-- end of addtform -->
					</div><!-- end of dash_body -->
					
				</div><!-- end of main_body -->
			</div><!-- end of nav -->
			<div id="footer">
				<a href="#">About Us</a> | <a href="#">Contact Us</a> | <a href="#">More</a>
			</div><!-- end of footer -->
		</div><!-- end of wrapper -->
		
	</body>
</html>	