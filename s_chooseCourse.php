<?php
  require_once 'config.php';
  session_start();

  if (!isset($_SESSION['lrn'])) {
    header("location: perinfo.php");
    exit();
  }

  $lrn = $_SESSION['lrn'];

  if($_POST){
    $first = $_POST['first'];
    $second = $_POST['second'];
    $third = $_POST['third'];


      if ($first === $second || $first === $third || $second === $third) {
        echo '<script>alert("Choices must be different.") </script>';
        echo '<script>window.location = "chooseCourse.php"</script>';
      } else {
        $no = mt_rand(202100000, 202199999);
      $sid = $no;
      $password = $sid;
      if ($first == "Bachelor of Science in Architecture") {
            $college = "CAUP";
            $sched = 1;
      } else if ($first == "Bachelor of Science in Chemical Engineering" || $first == "Bachelor of Science in Civil Engineering"
              || $first == "Bachelor of Science in Computer Engineering " || $first == "Bachelor of Science in Computer Science"
              || $first == "Bachelor of Science in Electrical Engineering" || $first == "Bachelor of Science in Electronics Engineering"
              || $first == "Bachelor of Science in Information Technology" || $first == "Bachelor of Science in Manufacturing Engineering"
              || $first == "Bachelor of Science in Mechanical Engineering") {
            $college = "CET";
            $sched = 2;
      } else if ($first == "Bachelor of Arts in Communication" || $first == "Bachelor of Arts in Communication Major in Public Relations"
                 || $first == "Bachelor of Arts in Public Relations" || $first == "Bachelor of Science in Social Work") {
            $college = "CHASS";
            $sched = 3;
      } else {
            $college = "CN";
            $sched = 4;
      }

        $sql = "UPDATE personalinfo SET studID = '$sid', password = '$password', course = '$first', college = '$college', sched ='$sched' WHERE lrn= $lrn";
        if (mysqli_query($con, $sql)) {
          echo '<script>alert("Application Submitted") </script>';
          echo '<script>window.location = "login.php?=success"</script>';
		    } else {
			       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		         }
		           mysqli_close($conn);
      }
    }
 ?>
