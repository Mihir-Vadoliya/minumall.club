<?php
include("include/connection.php");


$select_referral = "SELECT * FROM `tbl_wallet`";
$query_referral = mysqli_query($con, $select_referral);
while ($row_referral = mysqli_fetch_assoc($query_referral)) {
    $user_id = $row_referral['userid'];

    $user_amount = $row_referral['amount'];

    $get_user_code = "SELECT * FROM `tbl_user` WHERE id='$user_id'";
    $get_user_name = mysqli_query($con, $get_user_code);
    $get_user_nameROW = mysqli_fetch_array($get_user_name);
    $get_user_balance = $get_user_nameROW['total_balance'];
    if ($user_amount == $get_user_balance) {
    } else if ($user_amount != $get_user_balance) {
        $total_balance_update = "UPDATE `tbl_user` SET `total_balance`=total_balance+'$user_amount' WHERE id ='$user_id'";
        $query_balance_update = mysqli_query($con, $total_balance_update);
    }
}

$refe_query = "SELECT owncode, COUNT(DISTINCT code) AS reference_count FROM tbl_user WHERE total_balance >= 500 GROUP BY owncode HAVING reference_count > 0;";
$query_refe = mysqli_query($con, $refe_query);
while ($row_refe = mysqli_fetch_assoc($query_refe)) {
    // print_r($row_refe);
    $user_code = $row_refe['owncode'];
    $reference_count = $row_refe['reference_count'];
    echo '<br>';
    if ($reference_count == 10) {
        $get_user_id = "SELECT * FROM `tbl_user` WHERE code='$user_code' AND status = '1'";
        $get_user_query = mysqli_query($con, $get_user_id);
        while ($row_user = mysqli_fetch_assoc($get_user_query)) {
            echo $userid = $row_user['id'];
            $user_mobile = $row_user['mobile'];
            $reference_amount = 500;
            $order_id = rand(10000, 99999);
            $update_wallet = "UPDATE `tbl_wallet` SET `amount`=amount+'$reference_amount' WHERE userid = '$userid'";
            $query_wallet = mysqli_query($con, $update_wallet);
            if ($query_wallet) {
                $update_wallet_summry = "INSERT INTO `tbl_walletsummery`(`userid`, `orderid`, `utr_no`, `amount`, `type`, `actiontype`, `amount_1`, `value`, `status`, `phone`, `bamount`)  VALUES ('$userid','$order_id','-','$reference_amount','credit','Daily Referral Income 10 Member','','','1','$user_mobile','-')";
                $query_wallet_summry = mysqli_query($con, $update_wallet_summry);
            }
        }
    } elseif ($reference_count == 20) {
        $get_user_id = "SELECT * FROM `tbl_user` WHERE code='$user_code' AND status = '1'";
        $get_user_query = mysqli_query($con, $get_user_id);
        while ($row_user = mysqli_fetch_assoc($get_user_query)) {
            echo $userid = $row_user['id'];
            $user_mobile = $row_user['mobile'];
            $reference_amount = 1000;
            $order_id = rand(10000, 99999);
            $update_wallet = "UPDATE `tbl_wallet` SET `amount`=amount+'$reference_amount' WHERE userid = '$userid'";
            $query_wallet = mysqli_query($con, $update_wallet);
            if ($query_wallet) {
                $update_wallet_summry = "INSERT INTO `tbl_walletsummery`(`userid`, `orderid`, `utr_no`, `amount`, `type`, `actiontype`, `amount_1`, `value`, `status`, `phone`, `bamount`)  VALUES ('$userid','$order_id','','$reference_amount','credit','Daily Referral Income 20 Member','','','1','$user_mobile','-')";
                $query_wallet_summry = mysqli_query($con, $update_wallet_summry);
            }
        }
    } elseif ($reference_count == 30) {
        $get_user_id = "SELECT * FROM `tbl_user` WHERE code='$user_code' AND status = '1'";
        $get_user_query = mysqli_query($con, $get_user_id);
        while ($row_user = mysqli_fetch_assoc($get_user_query)) {
            echo $userid = $row_user['id'];
            $user_mobile = $row_user['mobile'];
            $reference_amount = 2000;
            $order_id = rand(10000, 99999);
            $update_wallet = "UPDATE `tbl_wallet` SET `amount`=amount+'$reference_amount' WHERE userid = '$userid'";
            $query_wallet = mysqli_query($con, $update_wallet);
            if ($query_wallet) {
                $update_wallet_summry = "INSERT INTO `tbl_walletsummery`(`userid`, `orderid`, `utr_no`, `amount`, `type`, `actiontype`, `amount_1`, `value`, `status`, `phone`, `bamount`)  VALUES ('$userid','$order_id','-','$reference_amount','credit','Daily Referral Income 30 Member','','','1','$user_mobile','-')";
                $query_wallet_summry = mysqli_query($con, $update_wallet_summry);
            }
        }
    } elseif ($reference_count == 50) {
        $get_user_id = "SELECT * FROM `tbl_user` WHERE code='$user_code' AND status = '1'";
        $get_user_query = mysqli_query($con, $get_user_id);
        while ($row_user = mysqli_fetch_assoc($get_user_query)) {
            echo $userid = $row_user['id'];
            $user_mobile = $row_user['mobile'];
            $reference_amount = 4000;
            $order_id = rand(10000, 99999);
            $update_wallet = "UPDATE `tbl_wallet` SET `amount`=amount+'$reference_amount' WHERE userid = '$userid'";
            $query_wallet = mysqli_query($con, $update_wallet);
            if ($query_wallet) {
                $update_wallet_summry = "INSERT INTO `tbl_walletsummery`(`userid`, `orderid`, `utr_no`, `amount`, `type`, `actiontype`, `amount_1`, `value`, `status`, `phone`, `bamount`)  VALUES ('$userid','$order_id','-','$reference_amount','credit','Daily Referral Income 50 Member','','','1','$user_mobile','-')";
                $query_wallet_summry = mysqli_query($con, $update_wallet_summry);
            }
        }
    } elseif ($reference_count == 80) {
        $get_user_id = "SELECT * FROM `tbl_user` WHERE code='$user_code' AND status = '1'";
        $get_user_query = mysqli_query($con, $get_user_id);
        while ($row_user = mysqli_fetch_assoc($get_user_query)) {
            echo $userid = $row_user['id'];
            $user_mobile = $row_user['mobile'];
            $reference_amount = 7000;
            $order_id = rand(10000, 99999);
            $update_wallet = "UPDATE `tbl_wallet` SET `amount`=amount+'$reference_amount' WHERE userid = '$userid'";
            $query_wallet = mysqli_query($con, $update_wallet);
            if ($query_wallet) {
                $update_wallet_summry = "INSERT INTO `tbl_walletsummery`(`userid`, `orderid`, `utr_no`, `amount`, `type`, `actiontype`, `amount_1`, `value`, `status`, `phone`, `bamount`)  VALUES ('$userid','$order_id','-','$reference_amount','credit','Daily Referral Income 80 Member','','','1','$user_mobile','-')";
                $query_wallet_summry = mysqli_query($con, $update_wallet_summry);
            }
        }
    } elseif ($reference_count == 100) {
        $get_user_id = "SELECT * FROM `tbl_user` WHERE code='$user_code' AND status = '1'";
        $get_user_query = mysqli_query($con, $get_user_id);
        while ($row_user = mysqli_fetch_assoc($get_user_query)) {
            echo $userid = $row_user['id'];
            $user_mobile = $row_user['mobile'];
            $reference_amount = 10000;
            $order_id = rand(10000, 99999);
            $update_wallet = "UPDATE `tbl_wallet` SET `amount`=amount+'$reference_amount' WHERE userid = '$userid'";
            $query_wallet = mysqli_query($con, $update_wallet);
            if ($query_wallet) {
                $update_wallet_summry = "INSERT INTO `tbl_walletsummery`(`userid`, `orderid`, `utr_no`, `amount`, `type`, `actiontype`, `amount_1`, `value`, `status`, `phone`, `bamount`)  VALUES ('$userid','$order_id','-','$reference_amount','credit','Daily Referral Income 100 Member','','','1','$user_mobile','-')";
                $query_wallet_summry = mysqli_query($con, $update_wallet_summry);
            }
        }
    }
}
