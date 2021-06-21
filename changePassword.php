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
<!-- 	border-style: solid;
		bordericolor: blue;
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
        text-align: center;
        }

		.changePasswordDiv {
		margin: auto;
		border: 1px solid #47597E;
        border-style: solid;
		width: 90%;
		height: 490px;
		}

		.changePasswordBg {
		width: 85%;
		height: 200px;
		background-color: #B2AB8C;
        border-style: solid;
		float: 50%;
		}

		.font{
			font-family: Serif;
			font-size: 18px;
		}

		.error {
			background: #F2DEDE;
			color: #A94442;
			padding: 10px;
			width: 95%;
			border-radius: 5px;
		}

	</style>

	<!-- <script language = JavaScript>

        function InputCheck(frm)
        {
         var errmsg='';
         var txtfield=null;
		 var newpstring=frm.newP.value;

         if (frm.oldP.value=='' || frm.newP.value=='' || frm.confP.value=='')
         {
          errmsg+='\n no password field can be left empty!';
          if(txtfield==null)
          {
           txtfield=frm.oldP;
          }
         }
         else
         {
          if (frm.newP!='' && newpstring.length<8)
          {
           errmsg+='\n new password cannot be less than 8 characters!';
           if(txtfield==null)
           {
            txtfield=frm.newP;
           }
          }
         }

         if (frm.oldP.value!='' && frm.dbpass.value!=frm.oldP.value)
         {
          errmsg+='\n current password input is incorrect!';
          if(txtfield==null)
          {
           txtfield=frm.oldP;
          }
         }

         if (frm.oldP.value!='' && frm.oldP.value==frm.newP.value)
         {
          errmsg+='\n new password is just the same as the current password';
          if(txtfield==null)
          {
           txtfield=frm.newP;
          }
         }

         if (frm.newP.value!='' && frm.newP.value!=frm.confP.value)
         {
          errmsg+='\n new password and confirmation password do not match!';
          if(txtfield==null)
          {
           txtfield=frm.confP;
          }
         }

         if (errmsg!='' || errmsg2!='')
         {
          if (errmsg!='')
           alert('ERROR: ' + errmsg);

          txtfield.focus();
          return false;
         }
        }

        </script> -->

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
							<div class="row" style="width: 100%; padding: 2%; text-align: center; ">
								<div class="column3">
									<h3 class = h3> CHANGE PASSWORD </h3><br>
									<p style="margin-left: 20px; margin-right: 20px; font-size: 13px; text-align: justify;">
										You can now personalize your user password to make it easier for you to remember. However, you should ensure that it is not too easy for anyone else to guess!<BR><BR> Your password must be at least 8-20 characters long. Making your password difficult for anyone else to crack will secure your CRS data.
									</p>
								</div>
								<div class="column4" align=center><br><br><br><br><br>
									<div class="changePasswordBg">
                                        <table style="width: 95%; margin: auto;">
                                                <tr>
                                                <td>
																									<?php if(isset($_GET['error'])) { ?>
																										<p class="error"> <?php echo $_GET['error']; ?></p>
																									<?php } ?>
																									<form class="" action="s_changepass.php" method="post">
                                                <table>
                                                <tr>
                                                    <td class = td2 colspan=2  align=center>
                                                    Student no: <?php echo $sid; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class = td2>Current Password: </td>
                                                    <td>
                                                <input type=password name="oldpass" maxlength=20 min="8" size=40 required>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class = td2>New Password: </td>
                                                    <td>
                                                    <input type=password name="newpass" maxlength=20 min="8" size=40 required>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class = td2> Confirm Password: </td>
                                                    <td>
                                                    <input type=password name="confpass" maxlength=20 size=40 required>
                                                    </td>
                                                </tr>
                                                <tr><td><br></td></tr>
                                                <tr>
                                                    <td class = td2 colspan=2>
                                                <input type= "submit" name="update" value="UPDATE PASSWORD"  class="subbttn">
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
