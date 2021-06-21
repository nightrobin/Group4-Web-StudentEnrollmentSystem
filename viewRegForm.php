<?php
	include_once 'config.php';
	session_start();

	  if (isset($_SESSION['sid'])) {
		$sid = $_SESSION['sid'];
		$es = "Enrolled";
		$update = "UPDATE personalinfo SET enrollStatus = '$es' WHERE studID= $sid";
		if (mysqli_query($con, $update)) {
			$sql = "SELECT * FROM personalinfo WHERE studID = '$sid' ";
			$result= mysqli_query($con, $sql);
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

		.column3{
		width:40%;
		}
		.column4{
		width:58%;
		margin-left: 2%;
		}
		h1{
		color: white;
		font-family: Sans-serif;
		text-align: center;
		}

		.c1{
		width:25%;
		font-family: sans-serif;
		font-size: 12px;
		}
		.c2 .c4{
		width: 5%;
		font-family: sans-serif;
		font-size: 12px;
		}
		.c3{
		width: 35%;
		font-family: sans-serif;
		font-size: 12px;
		}
		.c5 .c6 .c7{
		width: 10%;
		font-family: sans-serif;
		font-size: 12px;
		}

		.Bg {
		margin: auto;
		position: relative;
		top: 100px;
		width:70%;
		height: 200px;
		background-color: #B2AB8C;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
		}

		.font1{
		font-family: serif;
		font-size: 12px;
		font-weight: bold;
		border: 2px solid black;
		}

		.font2{
		font-family: serif;
		font-size: 17px;
		font-weight: bold;
		}

		td{
		height: 30px;
		}

		.payment{
		float: right;
		border: 1px solid black;
		width:30%;
		margin-top:20px;
		font-size: 13px;
		}

		.sched{
		float: left;
		width: 60%;
		}


	</style>

	<body>
		</nav>
			<nav class="navbar navbar-expand-md navbar-dark fixed-top nav-color nav2 d-flex flex-column flex-md-row justify-content-between">
				<img src="header.png" style="margin-left: 0px;">
					<a class="py-2 d-none d-md-inline-block" href="index.html">LOGOUT</a>
			</nav>
			<div class="row">
				<div class="column1">
					<ul><b>
					  <li><a href="viewSched.php">VIEW SCHEDULE</a></li>
					  <li><a href="viewAssessment.php">VIEW ASSESSMENT</a></li>
					  <li><a href="enrollConfirmation.php">REGISTER</a></li>
					  <li><a class="active" href="viewRegForm.php">VIEW REGISTRATION FORM</a></li>
					  <li><a href="logintabs.php">BACK</a></li>
					</ul></b>
				</div>
				<div class="column2">
					<div id="mainPanel" >
						<br><br>
						<table style="width:90%; margin: auto;">
							<tr>
								<td width="20%" style="font-family: Serif; font-size: 17px;"> <b> Robinson University </b></td>
								<td width="60%" style="text-align: center; font-family: Serif;  font-size: 20px;"> <b> STUDENT ENROLLMENT RECORD </b></td>
								<td width="20%" colspan="2"></td>
							</tr>
							<tr>
								<td colspan="4" style="text-align: center; font-size: 14px;"><b>First Semester</b> &nbsp	School Year &nbsp <b>2020-2021</b>
								</td>
							</tr>
							<tr width="95%">
								<td width="20%" class="font1">Student No.
									<p class="font2" style="margin-left: 20px;"><?php echo $row['studID']; ?></p>
								</td>
								<td width="60%" class="font1">Student Name
									<p class="font2" style="margin-left: 20px;"><?php echo $row['lastname'] .", ". $row['firstname'] ." " . $row['middlename'] ?></p>
								</td>
								<td width="10%" class="font1">Student Type
									<p class="font2" style="text-align: center;"><?php echo $row['studType']; ?></p>
								</td>
								<td width="10%" class="font1">Year Level
									<p class="font2" style="text-align: center;"><?php echo $row['yrlvl']; ?></p>
								</td>
							</tr>
							<tr width="95%">
								<td width="20%" class="font1">College
									<br>
									<p class="font2" style="margin-left: 20px;"><?php echo $row['college']; ?></p>
								</td>
								<td width="10%" class="font1">Course
									<br>
									<p class="font2" style="margin-left: 20px;"><?php echo $row['course']; ?></p>
								</td>
								<td width="10%" class="font1" style="text-align: center;" colspan="2">Registration Status
									<br>
									<p class="font2" style="text-align: center;"><?php echo $row['regStatus']; ?></p>
								</td>
							</tr>
						</table>
						<div style="margin: 0; width: 95%;">
							<div class="sched">
							<h4 style="font-family: Serif; font-weight: bold; margin-left: 230px; margin-top: 20px;"> CLASS SCHEDULE </h4>

								<table width="100%" style="margin-left: 50px; margin-top: 20px;" border="1">
									<tr>
										<th class="c1" style="font-family: Serif; font-size: 12px;">Subject Code</th>
										<th class="c2" style="font-family: Serif; font-size: 12px;">Sec.</th>
										<th class="c3" style="font-family: Serif; font-size: 12px;">Subject Title</th>
										<th class="c4" style="font-family: Serif; font-size: 12px;">Units</th>
										<th class="c5" style="font-family: Serif; font-size: 12px;">Day</th>
										<th class="c6" style="font-family: Serif; font-size: 12px;">Time</th>
										<th class="c7" style="font-family: Serif; font-size: 12px;">Room</th>
									</tr>
									<?php
									$sql2 = "SELECT * FROM schedules WHERE sets = '$sched' ";
										$result2 = mysqli_query($con, $sql2);
										if (mysqli_num_rows($result2) > 0) {
										while($row2 = mysqli_fetch_assoc($result2)) {
											echo "<tr>
												<td class = c1>". $row2['subjectCode']."</td>
												<td class = c2>". $row2['section'] . "</td>
												<td class = c3>". $row2['subjectTitle'] ."</td>
												<td class = c4>". $row2['units'] . "</td>
												<td class = c5>". $row2['days'] . "</td>
												<td class = c6>". $row2['time'] . "</td>
												<td class = c7>". $row2['room'] . "</td>
											</tr>";
											}
										}
									 ?>

								</table>
							</div>

							<div class="payment">
							<br>
								<table width="100%" style="margin-left: 10px;">
									<tr>
										<td >
											<b>Tuition Fees</b><br>
											Tuition Fees<br>
											<b>Miscellaneous Fees</b><br>
											Library Fee<br>
											Athletic Fee with PE <br>
											Registration Fee <br>
											Medical/Dental Fee <br>
											Student Welfare <br>
											Cultural Activity <br>
											Guidance Fee <br>
											<b>Other Fees</b><br>
											NSTP <br>
											Development Fund <br>
											Ang Pamantasan Fee <br>
											<b>Total Assessment Fee</b> <br>
											<b>Previous Payment/s </b> <br>

										</td>
										<td>
											<b>7, 032.00</b><br>
											7, 032.00<br>
											<b>1, 686.00</b><br>
											732.00<br>
											293.00<br>
											74.00<br>
											293.00<br>
											74.00<br>
											74.00<br>
											146.00<br>
											<b>526.00<br></b>
											330.00<br>
											146.00<br>
											50.00<br>
											<b>11, 434.00</b><br>
											<b>0.00</b><br>
										<td>
									</tr>
									<tr>
										<td><b>TOTAL AMOUNT DUE</b></td>
										<td><b>11, 437.00</b></td>
									</tr>
								</table>  <br>
							</div>
						</div>

					</div>
				</div>
			</div>


			<footer class="container">
			  <center><p>© Company 2021-2022</p></center>
			</footer>
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
