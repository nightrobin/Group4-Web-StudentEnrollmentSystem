<?php
	include_once 'config.php';
	session_start();

	  if (isset($_SESSION['sid'])) {
		$sid = $_SESSION['sid'];

		$sql = "SELECT * FROM personalinfo WHERE studID = '$sid'";

		$result = mysqli_query($con, $sql);
		while ($row = mysqli_fetch_assoc($result)){



?>
<!DOCTYPE html>
<html>
	<head>
		<title> Robinson University </title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	</head>
	<style>
		body{
		background-color: #dbe6fd;
		}

		.nav2{
		background-color: white;
		height: 85px;
		width:100%;
		position: static;
		float: right;
		display: inline-block;
		}

		#bodyContainer{
		width:70%;
		background-repeat: no-repeat;
		display: inline;
		background-color: blue;
		float: right;
		}

		ul{
		top: 40px;
		bottom: 50px;
		background-color: #293b5f;
		width: 100%;
		height: 600px;
		position: relative;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		font-size: 18px;
		list-style-type: none;
		color: white;
		padding: 0;
		overflow: auto;
		}

		#content{
		}

		li a {
		height: 70px;
		display: block;
		color: white;
		padding: 20px;
		text-decoration: none;
		}

		li a.active {
		  background-color:  #47597E;
		  color: white;
		}

		li a:hover:not(.active) {
		  background-color: #DBE6FD;
		  color: #293B5F;
		}

		#mainPanel{
		top: 40px;
		background-color: white;
		width: 97%;
		right: 0px;
		bottom:0px;
		float: right;
		height: 600px;
		position: relative;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		}

		div{

		}
		.row{
		margin:auto;
		width:95%;
		border-color: black;
		}
		.column1{
		width:22%;

		}
		.column2{
		margin: 0;
		width:78%;

		}

		.column3{
		width:40%;

		}
		.column4{
		width:58%;
		margin-left: 2%;

		}
		h2{
		margin-top: 30px;
		color: #293b5f;
		font-family: "Times New Roman", Times, serif;
		}

		td{
		height: 30px;
		color: white;
		text-align: left;
		font-size: 13px;
		}
		.c1{
		width:25%;
		}
		.c2 .c4{
		width: 5%;
		}
		.c3{
		width: 35%;
		}
		.c5 .c6 .c7{
		width: 10%;
		}

		.viewInfoDiv {
		margin: auto;
		border: 1px solid #47597E;
		width: 90%;
		height: 490px;
		}

		.viewInfoBg {
		width:100%;
		height: 450px;
		background-color: #B2AB8C;
		float: right;
		}

		.font{
			font-family: Serif;
			font-size: 18px;
		}


	</style>

	<body>
			<nav class="navbar navbar-expand-md navbar-dark fixed-top nav-color nav2 d-flex flex-column flex-md-row justify-content-between">
				<img src="header.png" style="margin-left: 0px;">
				<a class="py-2 d-none d-md-inline-block font" name = sid>Student Number: <b><?php echo $sid; ?> </b></a>
			</nav>
			<div class="row">
				<div class="column1">
					<ul><b>
					  <li><a class="active" href="viewInfo.php">VIEW INFORMATION</a></li>
					  <li><a href="updateInfo.php">UPDATE INFORMATION</a></li>
					  <li><a href="changePassword.php">CHANGE PASSWORD</a></li>
					  <li><a href="logIntabs.php">BACK</a></li>
					</ul></b>
				</div>
				<div class="column2">
					<div id="mainPanel" >
						<br><br>
						<div class="viewInfoDiv">
							<div class="row" style="width: 100%; padding: 2%; text-align: center; ">
								<div class="column3">
									<h3 style="margin-top: 40%;"> STUDENT PROFILE </h3>
									<p style="margin-left: 20px; margin-right: 20px; font-size: 12px; text-align: justify;">
										Your college shall be determined from the degree program indicated  here. If the degree program is erroneous, please contact your respective college's OCS. If all details shown here are correct, you may proceed to the Pre-enlistment Page by clicking the link on the menu bar.
									</p>
								</div>
								<div class="column4">
									<div class="viewInfoBg">
										<table style="width: 95%; margin: auto;">
											<br>
											<tr>
												<td style="width:50%;"><b>Student Number:</b></td>
												<td><b><?php echo $row['studID']; ?></b></td>
											</tr>
											<tr>
												<td><b>Last Name:</b></td>
												<td><b><?php echo $row['lastname']; ?></td>
											</tr>
											<tr>
												<td><b>First Name:</b></td>
												<td><b><?php echo $row['firstname'] . $row['nExtension']; ?></td>
											</tr>
											<tr>
												<td><b>Middle Name:</b></td>
												<td><b><?php echo $row['middlename']; ?></b></td>
											</tr>
											<tr>
												<td><b>Sex:</b></td>
												<td><b><?php echo $row['seks']; ?></b></td>
											</tr>
											<tr>
												<td><b>Civil Status:</b></td>
												<td><b><?php echo $row['civil_status']; ?></b></td>
											</tr>
											<tr>
												<td><b>Citizenship:</b></td>
												<td><b><?php echo $row['citizenship']; ?></b></td>
											</tr>
											<tr>
												<td><b>Student Type:</b></td>
												<td><b><?php echo $row['studType']; ?></b></td>
											</tr>
											<tr>
												<td><b>Registration Status:</b></td>
												<td><b><?php echo $row['regStatus']; ?></b></td>
											</tr>
											<tr>
												<td><b>Degree Program:</b></td>
												<td><b><?php echo $row['course']; ?></b></td>
											</tr>
											<tr>
												<td><b>Year Level:</b></td>
												<td><b><?php echo $row['yrlvl']; ?></b></td>
											</tr>
											<tr>
												<td><b>Personal Email:</b></td>
												<td><b><?php echo $row['email']; ?></b></td>
											</tr>
											<tr>
												<td><b>Cellphone Number:</b></td>
												<td><b><?php echo $row['cpnum']; ?></b></td>
											</tr>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>
<?php
}
} else {
	header('location: login.php');
	exit();
}?>
