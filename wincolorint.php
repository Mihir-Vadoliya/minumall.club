<?php 
include("include/connection.php");
ob_start();
session_start();

$sql = mysqli_query($con,"select * from tbl_wallet");

  while($row = mysqli_fetch_array($sql))
  {
      
      $wallet = $row['amount'];
      $id = $row['userid'];
      if($wallet >= 1)
      {
     $interst_amount = ($wallet*0.8)/100;
     
     $walletamount = $wallet + $interst_amount;
    
    $sql2 = mysqli_query($con,"select * from tbl_interest where userid='$id'");
    $data= mysqli_fetch_array($sql2);
    $totalamount =  $interst_amount + $data['amount'];
    
    $sqlwallet = mysqli_query($con,"UPDATE tbl_wallet SET amount = '$walletamount' WHERE userid= '$id'");
    
	$search4= mysqli_query($con,"UPDATE tbl_interest SET amount = '$totalamount' WHERE userid= '$id'");
	
	$interstslq = mysqli_query($con,"insert into tbl_interest_summery(userid,wallet_amount,interest_amount,total_ineterest)values('$id','$wallet','$interst_amount','$totalamount')");
 
 
      }
      
 $wallet = 0;
 $id = 0;
 $interst_amount = 0;
 $totalamount = 0;
 
  }




?>