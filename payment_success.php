<?php
include('./db.php');
// session_start();
// if( isset($_POST['student_amount'] ) && isset( $_POST['student_name'] ) ){
// 	$amount=$_POST['student_amount'];
// 	$student_name=$_POST['student_name'];
// 	$payment_status="pending";
// 	$payment_attempt_date=date('Y-m-d h:i:s');
// 	$sql1="insert into course_payment_details(`student_name`,`amount`,`payment_status`,`payment_attempt_date`) values('$student_name','$amount','$payment_status','$payment_attempt_date')";
// 	$result1=mysqli_query($conn,$sql1);
// 	$_SESSION['old_id']=mysqli_insert_id($conn);
// }
// if( isset( $_POST['payment_id']) && isset($_SESSION['old_id'] ) ){
// 	$payment_id=$_POST['payment_id'];
// 	$payment_status="complete";
// 	$payment_attempt_date=date('Y-m-d h:i:s');
// 	$sql2="update course_payment_details set payment_status='complete',payment_id='$payment_id' where student_id='".$_SESSION['old_id']."'";
// 	$result2=mysqli_query($conn,$sql2);
// }
if( isset( $_POST['transaction_id']) && isset( $_POST['phone']) && isset( $_POST['payment_amount'])) {
	date_default_timezone_set('Asia/Kolkata');
	$transaction_id = $_POST['transaction_id'];
	$phone = $_POST['phone'];
	$payment_amount = $_POST['payment_amount'];
	$payment_attempt_date = date('d-m-y h:i:s');
	$sql_2 = "UPDATE `student_billing_details` SET `payment_status`='complete',`payment_amount`='$payment_amount', `transaction_id`='$transaction_id', `date_time`='$payment_attempt_date' WHERE `phone_no` = '$phone' AND `transaction_id`='pending'";
	if($result = mysqli_query($conn,$sql_2)){
		echo "student billing details updated after payment success";
	}else{
		echo "student billing details db query failed after payment success";
	}
}
?>