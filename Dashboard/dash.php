<?php
    require('Connection.php');
    include('valide.php');
    if(isset($_SESSION['admin'])==true)
        $user = $_SESSION['admin'];
?>
<html>
	<head>
		<title>
			 Dashboard | index
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
                                <img src="img/white_menu_icon.gif" height="40px" width="40px" style="float: left;margin-left: 20px; margin-top: 5px;margin-right: 5px;line-height: 50px;"></a>
                    
					   <form style="margin-top:0;" method="post" >
                       
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
							
								<h3 style="float: left;color:#5BC2E7;">Home</h3><h3 style="float: left">/</h3><h3 style="float: left;text-transform:uppercase; margin-right:20px"><?php echo"$user";?></h3>
							
						</div><!-- end of home -->
					</div><!-- end of dash -->
					<div id="dash_body">
						
					<a href="Users.php">
							<div id="visiter">
								<h3>Total Users:</h3>
								<img src="img/website-webpage-visitor-male-optimization-seo-calculation-3551daabbd8abc46-192x192.png">
								<h3>
								<?php 
									$q=mysqli_query($dbc,"SELECT email FROM `account` email;");
									$row = mysqli_num_rows($q);
									echo"$row";
								?></h3>
							</div><!-- end of visiter -->
						
						</a>
						<a href="Jobstable.php">
							<div id="perchases">
								<h3>Total Jobs:</h3>
								<img src="img/care_hand_health_healthy_heart_help_nurture-512.png">
								<h3>
								<?php 
									$q=mysqli_query($dbc,"SELECT ID FROM `jobs` ID;");
									$row = mysqli_num_rows($q);
									echo"$row";
								?></h3>

							</div><!-- end of perchases -->
						</a>
						<a href="#">
							<div id="active_user">
								<h3>Total Admin:</h3>
								<img src="img/MultiUserIcon.png">

								<h3>
								<?php 
									$q=mysqli_query($dbc,"SELECT Admin_password FROM `adminlogin` Admin_password;");
									$row = mysqli_num_rows($q);
									echo"$row";
								?></h3>
							</div><!-- end of active_user -->
						</a>
						<a href="Application.php">
							<div id="return">
								<h3>Application:</h3>
								<img src="img/refund-2.png">

								<h3>
								<?php 
									$q=mysqli_query($dbc,"SELECT ID FROM `application` ID;");
									$row = mysqli_num_rows($q);
									echo"$row";
								?></h3>


							</div><!-- end of return -->
						</a>
						<a href="#">
							<div id="acqusition">
								<img src="img/Customer-Acquisition-Channels-for-PowerPoint.jpg">
							</div><!-- end of acqusition -->
						</a>
						<a href="#">
							<div id="user_country">
								<img src="img/wmsn_animated_1024.gif">
							</div><!-- end of user_country -->
						</a>
						<a href="#">
							<div id="revenue">
								<img src="img/online-ad-revenue.gif">
							</div><!-- end of revenue -->
						</a>


					</div><!-- end of dash_body -->
					
				</div><!-- end of main_body -->
			</div><!-- end of nav -->
			<div id="footer">
				<a href="#">About Us</a> | <a href="#">Contact Us</a> | <a href="#">More</a>
			</div><!-- end of footer -->
		</div><!-- end of wrapper -->
		
	</body>
</html>	