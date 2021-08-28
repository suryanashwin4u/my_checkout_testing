<?php

// session_start();

// if( isset($_SESSION['student_login_id']) && isset($_SESSION['student_email_id']) && isset($_SESSION['student_allowed_courses'])){

//     $student_login_id = $_SESSION['student_login_id'];

//     $student_email_id = $_SESSION['student_email_id'];

//     $student_allowed_courses = $_SESSION['student_allowed_courses'];

// }else{

//     header("location: ../../login_mycourse.php");

// }

include "./db.php";
$course_name = 'PT 360';

// $assoc_array_title_videos = array();
// $array_title = array();
// $array_videos_link = array();

$sql_1 = "SELECT * FROM `courses_description` WHERE `course_name`= '$course_name'";
if($result = mysqli_query($conn,$sql_1)){
    
    $row = mysqli_fetch_assoc($result);

    $course_id = $row['course_id'];
    $course_name = $row['course_name']; 
    $course_plan = $row['course_plan']; 
    $course_description = $row['course_description']; 
    $course_download_link = $row['course_download_link']; 
    $course_about_us = $row['course_about_us']; 
    $course_feedback_form_link = $row['course_feedback_form_link']; 

   //  $sql_2 = "SELECT * FROM `video_title_description_links` WHERE `course_name`= '$course_name'";
   //  if($result = mysqli_query($conn,$sql_2))
   //  {
   //     while ($row = mysqli_fetch_row($result)) 
   //     {
   //          array_push($array_title,$row[2]);
   //          array_push($array_videos_link,$row[4]);
   //     }
   //     if(count($array_title) == count($array_videos_link)){
   //          $assoc_array_title_videos = array_combine($array_title, $array_videos_link);
   //     }else{
   //          echo "<script>alert('arrays ')</script>";
   //     }
   // }
}else{
    echo "Query Unsuccessfull";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>learning Management System</title>

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link  href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.map"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.min.map"></script>


   <script>
    //Bydefault open this page
       // $(function() {
       //    jQuery.ajax({

       //              type:'post',

       //              url:'send_video_title_link.php',

       //              data:'video_title='+ '',

       //              success:function(result){
       //                  $("#show_video_here").html(result);
       //              }

       //          });
       //  });
     
    </script>


</head>

<body id="page-top">
    <div id="wrapper">
        <?php include './sidebar.php'; ?>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a href="https://redefedu.com/">
                        <img width="150" height="40" src="https://redefedu.com/wp-content/uploads/2021/04/redefedu_synopsis_ias-removebg-preview.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://redefedu.com/wp-content/uploads/2021/04/redefedu_synopsis_ias-removebg-preview.png 929w, https://redefedu.com/wp-content/uploads/2021/04/redefedu_synopsis_ias-removebg-preview-300x87.png 300w, https://redefedu.com/wp-content/uploads/2021/04/redefedu_synopsis_ias-removebg-preview-768x222.png 768w, https://redefedu.com/wp-content/uploads/2021/04/redefedu_synopsis_ias-removebg-preview-600x174.png 600w" sizes="(max-width: 929px) 100vw, 929px">                                
                    </a>
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                    aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                        Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                            $290.29 has been deposited into your account!
                                        </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                            Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                               alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                                problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                                alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                               would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                                alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                                the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                                alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                                told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                            <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    <?php echo $student_email_id; ?>
                                </span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">
                                <a class="dropdown-item" onclick="loading_pages('')" >
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Profile
                                </a>
                                <a class="dropdown-item" onclick="loading_pages('')" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>

                <div class="container-fluid" id="load_here">
                    <div class="row">
                        <section class="col-lg-10 p-1">
                            <div>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <div id="show_video_here">
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <div class="media align-items-center">
                                        <!-- <div class="media-left">
                                            <img src="assets/images/people/110/guy-6.jpg" alt="About Adrian" width="50" class="rounded-circle">
                                            </div>-->
                                            <div class="media-body">
                                                <h4 class="card-title">
                                                    <a href="#"></a>
                                                </h4>
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
                            <br>
                                             
                            <div class="row" style="justify-content: space-between;">
                                <div class="float-left">
                                    <button class="btn btn-primary" onclick="previous_video()">Previous Video</button>
                                </div>

                                <div class="float-right">
                                    <button class="btn btn-primary" onclick="next_video()">Next Video</button>
                                </div>
                            </div>
                        </section>

                        <script>

                            function previous_video(){

                                jQuery.ajax({

                                        type:'post',

                                        url:'get_previous_video.php',

                                        data:'video_title='+ get_this.id,

                                        success:function(result){
                                            $("#show_video_here").html(result);
                                        }

                                    });

                            }

                            function next_video(){

                                jQuery.ajax({

                                            type:'post',

                                            url:'get_next_video.php',

                                            data:'video_title='+ get_this.id,

                                            success:function(result){
                                                $("#show_video_here").html(result);
                                            }

                                        });

                            }

                        </script>

                        <section class="col-lg-2 p-1">
                            <div class="card p-1">
                                <div class="card-body">
                                    <a href="<?php echo $course_download_link;?>" class="btn btn-primary btn-block flex-column" >
                                        Download Files
                                    </a>
                                </div>
                            </div>
                            <br>
                            <div class="card p-1">
                                <div class="card-body">
                                    <a href="<? php echo $course_feedback_form_link; ?>" class="btn btn-primary btn-block flex-column">
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
                                        <h4 class="card-title"><a href="https://redefedu.com/about-us/">About Us</a></h4>
                                        <p class="card-subtitle"><?php echo $course_about_us; ?></p>
                                    </div>
                                </div>
                            </div>
                        <!-- <div class="card-body">

                                <p>Having over 12 years exp. Adrian is one of the lead UI designers in the industry Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, aut.</p> -->

                                <!-- <a href="" class="btn btn-light"><i class="fab fa-facebook"></i></a>

                                <a href="" class="btn btn-light"><i class="fab fa-twitter"></i></a>

                                <a href="" class="btn btn-light"><i class="fab fa-github"></i></a> -->

                            <!-- </div> -->
                        </section>
                    </div>
                </div>
                <!-- End of Main Content -->

            <!-- Footer -->
           <!--  <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer> -->
            <!-- End of Footer -->

</div>
        <!-- End of Content Wrapper -->

</div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
</div>
 <!-- Bootstrap core JavaScript-->
 <!-- <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>  -->

    <!-- Core plugin JavaScript-->
    <!-- <script src="vendor/jquery-easing/jquery.easing.min.js"></script> -->

    <!-- Custom scripts for all pages-->
  

    <script src="js/sb-admin-2.js"></script>

    <!-- Page level plugins -->
    <!-- <script src="vendor/chart.js/Chart.min.js"></script> -->

    <!-- Page level custom scripts -->
     <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script> 

</body>

</html>