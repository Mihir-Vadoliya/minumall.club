<?php 
ob_start();
session_start();
include("include/connection.php");
////print_r($_POST);exit;
@$mobile=$_POST['mobile'];
@$email=$_POST['email'];
@$security=$_POST['security'];
@$password=$_POST['password'];
@$rcode=$_POST['rcode'];
@$acceptTC=$_POST['remember'];
@$action=$_POST['action'];
$otpmobile=@$_SESSION["signup_mobilematched"];

if($action=="register")
{
    $sql4="SELECT mobile FROM tbl_user WHERE mobile='$mobile'";
	 $select5=mysqli_query($con,$sql4)or die(mysqli_error($con));
		if(mysqli_num_rows($select5)=='0'){
   if($_POST['rcode']!=''){
    
	 
$sql= mysqli_query($con,"INSERT INTO `tbl_user` (`mobile`, `email`, `password`,`security`,`show_password`,`code`,`owncode`,`privacy`,`status`) VALUES ('".$mobile."','".$email."','".md5($password)."','".$security."','".$password."','".$rcode."','','".$acceptTC."','1')");
$userid=mysqli_insert_id($con);
$refcode=$userid.refcode();
$sql= mysqli_query($con,"UPDATE `tbl_user` SET `owncode` = '$refcode' WHERE `id`= '".$userid."'");
$sql2= mysqli_query($con,"INSERT INTO `tbl_wallet`(`userid`,`amount`,`envelopestatus`) VALUES ('".$userid."','0','0')");
$sql3= mysqli_query($con,"INSERT INTO `tbl_bonus`(`userid`,`amount`,`level1`,`level2`) VALUES ('".$userid."','0','0','0')");
$sql6= mysqli_query($con,"INSERT INTO `tbl_interest`(`userid`,`amount`) VALUES ('".$userid."','0')");
	if($sql){
      unset($_SESSION["signup_mobilematched"]);
      echo "<script type='text/javascript'>alert('Received Succesfully'); window.location='login.php';</script>";
}else{ echo"0";}
	}else{
	  $sql= mysqli_query($con,"INSERT INTO `tbl_user` (`mobile`, `email`, `password`,`security`,`show_password`,`owncode`,`privacy`,`status`) VALUES ('".$mobile."','".$email."','".md5($password)."','".$security."','".$password."','','".$acceptTC."','1')");
$userid=mysqli_insert_id($con); 
$refcode=$userid.refcode();
$sql= mysqli_query($con,"UPDATE `tbl_user` SET `owncode` = '$refcode' WHERE `id`= '".$userid."'");
$sql2= mysqli_query($con,"INSERT INTO `tbl_wallet`(`userid`,`amount`,`envelopestatus`) VALUES ('".$userid."','0','0')");
$sql3= mysqli_query($con,"INSERT INTO `tbl_bonus`(`userid`,`amount`,`level1`,`level2`) VALUES ('".$userid."','0','0','0')");
$sql6= mysqli_query($con,"INSERT INTO `tbl_interest`(`userid`,`amount`) VALUES ('".$userid."','0')");
echo "<script type='text/javascript'>alert('Received Succesfully'); window.location='login.php';</script>";
	}
	}else{
	    echo "<script type='text/javascript'>alert('applicant already applied'); window.location='signup.php';</script>";
	}
    
}
else{ echo"2";}

?>