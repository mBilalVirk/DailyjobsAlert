<?php
	require("Connection.php");
    include('valide.php');
	if(isset($_SESSION['id'])==true)
        $user_id = $_SESSION['id'];

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>Daily job Alert | Profile</title>
<link href="Style.css" rel="stylesheet" type="text/css" />
<meta name="viewport" content="width=device-width", initial-scale=1.0>
 <!-- Bootstrap CSS -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

	</head>

<body>
	<div id="wrapper">
	    <?php include("nav.php") ?>
        <div id="Profile" class="container bg-dark">
            <h1 style="color:#fff">Change Passsword</h1><br>
        <div class="container ">
        <div id="formcreate" class="container bg-dark">
	   <form method="post" style="margin-left:">
					<table>
						<tr>
							<td><input type="Password" placeholder="Old Password:" name="Oldpassword"> </td>
						</tr>
						<tr>
							<td><input type="password" placeholder="Password:" name="Password"> </td>
						</tr>
						<tr>
							<td><input type="password" placeholder="Re-Enter Password:" name="Rpasword"> </td>
						</tr>
						<tr>
							<td>
								<a href=""><input type="submit" value="Change Password" name="submit"></a>
							</td>
						</tr>
					</table>
				</form><!-- end of form -->
        </div>

        </div>
        <?php
            if(isset($_POST['submit']))
            {
                $oldpassword =  $_POST['Oldpassword'];
                $password =  $_POST['Password'];
                $repassword =  $_POST['Rpasword'];
                $sql = "SELECT * FROM `account` WHERE `email`='$user_id';";
                $q=mysqli_query($dbc, $sql);
                $row = mysqli_fetch_array($q);
                $test=$row['password'];
                
                if($password==$test){
                if ($password == $repasword) 
                    {
                        
                        $update="UPDATE `account` SET `password`='$password',`re-password`='$repasword'";   
                            if ($update) 
                                {
                                echo "<script>alert('Password has been changed');</script>";
                                }
                            
                            else
                                { 
                                    echo "<p class='alert alert-info'>Password Not match Please try again.</p>";
                                }
                    }
                else
                    {
                            echo "<p class='alert alert-info'>Password Not match Please try again.</p>";
                    }
                }
                else
                    {
                            echo "<p class='alert alert-info'>Password Not match Please try again.</p>";
                    }
                
            }
            
        ?>

		
    </div>
    <?php include("Footer.php") ?>
        </div>
	
	
</body>
</html>
