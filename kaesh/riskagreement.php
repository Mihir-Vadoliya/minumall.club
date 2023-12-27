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
<meta name="description" content="Lottlucy">
<style>

.card {
	border-radius:0px;
}
h1{font-size:1.7rem; font-weight:600;}
h2{font-size:1.4rem; font-weight:600;}
h3{font-size:1rem; font-weight:600;}
.appBottomMenu .item .ion-md-person{color: #F14625!important;}
.appBottomMenu .item .toggleSidebar span{color: #F14625!important;}

</style>
</head>

<body>
<?php //include("include/connection.php");?>


<!-- App Header -->
<div class="appHeader1">
  <div class="left"> 
  <a href="#" onClick="goBack()" class="icon goBack"> 
  <i class="icon ion-md-arrow-back"></i> 
  </a>
    <div class="pageTitle">Risk Disclosure Agreement</div>
  </div>
</div>
<!-- * App Header --> 

<!-- App Capsule -->
<div id="appCapsule" style="padding:15px;">
  <div class="appContent">
    <div class="sectionTitle1 mt-2 mb-2"> 
      
      <?php echo content($con,'riskagreement');?>
      <p>&nbsp;</p>
    </div>
  </div>
</div>

<?php include("include/footer.php");?>
<!-- Jquery --> 
<script src="assets/js/lib/jquery-3.4.1.min.js"></script> 
<!-- Bootstrap--> 
<script src="assets/js/lib/popper.min.js"></script> 
<script src="assets/js/lib/bootstrap.min.js"></script> 
<!-- Owl Carousel --> 
<script src="assets/js/plugins/owl.carousel.min.js"></script> 
<!-- Main Js File --> 
<script src="assets/js/app.js"></script>
</body>
</html>