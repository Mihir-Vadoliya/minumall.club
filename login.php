<?php
ob_start();
session_start();
ini_set('session.cookie_lifetime', 60 * 60 * 24 * 30); // 30 days
ini_set('session.gc_maxlifetime', 60 * 60 * 24 * 30); // 30 days

// check if user is already logged in from mobile
if(isset($_SESSION['mobile_logged_in']) && $_SESSION['mobile_logged_in'] === true) {
    // if so, log out PC version
    session_destroy();
}

// login from mobile form submission
if(isset($_POST['action']) && $_POST['action'] === 'mobile_login') {
    // validate login credentials and set session variables if valid
    // ...

    // set mobile logged in session variable to true
    $_SESSION['mobile_logged_in'] = true;

    // redirect to mobile dashboard
    header('Location: login.php');
    exit;
}

// login from PC form submission
if(isset($_POST['action']) && $_POST['action'] === 'pc_login') {
    // validate login credentials and set session variables if valid
    // ...

    // redirect to PC dashboard
    header('Location: login.php');
    exit;
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php include'head.php' ?>
<link rel="stylesheet" href="assets/css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Bitter Mobile Template">
<meta name="keywords" content="bootstrap, mobile template, bootstrap 4, mobile, html, responsive" />

<style>
    .btn { background-image: linear-gradient(
#29B6F6, 
#29B6F6);
    border-radius: 5px 5px 5px 5px;
    border: 0.5px solid white;
    color: white;
    transition: 0.5s;
    
}
    
    
</style>
</head>

<body>


<!-- * Page loading --> 

<!-- App Header -->
<div class="appHeader1" style="background-color:#F14625 !important">
<div class="left">
            <a href="javascript:void(0);" class="icon goBack">&nbsp;</a>
            <div class="pageTitle">Login</div>
        </div>
 
 
</div>
<!-- * App Header --> 
<!-- App Capsule -->
<div id="appCapsule">
  <div class="appContent1">

    <form action="#" id="loginForm" method="post" class="card-body" autocomplete="off">
      <div class="inner-addon left-addon">
      <i class="icon ion-md-phone-portrait"></i>
        <input type="tel" id="login_mobile" name="login_mobile" class="form-control" placeholder="Mobile Number" onKeyPress="return isNumber(event)"  maxlength="10">
      </div>
      <div class="inner-addon left-addon">
      <i class="icon ion-md-key"></i>
        <input type="password" id="login_password" name="login_password" class="form-control" placeholder="Password">
      </div>
      <input type="hidden" name="action" value="login">
      <div>
      <div class="text-center mt-3">
        <button type="submit" class="btn btn-light" style="width:264px;"> Login </button>
        </div>
        <div class="text-center mt-2">
        <a href="signup.php" class="btn btn-light">Sign Up</a>
        <a href="forgot-password.php" class="btn btn-light">Resset Password</a>
        </div>
      </div>
    </form>
  </div>
</div>
<!-- appCapsule -->

<?php include("include/footer.php");?>
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