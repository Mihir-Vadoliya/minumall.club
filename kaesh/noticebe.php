<?php
session_start();
 include ("include/connection.php");

if (isset($_POST['submit'])) {




    echo $notice = mysqli_real_escape_string($con, $_POST['notice']);



    $q = "INSERT INTO `notice`(`notice`) VALUES ('$notice')";


    $res = mysqli_query($con, $q);

    if ($res) {

        $_SESSION['status'] = "Images Stored Successfully";
        header('location:notice_managment.php');
    } else {
        echo 'query not inserted';
    }
}
if (isset($_POST['edit_submit'])) {

    echo    $id = $_POST['id'];



    echo $notice = mysqli_real_escape_string($con, $_POST['notice']);



    $q = "UPDATE `notice` SET notice='$notice' WHERE id='$id'";
    $res = mysqli_query($con, $q);

    if ($res) {
        $_SESSION['status'] = "Images Stored Successfully";
        header('location:notice_managment.php');
    } else {
        echo 'query not inserted';
    }
}
