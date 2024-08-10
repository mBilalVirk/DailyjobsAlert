<?php
	require("Connection.php");
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
	<div id="formcreate">
	   <form method="POST"  enctype="mutlipart/form-data">
					<h1 Style="color:white;">Create Account</h1>
					<table>
						<tr>
							<td><input type="text" placeholder="First name:" name="fname" required="required"> </td>
						</tr>
						<tr>
							<td><input type="text" placeholder="Last name:" name="lname" required="required"> </td>
						</tr>
						<tr>
							<td><input type="email" placeholder="Email:" name="email" required="required"> </td>
						</tr>
						
						<tr>
							<td>
							<select name="Ccode" class="" id="specificSizeSelect" required="required">
								<option value="+92">+92
								<option value="+91">+91
								<option value="+11">+11
								<option value="*96">*96
							</select>
						</td>
						</tr>
						<tr>
							<td><input type="number" placeholder="Phone:" name="phone" required="required"> </td>
						</tr>
						<tr>
							<td><input type="password" placeholder="Password:" name="Password" required="required"> </td>
						</tr>
						<tr>
							<td><input type="password" placeholder="Re-Enter Password:" name="Rpasword" required="required"> </td>
						</tr>
						<tr>
							<td>
								<span style="color:white; font-family:Verdana, Arial, Helvetica, sans-serif">Gender:</span>  
								<span style="color: white; font-family:Verdana, Arial, Helvetica, sans-serif">Male:</span>
								<input type="radio" name="gender" Value="Male" required="required"> 
								<span style="color:white; font-family:Verdana, Arial, Helvetica, sans-serif">Female:</span>
								<input type="radio" name="gender" Value="Female" required="required">
							</td>
						</tr>
						<tr>
							<td>
								<span style="color:white; font-family:Verdana, Arial, Helvetica, sans-serif">Date-of-birth:</span>
								<input type="date" name="bdate"required="required">
							</td>
						</tr>
						
						<tr>
							<td>
								<a href=""><input type="submit" value="Create Account" name="submit"></a>
							</td>
						</tr>
					</table>
				</form><!-- end of form -->
        <div id="msg" >
								 	<?php
										 if(isset($_POST['submit']))
											{	
												//echo "im pressed";
												$fname=$_POST['fname'];
											 	$lname=$_POST['lname'];
											 	$email=$_POST['email'];
											 	$ccode=$_POST['Ccode'];
											 	$phone=$_POST['phone'];
											 	$Password=$_POST['Password'];
											 	$Rpasword=$_POST['Rpasword'];
											 	$gender=$_POST['gender'];
											 	$bdate=$_POST['bdate'];
												 
                                                //$r=mysqlI_query($dbc,"INSERT INTO loginid(`Email`, `Password`) VALUES('$email','$Password')");
                                             

              if ($Password === $Rpasword) {
                

                $validate = "SELECT * FROM account WHERE email = '$email' ";
                $validate = mysqli_query($dbc, $validate);
                if (mysqli_num_rows($validate)) {
                  
                  echo "<script>alert('Please Change your Email this is already exist');</script>";

                }else{

                  $register = "INSERT INTO account(`fname`, `lname`, `email`,`Ccode`,`Phone`, `password`, `re-password`, `gender`, `date-of-birth`, `img`) 
				  VALUES('$fname','$lname','$email','$ccode','$phone','$Password','$Rpasword','$gender','$bdate','$filename')";
                  $register = mysqli_query($dbc, $register);
                  if ($register) {
                    echo "<p class='alert alert-info'>Your Account has been Registered.</p>";
                  }

                }




              }else{

                echo "Error: " . $register . "<br>" . mysqli_error($dbc);

                echo "<p class='alert alert-warning'>Password and Confirm Password not Matched</p>";

              }




            }


            ?>
								 	
								 
								 </div>
    </div>
    </div>

	
</body>
</html>
