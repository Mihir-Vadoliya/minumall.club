<?php
session_start();
 include ("include/connection.php");

if (isset($_POST['add'])) {




    echo  $min_balance = $_POST['min_balance'];
    echo  $rate_interest = $_POST['rate_interest'];



    $q = "INSERT INTO `interest`(`min_balance`, `rate_interest`) VALUES ('$min_balance','$rate_interest')";


    $res = mysqli_query($con, $q);

    if ($res) {

        $_SESSION['status'] = "Images Stored Successfully";
        header('location:manage_interest.php');
    } else {
        echo 'query not inserted';
    }
}
if (isset($_POST['edit_submit'])) {

    echo    $id = $_POST['id'];



    echo  $min_balance = $_POST['min_balance'];
    echo  $rate_interest = $_POST['rate_interest'];



    $q = "UPDATE `interest` SET min_balance='$min_balance',rate_interest='$rate_interest' WHERE id='$id'";
    $res = mysqli_query($con, $q);

    if ($res) {
        $_SESSION['status'] = "Images Stored Successfully";
        header('location:manage_interest.php');
    } else {
        echo 'query not inserted';
    }
}
