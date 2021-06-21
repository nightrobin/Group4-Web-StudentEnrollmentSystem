<?php
  require_once 'config.php';
  session_start();

  if (!isset($_SESSION['sid'])) {
    header("location: login.php");
    exit();
  }

  $sid = $_SESSION['sid'];

  if($_POST){
    $age = $_POST['age'];
    $ad = $_POST['address'];
    $hei = $_POST['he'];
    $wei = $_POST['we'];
    $cs = $_POST['cs'];
    $cp = $_POST['cpnum'];
    $email = $_POST['email'];
    $fnum = $_POST['fathnum'];
    $mnum = $_POST['mothnum'];
    $gname = $_POST['gname'];
    $gnum = $_POST['gnum'];

    $sql = "UPDATE personalinfo SET age = '$age', address = '$ad', height = '$hei', weight = '$wei', civil_status ='$cs', cpnum = '$cp',
            email = '$email', email = '$email', fathernum = '$fnum', mothernum = '$mnum', gname = '$gname', gnum = '$gnum' WHERE studID= $sid";

    if (mysqli_query($con, $sql)) {
      header('location: updateInfo.php');
    } else {
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
         }
           mysqli_close($conn);
  }
