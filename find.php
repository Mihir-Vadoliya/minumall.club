<?php 
ob_start();
session_start();
include("include/connection.php");


$email=$_POST['email'];
$mobile=$_POST['mobile'];
$security=$_POST['security'];
$sql="SELECT email,mobile,security FROM tbl_user WHERE email='$email' && mobile='$mobile' && security='$security'";
$select=mysqli_query($con,$sql)or die(mysqli_error($con));
$row=mysqli_fetch_array($select);
		if(empty($row)){
   
   	echo "<script type='text/javascript'>alert('Email and Phone or Security Number Are Does Not Match'); window.location='forgot-password.php';</script>";
		}else{
		    $mobile = $row['mobile'];
		    //print_r($mobile);exit;
            Header("Location: reset.php?mobile=".$mobile);
		 // echo "<script type='text/javascript'>window.location='reset.php';</script>";  
		}	
	 
          
          
?>