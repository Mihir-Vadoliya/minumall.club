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

.appBottomMenu .item.active span {
    color: #F14625!important;
}

.appBottomMenu .item .ion-md-person{color: #F14625!important;}
.appBottomMenu .item .toggleSidebar span{color: #F14625!important;}
</style>
</head>

<body>

<!-- Page loading -->

<!-- * Page loading --> 

<!-- App Header -->
<div class="appHeader1">
  <div class="left"> <a href="#" onClick="goBack();" class="icon goBack"> <i class="icon ion-md-arrow-back"></i> </a>
    <div class="pageTitle">Withdrawal History</div>&nbsp&nbsp<p style="color:white;">Withdraw Receivable Amount Will Be Less (Charges Applied)</p>
  </div>
</div>
<!-- * App Header --> 
<!-- App Capsule -->
<div id="appCapsule">
    
    <div class="container-fluid">
        
       
          
  <div class="appContent1 listView">
    <table class="table table-borderless">
      <thead>
      </thead>
      
          <?php 
        $userid=$_SESSION['frontuserid'];
$chkwithdrawalQuery=mysqli_query($con,"select * from `tbl_withdrawal` where `userid`='".$userid."' order by id desc");
while($chkwithdrawalResult=mysqli_fetch_array($chkwithdrawalQuery)){
   //print_r($chkwithdrawalResult);exit;
$post_date = $chkwithdrawalResult['createdate'];
 $post_date2 = strtotime($post_date);
 $convert=date('Y-m-d H:i',$post_date2);
if($chkwithdrawalResult['status']==0){
			?>

	
       <tr>
          <td>
          <div class="listItem">
          <div class="image">
              <div class="iconBox bg-success"> 
              <i class="icon ion-md-wallet"></i> 
              </div>
            </div>
            <div class="text"><div><strong>Withdrawal Success</strong><small><?php echo $convert;?></small></div></div>
            </div>
            </td>
          <td class="tdtext">- <?php echo number_format($chkwithdrawalResult['amount'],2);?></td>
        </tr>
        
        
        <?php }else if($chkwithdrawalResult['status']==1){?>
       
        <tr>
          <td>
          <div class="listItem">
          <div class="image">
              <div class="iconBox bg-warning"> 
              <i class="icon ion-md-wallet"></i> 
              </div>
            </div>
            <div class="text"><div><strong>Withdrawal Pending</strong><small><?php echo $convert;?></small></div></div>
            </div>
            </td>
          <td class="tdtext3 text-suc"><?php echo number_format($chkwithdrawalResult['amount'],2);?>
          <br>  &emsp;
<small>..Pending</small>
          </td>
        </tr>
        <?php }else if($chkwithdrawalResult['status']==2){?>
         <tr>
          <td>
          <div class="listItem">
          <div class="image">
              <div class="iconBox bg-danger"> 
              <i class="icon ion-md-wallet"></i> 
              </div>
            </div>
            <div class="text"><div><strong>Withdrawal Fail</strong><small><?php echo $convert;?></small></div></div>
            </div>
            </td>
          <td class="tdtext3 text-suc"> <?php echo number_format($chkwithdrawalResult['amount'],2);?>
           <br>  &emsp;
<small>Fail</small>
          </td>
        </tr>
   
        <?php }else{?>
        <tr>
          <td colspan="2">
          <div class="listItem">
            <div class="text"><div class="text-center"><strong>Transation not found...</strong></div></div>
            </div>
            </td>
          
        </tr>
        <?php }}?>
      </tbody>
    </table>
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