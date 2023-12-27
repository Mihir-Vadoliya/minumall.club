
<?php
include("include/connection.php");
$select_roi = "SELECT * FROM `interest`";
$result1 = mysqli_query($con, $select_roi);
while ($row1 = mysqli_fetch_array($result1)) {

    $min_balance = $row1["min_balance"];
    $rate_interest = $row1["rate_interest"];
}
$selectquery = "SELECT * FROM `tbl_wallet`";
$query = mysqli_query($con, $selectquery);
while ($row_wallet = mysqli_fetch_array($query)) {

    $roi_user =  $row_wallet['userid'];
    $present_amount = $row_wallet["amount"];
    if ($present_amount >= $min_balance) {

        $roi_int_amount = ($rate_interest / 100) * $row_wallet["amount"];

        $insert_int = "INSERT INTO `tbl_interest_summery`( `userid`, `wallet_amount`, `interest_rate`, `interest_amount`, `total_ineterest`)  VALUES ('$roi_user','$present_amount','$rate_interest','$roi_int_amount','$roi_int_amount')";
        $query_int = mysqli_query($con, $insert_int);

        if ($query_int) {
            $insert_roi_user_int = "INSERT INTO `tbl_interest`(`userid`, `amount`) VALUES ('$roi_user','$roi_int_amount')";
            $insert_int_user_query = mysqli_query($con, $insert_roi_user_int);

            if ($insert_int_user_query) {
                $update_user_balance = "UPDATE `tbl_wallet` SET `amount`=amount+'$roi_int_amount' WHERE userid='$roi_user'";
                $update_bal_query = mysqli_query($con, $update_user_balance);
            }
        }
    }
}

?>
