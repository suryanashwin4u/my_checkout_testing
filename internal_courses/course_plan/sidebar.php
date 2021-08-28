<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

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

</head>
<body>
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<div class="text-center d-none d-md-inline">
    <button class=" border-0" id="sidebarToggle">
        <i class="fa fa-bars" aria-hidden="true" style="color:white;margin-top: 20px;"></i>
    </button>
</div>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" >
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>PT 360 Course List</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>INDIAN POLITY</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar" >
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" style="white-space: normal;" onclick="loading_pages('../PT 360/Indian Polity/Issues related to constitution.php')">1. Issues related to Constitution</a>
            <a class="collapse-item" style="white-space: normal;" onclick="loading_pages('../PT 360/Indian Polity/centre state relation.php')">2. Central - Related to Constitution</a>
            <a class="collapse-item" style="white-space: normal;" onclick="loading_pages('../PT 360/Indian Polity/Polity legislation.php')">3. Legislature</a>
            <a class="collapse-item" style="white-space: normal;" onclick="loading_pages('../PT 360/Indian Polity/polity judiciary.php')">4. Judiciary</a>
            <a class="collapse-item" style="white-space: normal;" onclick="loading_pages('###')">5. Reservation Issues</a>
            <a class="collapse-item" style="white-space: normal;" onclick="loading_pages('../PT 360/Indian Polity/polity Governance Election.php')">6. Governance</a>
            <a class="collapse-item" style="white-space: normal;" onclick="loading_pages('../PT 360/Indian Polity/polity Governance, Act, law, polity & Bills.php')">7. Miscellaneous</a>
        </div>
    </div>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-wrench"></i>
        <span>INTERNATIONAL RELATIONS</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <!-- <h6 class="collapse-header">Custom Utilities:</h6> -->
            <a class="collapse-item" style="white-space: normal;" onclick="loading_pages('../PT 360/International Relationals/Indian and Neighbours.php')">1. Indian and Neighbors</a>
            <a class="collapse-item" style="white-space: normal;" onclick="loading_pages('../PT 360/International Relationals/International Organization.php')">2. International Organization</a>
            <a class="collapse-item" style="white-space: normal;" onclick="loading_pages('../PT 360/International Relationals/Treaty and Agreement.php')">3. Treaty & Agreements</a>
            <a class="collapse-item" style="white-space: normal;" onclick="loading_pages('../PT 360/International Relationals/Transport ,Corridor , Pipeline.php')">4. Transport, Corridor, Pipelines</a>
            <a class="collapse-item" style="white-space: normal;" onclick="loading_pages('../PT 360/International Relationals/West Asia.php')">5. West Asia</a>
            <a class="collapse-item" style="white-space: normal;" onclick="loading_pages('../PT 360/International Relationals/UN Bodies.php')">6. International Financial Institutions</a>
        </div>
    </div>
</li>

     <!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages1"
                 aria-expanded="true" aria-controls="collapsePages1">
            <i class="fas fa-fw fa-folder"></i>
            <span>SOCIAL ISSUES</span>
    </a>
    <div id="collapsePages1" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" style="white-space: normal;" onclick="loading_pages('../PT 360/Social Issues/women_issues.php')">1. Women</a>
        <a class="collapse-item" style="white-space: normal;" onclick="loading_pages('###')">2. Children</a>
        <a class="collapse-item" style="white-space: normal;" onclick="loading_pages('../PT 360/Social Issues/vulnerable_groups.php')">3. Other Vulnerable Sections</a>
        <a class="collapse-item" style="white-space: normal;" onclick="loading_pages('../PT 360/Social Issues/education.php')">4. Education</a>
        <a class="collapse-item" style="white-space: normal;" onclick="loading_pages('../PT 360/Social Issues/health.php')">5. Health</a>
        <a class="collapse-item" style="white-space: normal;" onclick="loading_pages('../PT 360/Social Issues/food_nutrition.php')">6. Food & Nutrition</a>
     </div>
 </div>
</li>


<!-- Nav Item - Profile Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="fa fa-user"></i>
        <span>ENVIRONMENT, GEOGRAPHY AND MAP</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" style="white-space: normal;" onclick="loading_pages('../PT 360/Environment, Geography And Map/food_nutrition.php')">1. Environment Laws, Acts and Regulation</a>
            <a class="collapse-item" style="white-space: normal;" onclick="loading_pages('../PT 360/Environment, Geography And Map/Conventions and Protocols.php')">2. Conventions and Protocols</a>
            <a class="collapse-item" style="white-space: normal;" onclick="loading_pages('../PT 360/Environment, Geography And Map/food_nutrition.php')">3. Conservation efforts in India</a>
            <a class="collapse-item" style="white-space: normal;" onclick="loading_pages('../PT 360/Environment, Geography And Map/bodies and organization.php')">4. Bodies and Organisation</a>
            <a class="collapse-item" style="white-space: normal;" onclick="loading_pages('../PT 360/Environment, Geography And Map/food_nutrition.php')">5. Funds for Enviornement</a>
            <a class="collapse-item" style="white-space: normal;" onclick="loading_pages('../PT 360/Environment, Geography And Map/Species in News.php')">6. Spices in news</a>
            <a class="collapse-item" style="white-space: normal;" onclick="loading_pages('../PT 360/Environment, Geography And Map/food_nutrition.php')">7. Places in News</a>
            <a class="collapse-item" style="white-space: normal;" onclick="loading_pages('../PT 360/Environment, Geography And Map/Places in news.php')">8. MISC.</a>
            <a class="collapse-item" style="white-space: normal;" onclick="loading_pages('../PT 360/Environment, Geography And Map/food_nutrition.php')">9. Geography</a>
            <a class="collapse-item" style="white-space: normal;" onclick="loading_pages('../PT 360/Environment, Geography And Map/food_nutrition.php')">10. Pollution</a>
            <a class="collapse-item" style="white-space: normal;" onclick="loading_pages('../PT 360/Environment, Geography And Map/food_nutrition.php')">11. Biodiversity</a>
        </div>
    </div>
</li>

<!-- Nav Item - Student Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages4"
        aria-expanded="true" aria-controls="collapsePages4">
        <i class="fa fa-users"></i>
        <span>ECONOMY</span>
    </a>
    <div id="collapsePages4" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" style="white-space: normal;" onclick="loading_pages('###')">coming soon.....</a>
        </div>
    </div>
</li>

<!-- Nav Item - Student Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages5"
        aria-expanded="true" aria-controls="collapsePages5">
        <i class="fa fa-users"></i>
        <span>ART AND CULTURE</span>
    </a>
    <div id="collapsePages5" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" style="white-space: normal;" onclick="loading_pages('###')">1. Organisations, Treaties, initiatives etc. </a>
            <a class="collapse-item" style="white-space: normal;" onclick="loading_pages('###')">2. Sculpture and Architecture </a>
            <a class="collapse-item" style="white-space: normal;" onclick="loading_pages('###')">3. Painting </a>
            <a class="collapse-item" style="white-space: normal;" onclick="loading_pages('###')">4. Other Performing Art Forms </a>
            <a class="collapse-item" style="white-space: normal;" onclick="loading_pages('###')">5. Ancient history </a>
            <a class="collapse-item" style="white-space: normal;" onclick="loading_pages('###')">6. Important Events </a>
            <a class="collapse-item" style="white-space: normal;" onclick="loading_pages('###')">7. Personalities </a>
            <a class="collapse-item" style="white-space: normal;" onclick="loading_pages('###')">8. Festival </a>
            <a class="collapse-item" style="white-space: normal;" onclick="loading_pages('###')">9. Prizes and Awards </a>
            <a class="collapse-item" style="white-space: normal;" onclick="loading_pages('###')">10. Ancient port cities </a>
            <a class="collapse-item" style="white-space: normal;" onclick="loading_pages('###')">11. Heritage </a>
            <a class="collapse-item" style="white-space: normal;" onclick="loading_pages('###')">12. Traditions </a>
            <a class="collapse-item" style="white-space: normal;" onclick="loading_pages('../PT 360/Art And Culture/gi_tags.php')">13. GI tags </a>
            <a class="collapse-item" style="white-space: normal;" onclick="loading_pages('###')">14. Tribes </a>
            <a class="collapse-item" style="white-space: normal;" onclick="loading_pages('###')">15. Miscellaneous </a>
            <a class="collapse-item" style="white-space: normal;" onclick="loading_pages('###')">16. Static Topic In News </a>
        </div>
    </div>
</li>


<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages6"
        aria-expanded="true" aria-controls="collapsePages6">
        <i class="fa fa-users"></i>
        <span>INTERNAL SECURITY</span>
    </a>
    <div id="collapsePages6" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" style="white-space: normal;" onclick="loading_pages('###')">1. Important Legislation</a>
            <a class="collapse-item" style="white-space: normal;" onclick="loading_pages('###')">2. Missiles</a>
            <a class="collapse-item" style="white-space: normal;" onclick="loading_pages('###')">3. Submarine and ships</a>
            <a class="collapse-item" style="white-space: normal;" onclick="loading_pages('###')">4. Aircrafts and Helicopter</a>
            <a class="collapse-item" style="white-space: normal;" onclick="loading_pages('###')">5. Space</a>
            <a class="collapse-item" style="white-space: normal;" onclick="loading_pages('###')">6. Other Weapons System</a>
            <a class="collapse-item" style="white-space: normal;" onclick="loading_pages('###')">7. Cyber Security</a>
            <a class="collapse-item" style="white-space: normal;" onclick="loading_pages('###')">8. Indian Armed Forces</a>
            <a class="collapse-item" style="white-space: normal;" onclick="loading_pages('###')">9. Security Issues in Northeast Important Military Exercise / Operation.</a>
            <a class="collapse-item" style="white-space: normal;" onclick="loading_pages('###')">10. Miscellaneous.</a>
        </div>
    </div>
</li>



<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages7"
        aria-expanded="true" aria-controls="collapsePages7">
        <i class="fa fa-users"></i>
        <span>GOVERNANCE, MINISTRIES, SCHEMES, POLICIES, ACTS AND BILLS</span>
    </a>
    <div id="collapsePages7" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" style="white-space: normal;" onclick="loading_pages('###')">1. Structure of all Ministries and departments.</a>
            <a class="collapse-item" style="white-space: normal;" onclick="loading_pages('###')">2. Schemes.</a>
        </div>
    </div>
</li>


<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">


<!-- Sidebar Message -->
<!-- <div class="sidebar-card d-none d-lg-flex">
    <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
    <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
    <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
</div> -->

</ul>



 <!-- Bootstrap core JavaScript-->
 <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>



<!--- Admin--->

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    
    <script src="js/sb-admin-2.js"></script>





    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>





<!-- 
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>


    <script src="js/sb-admin-2.min.js"></script>
    


    <script src="vendor/chart.js/Chart.min.js"></script>

    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script> -->


</body>
</html>