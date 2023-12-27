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
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<link href="assets/css/dataTables.bootstrap.min.css" rel="stylesheet"/>
<meta name="description" content="Lottlucy">
<style>
.appHeader1 {
    	background-image: url("bg.jpg");
}
.card {
	border-radius:0px;
}
.appContent {
  	padding-right:20px;
  		padding-left:20px;
}
h1{font-size:1.7rem; font-weight:600;}
h2{font-size:1.4rem; font-weight:600;}
</style>
</head>

<body>
<?php //include("include/connection.php");?>
<!-- Page loading -->
<div class="loading" id="loading">
  <div class="spinner-grow"></div>
</div>
<!-- * Page loading --> 

<!-- App Header -->
<div class="appHeader1">
  <div class="left"> 
  <a href="index.php" onClick="goBack()" class="icon goBack"> 
  <i class="icon ion-md-arrow-back"></i> 
  </a>
    <div class="pageTitle">Notification</div>
  </div>
</div>
<!-- * App Header --> 

<!-- App Capsule -->
<div id="appCapsule">
  <div class="appContent">
     <?php
    $Query=mysqli_query($con,"select * from tbl_website");
    $row=mysqli_fetch_array($Query);
    ?>
     <div style="text-align: center;"><br><br>
       <p style="font-size: 17px;"><?php echo $row['notification'];?></p>
	   <br>

<!--E-mail: <a href="mailto:jeetostarclub@gmail.com">jeetostarclub@gmail.com</a> <br>-->
<!--Working Hour: We Work 24/7 To Help You<br>-->
        
   <!--     <i class="fab fa-whatsapp-square" style="color:#3EDC81; font-size:20px"></i> <b><span id="W_whatsapp"><a href="tel:"></a></span></b><br><p></p>    -->
     
   <!--<h6 style="text-align-center; color:#3E005D">We will revert you as soon as possible...!</h6>-->
   <!--   <p style="text-align:center; color:#3E005D;">Thank you for contacting us! <br><b>Have a great day</b></p>-->
    </div>
    
  </div>
</div>
    <br><br> <br><br>
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