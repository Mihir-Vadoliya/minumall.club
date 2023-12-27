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
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>

<style>
h3 {
	font-weight:normal;
}
.tdtext{ font-size:16px !important; color: orange !important; font-weight:normal; text-align:right;}
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
    padding: 1px 20%;
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
    width: 200px;
    color: #f8f8f8;
    border-bottom: 7px solid #fff !important;
}
.nd{
    font-size: 12px;
    text-align: center;
    padding: 15px 0px;
    color: rgb(136, 136, 136);
}
.btn-sm {
    height: 26px;
    padding: 0px 12px;
    border-radius: 0px;
}
.btn-secondary:focus {
    color: #171717;
    background-color: #ffffff;
    border-color: #ffffff;
    box-shadow: 0 0 0 0.2rem rgb(130 138 145 / 50%);
}

.fa-plus {
    font-size: 25px;
    color: #fff;
    font-weight: normal;
}

.appBottomMenu .item .ion-md-person{color: #F14625!important;}
.appBottomMenu .item .toggleSidebar span{color: #F14625!important;}

@media only screen and (max-width: 600px) {

.tabbable .nav-tabs .nav-item{
     padding: 3px 15px;
     width:50%;
}

.nav-tabs .nav-link.active{width:100%;}

}
</style>
</head>

<body>

<!-- Page loading -->

<!-- * Page loading --> 

<!-- App Header -->
<div class="appHeader1" style="background-color:#F14625 !important">
  <div class="left"> <a href="#" onClick="goBack();" class="icon goBack"> <i class="icon ion-md-arrow-back"></i> </a>
    <div class="pageTitle">Complaints & Suggestions</div>
  </div>
  
  <div class="right"> 
  
 <a href="add_complaints.php"><i class="fa fa-plus"></i></a> 

  
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
              <a class="nav-link active" id="first-tab" data-toggle="tab" href="#first" role="tab" aria-controls="first" aria-selected="true">COMPLETED</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="second-tab" data-toggle="tab" href="#second" role="tab" aria-controls="second" aria-selected="false">Wait</a>
            </li>
           
            
          </ul>
        </div>
      </div>
    </div>
    
    <div class="card-body">
      
      <div class="tab-content">
        <div class="tab-pane fade show active" id="first" role="tabpanel" aria-labelledby="first-tab">
   <div class="text-right pr-1">

        </div>
     <?php
$summery=mysqli_query($con,"select * from tbl_complaints where userid='$userid' AND status=1 order by id desc");
$summeryRows=mysqli_num_rows($summery);
	  if($summeryRows!=''){
		  while($summeryResult=mysqli_fetch_array($summery)){
$post_date = $summeryResult['post_date'];
 $post_date2 = strtotime($post_date);
 $convert=date('Y-m-d H:i',$post_date2);
		?>
        <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title"><em>Type - <?php echo $summeryResult['type'];?></em> </h5>
                    <p class="text-primary"><strong>Out Id - <?php echo $summeryResult['out_id'];?></strong></p>
                    <p>Mobile - <?php echo $summeryResult['mobile'];?></p>
                    <p> Reply - <?php echo $summeryResult['reply'];?></p>
                    <p style="margin-left:80%;"> Description - <?php echo $summeryResult['description'];?></p>
                    
                </div>
            </div>
            
<?php }}else{?>   
<div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title text-info"><em>Not found....</em> </h5>
                   </div>
            </div>
<?php }?>
        </div>
        
        
        <div class="tab-pane fade" id="second" role="tabpanel" aria-labelledby="second-tab">
            <div class="text-right pr-1">

        </div>
       <?php
$summery=mysqli_query($con,"select * from tbl_complaints where userid='$userid' AND status= 0 order by id desc");
$summeryRows=mysqli_num_rows($summery);
	  if($summeryRows!=''){
		  while($summeryResult=mysqli_fetch_array($summery)){
$post_date = $summeryResult['post_date'];
 $post_date2 = strtotime($post_date);
 $convert=date('Y-m-d H:i',$post_date2);
		?>
        <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title"><em>Type - <?php echo $summeryResult['type'];?></em> </h5>
                    <p class="text-primary"><strong>Out Id - <?php echo $summeryResult['out_id'];?></strong></p>
                    <p>Mobile - <?php echo $summeryResult['mobile'];?></p>
                    <p> Reply - Waiting</p>
                    <p style="margin-left:80%;"> Description - <?php echo $summeryResult['description'];?></p>
                    
                </div>
            </div>
            
<?php }}else{?>
<div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title text-info"><em>Not found....</em> </h5>
                   </div>
            </div>
<?php }?>
        </div>
        </div>
        </div>
        
       
      </div>
      
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