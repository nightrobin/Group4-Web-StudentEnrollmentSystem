<?php
session_start();

  if (isset($_SESSION['lrn'])) {
    header('location: chooseCourse.php');
  }
  else if (isset($_POST['lrn'])) {
    $lrn = $_POST['lrn'];
    $_SESSION['lrn'] = $lrn;
  }


require_once "config.php";

if($_POST){
  	$lrn = $_POST['lrn'];
    $email = $_POST['email'];
  	$sql = "SELECT * FROM personalinfo WHERE lrn='$lrn'";
  	$results = mysqli_query($con, $sql);
  	if (mysqli_num_rows($results) > 0) {
  	  echo '<script>alert("You are already registered.") </script>';
      echo '<script>window.location = "perinfo.php"</script>';
    }
     else {
          $fname = $_POST['fname'];
          $lname = $_POST['lname'];
          $mname = $_POST['mname'];
          $fathname = $_POST['fathname'];
          $mothname = $_POST['mothname'];
          $ext = $_POST['ext'];
          $age = $_POST['age'];
          $lrn = $_POST['lrn'];
          $sex = $_POST['sex'];
          $bday = $_POST['bday'];
          $address = $_POST['address'];
          $he = $_POST['he'];
          $we = $_POST['we'];
          $citi = $_POST['citi'];
          $rel = $_POST['rel'];
          $cs = $_POST['cs'];
          $cpnum = $_POST['cpnum'];
          $email = $_POST['email'];
          $fathnum = $_POST['fathnum'];
          $mothnum = $_POST['mothnum'];
          $gname = $_POST['gname'];
          $gnum = $_POST['gnum'];
          $schcateg = $_POST['schcateg'];
          $cate = $_POST['cate'];
          $lastsch = $_POST['lastsch'];
          $lastschadd = $_POST['lastschadd'];
          $ave = $_POST['ave'];


              $sql = "INSERT INTO personalinfo (lastname, firstname, middlename, nExtension, lrn, seks, birthdate, age, address, height, citizenship, weight,
                      religion, civil_status, cpnum, email, fathername, mothername, fathernum, mothernum, gname, gnum, schcategory,lschname,lschadd,ave)
                      VALUES ('$lname','$fname','$mname','$ext','$lrn','$sex','$bday','$age','$address','$he','$citi','$we','$rel','$cs','$cpnum','$email',
                        '$fathname','$mothname','$fathnum','$mothnum','$gname','$gnum','$schcateg','$lschname','$lastschadd','$ave');";

                      mysqli_query($con, $sql);
                        header("location: chooseCourse.php?info=success");

  	}
  	exit();
  }


  ?>
