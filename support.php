<?php 
include("include/connection.php");
session_start();
 
if(isset($_POST['enquery']))
{
    // print_r($_POST);exit;
    
   $userid=$_SESSION['frontuserid'];
   $email= $_POST['email'];
   $mobile= $_POST['mobile'];
   $message=$_POST['message'];
 
  $sql = "INSERT INTO support (userid,mobile,email,massage)
                                 VALUES ('$userid','$mobile', '$email', '$message')";
   if(mysqli_query($con, $sql)){  

    echo "<script>
alert('sucessfully');
window.location.href='myaccount.php';
</script>";  

    }else{  

    echo "<script>
alert('failed');
window.location.href='myaccount.php';
</script>";  

    }  
}
?>