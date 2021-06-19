<?php
  session_start();

  if (!isset($_SESSION['lrn'])) {
    header("location: perinfo.php");
    exit();
  }

  $lrn = $_SESSION['lrn'];
?>

<!DOCTYPE html>
  <html>
    <head>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

      <title>CHOOSE COURSE</title>
      <body>
        <style>
          body {
            column-fill: auto;
            background-color: #DBE6FD;
            margin-top: 30px;
            margin-bottom: 30px;
          }
          .leftside {
            background-color: #47597E;
            color: white;
            width: 550px;
          }
          .rightside {
          background-color:white;
          width: 550px;
          }
        </style>

      <div class="container">
        <div class = "row">
          <div class = "leftside">
            <div class="col-md-12">

            <p>APPLYING AS: <?php echo $lrn; ?></p>
              <p style = "font-family: 'Times New Roman'; font-size: 20px;"> <strong>LIST OF AVAILABLE COURSES </strong> </p>

                <p> &nbsp;&nbsp;&nbsp;&nbsp; COLLEGE OF ARCHITECTURE AND URBAN PLANNING </p>
                <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bachelor of Science in Architecture - BS Arch </p>
                <p> &nbsp;&nbsp;&nbsp;&nbsp; COLLEGE OF ENGINEERING AND TECHNOLOGY </p>
                <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bachelor of Science in Chemical Engineering - BSCHE <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bachelor of Science in Civil Engineering - BSCE <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bachelor of Science Computer Engineering - BS CpE <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bachelor of Science in Computer Science - BSCS <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bachelor of Science in Electrical Engineering - BSEE <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bachelor of Science in Electronics Engineering - BS ECE <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bachelor of Science in Information Technology - BSIT <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bachelor of Science in Manufacturing Engineering - BSMFGE <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bachelor of Science in Mechanical Engineering - BSME&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </p>
                <p> &nbsp;&nbsp;&nbsp;&nbsp; COLLEGE OF HUMANITIES, ARTS, AND SOCIAL SCIENCES </p>
                <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bachelor of Arts in Communication - BAC <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bachelor of Arts in Communication Major in Public Relations - BA <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bachelor of Arts in Public Relations - BAPR <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bachelor of Science in Social Work - BS SW</p>
                <p> &nbsp;&nbsp;&nbsp;&nbsp; COLLEGE OF NURSING </p>
                <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bachelor of Science in Nursing - BSN </p>
              </div>
            </div>

            <form action="s_chooseCourse.php" method="post">


            <div class = "rightside">
              <div class="col-md-12">
                <p style = "font-family: 'Times New Roman'; font-size: 20px;"> <strong> SELECT COURSE </strong> <br> <br> <br> </p>
                  <div class = "Courses - First Choice">
                    <p>FIRST CHOICE </p>
                      <select name="first" required>
                        <option>Bachelor of Science in Architecture</option>
                        <option>Bachelor of Science in Chemical Engineering</option>
                        <option>Bachelor of Science in Civil Engineering</option>
                        <option>Bachelor of Science in Computer Engineering</option>
                        <option>Bachelor of Science in Computer Science</option>
                        <option>Bachelor of Science in Electrical Engineering</option>
                        <option>Bachelor of Science in Electronics Engineering</option>
                        <option>Bachelor of Science in Information Technology</option>
                        <option>Bachelor of Science in Manufacturing Engineering</option>
                        <option>Bachelor of Science in Mechanical Engineering</option>
                        <option>Bachelor of Arts in Communication</option>
                        <option>Bachelor of Arts in Communication Major in Public Relations</option>
                        <option>Bachelor of Arts in Public Relations</option>
                        <option>Bachelor of Science in Social Work</option>
                        <option>Bachelor of Science in Nursing</option>
                      </select>
                    </div>

                    <div class = "Courses - Second Choice">
                      <p> <br>SECOND CHOICE </p>
                      <select name="second" required>
                        <option>Bachelor of Science in Architecture</option>
                        <option>Bachelor of Science in Chemical Engineering</option>
                        <option>Bachelor of Science in Civil Engineering</option>
                        <option>Bachelor of Science in Computer Engineering</option>
                        <option>Bachelor of Science in Computer Science</option>
                        <option>Bachelor of Science in Electrical Engineering</option>
                        <option>Bachelor of Science in Electronics Engineering</option>
                        <option>Bachelor of Science in Information Technology</option>
                        <option>Bachelor of Science in Manufacturing Engineering</option>
                        <option>Bachelor of Science in Mechanical Engineering</option>
                        <option>Bachelor of Arts in Communication</option>
                        <option>Bachelor of Arts in Communication Major in Public Relations</option>
                        <option>Bachelor of Arts in Public Relations</option>
                        <option>Bachelor of Science in Social Work</option>
                        <option>Bachelor of Science in Nursing</option>
                      </select>
                    </div>

                    <div class = "Courses - Third Choice">
                      <p> <br>THIRD CHOICE </p>
                      <select name="third" required>
                        <option>Bachelor of Science in Architecture</option>
                        <option>Bachelor of Science in Chemical Engineering</option>
                        <option>Bachelor of Science in Civil Engineering</option>
                        <option>Bachelor of Science in Computer Engineering</option>
                        <option>Bachelor of Science in Computer Science</option>
                        <option>Bachelor of Science in Electrical Engineering</option>
                        <option>Bachelor of Science in Electronics Engineering</option>
                        <option>Bachelor of Science in Information Technology</option>
                        <option>Bachelor of Science in Manufacturing Engineering</option>
                        <option>Bachelor of Science in Mechanical Engineering</option>
                        <option>Bachelor of Arts in Communication</option>
                        <option>Bachelor of Arts in Communication Major in Public Relations</option>
                        <option>Bachelor of Arts in Public Relations</option>
                        <option>Bachelor of Science in Social Work</option>
                        <option>Bachelor of Science in Nursing</option>
                      </select>
                    </div>


                    <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>

                      <button type="submit" class="btn btn-secondary -dark btn-block" role="button">SUBMIT APPLICATION</a><br>
                    </div>
                    </div>
                      </form>
                </div>
                </div>
                  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            </body>
          </head>
      </html>
