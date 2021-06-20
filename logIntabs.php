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

	.row{
	  margin:auto;
	  width:95%;
      height: 600px;
      padding: 15px;
		}
    .btn-group {
      width: 100%;
      height: 600px;
    }
    .btn-secondary {
      width: 100%;
      background-color: #293B5F;
      height: 100%;
      padding-top: 450px;
      font-size: 25px;
      font-family: 'Times New Roman', serif;
      font-weight: bold;
      color: #FFFFFF;
    }

    #bb1{
      background: url(5.png) no-repeat center;
      background-size: 450px;
      background-color: #293B5F;
    }
    #bb1:hover {
      background: url(6.png) no-repeat center;
      background-size: 500px;
      background-color: #B2AB8C;
      font-size: 27px;
    }

    #bb2{
      background: url(3.png) no-repeat center;
      background-size: 450px;
      background-color: #293B5F;
    }
    #bb2:hover {
      background: url(4.png) no-repeat center;
      background-size: 500px;
      background-color: #B2AB8C;
      font-size: 27px;
    }

    #bb3{
      background: url(1.png) no-repeat center;
      background-size: 450px;
      background-color: #293B5F;
    }
    #bb3:hover {
      background: url(2.png) no-repeat center;
      background-size: 500px;
      background-color: #B2AB8C;
      font-size: 27px;
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
  <div class="btn-group" role="group" aria-label="tabs">
    <a href="viewInfo.php" class="btn btn-secondary" id = "bb1">STUDENT INFORMATION</a>
    <a href="viewSched.php" class="btn btn-secondary" id = "bb2">ENROLL</a>
    <a href="logout.php" class="btn btn-secondary" id = "bb3">LOGOUT</a>
  </div>
</div>

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>

<?php
} else {
	header('location: login.php');
	exit();
}?>
