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
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
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
		height: 600px;
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

		h3{
    margin-top: 25%;
    text-align: center;
    }

		td{
		height: 30px;
		color: white;
		text-align: left;
		font-size: 13px;
		}

		.td2{
    color: white;
    font-size:13px;
    text-align: left;
		padding: 2%;
		width:40%;
    }

		.changePasswordDiv {
		margin: auto;
		border: 1px solid #47597E;
    border-style: solid;
		width: 90%;
		height: 450px;
		}

		.changePasswordBg {
		width: 85%;
		height: 280px;
		background-color: #B2AB8C;
  	border:1px solid black;
		float: 50%;
		}

		.font{
			font-family: Serif;
			font-size: 18px;
		}

		.error {
			background: #47597E;
			color: white;
			padding: 8px;
			margin: auto;
			width: 95%;
			border-radius: 5px;
			text-align: center;
		}

		.updatebtn{
			background-color: #293B5F;
			color: white;
			height: 30px;
			border: 1px solid #DBE6FD;
		}

		.updatebtn:hover {
			background-color: #47597E;
			color: white;
			border: 1px solid #293B5F;
		}


	</style>

		</nav>
			<nav class="navbar navbar-expand-md navbar-dark fixed-top nav-color nav2 d-flex flex-column flex-md-row justify-content-between">
				<img src="header.png" style="margin-left: 0px;">
				<a class="py-2 d-none d-md-inline-block font" name = sid>Student Number: <b><?php echo $sid; ?> </b></a>
			</nav>
			<div class="row">
				<div class="column1">
					<ul><b>
					  <li><a href="viewInfo.php">VIEW INFORMATION</a></li>
					  <li><a href="updateInfo.php">UPDATE INFORMATION</a></li>
					  <li><a class="active" href="changePassword.php">CHANGE PASSWORD</a></li>
					  <li><a href="logIntabs.php">BACK</a></li>
					</ul></b>
				</div>

          <body>
				<div class="column2">
					<div id="mainPanel" >
						<br><br>
						<div class="changePasswordDiv">
							<div class="row" style="width: 100%; text-align: center; ">
								<div class="column3">
									<h3 class = h3> CHANGE PASSWORD </h3><br>
									<p style="margin-left: 20px; margin-right: 20px; font-size: 13px; text-align: justify;">
										You can now personalize your user password to make it easier for you to remember. However, you should ensure that it is not too easy for anyone else to guess!<BR><BR> Your password must be at least 8-20 characters long. Making your password difficult for anyone else to crack will secure your CRS data.
									</p>
								</div>
								<div class="column4" align=center><br><br><br>
									<div class="changePasswordBg">
                                        <table style="width: 95%; margin: auto;">
                                                <tr>
                                                <td>
																									<?php if(isset($_GET['error'])) { ?>
																										<p class="error"> <?php echo $_GET['error']; ?></p>
																									<?php } ?>
																									<form class="" action="s_changepass.php" method="post">
                                                <table  style="margin: auto; margin-top: 15px;" width="95%;">
                                                <tr>
                                                    <td style="text-align:center;"  colspan=2>
                                                    <b>Student no: <?php echo $sid; ?></b>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td2">Current Password: </td>
                                                    <td>
														<input style="float: right;" type=password name="oldpass" id="pww" maxlength=20 min="8" size=35 required>
                                                    </td>
																										<td class="td"><i class="far fa-eye" id="togglePassword" style="margin-left: 5px; cursor: pointer;"></i></td>
                                                </tr>
                                                <tr>
                                                    <td class="td2">New Password: </td>
                                                    <td>
														<input style="float: right;" type=password name="newpass"  id="pw1"maxlength=20 size=35 required>

                                                    </td>
																										<td class="td"><i class="far fa-eye" id="togglePassword1" style="margin-left: 5px; cursor: pointer;"></i></td>

																										<td></td>
                                                </tr>
                                                <tr>
                                                    <td class="td2"> Confirm Password: </td>
                                                    <td>
														<input style="float: right;" type=password name="confpass" id="pw2" maxlength=20 size=35 required>
                                                    </td>
																										<td class="td"><i class="far fa-eye" id="togglePassword2" style="margin-left: 5px; cursor: pointer;"></i></td>
                                                </tr>
                                                <tr><td><br></td></tr>

																								<script>
																								const togglePassword = document.querySelector('#togglePassword');
																								const password = document.querySelector('#pww');
																								togglePassword.addEventListener('click', function (e) {
																									const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
																									password.setAttribute('type', type);
																									this.classList.toggle('fa-eye-slash');
																								});

																								const togglePassword1 = document.querySelector('#togglePassword1');
																								const password1 = document.querySelector('#pw1');
																								togglePassword1.addEventListener('click', function (e) {
																									const type = password1.getAttribute('type') === 'password' ? 'text' : 'password';
																									password1.setAttribute('type', type);
																									this.classList.toggle('fa-eye-slash');
																								});

																								const togglePassword2 = document.querySelector('#togglePassword2');
																								const password2 = document.querySelector('#pw2');
																								togglePassword2.addEventListener('click', function (e) {
																									const type = password2.getAttribute('type') === 'password' ? 'text' : 'password';
																									password2.setAttribute('type', type);
																									this.classList.toggle('fa-eye-slash');
																								});
																								</script>

                                                <tr>
                                                    <td style="text-align:center;" colspan=3>
														<input type= "submit" name="update" value="UPDATE PASSWORD"  class="updatebtn">
                                                    </td>
                                                </tr>
                                                </table>
                                                </td>
                                                </tr>
                                            </table>
                                            </td>
                                            </tr>
                                            <tr><td><br></td></tr>
                                            </table>
                                            </form>
                                            </td>
                                            </tr>
                                            </table>
</body>
</html>

<?php
}
} else {
	header('location: login.php');
	exit();
}
?>
