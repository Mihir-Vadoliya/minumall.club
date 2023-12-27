<?php 
include("include/connection.php");
session_start();
 
if(isset($_POST['submit']))
{
    // print_r($_POST);exit;
    
   $userid=$_SESSION['frontuserid'];
   $type= $_POST['type'];
   $mobile= $_POST['mobile'];
   $out_id=$_POST['out_id'];
   $description=$_POST['description'];
 
  $sql = "INSERT INTO tbl_complaints (userid,type,out_id,mobile,description,status) VALUES ('$userid','$type','$out_id','$mobile', '$description',0)";
   if(mysqli_query($con, $sql)){  

    echo "<script>
alert('sucessfully');
window.location.href='myaccount.php';
</script>";  

    }else{  

    echo "<script>
alert('failed');
window.location.href='add_complaints.php';
</script>";  

    }  
}
