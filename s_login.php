<?php
session_start();
require_once 'config.php';
if (isset($_POST['sid']) && isset($_POST['pw'])) {

    function validate($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    $sid = validate($_POST['sid']);
    $pw = validate($_POST['pw']);

      $sql = "SELECT * FROM personalinfo WHERE studID = '$sid' AND password = '$pw'";

      $result = mysqli_query($con, $sql);

      if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if ($sid == '2021' && $pw == '2021') {
          header("location: login.php?error=Incorrect Student Number or Password");
          exit();
        } else if ($row['studID'] === $sid && $row['password'] === $pw){
          $_SESSION['sid'] = $row['studID'];
          header('location: logintabs.php');
          exit();
        }else {
          header("location: login.php?error=Incorrect Student Number or Password");
          exit();
        }
      } else {
        header("location: login.php?error=No Record found.");
        exit();
      }
}
else {
  header('location: login.php');
  exit();
}


 ?>
