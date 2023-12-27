<?php
ob_start();
session_start();
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php include'head.php' ?>
<link rel="stylesheet" href="assets/css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="">
<meta name="keywords" content="" />
<style>
.otpbtn {background-image: linear-gradient(
#fff, 
#fff);
    width: 90px;
    padding: 25px 0px;
    margin-left: -5px;
    margin-top: -1px;
    border-radius: 0px;
}

<style>
    .btn { background-image: linear-gradient(
#29B6F6, 
#29B6F6);
    border-radius: 5px 5px 5px 5px;
    border: 0.5px solid white;
    color: white;
    transition: 0.5s;
    
}
.otbt{
    width: 95%;
    margin: 0 22px;
}

 @media only screen and (max-width: 600px) {
  
  .otbt {
    width: 95%;
    margin: 0 9px;
}
  
}
    
    
</style>

</style>
</head>

<body>
<?php //include("include/connection.php");?>


<!-- App Header -->
<div class="appHeader1" style="background-color:#F14625 !important">
<div class="left">
            <a href="#" onClick="goBack();" class="icon goBack">
                <i class="icon ion-md-arrow-back"></i>
            </a>
            <div class="pageTitle">Register</div>
        </div>
 
 
</div>
<!-- * App Header --> 
<!-- App Capsule -->
<div id="appCapsule">
  <div class="appContent1 mb-2">

    <form style="padding: 25px;" action="registerNow.php" method="post">
    
      <div class="inner-addon left-addon">
      <i class="icon ion-md-phone-portrait"><a style="font-size:16px; color:#1B2C42 !important;height:50px !important;">+91</a></i>
    
        <input type="number" name="mobile" id="mobile"  class="form-control" placeholder="Mobile Number" value="" maxlength="10" required>
     
      </div>
      <div class="row ">
    <div class="col-9">
      <div class="inner-addon left-addon">
      <i class="icon ion-md-albums"></i>
        <input type="text" name="login_otp" id="login_otp"  class="form-control"  placeholder="Verification Code" onchange="checkFunction(this.value)" required>
      </div>
      </div>
    
      <div class="col-3 pl-0"><a href="javascript:void(0);" style="background-image: linear-gradient( #F14625, #F14625); color:#fff;" class="otbt btn btn-block btn-light otpbtn" id="reg_otp" onclick="myFunction()">OTP</a></div>
      </div>
      <div class="inner-addon left-addon">
      <i class="icon ion-md-key"></i>
        <input type="password" name="password" id="password" class="form-control" placeholder="Password"required>
      </div>
      <div class="inner-addon left-addon">
      <i class="icon ion-ios-gift"></i>
        <input type="text" name="rcode" id="rcode" class="form-control" value="<?php echo $_GET['code']; ?>" placeholder="Recommendation Code">
      </div>
      <input type="hidden" name="action" value="register">
      <div class="form-group row mt-3 mb-3">
                    <div class="col-12">
                        <div class="custom-control custom-checkbox">
    <input type="checkbox" checked class="custom-control-input" id="remember" name="remember">
  <label class="custom-control-label text-muted" for="remember">I agree <a data-toggle="modal" href="#privacy" data-backdrop="static" data-keyboard="false">PRIVACY POLICY</a></label>
                        </div>
                    </div>
                    
                </div>
      <div>
      <div class="text-center mt-3">
        <input type="submit" class="btn btn-light" disabled id="submit" style="width:264px; color:#fff; background-image: linear-gradient(
#F14625, 
#F14625);" value="Register">
        </div></br>
    <h5 style="text-align:center;"><a href="login.php">Login Here</a></h5>
      </div>
    </form>
  </div>
</div>
<!-- appCapsule -->
 <script>
        function myFunction()
        {
         var value = document.getElementById("mobile").value;  
        //alert(value);
         if((value!=null) && (value.length =='10'))
         {
         $.ajax({
                        url: 'number_search.php',
                        method: 'POST',
                        data: {
                            value: value
                        },
                        success: function (data) {
                          if(data>=1)
                          {
                             alert('mobile number already exit') 
                             document.getElementById("submit").disabled = true;
                             document.getElementById("reg_otp").disabled = true;

                          }else{
                              alert('OTP Sent Successfully');
                              //document.getElementById("submit").disabled = false;
                              document.getElementById("reg_otp").disabled = false;

                          }
                        } 
                            });
         }
         else{
             alert('Please Enter Valid Number');
         }
        }
      </script>
<?php include("include/footer.php");?>
<div id="registerthanksPopup" class="modal fade" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content ">
      <div class="modal-body">
        <div class="text-center">
          <h5>Thank you !</h5>
          <h6>Your account has been created successfully....</h6>
          <div class="text-center">
<button type="button" class="btn btn-sm btn-primary" onClick="window.location='';">OK</button></div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="registertoast" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content ">
      <div class="modal-body">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
       <span aria-hidden="true">×</span></button>
        <div class="text-center" id="regtoast">          
        </div>
      </div>
    </div>
  </div>
</div>
<div id="privacy" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header">
    <h5 style="font-weight:normal;">Privacy Policy</h5>
              </div>
      <div class="modal-body responsive">
      <?php echo content($con,"privacy");?>

      </div>
      <div class="modal-footer">
    <a class="pull-left" data-dismiss="modal"><strong>CLOSE</strong></a>
              </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  function checkFunction(val){
      
      var value= val;
      
       $.ajax({
                        url: 'otp_valied.php',
                        method: 'POST',
                        data: {
                            value: value
                        },
                        success: function (data) {
                          alert(data);
                          if(data == 'success')
                          {
                           document.getElementById("submit").disabled = false;   
                          }else{
                              document.getElementById("submit").disabled = true;  
                          }
                        }
                            });
      
}
    </script>
    <script type="text/javascript" src="general.js"></script>
<!--<div id="otpform" class="modal fade" role="dialog">-->
<!--  <div class="modal-dialog modal-sm" role="document">-->
<!--    <div class="modal-content ">-->
<!--      <div class="modal-body">-->
<!--    <button type="button" id="otpclose" class="close" data-dismiss="modal" aria-label="Close">-->
<!--       <span aria-hidden="true">×</span></button>-->
<!--       <p><strong>Plese Enter OTP</strong></p>-->
<!--        <div class="pt-2">-->
<!--   <form action="#" method="post" id="otpsubmitForm">-->
<!--  <input type="text" id="otp" name="otp" class="form-control" placeholder="Enter OTP" onKeyPress="return isNumber(event)">-->
<!--      <input type="hidden" name="type" id="type" value="otpval">-->
<!--      <div class="text-center mt-3">-->
<!--        <button type="submit" class="btn btn-primary" style="width:264px;"> Submit OTP </button>-->
<!--        </div>-->
<!--        </form>          -->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!--</div>-->
<script src="assets/js/lib/jquery-3.4.1.min.js"></script> 
<!-- Bootstrap--> 
<script src="assets/js/lib/popper.min.js"></script> 
<script src="assets/js/lib/bootstrap.min.js"></script> 
<!-- Owl Carousel --> 
<script src="assets/js/plugins/owl.carousel.min.js"></script> 
<!-- Main Js File --> 
<script src="assets/js/app.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>
<script src="assets/js/account.js"></script>
</body>
</html>