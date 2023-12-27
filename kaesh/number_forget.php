<?php
include ("include/connection.php");
session_destroy();
  $mobile=$_POST['value'];
 $otp=rand(1000,10000);
 $sql4="SELECT * FROM tbl_user WHERE mobile='$mobile'";
$select5=mysqli_query($con,$sql4)or die(mysqli_error($con));
$count_row=mysqli_num_rows($select5);
if($count_row != '0')
{
    session_start();
    unset($_SESSION["signup_mobile"]);
	unset($_SESSION["signup_otp"]);
	
	session_destroy();
	
	session_start();
	
  $_SESSION["signup_mobile"] = $mobile;
  $_SESSION["signup_otp"] = $otp; 
  
  $fields = array(
"variables_values" => "$otp",
"route" => "otp",
"numbers" => $mobile,
);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($fields),
  CURLOPT_HTTPHEADER => array(
    "authorization: s42bfTSWFTw3oDlfBgIEAjfG4wKalSR9LGYnsR9lKFUCg91SMNccMRMHKEBw",
    "accept: */*",
    "cache-control: no-cache",
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $count_row;
}
 echo $count_row;
}else{
   echo $count_row; 
}

?>