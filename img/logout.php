<?php
session_start();
unset($_SESSION['student_login_id']);
unset($_SESSION['student_email_id']);
unset($_SESSION['student_allowed_courses']);
header("Location:login_mycourse.php");
?>