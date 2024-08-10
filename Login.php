<?php
	require("Connection.php");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>Daily job Alert | Login</title>
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
	<div id="pbody">
        <div id="Form" style="display: flex;justify-content: center;align-items: center;flex-direction: column;">
					<h1 style="color:#FFFFFF; display:block; align:center;">Log In</h1>
                    <form action="logincheck.php" method="POST">
                        <table>
                            <tr>
                                <td><span>Enter id:</span></td>
                                <td><input type="text" name="id" required="required"></td>
                            </tr>
                            <tr>
                                <td><span>Enter password:</span></td>
                                <td><input type="password" name="password" required="required" ></td>
                            </tr>
                            <tr>
                                <td>
                                    
                                
                                </td>
								<td><input type="submit" name="submit" onmousedown="" value="logIn"></td>
                            </tr>
							<tr>
                                <td><a href="Dashboard/login.php">Admin LogIn</a></td>
								<td><a href="#">Forget Password</a></td>
                            </tr>
                        </table>
				</form><!-- end of form -->
				<?php 
				
					if(isset($_SESSION["error"]))
					{
						$error=$_SESSION["error"];
						echo "<script>alert('Incorrect Id or Password:');</script>";
					}
				?>
				
				</div>
    </div>
    </div>

	
</body>
</html>
