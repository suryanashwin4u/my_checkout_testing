<?php				
    include './db.php';
    session_start();
    $student_id = $_SESSION['student_id'];
    $sql_5 = "SELECT `course_name`,`course_fee` FROM `course_payment_details` WHERE `student_id`=$student_id";
    if( $result = mysqli_query($conn,$sql_5) ){
        while ( $row = mysqli_fetch_row($result) ) {
            echo "<li class='list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0'>".$row[0]."<span><i class='fas fa-rupee-sign'></i>".$row[1]."</span></li>";
        }
    }else{
         echo "some error takes place";
    }				
?>