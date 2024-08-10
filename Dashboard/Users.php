<?php
    require('Connection.php');
    include('valide.php');
    if(isset($_SESSION['admin'])==true)
        $user = $_SESSION['admin'];
?>
<html>
	<head>
		<title>
			 Dashboard | Register Users
		</title>
		
		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
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
						
						<div id="home">
							
								<h6 style="float: left;color:#5BC2E7;">Users</h6>
								<h6 style="float: left">/</h6>
								<h6 style="float: left;text-transform:uppercase; margin-right:20px "><?php echo"$user";?></h6>
							
						</div><!-- end of home -->
					</div><!-- end of dash -->
					<div id="dash_body">
						
				<div id="Form">
					<h1 style="">Register Users</h1>
					    <table class="table table-dark table-striped table-responsive-xxl container-fluid" style="width:100%">
					            <th>First Name</th>
					            <th>Last Name</th>
					            <th>Email</th>
					            <th>Password</th>
					            <th>Gander</th>
					            <th>Date of Birth</th>
					            <tr>
                                
                                <?php
                                    $sql="SELECT * FROM `account`";
                                    $result= mysqli_query($dbc,$sql);
                                    while($row=mysqli_fetch_array($result)){
                                ?>
					                <td><?php echo $row['fname'];?></td>
					                <td><?php echo $row['lname'];?></td>
					                <td><?php echo $row['email'];?></td>
					                <td><?php echo $row['password'];?></td>
					                <td><?php echo $row['gender'];?></td>
					                <td><?php echo $row['date-of-birth'];?></td>
					               
					                
					            </tr>
					            <?php }?>
					        
					    </table>
				</div><!-- end of Form -->
				 
					</div><!-- end of dash_body -->
					
				</div><!-- end of main_body -->
			</div><!-- end of nav -->
			<div id="footer">
				<a href="#">About Us</a> | <a href="#">Contact Us</a> | <a href="#">More</a>
			</div><!-- end of footer -->
		</div><!-- end of wrapper -->
		
	</body>
</html>	