<?php 
ob_start();
session_start();
if($_SESSION['frontuserid']=="")
{header("location:login.php");exit();
}


?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php include'head.php' ?>
<link rel="stylesheet" href="assets/css/style.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
.appHeader1 {
	background-color: #fff !important;
	border-color: #fff !important;
}
.appContent3 {
	background: #F14625 !important;
	border-color: #2196f3 !important;
	padding:12px;
	border-radius:3px;
	font-size:16px;
}
.user-block img {
	width: 40px;
	height: 40px;
	float: left;
	margin-right:10px;
	background:#333;
}
.img-circle {
	border-radius: 50%;
}
/*.accordion .btn-link {
	box-shadow:none;
	padding:8px !important;
	margin:0px 0px;
	color: #333 !important;
	font-size: 16px;
	font-weight: normal;
	border-top:solid 1px #ccc;
}
.accordion .collapsed {
	border:none;
}
.accordion .show {
	border-bottom:solid 1px #ccc;
}
.accordion .sub-link {
	box-shadow:none;
	padding:8px !important;
	color: #333 !important;
	font-size: 20px;
	font-weight: normal;
	display:block;
}
.accordion .sub-link:hover {
color:#00F !important;
}
.accordion .btn-link:hover {
	background:#F5F5F5;
}
.accordion .btn-link {
	position: relative;
}
 .accordion .btn-link::after {
 content: "\f107";
 color: #757575;
 top: 8px;
 right: 9px;
 position: absolute;
 font-family: "FontAwesome";
 font-size:24px;
}
 .accordion .btn-link[aria-expanded="true"]::after {
 content: "\f106";
}*/
.light{
    height: 24px;
    padding: 0px 0px;
	margin: 5px 2px;
	border-radius: 20px;
width: 24px;}
.light1{
    height: 26px;
    padding: 0px 0px;
	margin: 5px 2px;
	border-radius: 20px;
width: 26px;}

.recharge{
       
        margin-top:5px;
}
.accordion .card-header h2{text-align:left;}
.bx-shadow{box-shadow:0 3px 5px -1px rgba(0,0,0,.2),0 6px 10px 0 rgba(0,0,0,.14),0 1px 18px 0 rgba(0,0,0,.12)!important;}
.mine{
    display: flex;
    align-items: center;
    justify-content: space-around;
    color: #fff;
    font-size: 16px;
    padding: 20px 0;
}
.modal-title {
    font-weight: normal;
    color: #000;
}
.top-header {
    /*background: url(assets/img/bgtiop.png) no-repeat;*/
    background-color:#F14625;
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


.bnt{
     box-shadow: 0 3px 1px -2px rgb(0 0 0 / 20%), 0 2px 2px 0 rgb(0 0 0 / 14%), 0 1px 5px 0 rgb(0 0 0 / 12%);
    background: #f5f5f5;
    border-radius: 2px;
    font-size: 14px;
    height: 36px;
    line-height: 36px;
    color: rgba(0,0,0,.87);
    border: 0;
    width: 50%;
}
.icn-right{
 color: #7f7e7e !important;
    position: absolute;
    right: 31px;

}

.bx-shadow {
    box-shadow: 0 3px 5px -1px rgba(0,0,0,.2),0 6px 10px 0 rgba(0,0,0,.14),0 1px 18px 0 rgba(0,0,0,.12)!important;
}
.bgf {
    display: flex;
	color:#fff;
	font-size:15px;
    flex-direction: column;
    align-items: center;
}
.bgf h4{
	color:#fff;
	font-size:18px;
}

.bgf p{font-size:16px;}
.van-grid {
    display: -webkit-box;
    display: -webkit-flex;
    display: flex;
    -webkit-flex-wrap: wrap;
    flex-wrap: wrap;
}

.top-chunk {
    display: flex;
    justify-content: space-between;
    padding: 10px;
}

.top-chunk-sub{
    color: #fff;
    text-align: center;
    flex: 1;
}
.van-grid-item__content--center {
    -webkit-box-align: center;
    -webkit-align-items: center;
    align-items: center;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    justify-content: center;
}
.van-grid-item__content {
    display: -webkit-box;
    display: -webkit-flex;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    flex-direction: column;
    box-sizing: border-box;
    height: 100%;
    padding: 16px 8px;
    background-color: #fff;
}

.van-grid-item__content i{
    font-size: 33px;
    color: #a9a7a7;
}

.flt{
    position: fixed;
    top: 291px;
    right: 19px;
        width: 67px;
    font-size: 17px;
    height: 67px;
    border-color: #F14625;
    color: #F14625;
    background-color: #fff !important;
    border-radius: 50%;
}

.accordion .card-header a i{display:none;}

.btn-success {
    color: #000;
    background-color: #28dfd7;
    border-color: #28dfd7;
}

.mnu-list{
	margin:0px auto;
	padding:0px;
	list-style-type:none;
}

.mnu-list li{  
    padding: 10px 25px;
    margin: 22px 0;
    }
    
.mnu-list li:hover{background: #e7e7e7 !important;}

.mnu-list li:hover i{color:#F14625 !important;}
.mnu-list a{color: #7f7e7e !important;
    font-size: 18px;
    text-decoration: none;
    font-weight: 400;
}
.mnu-list a:hover{color:#F14625 !important;}
.btn-bell{
    background-color: #ffffff;
    border-color: #ffffff;
    color: #757575 !important;
    border-radius: 50%;
    width: 40px;
    
}
.modal-header{background-color:#fff; border:none;}
.modal-footer{border:none;}
.contentBox.long .contentBox-body{padding: 7px;}

.accordion {
  width: 100%;
  max-width: 100%;
  margin: 0px;
  padding:0px;
  background: #FFF;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
}

.accordion .link {
  cursor: pointer;
  display: block;
  padding: 15px 15px 15px 42px;
      font-size: 16px;
    color: #4e4e4e;
  font-weight:500;
  
  position: relative;
  -webkit-transition: all 0.4s ease;
  -o-transition: all 0.4s ease;
  transition: all 0.4s ease;
}

.accordion li:last-child .link { border-bottom: 0; }

.accordion li:hover i{color:#F14625;}

.accordion li:hover a{color:#F14625;}

.accordion li i {
  position: absolute;
  top: 16px;
  left: 12px;
  font-size: 18px;
  color: #595959;
  -webkit-transition: all 0.4s ease;
  -o-transition: all 0.4s ease;
  transition: all 0.4s ease;
}

.accordion li i.fa-chevron-down {
  right: 12px;
  left: auto;
  font-size: 16px;
}

.accordion li.open .link { color: #F14625; }

.accordion li.open i { color: #F14625; }

.accordion li.open i.fa-chevron-down {
  -webkit-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  -o-transform: rotate(180deg);
  transform: rotate(180deg);
}

.submenu {
  display: none;
  background:none;
  font-size: 14px;
}



.submenu a {
  display: block;
  text-decoration: none;
  color:#595959;
  padding: 12px;
 font-size: 16px;
    padding-left: 19px;
  -webkit-transition: all 0.25s ease;
  -o-transition: all 0.25s ease;
  transition: all 0.25s ease;
}

.submenu a:hover {
      background: #fff;
    color: #F14625;
}
ul{list-style-type:none;}
a{
    
    color: #62686e;
    text-decoration: none;

}
a:hover {
    color: #F14625;
    text-decoration: none;
}

@media only screen and (max-width: 600px) {
 
 .bgf{font-size:13px;}
 .dropdown-item{padding: 6px 13px;}
 .btn-bell{margin: -59px 0px 0px 0;}
 .mnu-list li {
    padding: 18px 25px;
    margin: 1px 0;
}
.dropdown-toggle::after{display:none;}
.top-header{padding:0px;}
.nmn{padding-right: 20px !important; display:block !important; color: #757575 !important;}
.modal{top:90px;}

 
}
	
</style>
</head>

<body>
<?php
$selectruser=mysqli_query($con,"select * from `tbl_user` where `id`='".$userid."'");
$userresult=mysqli_fetch_array($selectruser);
$selectwallet=mysqli_query($con,"select * from `tbl_wallet` where `userid`='".$userid."'");
$walletResult=mysqli_fetch_array($selectwallet);

$selectwallet1=mysqli_query($con,"select * from `tbl_withdrawal` where `userid`='".$userid."'");
$whithdraw_amount=0;
while($walletResult1=mysqli_fetch_array($selectwallet1))
{
  $whithdraw_amount = $whithdraw_amount + $walletResult1['amount'];
}


?>




<!-- Page loading ->
<div class="loading" id="loading">
  <div class="spinner-grow"></div>
</div>
<!-- * Page loading --> 

<!-- basic modal -->
<div class="modal fade wd500" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Notice</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Notice
Latest Announcement: Due to the fluctuation of the banking system and the instability of the banking system, the withdrawal and arrival of the account are delayed.
Please be patient. Please don’t worry, all members will arrive in the account. Your funds will always belong to you. The security of the platform is the highest 
in the world. Good game, the delay in the account will cause inconvenience to everyone, please forgive me! 

</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>

<!-- App Header -->
<div class="container-fluid top-header "> 
  <div class="  text-white" style="    padding: 8px 0;">
    <div class="row">
      <div class="col-md-4 mb-1">
        <div class="user-block"> 
        <img class="img-circle bx-shadow img-bordered-lg" src="assets/img/avatar.svg"> 
        User ID: <?php echo sprintf("%06d",user($con,'id',$userid));?> <br>
        Mobile: +91 <?php echo user($con,'mobile',$userid);?><br>
        
        </div>
  </div>
  
  <div class="col-md-8 mb-1">
      <a href="#" class="btn btn-bell float-right" data-toggle="modal" data-target="#basicModal"><i class="fa fa-bell" aria-hidden="true"></i></a>
  </div>
  </div>
  
  <div class="row top-chunk" >
      
      <div class="top-chunk-sub bgf">
          ₹ <?php echo number_format(wallet($con,'amount',$userid), 2);?> <br>
          Available Balance 
          <div class="recharge ">
              <a href="recharge.php" class="btn btn-sm btn-success pull-left m-0" style="background-color:#2196f3!important;     height: 20px; color:#fff; border-radius:0px; border-color: #2196f3;">Recharge</a>
          </div>
        </div>
       <?php   
        $interser_amount= 0;
        $sql134 = mysqli_query($con,"select * from tbl_interest where userid='$userid'");
        while($row134 = mysqli_fetch_array($sql134)){
          $interser_amount = $interser_amount+ $row134['amount'];
        }
        
        $interser_amount;
        ?>
        <div class="top-chunk-sub bgf">
          ₹ <?php echo number_format($interser_amount,2); ?><br>
          Interest
          <div class="recharge ">
              <a href="interest.php" class="btn btn-sm btn-success pull-left m-0" style="background-color:#2196f3!important;     height: 20px; color:#fff; border-radius:0px; border-color: #2196f3;">See</a>
          </div>
        </div> 
        
        <div class="top-chunk-sub bgf">
          ₹ <?php echo (bonus($con,'amount',$userid));?><br>
          Commission
          <div class="recharge ">
              <a href="promotion.php" class="btn btn-sm btn-success pull-left m-0" style="background-color:#2196f3!important;     height: 20px; color:#fff; border-radius:0px; border-color: #2196f3;">See</a>
          </div>
        </div>
        
        
        <!--div class="top-chunk-sub bgf">
          ₹ <?php echo $whithdraw_amount;?> <br>
          Withdrawl
          <div class="recharge ">
              <a href="withdrawal.php" class="btn btn-sm btn-success pull-left m-0" style="background-color:#2196f3!important;     height: 20px; color:#fff; border-radius:0px; border-color: #2196f3;">See</a>
          </div>
        </div-->
        
        
        
        
        
      </div>
      
      
      </div>

</div>

<!-- searchBox --> 

<!-- * searchBox --> 
<!-- * App Header --> 
<!-- sigin modal -->
<div class="modal fade" id="signinModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Sign In</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ul>
            <li><p>Total：1 Days</p></li>
            <li><p>Today Rebates：₹ 0</p></li>
            <li><p>Total Rebates：₹ 0</p></li>
            <li><p>Status：Had signed in</p></li>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn " data-dismiss="modal">Cancel</button>
        <button type="button" class="btn ">Sign In</button>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
    
    <div class="row">
        
        <div class="col-md-12" style="padding: 0px;">
            <ul id="accordion" class="accordion ">
  <li>
    <div class="link"><a  href="#" data-toggle="modal" data-target="#signinModal"><i class="fa fa-calendar-check-o" ></i>Sign In</a><i class="fa fa-chevron-down"></i></div>
    <!--<ul class="submenu">
      <li><a href="#">Photoshop</a></li>
      <li><a href="#">HTML</a></li>
      <li><a href="#">CSS</a></li>
    </ul>-->
  </li>
  <li>
    <div class="link"><a href="order.php"><i class="fa fa-sign-in" ></i>Order</a><i class="fa fa-chevron-down"></i></div>
    
  </li>
  <li>
    <div class="link"><a href="promotion.php"><i class="fa fa-arrow-up" ></i>Promotion</a><i class="fa fa-chevron-down"></i></div>
    
  </li>
  <!--li>
    <div class="link"><a href="red_envelop.php"><i class="fa fa-shopping-bag" ></i>Red Envelope</a><i class="fa fa-chevron-down"></i></div>
    
  </li-->
  
  <li>
    <div class="link"><i class="fa  fa-envelope-o" ></i>Wallet<i class="fa fa-chevron-down"></i></div>
    <ul class="submenu">
      <li><a href="recharge.php" > Recharge </a></li>
      <li><a href="withdrawal.php"> Withdrawal </a></li>
      <li><a href="transactions.php" > Transactions </a></li>
      <li><a href="referral_bounus.php" > Referral Bonus </a></li>
       <li><a href="wallet_to_wallet.php" > Amount Transfer</a></li> 
       <li><a href="wallet_t.php" > Wallet Transaction </a></li> 
    </ul>
  </li>
  <li>
    <div class="link"><a href="manage_bankcard.php"><i class="fa fa-bullhorn"></i>Bankcard </a><i class="fa fa-chevron-down"></i></div>
    
  </li>
  <li>
    <div class="link"><a href="address.php"><i class="fa fa-address-card" ></i>Address </a><i class="fa fa-chevron-down"></i></div>
    
  </li>
  <li>
    <div class="link"><i class="fa fa-money" ></i>Account Security<i class="fa fa-chevron-down"></i></div>
    <ul class="submenu">
      <li><a href="forgot-password.php"> Reset Password </a></li>
      
      
    </ul>
  </li>
  <!--<li>
    <div class="link"><i class="fa fa-download" ></i>App Download <i class="fa fa-chevron-down"></i></div>
    <ul class="submenu">
      <li> <a href="#"> Android Download </a></li>
      
      
    </ul>
  </li>-->
  <li>
    <div class="link"><a href="complaints_and_suggestions.php"><i class="fa fa-comments"></i>Complaints & Suggestions </a><i class="fa fa-chevron-down"></i></div>
    
  </li>
  <li>
    <div class="link"><i class="fa fa-university"></i>About <i class="fa fa-chevron-down"></i></div>
    <ul class="submenu">
      <li> <a href="privacy.php"> Privacy Policy</a></li>
      <li> <a href="riskagreement.php">Risk Disclosure Agreement</a></li>
		    
      
    </ul>
  </li>
  
</ul>
        </div>
        
    </div>
    
    
    
</div>

<script>
    $(function() {
	var Accordion = function(el, multiple) {
		this.el = el || {};
		this.multiple = multiple || false;

		// Variables privadas
		var links = this.el.find('.link');
		// Evento
		links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
	}

	Accordion.prototype.dropdown = function(e) {
		var $el = e.data.el;
			$this = $(this),
			$next = $this.next();

		$next.slideToggle();
		$this.parent().toggleClass('open');

		if (!e.data.multiple) {
			$el.find('.submenu').not($next).slideUp().parent().removeClass('open');
		};
	}	

	var accordion = new Accordion($('#accordion'), false);
});

</script>
 <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                                <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
                                <script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js'></script>


<!-- App Capsule ->
<div class="appContent1 mb-5">
  <div class="contentBox long ">
    <div class="contentBox-body card-body"> 
    
    	<div class="container-fluid" style="padding: 0px;">
	
	<div class="row">
	
	<div class="col-md-12">
	    <ul class="mnu-list">
		
		<li><i class="fa nmn fa-calendar-check-o" ></i><a href="#">Sign In</a>  <i class="fa icn-right fa-arrow-down" ></i></li>
		
		<li><i class="fa nmn fa-sign-in" ></i><a href="order.php">Order</a>  <i class="fa icn-right fa-arrow-down" ></i></li>
		
		<li><i class="fa nmn fa-arrow-up" ></i><a href="promotion.php">Promotion</a>  <i class="fa icn-right fa-arrow-down" ></i></li>
		
		<li><i class="fa nmn fa-shopping-bag" ></i><a href="#">Red Envelope</a>  <i class="fa icn-right fa-arrow-down" ></i></li>
		
	<!--	<li><i class="fa nmn fa-tasks" ></i><a href="transactions.php">Transcations</a>  <i class="fa icn-right fa-arrow-down" ></i></li>->
		
		
		
		
		
		<li><i class="fa nmn fa-envelope-o" ></i><a class=" dropdown-toggle " type="button"  data-toggle="dropdown">Wallet</a>  <i class="fa icn-right fa-arrow-down" ></i>
		
		<div class="dropdown-menu">
		    <a href="recharge.php" class="dropdown-item"> Recharge </a>
          <a href="withdrawal.php" class="dropdown-item"> Withdrawal </a>
          <a href="transactions.php" class="dropdown-item"> Transactions </a>
    
         </div>
		
		
		
		</li>
		
		<li><i class="fa nmn fa-bullhorn"></i><a href="manage_bankcard.php">Bankcard </a>  <i class="fa icn-right fa-arrow-down" ></i></li>
		
		<li><i class="fa nmn fa-address-card" ></i><a href="#">Address </a>  <i class="fa icn-right fa-arrow-down" ></i></li>
		
		
		<li><i class="fa nmn fa-money" ></i><a class=" dropdown-toggle " type="button"  data-toggle="dropdown"> Account Security </a>  <i class="fa icn-right fa-arrow-down" ></i>
		
		
		
		<div class="dropdown-menu">
		    <a href="forgot-password.php" class="dropdown-item"> Reset Password </a>
         
    
         </div>
		
		
		
		</li>
		
		<li><i class="fa nmn fa-download" ></i><a class=" dropdown-toggle " type="button"  data-toggle="dropdown"> App Download </a>  <i class="fa icn-right fa-arrow-down" ></i>
		
		
		
		<div class="dropdown-menu">
		    <a href="#" class="dropdown-item"> Android Download </a>
         
    
         </div>
		
		
		
		</li>
		
		<li><i class="fa nmn fa-comments" aria-hidden="true"></i><a href="#">Complaints & Suggestions </a>  <i class="fa icn-right fa-arrow-down" ></i></li>
		
		
		<li><i class="fa nmn fa-university"></i><a class=" dropdown-toggle " type="button"  data-toggle="dropdown">About</a> <i class="fa icn-right fa-arrow-down" ></i>
		
		
		<div class="dropdown-menu">
		    <a href="privacy.php" class="dropdown-item"> Privacy Policy</a>
		    <a href="riskagreement.php" class="dropdown-item">Risk Disclosure Agreement</a>
		    <!--<a href="notification.php" class="dropdown-item"> Notification</a>->
         
    
         </div>
		
		
		
		</li>
		
		
		
		
		
		<!--<li><i class="fa nmn fa-comments" aria-hidden="true"></i><a href="contact_us.php">Contact Us</a>  <i class="fa icn-right fa-arrow-down" ></i></li>->
		
		
		
	
		
		
		
		
		</ul>
	
	
	</div>
	
	
	
	
	</div>
	
	
	
	
	</div>
      
      <!-- listview ->
<p style="color: white; font-size:11px;" ><strong>______________________________________________________________________________ </p>      
      <div class="accordion" id="accordionExample">
          <div class="card-header">
            <h2 class="mb-0"> 
            <i class='fas fa-box'></i>
             <a href="order.php" class="btn btn-link collapsed fa fa-list text-primary"></i>
           <i class="fa fa-list"></i>Order </a> </h2>
          </div>
<p style="color: white; font-size:11px;" ><strong>______________________________________________________________________________ </p>             
          <div class="card-header">
            <h2 class="mb-0"> 
             <a href="transactions.php" class="btn btn-link collapsed fa fa-money text-primary" ></i>
           <i class="fa fa-money" ></i>Transcations </a> </h2>
          </div>
<p style="color: white; font-size:11px;" ><strong>______________________________________________________________________________ </p>   
          <div class="card-header">
          <h2 class="mb-0"> 
          <a href="promotion.php" class="btn btn-link collapsed fa fa-gift text-primary" ></i>
           <i class="fa fa-gift" ></i>Promotion </a> </h2>
          </div>
<p style="color: white; font-size:11px;" ><strong>______________________________________________________________________________________________________________________________________________________________ </p>             
          <div class="card-header" id="headingThree">
          <h2 class="mb-0"> <a href="#" class="btn btn-link collapsed fa fa-rupee text-primary" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"></i><i class="fa fa-inr"></i>Wallet</a> </h2>
         </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
          <a href="recharge.php" class="sub-link"> Recharge </a>
          <a href="withdrawal.php" class="sub-link"> Withdrawal </a>
          <a href="transactions.php" class="sub-link"> Transactions </a>
          </div>
<p style="color: white; font-size:11px;" ><strong>______________________________________________________________________________ </p>             
<div class="card-header">
            <h2 class="mb-0"> 
             <a href="manage_bankcard.php" class="btn btn-link collapsed fa fa-bank text-primary" ></i>
           <i class="fa fa-university" aria-hidden="true"></i>Bankcard </a> </h2>
           </div> 
          <!--<div class="card-header">-->
          <!--  <h2 class="mb-0"> <a href="#" class="btn btn-link collapsed"> Share </a> </h2>-->
          <!--</div>->
<p style="color: white; font-size:11px;" ><strong>______________________________________________________________________________ </p>           
        <div class="card-header" id="headingThree">
          <h2 class="mb-0"> <a href="#" class="btn btn-link collapsed fa fa-shield text-primary" type="button" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour"> <i class="fa fa-shield"></i> Account Security </a> </h2>
        </div>
<p style="color: white; font-size:11px;" ><strong>______________________________________________________________________________ </p>   
        <div id="collapsefour" class="collapse">
      <a href="forgot-password.php" class="sub-link"> Reset Password </a>
        </div>
        <div class="card-header" id="headingThree">
          <h2 class="mb-0"> <a href="#" class="btn btn-link collapsed fa fa-user text-primary" type="button" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive"> <i class="fa fa-user" ></i>About </a> </h2>
        </div>
        <div id="collapsefive" class="collapse">
        <a href="privacy.php" class="sub-link"> Privacy Policy </a>
        <a href="riskagreement.php" class="sub-link"> Risk Disclosure Agreement </a>
        <a href="notification.php" class="sub-link"> Notification </a>
         </div>
<p style="color: white; font-size:11px;" ><strong>_____________________________________________________________________</p>            
<div class="card-header">
            <h2 class="mb-0"> 
             <a href="contact_us.php" class="btn btn-link collapsed"><i class="fa fa-telegram " ></i>
           Contact us </a> </h2>
          </div>
<p style="color: white; font-size:11px;" ><strong>_____________________________________________________________________</p>            
<!--<div class="card-header">-->
<!--            <h2 class="mb-0"> -->
<!--             <a href="https://t.me/Vclubssupport" class="btn btn-link collapsed"><i class="fa fa-telegram text-primary"></i>-->
<!--           Support </a> </h2>-->
<!--          </div>          -->
         </div>
      <!-- * listview -> 
      </div>
  </div>
   <!-- app Footer -->
   <div class="row">
       
       <div class="col-md-12 text-center mb-3" style="margin-top:8px; margin-bottom: 67px !important;">
           <div class="text-center">
      
                   <a href="logout.php"  class="btn bnt btn-sm btn-light" >Logout</a>
            </div>
       </div>
       
       
   </div>
  

  <!-- * app Footer --> 
  
</div>



<!--<button type="button" class="flt" data-toggle="modal" data-target="#form">
    
    <img style="width:81%;" src="assets/img/headphone.png">
    <p style="font-size: 12px; margin-top: -4px;">Online</p>
    
  </button> -->

<!---modal--->
<div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <h5 class="modal-title" id="exampleModalLabel">Feel free to message us</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="support.php" method="post">
        <div class="modal-body">
          <div class="form-group">
            <label for="email1">Email address</label>
            <input type="email" class="form-control" id="email1" name="email" aria-describedby="emailHelp" placeholder="Enter email" value="<?php echo $userresult['email'];?>" >
            <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small>
          </div>
          <div class="form-group">
            <label for="PhoneNumber">Phone Number</label>
            <input type="number" class="form-control" id="PhoneNumber" name="mobile" value="<?php echo $userresult['mobile'];?>" placeholder="Phone Number" readonly>
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <input type="text" class="form-control" id="message" name="message" placeholder="Message">
          </div>
        </div>
        <div class="modal-footer border-top-0 d-flex justify-content-center">
          <!--<button type="submit" class="btn btn-success">Submit</button>-->
          <input type="submit" name="enquery" value="Submit" class="btn btn-success">
        </div>
      </form>
    </div>
  </div>
</div>




<!-- appCapsule -->
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