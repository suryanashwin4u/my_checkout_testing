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

    <!-- <script>
        function loading_pages(page_name){
            $.ajax({
                    url: page_name,
                    success: function(data) 
                    {
                        $('#load_here').html(data);
                    }
                });
            }
    </script> -->

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
        <span><?php echo $course_name; ?></span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<?php 

include "./db.php";

// $lecture_plan = array();
  
// $lecture_plan['INDIAN POLITY'] = array("Issues related to Constitution","Central - Related to Constitution","Legislature","Judiciary","Reservation Issues","Governance","Miscellaneous");

// $lecture_plan['INTERNATIONAL RELATIONS'] = array("Indian and Neighbors","International Organization","Treaty & Agreements","Transport, Corridor, Pipelines","West Asia","International Financial Institutions");

// $lecture_plan['SOCIAL ISSUES'] = array("Women","Children","Other Vulnerable","Education","Health","Food & Nutrition");

//$json_ques = json_encode($lecture_plan);

//$sql= "UPDATE `courses_description` SET `course_plan`='$json_ques'";

$sql= "SELECT `course_plan` FROM `courses_description`";

if($result = mysqli_query($conn,$sql)){
   
   $row = mysqli_fetch_row($result);
   
   $json_decode=json_decode($row[0],true);

   $dropdown_array= array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");

    $i=1;

    foreach ($json_decode as $key => $value_array){
        echo "<li class='nav-item'>
               <a class='nav-link collapsed' href='#' data-toggle='collapse' data-target='#".$dropdown_array[$i]."'
                    aria-expanded='true' >
                    <i class='fas fa-fw fa-cog'></i>
                    <span>".$key."</span>
               </a>
               <div id='".$dropdown_array[$i]."' class='collapse' aria-labelledby='headingTwo' data-parent='#accordionSidebar' >
                    <div class='bg-white py-2 collapse-inner rounded'>";

        $i++;
        $num=1;

        foreach ($value_array as $value){
            echo "<a class='collapse-item' style='white-space: normal;' id='".$value."' onclick='show_video(this)'>".$num.". ".$value."</a>";
            $num++;
        }

        echo "</div></div></li>";        
        }
    }
    else
    {
    echo "query failed";
    }
    
?>
<script type="text/javascript">
    
    function show_video(get_this){

        jQuery.ajax({

                type:'post',

                url:'send_video_title_link.php',

                data:'video_title='+ get_this.id,

                success:function(result){
                    $("#show_video_here").html(result);
                }

            });
    }

</script>


<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">


<!-- Sidebar Message -->
<!-- <div class="sidebar-card d-none d-lg-flex">
    <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
    <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
    <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
</div> -->

</ul>

    <script src="vendor/jquery/jquery.min.js"></script>

    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

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