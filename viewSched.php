<?php
	include_once 'config.php';
	session_start();

	  if (isset($_SESSION['sid'])) {
		$sid = $_SESSION['sid'];

		$sql = "SELECT * FROM personalinfo WHERE studID = '$sid' ";
		$result = mysqli_query($con, $sql);
		if ($result) {
			if($row = mysqli_fetch_array($result)) {
				$sched = $row['sched'];

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
		height: 650px;
		position: relative;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		}

		.row{
		margin:auto;
		width:95%;
		}
		.column1{
		width:22%;
		}
		.column2{
		margin: 0;
		width:78%;
		}
		h2{
		margin-top: 30px;
		color: #293b5f;
		font-family: "Times New Roman", Times, serif;
		}
		table, th, td {
		border: 1px black;
		}
		td{
		height: 30px;
		background-color: white;
		color: black;
		}
		th{
		text-align: center;
		background-color: #47597E;
		color: white;
		}
		.c1{
		width:15%;
		}
		.c2 .c4{
		width: 5%;
		}
		.c4{
			text-align:center;
		}
		.c5{
			text-align:center;
			width: 10%;
		}
		.c6{
			margin-left: 10px;
		}
		.c3{
		width: 30%;
		}
		.c6 .c7{
		width: 15%;
		}
		.font{
			font-family: Serif;
			font-size: 18px;
		}

	</style>

	<body>
		</nav>
			<nav class="navbar navbar-expand-md navbar-dark fixed-top nav-color nav2 d-flex flex-column flex-md-row justify-content-between">
				<img src="header.png" style="margin-left: 0px;">
					<a class="py-2 d-none d-md-inline-block font" name = sid>Student Number: <b><?php echo $sid; ?> </b></a>
			</nav>
			<div class="row">
				<div class="column1">
					<ul><b>
					  <li><a class="active" href="viewSched.php">VIEW SCHEDULE</a></li>
					  <li><a href="viewAssessment.php">VIEW ASSESSMENT</a></li>
					  <li><a href="enrollConfirmation.php">REGISTER</a></li>
					  <li><a href="viewRegform.php">VIEW REGISTRATION FORM</a></li>
					  <li><a href="logintabs.php">BACK</a></li>
					</ul></b>
				</div>
				<div class="column2">
					<div id="mainPanel" >
						<h2><center> CLASS SCHEDULE </center></h1>
						<br>
						<table style="width:90%; margin:auto;">
							<tr>
								<th class="c1" style="text-align: left;">Subject Code</th>
								<th class="c2" style="text-align: left;">Sec.</th>
								<th class="c3">Subject Title</th>
								<th class="c4" style="text-align: center;">Units</th>
								<th class="c5">Day</th>
								<th class="c6">Time</th>
								<th class="c7" style="text-align: left;">Room</th>
							</tr>
							<?php
							$sql2 = "SELECT * FROM schedules WHERE sets = '$sched' ";
								$result2 = mysqli_query($con, $sql2);
								if (mysqli_num_rows($result2) > 0) {
								while($row2 = mysqli_fetch_assoc($result2)) {
									echo "<tr>
										<td class = c1>".$row2['subjectCode']."</td>
										<td class = c2>" . $row2['section'] ."</td>
										<td class = c3>". $row2['subjectTitle'] ."</td>
										<td class = c4>". $row2['units'] ."</td>
										<td class = c5>". $row2['days'] ."</td>
										<td class = c6>". $row2['time'] ."</td>
										<td class = c7>". $row2['room'] ."</td>
									</tr>";
									}
							 ?>
						</table>
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
	}
}
} else {
	header('location: login.php');
	exit();
}
?>
