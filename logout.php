<?php
include_once 'config.php';

session_start();
  $sid = $_SESSION['sid'];
$sql = "SELECT * FROM personalinfo WHERE studID = '$sid' ";
$result= mysqli_query($con, $sql);
if ($result) {
  if($row = mysqli_fetch_array($result)) {
    if ($row['enrollStatus'] === "Not Yet Enrolled") {
      echo '<script>alert("You are not yet enrolled. You\'ll be directed to Enroll Tab.") </script>';
      echo '<script>window.location = "viewSched.php"</script>';
    } else {
        session_unset();
        session_destroy();
        header('location: login.php');
      }
  }
}

 ?>
