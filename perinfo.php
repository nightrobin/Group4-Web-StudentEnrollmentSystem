<!DOCTYPE html>
<html>
	<head>
		<title> Robinson University </title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		 <meta name="viewport" content="width-device=width, initial-scale=1, user-scalable=no">
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="res/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="res/style/theme.css">
        <title>Form</title>
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


	</style>

	<body>
		</nav>
			<nav class="navbar navbar-expand-md navbar-dark fixed-top nav-color nav2 d-flex flex-column flex-md-row justify-content-between">
				<img src="header.png" style="margin-left: 0px;">
					<a class="py-2 d-none d-md-inline-block" href="login.php">LOGIN</a>
			</nav>

			<div class="container-fluid py-3">

            <form method="POST" action="s_perinfo.php">
                <h1>PERSONAL INFORMATION</h1>
                <div class="row ml-2">

                    <div class="col-md-1">
                        <div class="form-group">NAME</div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" class="form-control" name="fname" required>
                            <p class="text-center">FIRST NAME*</p>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group ">
                            <input type="text" class="form-control" name="mname" >
                            <p class="text-center">MIDDLE NAME*</p>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" class="form-control" name="lname" required>
                            <p class="text-center">LAST NAME*</p>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <select class="custom-select" name="ext">
																<option> </option>
                                <option>Jr.</option>
																<option>Sr.</option>
																<option>III</option>
																<option>IV</option>
                            </select>
                            <p class="text-center">NAME EXTENSION</p>
                        </div>
                    </div>
                </div>

                <div class="row ml-3">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-4">LEARNING REFERENCE NUMBER*</div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="lrn" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">BIRTHDATE (YEAR/MONTH/DATE)*</div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="date" class="form-control" name="bday" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">ADDRESS*</div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="address" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">CITIZENSHIP*</div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="citi" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">RELIGION</div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="rel">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">CELLPHONE NUMBER*</div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="tel" class="form-control" name="cpnum" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 text-right">
                        <div class="row">
                            <div class="col-md-4">SEX*</div>
                            <div class="col-md-8">
                                <div class="form-group text-left">
                                    <div class="form-radio form-radio-inline" >
                                        <input class="form-radio-input" type="radio" name ="sex" value="Male" required>
                                        <label class="form-radio-label" for="sex">Male</label>
                                        <input class="form-radio-input" type="radio" name="sex" value="Female" required>
                                        <label class="form-radio-label" for="sex">Female</label>
                                      </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">AGE*</div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="number" class="form-control" name="age" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">HEIGHT (cm)*</div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="number" class="form-control" step=".01" name="he" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">WEIGHT (kg)*</div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="we" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">CIVIL STATUS*</div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <select class="custom-select" name="cs" required>
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
                                    <input type="email" class="form-control" name="email" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <h1>FAMILY BACKGROUND</h1>
                <div class="row ml-2">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-4">FATHER'S NAME*</div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="fathname" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">CONTACT NUMBER*</div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="fathnum" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">GUARDIAN'S NAME</div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="gname">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 text-right">
                        <div class="row">
                            <div class="col-md-4">MOTHER'S NAME*</div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="mothname" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">CONTACT NUMBER*</div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="mothnum" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">GUARDIAN'S NUMBER</div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="gnum">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <h1>EDUCATIONAL BACKGROUND</h1>
                <div class="row ml-2">
                    <div class="col-md-6">

                        <div class="row">
                            <div class="col-md-4">CATEGORY*</div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <select class="custom-select" name="schcateg" required>
                                        <option>SENIOR HIGH SCHOOL</option>
                                        <option>OLD CURRICULUM</option>
                                        <option>ALS</option>
                                        <option>WITH COLLEGE BACKGROUND</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">SCHOOL ADDRESS*</div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="lastschadd" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 text-right">
                        <div class="row">
                            <div class="col-md-4">SCHOOL NAME*</div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="lastsch" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">AVERAGE*</div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="number" class="form-control" name="ave" min="70" step=".01" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <i>Note: Kindly double check your information. All fields with '*' are required</i>
                    </div>
                    <div>
                        <a href="login.php" class="btn btn-outline-dark">Back to Login</a>
                        <button type="submit" class="btn btn-outline-dark" name="submit"> NEXT</button>
                    </div>
                </div>
            </form>
        </div>

			<footer class="container">
			  <center><p>© Company 2021-2022</p></center>
			</footer>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>
