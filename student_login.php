<?php
include "./db.php";
if(isset($_POST['email_id']) && isset($_POST['password']))
{

    if(empty(trim($_POST["email_id"])))
    {
        echo "Please enter your email id";
    }
    elseif(!filter_var(trim($_POST["email_id"]), FILTER_VALIDATE_EMAIL))
    {
        echo "Please type your correct Email id";
    }
    else
    {
        $email_id = trim($_POST["email_id"]);
    }
    
    if(empty(trim($_POST["password"])))
    {
        echo "Please enter password in the field";     
    }
    elseif(strlen(trim($_POST["password"])) < 7)
    {
        echo "Password must have atleast 7 characters in the field";
    }
    else
    {
        // $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
        $password=trim($_POST["password"]);
    }

    $sql = "SELECT * FROM `student_lms_credentials` WHERE `email_id`='$email_id' AND `password`='$password'";
    if($result = mysqli_query($conn,$sql))
    {
        $count = mysqli_num_rows($result);
        if($count == 1)
        {
            $row = mysqli_fetch_array( $result , MYSQLI_ASSOC );
            // if ( password_verify($password, $row["password"]) ) 
            if ( $password == $row["password"] )
            {
               session_start();
               $_SESSION['student_login_id'] = $row["id"];
               $_SESSION['student_email_id'] = $row["email_id"];
               $_SESSION['student_allowed_courses']  = $row["courses_allowed"];
               header("location: ./home.php");
            }
            else
            {
                echo "password verification failed, please type right password";
                // header("location: ./login.php");
            }
        }
        else
        {
            echo "No account exists, please go to register page and fill the details";
            // header("location: ./login.php");
        }
    }
    else
    {
        echo "No account is found with this email id, please register first";
         // header("location: ./login.php");
    }
}else{
    echo "some error took place";
     // header("location: ./signup.php");
}


?>