<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sidebar</title>
   
   <!-- Custom fonts for this template-->
   <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script>
        function loading_pages(page_name){
            $.ajax({
                    url: page_name,
                    success: function(data) 
                    {
                        $('#load_here').html(data);
                        
                    }
                });
            }
    </script>

    <style>
        li{
            cursor: pointer;
        }
    </style>
</head>
<body>
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class=" border-0" id="sidebarToggle"><i class="fa fa-bars" aria-hidden="true" style="color:white;margin-top: 20px;"></i></button>
</div>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" >
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Student Dashboard</span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link collapsed"  onclick="loading_pages('my_courses.php')">
        <i class="fa fa-users"></i>
        <span >My Courses</span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link collapsed"  onclick="loading_pages('free_resources.php')" >
        <i class="fa fa-users"></i>
        <span>Free Resources</span>
    </a>
</li>

<!-- Nav Item - Pages Collapse Menu -->


<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed"  onclick="loading_pages('upload_copy.php')">
        <i class="fa fa-upload"></i>
        <span>Upload Copy</span>
    </a>
</li>


<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link"  onclick="loading_pages('lecture_schedule.php')">
        <i class="fas fa-fw fa-folder"></i>
        <span>Lecture Schedule</span>
    </a>
</li>

<!-- Nav Item - Profile Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed"  onclick="loading_pages('test_series_portal.php')">
        <i class="fa fa-user"></i>
        <span>Test Series Portal</span>
    </a>
</li>

<!-- Nav Item - Charts -->
<li class="nav-item">
    <a class="nav-link"  onclick="loading_pages('expert_support.php')">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Experts Support</span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link"  onclick="loading_pages('my_profile.php')"  >
        <i class="fa fa-book"></i>
        <span>My Profile</span>
    </a>
</li>
<!-- Nav Item - Tables -->
<li class="nav-item">
    <a class="nav-link" id="logout" data-toggle="modal" data-target="#logoutModal">
        <i class="fas fa-fw fa-table"></i>
        <span>Log Out</span>
    </a>
</li>

</ul>

<!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<!--- student--->
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    
    <script src="js/sb-admin-2.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
</body>
</html>