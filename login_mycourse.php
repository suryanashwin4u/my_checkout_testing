<?php
include "./db.php";
if(isset($_GET['email_id']))
{
    $email_id = $_GET['email_id'];   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Student Login</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<style>
#whole-login-page{
background-color: #fff;
border: none;
border-radius: 10px;
box-shadow: 0 2px 4px rgba(0, 0, 0, .1), 0 8px 16px rgba(0, 0, 0, .1);
box-sizing: border-box;
margin:50px;
padding:10px;
}
#mytextsize{
    font-size:15px;
}
#myspan{
    color:red;
}
</style>
</head>
<body>
    <center>
    <?php
        if(isset($_GET['email_id'])){
          echo "<div class='alert alert-success' role='alert'>
                <svg xmlns='http://www.w3.org/2000/svg' style='display: none;'>
                <symbol id='check-circle-fill' fill='currentColor' viewBox='0 0 16 16'>
                <path d='M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z'/>
                </symbol>
                <symbol id='info-fill' fill='currentColor' viewBox='0 0 16 16'>
                <path d='M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z'/>
                </symbol>
                <symbol id='exclamation-triangle-fill' fill='currentColor' viewBox='0 0 16 16'>
                <path d='M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z'/>
                </symbol>
                </svg>
                <p class='alert-heading'><svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Success:'><use xlink:href='#check-circle-fill'/></svg> Well done! You have successfully purchased your courses.</p>
                <hr>
                <p class='text-danger'><b>An email with student id and password has been sent to your registered email id. It may take some time to come....till then please wait...thankyou</b></p>
                </div>";  
            }else{

                echo "<div class='alert alert-success' role='alert'>
                <svg xmlns='http://www.w3.org/2000/svg' style='display: none;'>
                <symbol id='check-circle-fill' fill='currentColor' viewBox='0 0 16 16'>
                <path d='M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z'/>
                </symbol>
                <symbol id='info-fill' fill='currentColor' viewBox='0 0 16 16'>
                <path d='M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z'/>
                </symbol>
                <symbol id='exclamation-triangle-fill' fill='currentColor' viewBox='0 0 16 16'>
                <path d='M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z'/>
                </symbol>
                </svg>
                <p class='alert-heading'><svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Success:'><use xlink:href='#check-circle-fill'/></svg> kindly login with your correct email id and password to get access to your courses</p>
                </div>";  
                }     
    ?>
           
<div class="container col-lg-3" id="whole-login-page">
        <div class="p-2">
            <h3 >STUDENT LOGIN FORM</h3>
            <hr>
        </div>
        <!-- <form action="<?php //echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> -->
        <form action="./student_login.php" method="post">
            <div class="form-group" id="mytextsize">
                <label class="float-left">Email ID<span id="myspan">*</span></label>
                <input type="text" name="email_id" id="student_email" class="form-control" value="<?php echo $email_id; ?>" required>
            </div>  
            <div class="form-group" id="mytextsize">
                <label class="float-left">Password<span id="myspan">*</span></label>
                <input type="password" name="password" id="student_password" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" id="mytextsize" value="Login">
                <input type="reset" class="btn btn-secondary ml-2" id="mytextsize" value="Reset all" onclick="reset()">
                <hr>
            </div>
            <script>
                function reset(){
                 $(this).closest('form').find("input[type=text], textarea").val("");
                };  

            </script>     
        </form>
    </div> 
    </center>   
</body>
</html>