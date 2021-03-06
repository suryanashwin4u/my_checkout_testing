<?php 
    session_start();
    // $_SESSION['student_id'] = $student_id = 1;
    
    if( isset($_SESSION['student_login_id']) && isset($_SESSION['student_email_id']) && isset($_SESSION['student_allowed_courses']) ){

        $student_login_id = $_SESSION['student_login_id'];
        $student_email_id = $_SESSION['student_email_id'];
        $student_allowed_courses = $_SESSION['student_allowed_courses'];

        $my_courses = json_decode($student_allowed_courses, true);  
    }else{
        echo "<script>alert('Either you did not login or purchased any course to get access this page');</script>";
        header("Refresh: 1; url=./checkout_ashwani.php");
        exit();
    }

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Student Dashboard</title>
    <style>

    </style>
  </head>
  <body>
      
<div class="container text-center">
  <!-- <h1>welcome <?php echo $student_email_id;?></h1> -->
<section class="p-3">
    <div class="card-deck">
    <?php
        foreach($my_courses as $course_name){
          echo "<div class='card'>
                  <div class='card-body'>
                      <h5 class='card-title p-3'>".$course_name."</h5>
                      <a href='./internal_courses/".$course_name."/c1.php'  class='btn btn-primary'>view now</a>
                  </div>
                </div>";    
        }
    ?>
    </div>
</section>
<h5><a href="./logout.php" class="btn btn-danger">logout</a></h5>
 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>