<?php
	include_once 'config.php';
	session_start();

	  if (isset($_SESSION['sid'])) {
		$sid = $_SESSION['sid'];


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

		.font{
			font-family: Serif;
			font-size: 18px;
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
					  <li><a href="viewSched.php">VIEW SCHEDULE</a></li>
					  <li><a href="viewAssessment.php">VIEW ASSESSMENT</a></li>
					  <li><a class="active" href="enrollConfirmation.php">REGISTER</a></li>
					  <li><a href="viewRegform.php">VIEW REGISTRATION FORM</a></li>
					  <li><a href="logintabs.php">BACK</a></li>
					</ul></b>
				</div>
				<div class="column2">
					<div id="mainPanel" >
						<br><br>
						<div class="Bg">
								<br>
							<h1>You are officially enrolled!</h1>
							<p style="text-align: center; color: white;"> Start of Class will be on March 15, 2020</p>
								<br>
							<p style="text-align: center; color: white; font-size: 12px;">You may now proceed to save your registration form.</p>
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
} else {
	header('location: login.php');
	exit();
}
 ?>
