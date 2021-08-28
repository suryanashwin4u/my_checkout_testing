<?php
include "./db.php";
if(isset($_POST['transaction_id']) && isset($_POST['coupon_code'])){

    $transaction_id = $_POST['transaction_id'];
    $coupon_code = $_POST['coupon_code'];

    $sql = "UPDATE `student_billing_details` SET  `coupon_code`='$coupon_code'  WHERE  `transaction_id` = '$transaction_id'";

    if(mysqli_query($conn, $sql)){
        echo "coupon code updated successfully";
    } 
    else{
        echo "Error updating record: " . mysqli_error($conn);
    }
}
else{
    echo "You cant access this page without admin request";
}
?>
