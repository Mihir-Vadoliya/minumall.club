<?php 
ob_start();
session_start();
if($_SESSION['frontuserid']=="")
{header("location:login.php");exit();}?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<?php include 'head.php';?>
<link rel="stylesheet" href="assets/css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Bitter Mobile Template">
<meta name="keywords" content="bootstrap, mobile template, bootstrap 4, mobile, html, responsive" />
<style>
h3 {
	font-weight:normal;
}
.tdtext{ font-size:16px !important; color:#090 !important; font-weight:normal; text-align:right;}
.tdtext2{ font-size:16px !important; color:#f00 !important; font-weight:normal; text-align:right;}
.tdtext3{ font-size:16px !important; color:#FFB400 !important; font-weight:normal; text-align:right;}

.text small{ font-size:12px; color:#888;}
.listView .listItem {
   padding: 0px 55px 0px 0px;
}
.listView .listItem .text {
    font-size: 16px;
}


.tabbable-responsive {
  display: block;
  min-width: 100%;
  overflow-x: auto;
  margin: 0px -21px -13px -21px;
}
.tabbable {
  min-width: 100%;
}
.tabbable .nav-tabs {
  white-space: nowrap;
  display: inline-block;
  min-width: 100%;
  padding: 0px 21px;
}
.tabbable .nav-tabs .nav-item {
  display: inline-block;
      padding: 1px 136px;
}
.tabbable .nav-tabs .nav-item .nav-link {
  display: inline-block;
}

.card {
  box-shadow: 0 5px 15px -5px rgba(0, 0, 0, 0.15);
}
.nav-tabs {
    background: #F14625;
   padding: 5px 3px 5px 3px;
}
.nav-tabs .nav-link{
    color:#ffffff8c;
    height:34px;
}
.nav-tabs .nav-link:hover {
    background: none;
    color: #f8f8f8;
    border-bottom: 7px solid #fff !important;
}
.nav-tabs .nav-link.active{
    background: none;
    color: #f8f8f8;
    border-bottom: 7px solid #fff !important;
}
.nd{
    font-size: 12px;
    text-align: center;
    padding: 15px 0px;
    color: rgb(136, 136, 136);
}
.appBottomMenu .item.active span {
    color: #F14625!important;
}

.appBottomMenu .item .ion-md-person{color: #F14625!important;}
.appBottomMenu .item .toggleSidebar span{color: #F14625!important;}


@media only screen and (max-width: 600px) {

.tabbable .nav-tabs .nav-item{
     padding: 0px;
}
.nav-tabs .nav-link{
        padding: 0 14px;
}

}
</style>
</head>

<body>


<!-- Page loading -->
<div class="loading" id="loading">
  <div class="spinner-grow"></div>
</div>
<!-- * Page loading -->

<!-- * Page loading --> 

<!-- App Header -->
<div class="appHeader1" style="background-color:#F14625 !important">
  <div class="left"> <a href="#" onClick="goBack();" class="icon goBack"> <i class="icon ion-md-arrow-back"></i> </a>
    <div class="pageTitle">Order History</div>
  </div>
</div>
<!-- * App Header --> 
<!-- App Capsule -->
<div class="container-fluid" ><!--id="appCapsule"-->



<!-- START TABS DIV -->
      <div class="tabbable-responsive">
        <div class="tabbable">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="first-tab" data-toggle="tab" href="#first" role="tab" aria-controls="first" aria-selected="true">All</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="second-tab" data-toggle="tab" href="#second" role="tab" aria-controls="second" aria-selected="false">UNDELIVER</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="third-tab" data-toggle="tab" href="#third" role="tab" aria-controls="third" aria-selected="false">UNRECEIVE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="fourth-tab" data-toggle="tab" href="#fourth" role="tab" aria-controls="fourth" aria-selected="false">SUCCESS</a>
            </li>
            
          </ul>
        </div>
      </div>
    </div>
    <div class="card-body">
      
      <div class="tab-content">
        <div class="tab-pane fade show active" id="first" role="tabpanel" aria-labelledby="first-tab">
            
          <div class="appContent1 listView">
    <table class="table table-borderless">
      <thead>
      </thead>
      <tbody>
      <?php
	  @$userid=$_SESSION['frontuserid'];
      $summery=mysqli_query($con,"select * from `tbl_walletsummery` where `userid`='".$userid."' order by id desc");
	  $summeryRows=mysqli_num_rows($summery);
	  if($summeryRows!=''){
		  while($summeryResult=mysqli_fetch_array($summery)){
$post_date = $summeryResult['createdate'];
 $post_date2 = strtotime($post_date);
 $convert=date('Y-m-d H:i',$post_date2);
 $actiontypearray=explode("~",$summeryResult['actiontype']);
 @$actiontype=$actiontypearray[0];
 @$actiontypeval=$actiontypearray[1];
if($actiontype=='recharge'){
	  ?>
        
        
        
        <?php }if($actiontype=='join'){?>
        <tr>
          <td>
          <div class="listItem">
          <div class="image">
              <div class="iconBox bg-danger"> 
              <i class="icon ion-md-trophy"></i> 
              </div>
            </div>
            <div class="text"><div><strong>Join Period</strong><small><?php echo $convert;?></small></div></div>
            </div>
            </td>
          <td class="tdtext2"><?php echo number_format($summeryResult['amount'],2);?></td>
        </tr>
        <?php }if($actiontype=='win'){?>
        <tr>
          <td>
          <div class="listItem">
          <div class="image">
              <div class="iconBox bg-success"> 
              <i class="icon ion-md-trophy"></i> 
              </div>
            </div>
            <div class="text"><div><strong>Period Win</strong><small><?php echo $convert;?></small></div></div>
            </div>
            </td>
          <td class="tdtext">+<?php echo number_format($summeryResult['amount'],2);?></td>
        </tr>
        
        
        
        
        
        
        <?php }}}else{?>
        <tr>
          <td colspan="2">
          <div class="listItem">
            <div class="text"><div class="text-center"><strong>Transation not fount...</strong></div></div>
            </div>
            </td>
          
        </tr>
        <?php }?>
      </tbody>
    </table>
  </div>
        </div>
        <div class="tab-pane fade" id="second" role="tabpanel" aria-labelledby="second-tab">
                     <div class="appContent1 listView">
          <table class="table table-borderless">
      <thead>
      </thead>
      <tbody>
      <?php
	  @$userid=$_SESSION['frontuserid'];
      $summery=mysqli_query($con,"select * from `tbl_walletsummery` where `userid`='".$userid."' order by id desc");
	  $summeryRows=mysqli_num_rows($summery);
	  if($summeryRows!=''){
		  while($summeryResult=mysqli_fetch_array($summery)){
$post_date = $summeryResult['createdate'];
 $post_date2 = strtotime($post_date);
 $convert=date('Y-m-d H:i',$post_date2);
 $actiontypearray=explode("~",$summeryResult['actiontype']);
 @$actiontype=$actiontypearray[0];
 @$actiontypeval=$actiontypearray[1];
if($actiontype=='recharge'){
	  ?>
        
       
        <?php }if(($actiontype=='join')&& ($summeryResult['type']=='debit')){?>
        <tr>
          <td>
          <div class="listItem">
          <div class="image">
              <div class="iconBox bg-danger"> 
              <i class="icon ion-md-trophy"></i> 
              </div>
            </div>
            <div class="text"><div><strong>Join Period</strong><small><?php echo $convert;?></small></div></div>
            </div>
            </td>
          <td class="tdtext2"><?php echo number_format($summeryResult['amount'],2);?></td>
        </tr>
        
        
        
        
        
        
        <?php }}}else{?>
        <tr>
          <td colspan="2">
          <div class="listItem">
            <div class="text"><div class="text-center"><strong>Transation not fount...</strong></div></div>
            </div>
            </td>
          
        </tr>
        <?php }?>
      </tbody>
    </table>
        </div>
       </div>
        <div class="tab-pane fade" id="third" role="tabpanel" aria-labelledby="third-tab">
          <h5 class="card-title text-center nd">No data available</h5>
        </div>
        <div class="tab-pane fade" id="fourth" role="tabpanel" aria-labelledby="fourth-tab">
            <div class="appContent1 listView">
          <table class="table table-borderless">
      <thead>
      </thead>
      <tbody>
      <?php
	  @$userid=$_SESSION['frontuserid'];
      $summery=mysqli_query($con,"select * from `tbl_walletsummery` where `userid`='".$userid."' order by id desc");
	  $summeryRows=mysqli_num_rows($summery);
	  if($summeryRows!=''){
		  while($summeryResult=mysqli_fetch_array($summery)){
$post_date = $summeryResult['createdate'];
 $post_date2 = strtotime($post_date);
 $convert=date('Y-m-d H:i',$post_date2);
 $actiontypearray=explode("~",$summeryResult['actiontype']);
 @$actiontype=$actiontypearray[0];
 @$actiontypeval=$actiontypearray[1];
if($actiontype=='recharge'){
	  ?>
        
       
        <?php }if($actiontype=='win'){?>
        <tr>
          <td>
          <div class="listItem">
          <div class="image">
              <div class="iconBox bg-success"> 
              <i class="icon ion-md-trophy"></i> 
              </div>
            </div>
            <div class="text"><div><strong>Period Win</strong><small><?php echo $convert;?></small></div></div>
            </div>
            </td>
          <td class="tdtext">+<?php echo number_format($summeryResult['amount'],2);?></td>
        </tr>
        
        
        
        
        
        
        <?php }}}else{?>
        <tr>
          <td colspan="2">
          <div class="listItem">
            <div class="text"><div class="text-center"><strong>Transation not fount...</strong></div></div>
            </div>
            </td>
          
        </tr>
        <?php }?>
      </tbody>
    </table>
        </div>
       </div>
      </div>
      <!-- END TABS DIV -->




  <!--<div class="appContent1 listView">
    <table class="table table-borderless">
      <thead>
      </thead>
      <tbody>
      <?php
	  @$userid=$_SESSION['frontuserid'];
      $summery=mysqli_query($con,"select * from `tbl_walletsummery` where `userid`='".$userid."' order by id desc");
	  $summeryRows=mysqli_num_rows($summery);
	  if($summeryRows!=''){
		  while($summeryResult=mysqli_fetch_array($summery)){
$post_date = $summeryResult['createdate'];
 $post_date2 = strtotime($post_date);
 $convert=date('Y-m-d H:i',$post_date2);
 $actiontypearray=explode("~",$summeryResult['actiontype']);
 @$actiontype=$actiontypearray[0];
 @$actiontypeval=$actiontypearray[1];
if($actiontype=='recharge'){
	  ?>
        
        
        
        <?php }if($actiontype=='join'){?>
        <tr>
          <td>
          <div class="listItem">
          <div class="image">
              <div class="iconBox bg-danger"> 
              <i class="icon ion-md-trophy"></i> 
              </div>
            </div>
            <div class="text"><div><strong>Join Period</strong><small><?php echo $convert;?></small></div></div>
            </div>
            </td>
          <td class="tdtext2">--<?php echo number_format($summeryResult['amount'],2);?></td>
        </tr>
        <?php }if($actiontype=='win'){?>
        <tr>
          <td>
          <div class="listItem">
          <div class="image">
              <div class="iconBox bg-success"> 
              <i class="icon ion-md-trophy"></i> 
              </div>
            </div>
            <div class="text"><div><strong>Period Win</strong><small><?php echo $convert;?></small></div></div>
            </div>
            </td>
          <td class="tdtext">+<?php echo number_format($summeryResult['amount'],2);?></td>
        </tr>
        
        
        
        
        
        
        <?php }}}else{?>
        <tr>
          <td colspan="2">
          <div class="listItem">
            <div class="text"><div class="text-center"><strong>Transation not fount...</strong></div></div>
            </div>
            </td>
          
        </tr>
        <?php }?>
      </tbody>
    </table>
  </div>-->
</div>
<!-- appCapsule -->

<?php include("include/footer.php");?>

<script src="assets/js/lib/jquery-3.4.1.min.js"></script> 
<!-- Bootstrap--> 
<script src="assets/js/lib/popper.min.js"></script> 
<script src="assets/js/lib/bootstrap.min.js"></script> 
<!-- Owl Carousel --> 
<script src="assets/js/plugins/owl.carousel.min.js"></script> 
<!-- Main Js File --> 
<script src="assets/js/app.js"></script> 
<script src="assets/js/jquery.validate.min.js"></script> 

</body>
</html>