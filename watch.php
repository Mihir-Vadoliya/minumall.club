<?php
include("include/connection.php");

// Get all users with wallet balance of 0
$sql = mysqli_query($con, "SELECT * FROM tbl_wallet WHERE amount = 0");

// Loop through each user and update their wallet balance
while($row = mysqli_fetch_array($sql)) {
    $userid = $row['userid'];
    $current_balance = $row['amount'];
    $new_balance = $current_balance + 10; // Add 10 Rs daily reward
    mysqli_query($con, "UPDATE tbl_wallet SET amount = $new_balance WHERE userid = $userid");
}

// Close database connection
mysqli_close($con);
?>
