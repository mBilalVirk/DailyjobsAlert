<?php
	require("Connection.php");
   
	if(isset($_SESSION['id'])==true)
        $user_id = $_SESSION['id'];

        $id=$_REQUEST['id'];
        if($id==true){
        $sql="SELECT * FROM `jobs` WHERE `ID` = '$id'";
        $result= mysqli_query($dbc,$sql);
        $row=mysqli_fetch_array($result);}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>Daily job Alert | Details</title>
<link href="Style.css" rel="stylesheet" type="text/css" />
<meta name="viewport" content="width=device-width", initial-scale=1.0>
 <!-- Bootstrap CSS -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

	</head>

<body>
	<div id="wrapper">
	    <?php include("nav.php") ?>
        <div id="" class="container bg-dark container-fluid ">
            <h1 style="color:#fff">Job Details</h1>
        <div class="container ">
            <table class="table table-light m-10">
        <tr>
			<td rowspan="" style="">
			<tr>
				<td style=""><h6>Job Title:</h6><span style="float:left;"><?php echo $row['Title'];?></span></td>
			</tr>
			<tr>
				<td style=""><h6>Job ID:</h6><span><?php echo $row['ID'];?></span></td>
			</tr>
            <tr>

				<td style=""><h6>Catogory:</h6><span><?php echo $row['Categories'];?></span></td>
			</tr>
			<tr>
				<td style=""><h6>Salary:</h6><span><?php echo $row['Salery'];?></span></td>
			</tr>
			<tr>
				<td  style=""><h6>Location:</h6><span><?php echo $row['Location'];?></span></td>
			</tr>
            <tr>
			<td rowspan="" style="">
            <h3 class="heading-2">Job Description</h3>
            <span><?php echo $row['Description'];?></span>
            
            </td>
			</tr>
			
			<tr>
				<td style=""><h3 class="heading-2">Education + Experience</h3>
                    <ul>
                        <li>
                            <i class="fa fa-check"></i>M.B.S / M.B.A under National University with CA course complete.
                        </li>
                        <li><i class="fa fa-check"></i>3 or more years of professional design experience</li>
                        <li>
                            <i class="fa fa-check"></i>Excellent communication skills, most notably a demonstrated ability to solicit and address creative and design feedback
                        </li>
                        <li>
                            <i class="fa fa-check"></i>Masters of library science any Green University.
                        </li>
                        <li><i class="fa fa-check"></i>BA/BS degree in a technical field or equivalent practical experience.</li>
                        <li>
                            <i class="fa fa-check"></i>Ability to work independently and to carry out assignments to completion within parameters of instructions given, prescribed routines, and standard accepted practices
                        </li>
                    </ul></td>
                
			</tr>
			<tr>
				<td style="margin-left:50vh;;" colspan="" t><a href="Apply.php?id=<?php echo $row['ID'];?>" class="btn btn-primary btn- " tabindex="-1" role="button"style=" margin-left: 45%">Apply</a></td>
			</tr>
		
	  </table>

        </div>

        </div>
		<div id="pfooter" class="container">
        
	   <div id="footer">
             <hr style="color:#0066FF; border:solid;"/><br><br>
            <div id="Store">
				<table cellspacing="25px;" style=border="solid">
                    <th><h2 style="color:#5BC2E7; margin">Mobile First</h2></th>
				<tr>
                    <td><a href="index.php"><img src="img/apple_store.png" style="border-radius:6px;height:50px;width:150px;"></a></td>
                </tr>
                    <tr>
                         <td><a href="index.php"><img src="img/google_play.png" style="border-radius:6px;height:50px;width:150px;"></a></td>
                    </tr>
                    <tr>
                         <td><a href="index.php"><img src="img/windows_store.png" style="border-radius:6px;height:50px;width:150px;"></a></td>
                    </tr>
			</table>
            </div>
            <div id="About">
                <table cellspacing="25px;" style=border="solid">
                    <th><h2 style="color:#5BC2E7;">About us</h2></th>
				<tr>
                    <td style="border-radius:6px;height:50px;width:25%;"><a href="#">Company</a ></td>
                </tr>
                    <tr>
                         <td style="border-radius:6px;height:50px;width:25%;"><a href="#">Our Team</a></td>
                    </tr>
                    <tr>
                         <td style="border-radius:6px;height:50px;width:25%;"><a href="#">Term and condition</a></td>
                    </tr>
			</table>
            </div>
             <div id="Other">
                <table cellspacing="25px;" style=border="solid">
                    <th><h2 style="color:#5BC2E7;">Other Links</h2></th>
				<tr>
                    <td style="border-radius:6px;height:50px;width:25%;"><a href="#">Company</a></td>
                </tr>
                    <tr>
                         <td style="border-radius:6px;height:50px;width:25%;"><a href="#">Our Team</a></td>
                    </tr>
                    <tr>
                         <td style="border-radius:6px;height:50px;width:25%;"><a href="#">Term and condition</a></td>
                    </tr>
			</table>
            </div>
            <div id="Contact">
                <table cellspacing="25px;" style=border="solid">
                    <th><h2 style="color:#5BC2E7;">Contact Us</h2></th>
				<tr>
                    <td style="border-radius:6px;height:50px;width:25%;"><a href="#">Email:</a></td>
                </tr>
                    <tr>
                         <td style="border-radius:6px;height:50px;width:25%;"><a href="#">Web:</a></td>
                    </tr>
                    <tr>
                         <td style="border-radius:6px;height:50px;width:25%;"><a href="#">Phone:</a></td>
                    </tr>
			</table></div>
            </div>
	</div><!-- end of pfooter-->
    </div>
    
	
	
</body>
</html>
