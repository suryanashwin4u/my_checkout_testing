<?php
session_start();
if ( isset($_POST['new_password']) && isset($_POST['new_confirm_password']) ) 
{
    $new_password = $_POST['new_password'];
    $new_confirm_password = $_POST['new_confirm_password'];

    if($new_password == $new_confirm_password)
    {
        $sql_1 = "UPDATE `student_lms_credentials` SET `password`='$new_password' WHERE `id`='$student_login_id' ";
        if($result = mysqli_query($conn,$sql_1))
        {
        echo "Your Password has been Updated";
        }
        else
        {
        echo "Error while updating password";    
        }        
    }
    else
    {
        echo "password and confirm password did not matched";
    }
}else{
    header("location: ./login_mycourse.php");
}

?>