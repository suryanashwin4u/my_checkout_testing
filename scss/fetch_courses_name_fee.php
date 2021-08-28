<?php 

include "./db.php";

if( $_POST['course_code']){

    $course_code = $_POST['course_code'];

    $sql_0 = "SELECT `course_fee`,`course_name` FROM `redefedu_courses` WHERE `course_code`='$course_code'";

    if($result=mysqli_query($conn,$sql_0)){
        $row = mysqli_fetch_array($result);
        $total_amount += $row['course_fee'];
        echo json_encode(array("course_fee"=>$row['course_fee'],"course_name"=>$row['course_name']));
        
    }
}
   
//     $sql_1 = "INSERT INTO  `course_payment_details` ( `phone`, `course_code`,`course_name`, `course_fee`, `payment_status`, `transaction_id`)
//     VALUES ( '$phone','$course_code','$course_name','$course_fee','pending','pending');";

//     if(mysqli_query($conn,$sql_1)){
//         echo "Data saved successfully";
//     }else{
//         echo "some error takes place";
//     }
// }else{
//     echo "please fill out the form before submitting details";
// }

?>