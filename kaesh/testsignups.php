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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/css/intlTelInput.css'>

<script type="text/javascript">
let currentUrl = location.href;
history.replaceState('', '', 'login.php');
history.pushState('', '', currentUrl);
</script>

<style>
.otpbtn {background-image: linear-gradient(
#29B6F6, 
#29B6F6);
color: white;
    width: 105px;
    padding: 25px 0px;
    margin-left: -10px;
    margin-top: -1px;
    border-radius: 0px;
}
 .btn1 { 
        color: white;
    height:45px; 
    width:264px;
    border-radius:13px; 
    background-image: linear-gradient(
#ae18e3, 
#5b1474);
    
}
.btn { 
        color: white;
    height:45px; 
    
    border-radius:13px; 
    background-image: linear-gradient(
#ae18e3, 
#5b1474);
    
}
.left-addon:hover .icon{
        color:#9c27b0 !important;
    }
.form-group:hover .fa{
    color:#9c27b0 !important;
}

</style>
<style>
    .btn { background-image: linear-gradient(
#291F53, 
#291F53);
    border-radius: 5px 5px 5px 5px;
    border: 0.5px solid white;
    color: white;
    transition: 0.5s;
    
}
.appHeader1 {
	background-image: url("bg.jpg");

}

.top-header {
    background: url(assets/img/bgtiop.png) no-repeat;
    overflow: hidden;
    background-size: cover;
}
.top-header .nb{
	width: 40px;
    height: 40px;
    float: left;
	margin-top: 23px;
    margin-right: 15px;
    margin-left: 19px;
  
}
.id-m{
    margin: 29px 0 0 0;
    font-size: 17px;
    color: #fff;
    font-weight: 500;
}

.mnu-list{
	margin:0px auto;
	padding:0px;
	list-style-type:none;
}

.mnu-list li{padding:10px 0px;}

.mnu-list a{color: #000;
    font-size: 18px;
    text-decoration: none;
    font-weight: 400;}
	
.icn-right{
 float:right;
 color:#333;
}
.custom-control{ margin-top: 14px;}
.form-row>[class*=col-]{
    padding-left:0px;
    padding-right:0px;
}
.left-addon .icon {
    left: 5px;
    top: -9px;
}
.gocode{
	    width: 26%;
    height: 50px;
    box-shadow: 0 3px 1px -2px rgb(0 0 0 / 20%), 0 2px 2px 0 rgb(0 0 0 / 14%), 0 1px 5px 0 rgb(0 0 0 / 12%);
    padding: 0 12px;
    line-height: 46px;
    border-radius: 2px;
    margin-bottom: 24px;
    border: 0;
    text-align: center;
}
.custom-control-label{font-size:16px;}
.form-group .fa{
	position: absolute;
    top: 18px;
    left: 15px;
    color: #b4b4b4;
    font-size: 18px;
}
 
 .recharge_box {
     width:100%;
    padding: 4px;
    box-sizing: border-box;
}

.input_box {
    width: 100%;
    height: 48px;
    display: flex;
    flex-direction: row;
    align-items: center;
    box-shadow: 0 3px 1px -2px rgb(0 0 0 / 20%), 0 2px 2px 0 rgb(0 0 0 / 14%), 0 1px 5px 0 rgb(0 0 0 / 12%);
    padding: 0 0px;
    box-sizing: border-box;
    line-height: 48px;
    background: #fff;
    border-radius: 2px;
    margin-bottom: 35px;
    position: relative;
}
.special_box {
    width: 100%;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
}
.mn{
    position: absolute;
    top: 24%;
    left: 40px;
    font-size: 18px;
    }
    .form-control{
        padding: 10px 54px;
    }
    .w65{width:65%;}
@media only screen and (max-width: 600px) and (min-width:335px) {
    
    .gocode{
           width: 94px;
           background:#fff;
    margin-left: 0px;
    min-height: 50px;
    }
    .form-row>[class*=col-]{
        padding-left:0px;
        padding-right:0px;
    }
    .mn{
    position: absolute !important;
    top: 24% !important;
    left: 40px !important;
    font-size: 18px !important;
    }
    .form-control{
        padding: 10px 42px !important;
        font-size:14px;
    }
    
}
    
</style>

</head>

<body>
<?php //include("include/connection.php");?>


<!-- App Header -->
<div class="appHeader1">
<div class="left"> <a href="login.php" class="icon goBack"> <i class="icon ion-md-arrow-back"></i> </a>
            <div class="pageTitle">Register</div>
        </div>
 
 
</div>

	<div class="container-fluid">
		
		<div class="row">
		
		
		<div class=" recharge_box">
		
		
		<form action="#" id="register" method="post" class="card-body" autocomplete="off" novalidate="novalidate">
		<div class="form-row">
		
		<div class="form-group col-md-12 inner-addon left-addon input_box">
      <i class="icon ion-md-phone-portrait"><a style="font-size:16px; color:#1B2C42 !important;height:35px !important;position: absolute;top: 9px;">+91</a></i>
       <input type="tel" id="login_mobile" name="login_mobile" class="form-control"  placeholder="Enter Mobile Number"  maxlength="13">
      </div>
	  
		</div>
		
		<div class="form-row special_box">
		
		<div class="form-group w65 inner-addon left-addon input_box">
      <i style="font-size:16px;" class="icon ion-md-albums" ></i>
        <input " type="number" id="login_otp" name="login_otp" class="form-control valid" placeholder="Verification Code" maxlength="6" aria-required="true" aria-invalid="false">
      </div>
	  
	  
	  <button class="gocode">OTP</button>
	  
		
		
		</div>
		
		<div class="form-row input_box" >
		
		<div class="form-group col-md-12 inner-addon left-addon">
      <i class="icon ion-md-key"></i>
        <input type="password" id="login_password" name="login_password" class="form-control valid" placeholder="Password" aria-required="true" aria-invalid="false">
      </div>
		
		
		</div>
		
		
		<div class="form-row ">
		
		<div class="form-group input_box col-md-12"> 
      <i class="fa fa-gift" aria-hidden="true"></i>
        <input type="number" id="recomendation-number" name="recomendation-number" class="form-control valid" placeholder="Recommendation Code" aria-required="true" aria-invalid="false">
      </div>
		
		
		</div>
		
		<div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
        <label class="custom-control-label" for="customCheck1">I Agree <a style="color:#F14625;" href="privacy.php">Privacy Policy</a></label>
      </div>
      
      
      <input type="hidden" name="action" value="login">
      <div>
      <div class="text-center mt-3">
        <button type="submit" class="btn btn-light" style="width:50%; border:none; color:#fff; background: #F14625;"> Register </button>
        </div>
       
      </div>
    </form>
		
		
		
		
		
		</div>
		
		
		
		
		</div>
		
		
		
		
		
		</div>

<!-- * App Header --> 
<!-- App Capsule ->
<div id="appCapsule">
  <div class="appContent1 mb-2">

    <form action="registerNow.php" method="post" id="Register" class="card-body" autocomplete="off">
    <div class="row ">
                    <div class="col-md-12">
      <div class="inner-addon left-addon">
      <i style="color:#841DA8;" class="icon ion-md-phone-portrait"> &emsp;</i>
        <input type="tel" value="+91" name="mobile" id="mobile"  class="form-control textbox" placeholder="Mobile Number" value="" maxlength="10" required>
      </div>
      </div>
      <!--<div class="col-4 pl-0"><a href="javascript:void(0);" style="width:100px; height:10px; font-size: 15px;" class="btn btn-primary otpbtn" id="reg_otp" onClick="mobileveryfication();">Send OTP</a></div>->
      </div>
      <div class="inner-addon left-addon">
      <i style="color:#841DA8;" class="icon ion-ios-mail">&emsp;&emsp;</i>
        <input type="email" name="email" id="email" class="form-control textbox" placeholder="Email ID" required>
      </div>
      <div class="inner-addon left-addon">
      <i style="color:#841DA8;" class="icon ion-md-lock">&emsp;&emsp;</i>
        <input type="password" name="password" id="password" class="form-control textbox" placeholder="New Password" required>
      </div>
      <div class="inner-addon left-addon">
      <i style="color:#841DA8;" class="icon ion-md-checkbox">&emsp;&emsp;</i>
        <input type="text" name="security" id="security" class="form-control textbox" placeholder="Security Number" required>
      </div>
      <div class="inner-addon left-addon">
      <i style="color:#841DA8;" class="icon ion-ios-gift">&emsp;&emsp;</i>
        <input type="text" name="rcode" id="rcode" class="form-control textbox" placeholder="Referal Code" value="<?php echo @$_GET['code'];?>">
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
        <button type="submit" class="btn1 btn-light" > Register </button>
        </div><br><hr>
 <div class="text-center mt-3">
            <label> If You Already Have an Account Then,<br>Login to Your Account</label>
             <a href="login.php" class="btn btn-primary">Login</a>
             </div>
      </div>
    </form>
  </div>
</div>
<!-- appCapsule -->

<?php include("include/footer.php");?>
<div id="registerthanksPopup" class="modal fade" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content ">
      <div class="modal-body">
        <div class="text-center">
          <h5>Thank you !</h5>
          <h6>Your account Registration Successfully.</h6>
          <div class="text-center">
<button type="button" class="btn btn-sm btn-primary" onClick="window.location='/login.php';">OK</button></div>
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
<!--<script src="assets/js/jquery.validate.min.js"></script>-->
<script src="assets/js/account.js"></script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput-jquery.min.js'></script>
 <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
</body>
</html>