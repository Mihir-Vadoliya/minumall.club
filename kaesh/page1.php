
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<?php include'head.php' ?>
<link rel="stylesheet" href="assets/css/style.css">


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <!--<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

  
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>

<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
<style>
.modal-title {
    font-weight: normal;
    color: #000;
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

.mnu-list li{    padding: 10px 25px;
    margin: 1px 0;
    }
    
.mnu-list li:hover{background: #e7e7e7 !important;}

.mnu-list a{color: #000;
    font-size: 18px;
    text-decoration: none;
    font-weight: 400;}
	
.icn-right{
 color: #333;
    position: absolute;
    right: 31px;

}

.bx-shadow {
    box-shadow: 0 3px 5px -1px rgba(0,0,0,.2),0 6px 10px 0 rgba(0,0,0,.14),0 1px 18px 0 rgba(0,0,0,.12)!important;
}
.bgf {
    display: flex;
	color:#fff;
	font-size:18px;
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
   position: absolute;
    bottom: -37px;
    right: 60px;
    width: 45px;
    font-size: 22px;
    height: 45px;
    color: #000;
    border-radius: 50%;
    background: #d8d8d8 !important;
}

.btn-success {
    color: #000;
    background-color: #28dfd7;
    border-color: #28dfd7;
}
</style>
</head>

<body>


	<div class="container-fluid top-header">
	
	<div class="row">
	
	<div class="col-md-6 d-flex">
	
	<img class=" nb" src="assets/img/avater.png"> 
	
	<p class="id-m">Member9901</p>
	
	</div>
	
	<div class="col-md-6 d-flex">
	
	 
	
	</div>

	</div>
	
	
	<div class="row top-chunk" style="padding-top:20px;">
	
	
	<div class="top-chunk-sub bgf">
	
	 <h4>₹ 0.00</h4>
	 <p >Available Balance<p>
	
	</div>
	
	
	<div class="top-chunk-sub bgf">
	
	 <h4>₹ 0.00</h4>
	 <p >Commision<p>
	
	</div>
	
	
	<div class="top-chunk-sub bgf">
	
	 <h4>₹0.00</h4>
	 <p>Interest<p>
	
	</div>
	
	
	
	</div>
	
	
	
	</div>
	
	
	
	<div class="">
	<p style=" margin: 12px;" class="text-left">My Orders</p>
	
	
	<div class="van-grid">
	
	<div class="van-grid-item__content van-grid-item__content--center  " style="flex-basis: 25%;">
	
	<div class="text-center ">
	
	<i class='fa fa-money'></i>
	<p class="van-grid-item__text">Undeliver</p>
	</div>
	
	
	
	</div>
	
	<div class="van-grid-item__content van-grid-item__content--center  " style="flex-basis: 25%;">
	
	<div class="text-center " >
	
	<i class="fa fa-truck" aria-hidden="true"></i>
	<p class="van-grid-item__text">UnReceive</p>
	</div>
	
	
	
	</div>
	
	
	
	<div class="van-grid-item__content van-grid-item__content--center " style="flex-basis: 25%;">
	
	<div class="text-center " >
	
	<i class="fa fa-exchange" aria-hidden="true"></i>

	<p class="van-grid-item__text">Refund</p>
	</div>
	
	
	
	</div>
	
	<div class="van-grid-item__content van-grid-item__content--center " style="flex-basis: 25%;">
	
	<div class="text-center " >
	
	<i class="fa fa-list" aria-hidden="true"></i>

	<p class="van-grid-item__text">All Orders
	
	</p>
	</div>
	
	
	
	</div>
	
	</div>
	
	
	
	
	
	
	</div>
	
	
	
	<div class="container-fluid" style="padding: 15px 0px;">
	
	<div class="row">
	
	<div class="col-md-12">
	
		<ul class="mnu-list">
		
		<li><i class="fa nmn fa-sign-in" ></i><a href="#">Sign-in Center</a>  <i class="fa icn-right fa-arrow-down" ></i></li>
		
		<li><i class="fa nmn fa-tasks" ></i><a href="#">My Task</a>  <i class="fa icn-right fa-arrow-down" ></i></li>
		
		
		<li><i class="fa nmn fa-arrow-up" ></i><a href="#">Top Player</a>  <i class="fa icn-right fa-arrow-down" ></i></li>
		
		
		<li><i class="fa nmn fa-envelope-o" ></i><a href="#">Red Enveloper</a>  <i class="fa icn-right fa-arrow-down" ></i></li>
		
		<li><i class="fa nmn fa-bullhorn"></i><a href="#">My Promotion</a>  <i class="fa icn-right fa-arrow-down" ></i></li>
		
		
		<li><i class="fa nmn fa-money" ></i><a href="#">My Wallet </a>  <i class="fa icn-right fa-arrow-down" ></i></li>
		
		
		<li><i class="fa nmn fa-university"></i><a href="#">My Bank</a> <i class="fa icn-right fa-arrow-down" ></i> </li>
		
		
		<li><i class="fa nmn fa-address-card" ></i><a href="#">My Address</a>  <i class="fa icn-right fa-arrow-down" ></i></li>
		
		
		<li><i class="fa nmn fa-lock" aria-hidden="true"></i><a href="#">Account Security</a>  <i class="fa icn-right fa-arrow-down" ></i></li>
		
		<li><i class="fa nmn fa-list" aria-hidden="true"></i><a href="#">Financial Details</a>  <i class="fa icn-right fa-arrow-down" ></i></li>
		
		<li><i class="fa nmn fa-user" aria-hidden="true"></i><a href="#">About Us</a>  <i class="fa icn-right fa-arrow-down" ></i></li>
		
		
		
		<li><i class="fa nmn fa-comments" aria-hidden="true"></i><a href="#">Complaints & Suggestions</a>  <i class="fa icn-right fa-arrow-down" ></i></li>
		
		
		
		<li><i class="fa nmn fa-trash" aria-hidden="true"></i><a href="#">Force cache clear</a>  <i class="fa icn-right fa-arrow-down" ></i></li>
		
		
		
		<li><i class="fa nmn fa-sign-out" aria-hidden="true"></i><a href="#">Sign Out</a>  <i class="fa icn-right fa-arrow-down" ></i></li>
		
		
		
		
		</ul>
	
	
	
	</div>
	
	
	
	
	</div>
	
	
	
	
	</div>
	
	<button type="button" class="flt" data-toggle="modal" data-target="#form">
    <i class="fa fa-phone" ></i>
  </button> 

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
      <form>
        <div class="modal-body">
          <div class="form-group">
            <label for="email1">Email address</label>
            <input type="email" class="form-control" id="email1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small>
          </div>
          <div class="form-group">
            <label for="PhoneNumber">Phone Number</label>
            <input type="number" class="form-control" id="PhoneNumber" placeholder="Phone Number">
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <input type="text" class="form-control" id="message" placeholder="Message">
          </div>
        </div>
        <div class="modal-footer border-top-0 d-flex justify-content-center">
          <button type="submit" class="btn btn-success">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
  

  <!-- * app Footer --> 
  
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