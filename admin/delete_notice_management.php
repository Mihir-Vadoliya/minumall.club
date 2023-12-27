<?php
session_start();
include("include/connection.php"); 

 $notice_id = $_GET['notice_id'];
$q = "DELETE FROM notice WHERE id = '$notice_id'";
$query = mysqli_query($con,$q);

if($query)
{
    echo "Record Deleted";
    header("location:notice_managment.php");
}

?>
