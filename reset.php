<?php
ob_start();
session_start();

?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<script type="text/javascript">
  function preventBack(){window.history.forward()};
  setTimeout("preventBack()",0);
     window.onunload=function(){null;}
     </script>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php include'head.php' ?>
<link rel="stylesheet" href="assets/css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<link href="assets/css/dataTables.bootstrap.min.css" rel="stylesheet"/>
<meta name="description" content="Bitter Mobile Template">
<meta name="keywords" content="bootstrap, mobile template, bootstrap 4, mobile, html, responsive" />

<style>
     .btn { 
        color: white;
    height:45px; 
    border-radius:13px; 
    background-image: linear-gradient(
#ae18e3, 
#5b1474);
   
}
.textbox {
  height: auto;
  width: 300;
  color: #fff;
  outline: none;
  border: none;
  border-radius: 8px;
  font-size: 18px;
  font-weight: 400;
  margin: 0px 0;
  cursor: pointer;
  transition: all 0.4s ease;
}
    
.appHeader1 {
	background-image: url("bg.jpg");

}
</style>
</head>

<body>


<!-- * Page loading --> 

<!-- App Header -->
<div class="appHeader1">
<div class="left">
            <a href="javascript:void(0);" class="icon goBack">&nbsp;</a>
            <div class="pageTitle">Reset Password</div>
        </div>
 
 
</div>
<!-- * App Header --> 
<!-- App Capsule -->
<div id="appCapsule">
  <div class="appContent1">
<?php //print_r($_REQUEST['mobile']);exit; ?>
    <form action="password_update.php" method="post" >
        <input type="hidden" name="mobile" value="<?php echo $_REQUEST['mobile']; ?>" >
      <div class="inner-addon left-addon">
      <i style="color:#841DA8;">&emsp;</i>
        <input type="password" id="password" name="password" class="form-control textbox" placeholder="Enter New Password">
      </div>
      <div class="inner-addon left-addon">
      <i style="color:#841DA8;">&emsp;</i>
        <input type="password" id="new_password" name="new_password" class="form-control textbox" placeholder="Enter Confirm Password">
      </div>
      <div>
      <div class="text-center mt-3">
<input type="submit" name="submit"value="Update" style="width:200px; height:45px; border-radius:13px; background-image: linear-gradient(#ae18e3, #5b1474);">
        </div>
       <hr>
        <div class="text-center mt-2">
        <!--<a href="signup.php" class="btn btn-light">Register</a>-->
        <!--<a href="forgot-password.php" class="btn btn-light">Reset Password</a>-->
        </div>
      </div>
    </form>
  </div>
</div><br><br><br><br><br><br><br><br><br><br><br><br>
<a href="/starwingo.apk"><img alt="app download" src="download.png" width="100%&quot;" height="100%">
        </a>
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