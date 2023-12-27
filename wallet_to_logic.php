   <?php
include("include/connection.php");


 $userid = $_POST['userid'];
 $muserid = $_POST['muserid'];
 $amount = $_POST['userammount'];
 
 
 
$sql = "SELECT * FROM  tbl_user WHERE mobile = '$userid'";
$result = mysqli_query($con, $sql);
 $row = mysqli_fetch_assoc($result);
 
 $userid = $row['id'];
 
  $mobile1 = $row['mobile'];

$sql = "SELECT * FROM  tbl_wallet WHERE userid = '$userid'";
$result = mysqli_query($con, $sql);


$row = mysqli_fetch_assoc($result);


if (mysqli_num_rows($result) > 0) {
    
 
    
   $amount2 =  $row['amount'] + $amount; 
    
  $sql2 = "UPDATE tbl_wallet SET amount='$amount2' WHERE userid='$userid'";

if (mysqli_query($con, $sql2)) {

$sql3 = "SELECT * FROM  tbl_wallet WHERE userid = $muserid";
$result3 = mysqli_query($con, $sql3);

$row3 = mysqli_fetch_assoc($result3);




$sql7 = "SELECT * FROM  tbl_user WHERE id = $muserid";
$result7 = mysqli_query($con, $sql7);
$row7 = mysqli_fetch_assoc($result7);
$mobile2 = $row7['mobile'];


 $amount2 =  $row3['amount'] - $amount; 

 $sql = "UPDATE tbl_wallet SET amount='$amount2' WHERE userid='$muserid'";   
 mysqli_query($con, $sql);   
 
 $sql6= "INSERT INTO `wallet_to_wallet`(`userid`,`fromm`,`tooo`,`amount`) VALUES ('". $muserid ."','". $mobile2 ."','". $mobile1 ."','". $amount ."')";  
 mysqli_query($con, $sql6);   
 
 
 
  echo "Record updated successfully";
  
  header("location:myaccount.php");
  
} else {
  echo "Error updating record: " . mysqli_error($con);
}   
    
}
else
{
    
    
    
}