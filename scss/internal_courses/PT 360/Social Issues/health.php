<?php

session_start();

if( isset($_SESSION['student_login_id']) && isset($_SESSION['student_email_id']) && isset($_SESSION['student_allowed_courses']) ){

    $student_login_id = $_SESSION['student_login_id'];

    $student_email_id = $_SESSION['student_email_id'];

    $student_allowed_courses = $_SESSION['student_allowed_courses'];

    $my_courses = json_decode($student_allowed_courses, true);

    

    if(in_array("PT 360", $my_courses)){

        echo "";

    }else{

         echo "<script>alert('Access denied - you do not have access to this course, please go to your purchased courses....')</script>";

         header("Refresh: 2; url=https://courses.redefedu.com/home.php");

         exit();

    } 

}else{

    echo "<script>alert('Access denied - either you did not logged in or did not purchased any course');</script>";

    header("Refresh: 1; url=https://courses.redefedu.com/login_mycourse.php");

    exit();

}

?>


    <div class="row">

        <section class="col-lg-10 p-3">

            <div>

                <div class="embed-responsive embed-responsive-16by9">

                    <iframe width="1120" height="630" src="https://www.youtube.com/embed/0v-9jN77kv4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                </div>

                <div class="card">

                    <div class="card-header">

                        <div class="media align-items-center">

                            <!-- <div class="media-left">

                                <img src="assets/images/people/110/guy-6.jpg" alt="About Adrian" width="50" class="rounded-circle">

                            </div>
 -->
                            <div class="media-body">

                                <h4 class="card-title"><a href="instructor-profile.html"></a></h4>

                                <!-- <p class="card-subtitle">Instructor</p> -->

                            </div>

                        </div>

                    </div>

                    <!-- <div class="card-body">

                        <p>Having over 12 years exp. Adrian is one of the lead UI designers in the industry Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, aut.</p>
 -->
                        <!-- <a href="" class="btn btn-light"><i class="fab fa-facebook"></i></a>

                        <a href="" class="btn btn-light"><i class="fab fa-twitter"></i></a>

                        <a href="" class="btn btn-light"><i class="fab fa-github"></i></a> -->

                    <!-- </div> -->

                </div>

            </div>

        </section>

    

        <section class="col-lg-2 p-3">

            <div class="card p-1">

                <div class="card-body">

                    <a href="https://drive.google.com/drive/folders/1z6NqXKxWv3sVLHOSyh2menjTJ0rzOPQZ" class="btn btn-primary btn-block flex-column">

                         Download Files

                    </a>

                </div>

            </div>

            <br>

            <div class="card p-1">

                <div class="card-body">

                    <a href="#" class="btn btn-primary btn-block flex-column">

                         Feedback

                    </a>

                </div>

            </div>

            <br>

            <div class="card p-3">

                <div class="card-header">

                    <div class="media align-items-center">

                       <!--  <div class="media-left">

                            <img src="#" alt="image" width="50" class="rounded-circle">

                        </div> -->

                        <div class="media-body">

                            <h4 class="card-title"><a href="">About Us</a></h4>

                            <!-- <p class="card-subtitle">Instructor</p> -->

                        </div>

                    </div>

                </div>

               <!-- <div class="card-body">

                    <p>Having over 12 years exp. Adrian is one of the lead UI designers in the industry Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, aut.</p> -->

                    <!-- <a href="" class="btn btn-light"><i class="fab fa-facebook"></i></a>

                    <a href="" class="btn btn-light"><i class="fab fa-twitter"></i></a>

                    <a href="" class="btn btn-light"><i class="fab fa-github"></i></a> -->

                <!-- </div> -->

            </div>

        </section>

    </div>

   <div class="row" style="justify-content: space-around;">
        <div class="float-left">
            <button class="btn btn-primary">Previous Video</button>
        </div>

        <div class="float-right">
            <button class="btn btn-primary">Next Video</button>
        </div>
    </div>
