<?php

require_once 'config.php';
session_start();

if (!isset($_SESSION['sid'])) {
  header("location: login.php");
  exit();
}

$sid = $_SESSION['sid'];

  if ($_POST) {
    require_once 'config.php';
    $op = $_POST['oldpass'];
    $np = $_POST['newpass'];
    $cp = $_POST['confpass'];

      $sql = "SELECT * FROM personalinfo WHERE studID = '$sid'";
      $result = mysqli_query($con, $sql);
      if ($result) {
      while ($row = mysqli_fetch_assoc($result)){

        if ($np != $cp) {
        header("location: changePassword.php?error=New Password Doesn't Match!");
        exit();
      } else if($op === $np) {
        header("location: changePassword.php?error=New Password should be different from the previous one.");
        exit();
      } else if (strlen($np) < 8) {
        header("location: changePassword.php?error=Password must be 8 or more characters.");
        exit();
      } else if ($op != $row['password']) {
        header("location: changePassword.php?error=Current Password is incorrect.");
        exit();
      } else {
        $sql = "UPDATE personalinfo SET password = '$np' WHERE studID= '$sid'";
        if (mysqli_query($con, $sql)) {
          header("location: changePassword.php?error=Password successfully changed.");
          exit();
        } else {
             echo "Error: " . $sql . "<br>" . mysqli_error($conn);
             }
               mysqli_close($conn);
        }
      }
    }
}




 ?>
