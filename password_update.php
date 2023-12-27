<?php 
ob_start();
session_start();
include("include/connection.php");

// print_r($_POST);
//  print_r($_SESSION);

$password=$_POST['password'];
$login_otp=$_POST['login_otp'];
$mobile=$_POST['mobile'];


   //print_r('succes');exit;
  $password=md5($_POST['password']);
  $show_password=$_POST['password'];
   $sql = "UPDATE tbl_user SET password='$password',show_password='$show_password' WHERE mobile='$mobile'";
      $select=mysqli_query($con,$sql)or die(mysqli_error($con));
      echo "<script type='text/javascript'>alert('Successfully Update'); window.location='login.php';</script>";

	
	 
          
          
?>