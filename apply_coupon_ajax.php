<?php
    include './db.php';
    if( isset($_POST['coupon_code']) && isset($_POST['payment_amount']) )
    {
        $coupon_code = $_POST['coupon_code'];
        $old_amount = (int)$_POST['payment_amount'];

        $sql_1 = " SELECT `coupon_amt` FROM `discount_coupons` WHERE `coupon_code` = '$coupon_code' ";
        
        if( $result = mysqli_query($conn,$sql_1) )
        {
            $rowcount = mysqli_num_rows( $result );
            if( $rowcount == 1 )
            {
                $row = mysqli_fetch_assoc( $result );            
                new_amt_after_discount( $old_amount, (int)$row['coupon_amt'] );
            }
            else
            {
                echo "0";
            }
        }
    }
    else
    {
        echo "cant access this file";
    }

    function new_amt_after_discount( $o_amt, $c_amt ){
        $n_amt = $o_amt - $c_amt;
        echo $n_amt;
    }
?>