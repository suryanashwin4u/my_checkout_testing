<?php 

include "./db.php";

if($_POST['name'] && $_POST['email_id'] && $_POST['phone'] && $_POST['courses_selected']){

    
    $name = $_POST['name'];
    $email_id = $_POST['email_id'];
    $phone = $_POST['phone'];
    $courses_selected = $_POST['courses_selected'];
    
    $sql="INSERT INTO `student_billing_details` (`full_name`, `email_id`, `phone_no`, `course_selected`,`payment_status`, `payment_amount`,`transaction_id` ) VALUES ('$name','$email_id','$phone','$courses_selected','pending','pending','pending' )";
    if(mysqli_query($conn,$sql)){
       echo "console.log('Your details have been submitted')";
    }else{
        echo "some error takes place";
    }
}else{
    echo "please fill out the form first";
}
?>