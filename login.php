<!DOCTYPE html>
<html>
	<head>
		<title> Robinson University </title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="icon" href="logo.png"
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

		div.one{
		border-radius: 25px;
		width: 30%;
		padding: 20px;
		margin-left: 70%;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
		background: rgb(219, 230, 253, 0.6)
		}

		#loginBtn{
		background-color: #D4AF37;
		color: white;
		}

		#loginBtn:hover{
		background-color:#47597e;
		border-color: #dbe6fd;
		}
		.navActive{
		font-weight: bold;
		color: #293b5f;
		text-decoration: underline;
		}
		.error {
			background: #F2DEDE;
			color: #A94442;
			padding: 10px;
			width: 95%;
			border-radius: 5px;
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
					<a class="py-2 d-none d-md-inline-block navActive" href="login.php">LOGIN</a>
			</nav>

			<br><br><br><br><br><br>
				<div id ="bodyContainer">
					<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center" id="bg">
						<div class="one">

							 <form class="form-signin"  method="POST" action="s_login.php">
								 	<?php if(isset($_GET['error'])) { ?>
										<p class="error"> <?php echo $_GET['error']; ?></p>
									<?php } ?>

								  <div class="text-center mb-4">
									<img class="mb-4" src="https://www.pikpng.com/pngl/b/80-805068_profile-icon-png.png" alt="" width="72" height="72">
									<h1 class="h3 mb-3 font-weight-normal">Welcome Student!</h1>
								 	</div>

								  <div class="form-label-group">
									<input type="text" name="sid" class="form-control" placeholder="Student Number" required autofocus>
									<label for="sid">Student Number</label>
								  </div>

								  <div class="form-label-group">
									<input type="password" name="pw" class="form-control" placeholder="Password" required>
									<label for="password">Password</label>
								  </div>

									<button class="btn btn-lg btn-primary btn-outline-secondary btn-block" id="loginBtn" name="login" type="submit">Log in</button>
									<a href="perinfo.php" class="btn btn-lg btn-primary btn-outline-secondary btn-block" id="loginBtn" type="button">Register</a>
									<a href="checkResults.php" class="btn btn-lg btn-primary btn-outline-secondary btn-block" id="loginBtn" type="button">Check Result</a><br><br>
									<p style="font-size: 14px;"><u><i> Note: New students are required to register first. </i></u></p>
							</form>

						</div>
					</div>
				</div>
			<footer class="container">
			  <center><p>© Robinson University 2021-2022</p></center>
			</footer>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>
