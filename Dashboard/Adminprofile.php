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
        <!-- Bootstrap CSS -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
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
							
								<h3 style="float: left;color:#5BC2E7;">Profi</h3><h3 style="float: left">/</h3><h3 style="float: left;text-transform:uppercase; margin-right:20px"><?php echo"$user";?></h3>
							
						</div><!-- end of home -->
					</div><!-- end of dash -->
					<div id="dash_body">
						
					<div id="Profile" class="container bg-dark">
            <h1 style="color:#fff">Profile</h1>
        <div class="container ">
            <table class="table table-light">
        <tr>
			<td rowspan="9" style="text-align:center">
            <img src="img/web-admin.png" style="width=120px;height: 180px;"class="rounded-circle img-responsive" alt="...">
            <br><input type="submit" value="Change Image" class="btn btn-primary"/>
            
            </td>
			</tr>
			<tr>
				<td style=""><h6>Name:</h6><span style="float:left;"></span></td>
			</tr>
			<tr>
				<td style=""><h6>Email Address:</h6><span></span></td>
			</tr>
			<tr>
				<td style=""><h6>Phone number:</h6><span>03481287526</span></td>
			</tr>
			<tr>
				<td style=""><h6>Gender:</h6><span></span></td>
			</tr>
			<tr>
				<td  style=""><h6>Date of birth:</h6><span></span></td>
			</tr>
			<tr>
				<td style=""><h6>Other:</h6></td>
			</tr>
			<tr>
				<td style="" colspan="2"><input type="submit" value="Update Profile" class="btn btn-primary"/></td>
			</tr>
		
	  </table>

        </div>

        </div>

					</div><!-- end of dash_body -->
					
				</div><!-- end of main_body -->
			</div><!-- end of nav -->
			<div id="footer">
				<a href="#">About Us</a> | <a href="#">Contact Us</a> | <a href="#">More</a>
			</div><!-- end of footer -->
		</div><!-- end of wrapper -->
		
	</body>
</html>	