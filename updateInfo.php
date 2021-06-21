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
		height: 670px;
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

		h5{
		color: #293B5F;
		font-family: Sans-Serif;
		font-weight: bold;
		margin-left: 10px;
		}

		div{
		font-size: 13px;
		}

		.fieldFont{
		font-size: 13px;
		}


		.btn{
		background-color: #293B5F;
		color: white;
		border: 2px solid #DBE6FD;
		width: 21%;
		margin-right: 98px;
		float: right;
		}

		.btn:hover {
		background-color: #B2AB8C;
		color:white;
		border: 2px solid #47597E;
		}

		.color{
		background-color: #293B5F;
		color: white;
		font-weight: bold;
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
					  <li><a href="viewInfo.php">VIEW INFORMATION</a></li>
					  <li><a class="active" href="updateInfo.php">UPDATE INFORMATION</a></li>
					  <li><a href="changePassword.php">CHANGE PASSWORD</a></li>
					  <li><a href="logIntabs.php">BACK</a></li>
					</ul></b>
				</div>
				<div class="column2">
					<div id="mainPanel">
						<div class="container-fluid py-2">

							<form method="POST" action="s_updateinfo.php">

								<h5 style="margin-top: 5px;">PERSONAL INFORMATION</h5>
								<div class="row ml-2">

									<div class="col-md-1">
										<div class="form-group">NAME</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<input type="text" readonly class="form-control-plaintext color fieldFont" name="fname" value="<?php echo $row['firstname']; ?>">
											<p class="text-center">FIRST NAME*</p>
										</div>
									</div>

									<div class="col-md-3">
										<div class="form-group ">
											<input type="text" readonly class="form-control-plaintext color fieldFont" name="mname" value="<?php echo $row['middlename']; ?>">
											<p class="text-center">MIDDLE NAME*</p>
										</div>
									</div>

									<div class="col-md-3">
										<div class="form-group">
											<input type="text" readonly class="form-control-plaintext color fieldFont" name="lname" value="<?php echo $row['lastname']; ?>">
											<p class="text-center">LAST NAME*</p>
										</div>
									</div>

									<div class="col-md-2">
										<div class="form-group">
											<input type="text" readonly class="form-control-plaintext color fieldFont" name="ext" value="<?php echo $row['nExtension']; ?>">
											<p class="text-center">NAME EXTENSION</p>
										</div>
									</div>
								</div>

								<div class="row ml-1">
									<div class="col-md-7">
										<div class="row">
											<div class="col-md-5">LEARNING REFERENCE NUMBER*</div>
											<div class="col-md-7">
												<div class="form-group">
													<input type="text" readonly class="form-control-plaintext color fieldFont" name="lrn" value="<?php echo $row['lrn']; ?>">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-5">BIRTHDATE (YEAR/MONTH/DATE)*</div>
											<div class="col-md-7">
												<div class="form-group">
													<input type="date" readonly class="form-control color fieldFont" style=" background-color: #293B5F;" name="bday" value="<?php echo $row['birthdate']; ?>">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-5">ADDRESS*</div>
											<div class="col-md-7">
												<div class="form-group">
													<input type="text" class="form-control fieldFont" name="address" required value="<?php echo $row['address']; ?>">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-5">CITIZENSHIP*</div>
											<div class="col-md-7">
												<div class="form-group">
													<input type="text" readonly class="form-control-plaintext color fieldFont"  name="citi" required readonly value="<?php echo $row['citizenship']; ?>">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-5">RELIGION</div>
											<div class="col-md-7">
												<div class="form-group">
													<input type="text" class="form-control fieldFont" name="rel" style=" background-color: #293B5F;" readonly value="<?php echo $row['religion']; ?>">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-5">CELLPHONE NUMBER*</div>
											<div class="col-md-7">
												<div class="form-group">
													<input type="tel" class="form-control fieldFont" name="cpnum" required value="<?php echo $row['cpnum']; ?>">
												</div>
											</div>
										</div>
									</div>

									<div class="col-md-5 text-right">
										<div class="row">
											<div class="col-md-4">SEX*</div>
											<div class="col-md-8">
												<div class="form-group">
													<input type="text" readonly class="form-control fieldFont" style=" background-color: #293B5F; color:white;" name="age" required  value="<?php echo $row['seks']; ?>">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-4">AGE*</div>
											<div class="col-md-8">
												<div class="form-group">
													<input type="number" class="form-control fieldFont" name="age" required value="<?php echo $row['age']; ?>">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-4">HEIGHT (cm)*</div>
											<div class="col-md-8">
												<div class="form-group">
													<input type="number" class="form-control fieldFont" step=".01" name="he" required value="<?php echo $row['height']; ?>">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-4">WEIGHT (kg)*</div>
											<div class="col-md-8">
												<div class="form-group">
													<input type="text" class="form-control fieldFont" name="we" required value="<?php echo $row['weight']; ?>">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-4">CIVIL STATUS*</div>
											<div class="col-md-8">
												<div class="form-group">
													<select class="custom-select fieldFont" name="cs" required value="<?php echo $row['civil_status']; ?>">
														<option>Single</option>
														<option>Married</option>
														<option>Widowed</option>
														<option>Divorced</option>
													</select>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-4">EMAIL ADDRESS*</div>
											<div class="col-md-8">
												<div class="form-group">
													<input type="email" class="form-control fieldFont" name="email" required value="<?php echo $row['email']; ?>">
												</div>
											</div>
										</div>
									</div>
								</div>


								<h5>FAMILY BACKGROUND</h5>
								<div class="row ml-1">
									<div class="col-md-6">
										<div class="row">
											<div class="col-md-5">FATHER'S NAME*</div>
											<div class="col-md-7">
												<div class="form-group">
													<input type="text" readonly class="form-control-plaintext color fieldFont"  name="fathname" required value="<?php echo $row['fathername']; ?>">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-5">CONTACT NUMBER*</div>
											<div class="col-md-7">
												<div class="form-group">
													<input type="tel" class="form-control fieldFont" name="fathnum" required value="<?php echo $row['fathernum']; ?>">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-5">GUARDIAN'S NAME</div>
											<div class="col-md-7">
												<div class="form-group">
													<input type="text" class="form-control fieldFont" name="gname" value="<?php echo $row['gname']; ?>">
												</div>
											</div>
										</div>
									</div>

									<div class="col-md-6 text-right">
										<div class="row">
											<div class="col-md-5">MOTHER'S NAME*</div>
											<div class="col-md-7">
												<div class="form-group">
													<input type="text" readonly class="form-control-plaintext color fieldFont"  name="mothname" required value="<?php echo $row['mothername']; ?>">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-5">CONTACT NUMBER*</div>
											<div class="col-md-7">
												<div class="form-group">
													<input type="tel" class="form-control fieldFont" name="mothnum" required value="<?php echo $row['mothernum']; ?>">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-5">GUARDIAN'S NUMBER</div>
											<div class="col-md-7">
												<div class="form-group">
													<input type="tel" class="form-control fieldFont" name="gnum" value="<?php echo $row['gnum']; ?>">
												</div>
											</div>
										</div>
									</div>
								</div>

						</div>
						 <div>
							<button type="submit" class="btn btn-outline-dark" name="submit" > Update</button>
							</form>
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
<?php }
} else {
	header('location: login.php');
	exit();
}
?>
