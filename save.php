<?php
include("include/connection.php");
session_start();

if(isset($_POST['submit']))
{
  
  $userid=$_SESSION['frontuserid'];
   $amount_1= $_POST['deposit'];
   $utr_no= $_POST['refrence'];
   $phone=$_POST['phone'];
   $refcode=$userid.refcode();
   
    $bamount= $_POST['bamount'];
   
   $utrsql = mysqli_query($con," select * from tbl_walletsummery where utr_no='$utr_no'");
   $numrow = mysqli_num_rows($utrsql);
  if($numrow == '0')
  {
  $sql = "INSERT INTO tbl_walletsummery (phone,userid,orderid,amount,amount_1,utr_no,type,actiontype,status,bamount)
                                 VALUES ('$phone','$userid','$refcode', '$amount_1', '$amount_1','$utr_no','credit','recharge','0',$bamount)";
   if(mysqli_query($con, $sql)){ 
       
       
   
$sql = "SELECT * FROM  tbl_user WHERE id = '$userid'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);


if($row['recharge'] == 0)
{
    


$sqlw = "SELECT * FROM  tbl_wallet WHERE userid = '$userid'";
$resultw = mysqli_query($con, $sqlw);
$roww = mysqli_fetch_assoc($resultw);

 $amount2 =  $amount_1 + $bamount; 
$sql2 = "UPDATE tbl_wallet SET amount='$amount2'  WHERE userid='$userid'";      
mysqli_query($con, $sql2);

$sqlu = "UPDATE tbl_user SET recharge='1'  WHERE id='$userid'";      
mysqli_query($con, $sqlu);


 $rid = $row['code'];
$sql = "SELECT * FROM  tbl_user WHERE owncode = '$rid'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);


$rid = $row['id'];

$sqlw = "SELECT * FROM  tbl_wallet WHERE userid = '$rid'";
$resultw = mysqli_query($con, $sqlw);
$roww = mysqli_fetch_assoc($resultw);

echo $amount2 =  $roww['amount'] + $bamount;
$userid = $row['id'];


$sql2 = "UPDATE tbl_wallet SET amount='$amount2' WHERE userid='$userid'";      
mysqli_query($con, $sql2);


}
else
{
    
$sql2 = "UPDATE tbl_wallet SET amount='$amount_1'  WHERE userid='$userid'";      
mysqli_query($con, $sql2);    
    
}

       

    echo "<script>
alert('Amount Recharge Request sucessfully');
window.location.href='myaccount.php';
</script>";  

    }else{  

    echo "<script>
alert('Amount Recharge Request not sucessfully');
window.location.href='checkout.php';
</script>";  

    }
  }else{
     echo "<script>
alert('Refference / UTR no already exists');
window.location.href='checkout.php';
</script>";    
  }
}
?>