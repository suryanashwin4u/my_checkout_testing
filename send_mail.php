<?php
    include "./db.php";
    include('./smtp/PHPMailerAutoload.php');
    if( isset( $_POST['transaction_id'] ) )
    {    
        $transaction_id = $_POST['transaction_id'];
        $sql = "SELECT * FROM `student_billing_details` WHERE `transaction_id`='$transaction_id'";
        if($row = mysqli_query($conn,$sql))
        {
            if($result = mysqli_fetch_assoc($row))
            {
                $student_order_id = $result['order_id'];
                $student_full_name = $result['full_name'];
                $student_email_id = $result['email_id'];
                $student_phone_no = $result['phone_no'];
                $student_course_selected = $result['course_selected'];
                $student_payment_status = $result['payment_status'];
                $student_payment_amount = $result['payment_amount'];
                $student_transaction_id = $result['transaction_id'];
                $student_date_time = $result['date_time'];

                $email_template_success_failed = file_get_contents("new_email_template.html",true);

                $variables = array(
                    "{order_id}" => $student_order_id,
                    "{full_name}" => $student_full_name ,
                    "{email_id}" => $student_email_id,
                    "{phone}" => $student_phone_no,
                    "{courses_purchased}" => $student_course_selected,
                    "{Payment Status}" => $student_payment_status,
                    "{total_amount}" => $student_payment_amount,
                    "{transaction_id}" => $student_transaction_id,
                    "{date_time}" => $student_date_time
                );

                foreach ( array_keys($variables) as $key )
                {
                    if( strlen($key) > 2 && trim($key)!= "" )
                    {
                        $email_template_success_failed = str_replace($key, $variables[$key], $email_template_success_failed);
                    }
                }

                                         

                if($student_payment_status == 'complete')
                {
                    $subject_receipt = 'Payment Success Receipt'; 

                    if( smtp_mailer( $student_email_id , $subject_receipt , $email_template_success_failed ))
                    {   echo "payment receipt sent to student email id";
                        $admin_email_id = "hefacam254@dmsdmg.com";
                        $admin_subject  = "New order";
                        $admin_msg =  "
                                            <p>New Order details are as follows:</p>
                                            <p>Name: <span style='color:blue;'>".$student_full_name."</span></p>
                                            <p>Phone no.: <span style='color:blue;'>".$student_phone_no."</span></p>
                                            <p>Order id: <span style='color: blue;'>".$student_order_id."</span></p>
                                            <p>Courses Purchased: <span style='color: blue;'>".$student_course_selected."</span></p>
                                            <p>Payment status: <span style='color: blue;'>".$student_payment_status."</span></p>
                                            <p>Transaction id: <span style='color: blue;'>".$student_transaction_id."</span></p>
                                            <p>Payment date and time: <span style='color: blue;'>".$student_date_time."</span></p>
                                            <p>Total amount: <span style='color: blue;'>".$student_payment_amount."</span></p>
                                       ";

                        if( smtp_mailer( $admin_email_id , $admin_subject , $admin_msg ) )
                        {
                            echo "payment receipt sent to admin email id";

                            function generate_password($len = 7)
                            {
                                $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
                                $password = substr( str_shuffle( $chars ), 0, $len );
                                return $password;
                            }

                            $system_generated_password = generate_password(10);
                        
                            $sql_1= "INSERT INTO `student_lms_credentials` (`email_id`,`password`,`courses_allowed`) VALUES ('$student_email_id','$system_generated_password','$student_course_selected')";
                    
                            if(mysqli_query($conn,$sql_1))
                            {
                                $subject_id_pswd = "Synopsis IAS Student Dashboard Credentials";
                                $credentials_email_msg = "<p>Email id:  ".$student_email_id."</p><p>Password: ".$system_generated_password."</p><p>Go to this link: <a href='https://redefedu.com/checkout_production/login_mycourse.php?email_id=". $student_email_id ."'>Course Dashboard</a></p>";
                                if( smtp_mailer( $student_email_id , $subject_id_pswd , $credentials_email_msg ) )
                                {
                                    echo "login id and password sent on your registered email id";
                                }
                                else
                                {
                                    echo "student credentials not sent via mail";
                                }    
                            }
                            else
                            {
                                echo "student credentials insertion query error";
                            }
                        }
                        else
                        {
                            echo "new order email not sent to admin";
                        }
                    }
                    else
                    {
                        echo "payment success mail not sent to student registered mail";
                    }
                }
                else
                {

                    $student_failed_receipt_subject = 'Payment Failed Receipt'; 
                    $student_failed_msg = "
                                                <p>Failed Order details are as follows:</p>
                                                <p>Name: <span style='color:blue;'>".$student_full_name."</span></p>
                                                <p>Order id: <span style='color:blue;'>".$student_order_id."</span></p>
                                                <p>Phone no.: <span style='color:blue;'>".$student_phone_no."</span></p>
                                                <p>Courses Selected: <span style='color: blue;'>".$student_course_selected."</span></p>
                                                <p>Transaction id: <span style='color:blue;'>".$student_transaction_id."</span></p>
                                                <p>Date and Time: <span style='color:blue;'>".$student_date_time."</span></p>
                                                <p>Total amount: <span style='color:blue;'>".$student_payment_amount."</span></p>
                                                <p>Payment status: <span style='color:blue;'>".$student_payment_status."</span></p>
                                            ";

                    if(smtp_mailer( $student_email_id , $student_failed_receipt_subject , $student_failed_msg ))
                    {   
                        echo "failed order details sent to student email id via email";

                        $admin_email_id = "hefacam254@dmsdmg.com";
                        $admin_failed_receipt_subject = 'Order purchase failed'; 
                        $admin_failed_msg = "
                                                <p>Failed Order details are as follows:</p>
                                                <p>Name: <span style='color:blue;'>".$student_full_name."</span></p>
                                                <p>Order id: <span style='color: blue;'>".$student_order_id."</span></p>
                                                <p>Phone no.: <span style='color:blue;'>".$student_phone_no."</span></p>
                                                <p>Courses Selected: <span style='color: blue;'>".$student_course_selected."</span></p>
                                                <p>Transaction id: <span style='color: blue;'>".$student_transaction_id."</span></p>
                                                <p>Date and Time: <span style='color: blue;'>".$student_date_time."</span></p>
                                                <p>Total amount: <span style='color: blue;'>".$student_payment_amount."</span></p>
                                                <p>Payment status: <span style='color: blue;'>".$student_payment_status."</span></p>
                                            ";
                        if(smtp_mailer( $admin_email_id , $admin_failed_receipt_subject , $admin_failed_msg ))
                        {
                            echo "failed order details sent to admin via email";
                        }
                        else
                        {
                            echo "failed order details not sent to admin via email";
                        }
                    }
                    else
                    {
                        echo "failed order details not sent to student via email";
                    }
                }
            }
            else
            {
                echo "mysqli_fetch_assoc error";        
            }
        }
        else
        {
            echo "mysqli query failed";    
        }
    }
    else
    {
        echo "transaction id not set";
    }


    function smtp_mailer( $to, $subject, $msg)
    {
        $mail = new PHPMailer(); 
        //$mail->SMTPDebug=3;
        $mail->IsSMTP(); 
        $mail->SMTPAuth = true; 
        $mail->SMTPSecure = 'ssl'; 
        $mail->Host = "mail.redefedu.com";
        $mail->Port = "465"; 
        $mail->IsHTML(true);
        $mail->CharSet = 'UTF-8';
        $mail->Username = "noreply@redefedu.com";
        $mail->Password = 'redefedu@123';
        $mail->SetFrom("noreply@redefedu.com");
        $mail->Subject = $subject;
        $mail->Body = $msg;
        $mail->AddAddress($to);
        $mail->SMTPOptions=array('ssl'=>array(
            'verify_peer'=>false,
            'verify_peer_name'=>false,
            'allow_self_signed'=>false
        ));
        if(!$mail->Send())
        {
            echo $mail->ErrorInfo;
            return 0;
        }
        else
        {
            return 1;
        }
    }

?>