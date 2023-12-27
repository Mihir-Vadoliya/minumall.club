<?php
include ("include/connection.php");
ob_start();
session_start();

  $otp=$_POST['value'];

   if($otp == $_SESSION["signup_otp"]) 
   {
       echo 'success';
       session_destroy();
   }else{
        echo 'Wrong Otp';
   }

?>