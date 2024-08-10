<?php
	require("Connection.php");
    if(isset($_SESSION['id'])==true)
	$user_id = $_SESSION['id'];
        
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>Daily job Alert | SignIn</title>
<link href="Style.css" rel="stylesheet" type="text/css" />
<meta name="viewport" content="width=device-width", initial-scale=1.0>
</head>

<body>
	<div id="wrapper">
	<?php include("nav.php") ?>
        	<div id="heading">
		  <img src="img/video-banner-img.png" height="150px" style="float:left;"/>
		  <h1 style="color:#FFFFFF; line-height:100%; font-size:100px">Daily Job Alert</h1>
	    </div><!-- end of heading-->
		<div id="msg" >
								 	<?php
										 if(isset($_REQUEST['submit']))
											{	
												//echo "im pressed";
												$fname=$_REQUEST['fname'];
											 	$lname=$_REQUEST['lname'];
											 	$email=$_REQUEST['email'];
											 	$ccode=$_REQUEST['Ccode'];
											 	$phone=$_REQUEST['phone'];
											 	$Password=$_REQUEST['Password'];
											 	$Rpasword=$_REQUEST['Rpasword'];
											 	$gender=$_REQUEST['gender'];
											 	$bdate=$_REQUEST['bdate'];
              if ($Password === $Rpasword) 
			  {
        
				$sql = "UPDATE `account` SET `fname`='$fname',`lname`='$lname',`email`='$email',`Ccode`='$ccode',`Phone`='$phone',`password`='$Password',`re-password`='$Rpasword',`gender`='$gender',`date-of-birth`='$bdate' 	WHERE `email`='$user_id'";
					$sq = mysqli_query($dbc, $sql);
                  if ($sq) 
				  {
                    echo "<p class='alert alert-info'>Your Account has been Updated.</p>";
                  }
				  else {
					  {
						echo "<p class='alert alert-info'>Error</p>";  
					  }
				  }
				}
			}
            ?>
								 	
								 
			</div>
	<div id="formcreate">
		<?php
			 $sq = "SELECT * FROM `account` WHERE `email`='$user_id';";
			 $rslt= mysqli_query($dbc, $sq);
			 $rw=mysqli_fetch_array($rslt);
		?>
	   <form method="post">
					<h1>Update Profile</h1>
					<table>
						<tr>
							<td><input type="text" value="<?php echo $rw['fname'];?>" name="fname"> </td>
						</tr>
						<tr>
							<td><input type="text" value="<?php echo $rw['lname'];?>"  name="lname"> </td>
						</tr>
						<tr>
							<td><input type="email" value="<?php echo $rw['email'];?>"  name="email"> </td>
						</tr>
						<tr>
							<td>
							<select name="Ccode" class="" id="specificSizeSelect">
								<option value="+92">+92
								<option value="+91">+91
								<option value="+11">+11
								<option value="*96">*96
							</select>
						</td>
						</tr>
						<tr>
							<td><input type="number" value="<?php echo $rw['Phone'];?>"  name="phone"> </td>
						</tr>
						<tr>
							<td><input type="password" placeholder="Password:" name="Password"> </td>
						</tr>
						<tr>
							<td><input type="password" placeholder="Re-Enter Password:" name="Rpasword"> </td>
						</tr>
						<tr>
							<td>
								<span style="color:white; font-family:Verdana, Arial, Helvetica, sans-serif">Gender:</span>  
								<span style="color: white; font-family:Verdana, Arial, Helvetica, sans-serif">Male:</span>
								<input type="radio" name="gender" Value="Male"> 
								<span style="color:white; font-family:Verdana, Arial, Helvetica, sans-serif">Female:</span>
								<input type="radio" name="gender" Value="Female">
							</td>
						</tr>
						<tr>
							<td>
								<span style="color:white; font-family:Verdana, Arial, Helvetica, sans-serif">Date-of-birth:</span>
								<input type="date" name="bdate">
							</td>
						</tr>
						<tr>
							<td>
								<a href=""><input type="submit" value="Update Account" name="submit"></a>
							</td>
						</tr>
					</table>
				</form><!-- end of form -->
        

    </div>
    </div>

	
</body>
</html>
