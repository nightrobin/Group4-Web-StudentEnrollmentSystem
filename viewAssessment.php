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
		height: 1000px;
		position: relative;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		}

		div{

		}
		.row{
		margin:auto;
		width:95%;
<!-- 	border-style: solid;
		bordericolor: black; -->
		}
		.column1{
		width:22%;
<!-- 	border-style: solid;
		border-color: red; -->
		}
		.column2{
		margin: 0;
		width:78%;
<!-- 	border-style: solid;
		bordericolor: blue; -->
		}
	}
		.column3{
		margin: 0;
		width:78%;
<!-- 	border-style: solid;
		bordericolor: blue; -->
		}
		h2{
		margin-top: 30px;
		color: #293b5f;
		font-family: "Times New Roman", Times, serif;
		}
		table, th, td {
		border: 1px solid white;
		}
		td{
		width: 200%;
		height: 30px;
		background-color: white;
		color: rgb(20, 20, 20);
		}
		.td1{
		width: 90%;
		height: 30px;
		border-color: black;
		background-color: white;
		color: black;
		}
		.td2{
		text-align: center;
		width: 110%;
		height: 30px;
		border-color: black;
		background-color: white;
		color: black;
		}
		th{
		text-align: center;
		border-color: black;
		background-color: #47597E;
		color: white;
		}
		.c1.c2 .c3. .c4 .c5{
		border-color: black;
		width: 100%;
		height: 30px;
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
					  <li><a class="active" href="viewAssessment.php">VIEW ASSESSMENT</a></li>
					  <li><a href="enrollConfirmation.php">REGISTER</a></li>
					  <li><a href="viewRegform.php">VIEW REGISTRATION FORM</a></li>
					  <li><a href="logIntabs.php">BACK</a></li>
					</ul></b>
				</div>

				<div class="column2">
					<div id="mainPanel">
						<h2><center> ASSESSMENT </center></h1>
						<br>
						<form method="post">
							<table style="width: 50%;" align="center">
								<tr>
									<td>
										Select Semester: <input type="text" name="aySem" maxlength=5 style="width:100px;"
										value="20201" required>
										<input type="submit" value="Go" name="submit">
									</td>
								</tr>
							</table>
						</form>
					<br>

						<table style="width: 98%; margin-top: 0px; margin-right: auto;margin-left: auto;">
							<tr valign=top>
								<td style="width: 5%;"></td>
								<td style="width: 75%;">
									<div style="width: 95%;">
										<table align=center>
											<tr>
												<th class =c1; colspan="2"><strong>TUITION FEE</th></strong></th>
											</tr>
											<tr>
												<td class="td1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>Description</u></td><td class="td2"><u>Amount</u></td>
											</tr>
											<tr>
												<td class="td1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tuition Fee(24.00 units)</td><td class="td2">6052.00</td>
											</tr>
											<tr>
												<td class="td1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td class="td2"><b>6,052.00</sb></td>
											</tr>
											<tr>
												<th class = c2; colspan="2"><strong>MISCELLANEOUS FEE</strong></th>
											</tr>
											<tr>
												<td class="td1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>Description</u></td><td class="td2"><u>Amount</u></td>
											</tr>
											<tr>
												<td class="td1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cultural Activity</td><td class="td2">64.00</td>
											</tr>
											<tr>
												<td class="td1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Library Fee</td><td class="td2">632.00</td>
											</tr>
											<tr>
												<td class="td1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Medical/Dental Fee</td><td class="td2">193.00</td>
											</tr>
											<tr>
												<td class="td1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Guidance Fee</td><td class="td2">126.00</td>
											</tr>
											<tr>
												<td class="td1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Athletic Fee with PE</td><td class="td2">283.00</td>
											</tr>
											<tr>
												<td class="td1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Student Welfare</td><td class="td2">64.00</td>
											</tr>
											<tr>
												<td class="td1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Registration Fee</td><td class="td2">64.00</td>
											</tr>
											<tr>
												<td class="td1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td class="td2"><b>1,582.00</b></td>
											</tr>
											<tr>
												<th class = c3; colspan="2"><strong>LABORATORY FEE</strong></th>
											</tr>
											<tr>
												<td class="td1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>Description</u></td><td class="td2"><u>Amount</u></td>
											</tr>
											<tr>
												<td class="td1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All Other Subjects with Laboratory</td><td class="td2">352.00</td>
											</tr>
											<tr>
												<td class="td1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Computer Subject with Hands-On/Thesis</td><td class="td2">1555.00</td>
											</tr>
											<tr>
												<td class="td1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td class="td2"><b>2,150.00</b></td>
											</tr>
											<tr>
												<th class = c4; colspan="2"><strong>OTHER FEE</strong></th>
											</tr>
											<tr>
												<td class="td1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>Description</u></td><td class="td2"><u>Amount</u></td>
											</tr>
											<tr>
												<td class="td1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NSTP</td><td class="td2">330.00</td>
											</tr>
											<tr>
												<td class="td1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Development Fund</td><td class="td2">140.00</td>
											</tr>
											<tr>
												<td class="td1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Extra Fee</td><td class="td2">50.00</td>
											</tr>
											<tr>
												<td class="td1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td class="td2"><b>520.00</b></td>
											</tr>
											<tr>
												<th class = c5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Total Amount</b></td><td class="td2"><b>14,162.00</b></tc>
											</tr>
										</table>
									</div>
								</td>

								<td style="width: 15%;">
										<button style="height: 100px; width: 100%; font-size: 20px; margin-top: 10px;" onclick="window.location=''">
											SAVE<br>
											A COPY
										</button>
										<div style="margin-top: 10px; border: 1px solid maroon; font-size: 18px; padding-top: 10px; padding-bottom: 10px; text-align: center; font-weight: bold;">
											Your Status:<br>
											<text style="color:rgb(88, 37, 37);">

															Paying:<br>
															Covered by<br>
															CHED Unifast<br>
															(RA 10931)
											</text>
										</div>
								</td>
							</tr>
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
} else {
	header('location: login.php');
	exit();
}
 ?>
