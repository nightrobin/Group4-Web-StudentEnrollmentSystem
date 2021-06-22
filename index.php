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
		.nav-color{
		background-color: #293b5f;
		}
		.nav2{
		background-color: white;
		top: 56px;
		height: 85px;
		}
		.button-color{
		background-color:white;
		color: black;
		}
		.button-color:hover{
		background-color: #47597e;
		color: white;
		border-color: #dbe6fd;
		}

		.btn-outline-secondary:hover{
		color: white;
		border-color: #dbe6fd;
		}

		.image{
		border-style: solid;
		border:7px solid #45352D;
		border-radius: 50%;
		}

		#bodyContainer{
		width:100%;
		background-image: url("bg2.png");
		background-repeat: no-repeat;
		background-size: cover;
		}

		#comingSoonBtn{
		background-color: #D4AF37;
		}

		#comingSoonBtn:hover{
		background-color:#47597e;
		border-color: #dbe6fd;
		}

	</style>

	<body>
		<nav class="navbar navbar-expand-md navbar-dark fixed-top nav-color">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
					<div class="collapse navbar-collapse" id="navbarsExampleDefault">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item active">
								<a class="nav-link active" href="#">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Features</a>
							</li>
							<li class="nav-item">
								 <a class="nav-link" href="#">Contact</a>
							</li>
						</ul>
							<form class="form-inline my-2 my-lg-0">
								<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
								<button class="btn my-2 my-sm-0 button-color" type="submit">Search</button>
							</form>
					</div>
		</nav>
			<nav class="navbar navbar-expand-md navbar-dark fixed-top nav-color nav2 d-flex flex-column flex-md-row justify-content-between">
				<img src="header.png" style="margin-left: 0px;">
					<a class="py-2 d-none d-md-inline-block" href="#">ACADEMICS</a>
					<a class="py-2 d-none d-md-inline-block" href="#">ADMISSIONS</a>
					<a class="py-2 d-none d-md-inline-block" href="#">RESEARCH</a>
					<a class="py-2 d-none d-md-inline-block" href="#">NEWS</a>
					<a class="py-2 d-none d-md-inline-block" href="login.php">LOGIN</a>
			</nav>
			<div>
			</div>

			<br><br><br><br><br><br>
				<div id ="bodyContainer">
					<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center" id="bg">
					  <div class="col-md-5 p-lg-5 mx-auto my-5">
						<h1 class="display-4 font-weight-normal" style="color:white;">Enroll Now!</h1>
						<p class="lead font-weight-normal" style="color:white;">Robinson University is now accepting enrollees for SY 2020-2021, starting from August 25 - September 1 2021. </p>
						<a class="btn btn-outline-secondary btn-outline-secondary:hover" href="login.php" id="comingSoonBtn" style="color:white;">Proceed</a>
					  </div>
					  <div class="product-device box-shadow d-none d-md-block"></div>
					  <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
					</div>
				</div>

		    <div class="container">
					
					<div class="row">
						<div class="col-md-4">
							<h2>Info</h2>
								<p> This container contains information about This container contains information about This container contains information about This container contains information about This container contains information about This container contains information about.</p>
								<p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
						</div>
						<div class="col-md-4">
							<h2>Info</h2>
								<p> This container contains information about This container contains information about This container contains information about This container contains information about This container contains information about This container contains information about.</p>
								<p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
						</div>
						<div class="col-md-4">
							<h2>Info</h2>
								<p> This container contains information about This container contains information about This container contains information about This container contains information about This container contains information about This container contains information about.</p>
								<p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
						</div>
					</div>

				<hr>

			</div>
			<footer class="container">
			  <center><p>© Robinson University 2021-2022</p></center>
			</footer>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>
