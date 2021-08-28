<?php 

    session_start();

    if( isset($_SESSION['student_login_id']) && isset($_SESSION['student_email_id']) && isset($_SESSION['student_allowed_courses']) ){



        $student_login_id = $_SESSION['student_login_id'];

        $student_email_id = $_SESSION['student_email_id'];

        $student_allowed_courses = $_SESSION['student_allowed_courses'];

        

        $my_courses = json_decode($student_allowed_courses, true);  

    }else{

        header("url=./checkout_ashwani.php");

        // exit();

    }

?>



<div class="container text-center">

<section class="p-3">

    <h3>

        <div class="text-danger" style="font-weight: 900;"> My Courses </div>

    </h3>

    <div class="card-deck">

    <?php
        foreach($my_courses as $course_name){
          echo "<div class='card'>
                  <div class='card-body'>
                      <h5 class='card-title p-3'>" . $course_name . "</h5>
                      <a href='./internal_courses/course_plan/index.php' target='_blank' class='btn btn-primary'>view now</a>
                  </div>
                </div>";    
        }
    ?>

    </div>

</section>



</html>