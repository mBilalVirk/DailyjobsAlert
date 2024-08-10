<?php
    require('Connection.php');
    include('valide.php')
?>
<html>
	<head>
		<title>
            Dashboard| Update Jobs
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
							
								
						
						</div><!-- end of home -->
					</div><!-- end of dash -->
					<div id="dash_body">
                        <?php
                             $id=$_REQUEST['id'];
							 if($id==true){
                             $sql="SELECT * FROM `jobs` WHERE `ID` = '$id'";
                             $result= mysqli_query($dbc,$sql);
                             $row=mysqli_fetch_array($result);
                            ?>
							<div id="Form">
                    <h1>Update jobs</h1>
                   <form method="POST" action="">
                        	<table>
                            	<tr>
                                	<td><span>Enter Job Title:</span></td>
                                	<td><input type="text" name="Title" required="required" value="<?php echo $row['Title'];?>"></td>
                            	</tr>
                                	<tr>
                                	<td><span>Enter Job Category:</span></td>
									<td><SELECT name="Category" required="required">
										<option value="Human Resources">Human Resuources
										<option value="Teacher">Teacher
										<option value="Customer Service">Customer Service
										<option value="Finance">Finance
										<option value="Engineering">Engineering
										<option value="Computer Programmer">Computer Programmer
										<option value="Operations Management">Operations Management
									</SELECT></td>
                            	</tr>
								<tr>
                                	<td><span>Enter Job Description:</span></td>
                                	<td><textarea type="text" name="Description" required="required"  cols="33" rows="5" > <?php echo $row['Description'];?></textarea></td>
                            	</tr>
                            	<tr>
                                	<td><span>Enter Job Salary:</span></td>
                                	<td><input type="text" name="Salary" required="required" value="<?php echo $row['Salery'];?>"></td>
                            	</tr>
                            	<tr>
                                	<td><span>Enter Job Location:</span></td>
                                	<td><input type="text" name="Location" required="required" value="<?php echo $row['Location'];?>"></td>
                            	</tr>
                            	<tr>
                                	<td></td>
									<td><input type="submit" name="Update" onmousedown="" value="Update Job"></td>
                            	</tr>
								<tr>
                                	<td></td>
									<td><a href="#"></a></td>
                            	</tr>
                        </table>
                	</form>
                	
                	<?php
										 if(isset($_POST['Update']))
											{	
												//echo "im pressed";
												$title=$_POST['Title'];
												$Category=$_POST['Category'];
												$des=$_POST['Description'];
												$sal=$_POST['Salary'];
												$loc=$_POST['Location'];
                                                $sql="UPDATE `jobs` SET `Title`='$title',`Categories`='$Category',`Description`='$des',`Salery`='$sal',`Location`='$loc' WHERE `ID`='$id'";
												$q=mysqli_query($dbc,$sql);
                                             if($q)
										          {
										              echo "<script>alert('Update Seccessfully');</script>";
                                                        header('location:Jobstable.php');
										          }
											}
								 	
										
								 	
								 ?>
                	
                	
							 </div><!-- end of Form --><?php }
								else
									{
										echo "<script>alert('Update Seccessfully');</script>";
                                        header('location:Jobstable.php');
									}
							 ?>
					</div><!-- end of dash_body -->
					
				</div><!-- end of main_body -->
			</div><!-- end of nav -->
			<div id="footer">
				<a href="#">About Us</a> | <a href="#">Contact Us</a> | <a href="#">More</a>
			</div><!-- end of footer -->
		</div><!-- end of wrapper -->
		
	</body>
</html>	