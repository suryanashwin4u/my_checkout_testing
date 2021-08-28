<?php 

include "./db.php";

if( $_POST['course_code'] && $_POST['phone'] ){

    $course_code = $_POST['course_code'];
    $phone = $_POST['phone'];

    $sql_1 = "DELETE FROM `course_payment_details` WHERE `course_code`='$course_code' AND `phone`='$phone'";

    if(mysqli_query($conn,$sql_1)){
        echo "Data saved successfully";
    }else{
        echo "some error takes place";
    }
}else{
        echo "please fill out the form before submitting details";
}

?>