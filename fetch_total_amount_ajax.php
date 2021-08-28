<?php		

include './db.php';
if(isset($_SESSION[' phone '])){
    $phone = $_SESSION['phone'];
    $sum=0;
    $sql = "SELECT SUM( course_fee ) FROM `course_payment_details` WHERE `phone`=' $phone '";
    $result = mysqli_query($conn,$sql);
    while( $row = mysqli_fetch_array( $result ) ){
        $sum = $row['SUM( course_fee )'];
    }
    echo $sum;
}
   
?>