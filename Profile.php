<?php
	require("Connection.php");
    include('valide.php');
	if(isset($_SESSION['id'])==true)
        $user_id = $_SESSION['id'];

		
                                    $sql="SELECT * FROM `account` WHERE `email`='$user_id'";
                                    $result= mysqli_query($dbc,$sql);
                                    $row=mysqli_fetch_array($result);
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
            <h1 style="color:#fff">Profile</h1>
        <div class="container ">
            <table class="table table-light">
        <tr>
			<td rowspan="9" style="text-align:center">
            <img src="img/133-1337263_job-seeker-icon-hd-png-download.png" style="width:120px;height: 180px;"class="rounded-circle img-responsive" alt="...">
            <br><input type="submit" value="Change Image" class="btn btn-primary"/>
            
            </td>
			</tr>
			<tr>
				<td style=""><h6>Name:</h6><span style="float:left;"><?php echo $row['fname'];echo"\t";echo $row['lname'];?></span></td>
			</tr>
			<tr>
				<td style=""><h6>Email Address:</h6><span><?php echo $row['email'];?></span></td>
			</tr>
			<tr>
				<td style=""><h6>Phone number:</h6><span><?php echo $row['Ccode'];echo"\t";echo $row['Phone'];?></span></td>
			</tr>
			<tr>
				<td style=""><h6>Gender:</h6><span><?php echo $row['gender'];?></span></td>
			</tr>
			<tr>
				<td  style=""><h6>Date of birth:</h6><span><?php echo $row['date-of-birth'];?></span></td>
			</tr>
			<tr>
				<td style=""><h6>Other:</h6></td>
			</tr>
			<tr>
				<td style="" colspan="2"><a href="UpdateProfile.php"><input type="submit" value="Update Profile" class="btn btn-primary"/></a></td>
			</tr>
		
	  </table>

        </div>

        </div>
		<?php include("Footer.php") ?>
    </div>
    
	
	
</body>
</html>
