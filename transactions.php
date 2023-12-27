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
<?php include'head.php' ?>
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
.recharge_box{
    width: 100%;
    padding: 15px;
    box-sizing: border-box;
    background: #fff;
    box-shadow: 0 3px 1px -2px rgb(0 0 0 / 20%), 0 2px 2px 0 rgb(0 0 0 / 14%), 0 1px 5px 0 rgb(0 0 0 / 12%);
    transition: .3s cubic-bezier(.25,.8,.5,1);
}
.completed_list .list_box {
    padding: 0 0 5px;
    box-sizing: border-box;
    border-bottom: 1px solid #e0e0e0;
}
.list_box li{
    padding: 10px 0;
    border-bottom: 1px solid #e8e8e8;
}
.list_box li:last-child {
    border-bottom: 0;
}

.list_box li ol {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    padding:0px;
}

.list_box li ol p{
    font-size: 14px;
    margin-bottom: 10px;
    color: #757575;
}
ul{
    list-style-type:none;
    padding:0px;
}
.appBottomMenu .item .ion-md-person{color: #F14625!important;}
.appBottomMenu .item .toggleSidebar span{color: #F14625!important;}

@media only screen and (max-width: 600px) {
  ul{
    list-style-type:none;
    margin:0px auto;
    padding:0px;
}
}
</style>
</head>

<body>


<!-- App Header -->
<div class="appHeader1" style="background-color:#F14625 !important">
  <div class="left"> <a href="#" onClick="goBack();" class="icon goBack"> <i class="icon ion-md-arrow-back"></i> </a>
    <div class="pageTitle">Transactions</div> &nbsp &nbsp<p style="color:white;">Withdraw Receivable Amount Will Be Less (Charges Applied)</p>
  </div>
</div>

<div class="container-fluid" ><id="appCapsule">
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
		    // print_r($summeryResult);exit;
$post_date = $summeryResult['createdate'];
 $post_date2 = strtotime($post_date);
 $convert=date('Y-m-d H:i',$post_date2);
 $actiontypearray=explode("~",$summeryResult['actiontype']);
 @$actiontype=$actiontypearray[0];
 @$actiontypeval=$actiontypearray[1];
if($actiontype=='recharge'){
if($summeryResult['status']==2){
			?>
        <tr>
          <td>
          <div class="listItem">
          <div class="image">
              <div class="iconBox bg-danger"> 
              <i class="icon ion-md-wallet"></i> 
              </div>
            </div>
            <div class="text"><div><strong>Recharge</strong><small><?php echo $convert;?></small></div></div>
            </div>
            </td>
          <td class="tdtext2"><?php echo number_format($summeryResult['amount'],2);?></td>
        </tr>
        <?php }else if($summeryResult['status']==0){?>
        <tr>
          <td>
          <div class="listItem">
          <div class="image">
              <div class="iconBox bg-warning"> 
              <i class="icon ion-md-wallet"></i> 
              </div>
            </div>
            <div class="text"><div><strong>Recharge</strong><small><?php echo $convert;?></small></div></div>
            </div>
            </td>
          <td class="tdtext3"><?php echo number_format($summeryResult['amount'],2);?><br>
<small>Pending..</small></td>
        </tr>
        <?php }else if($summeryResult['status']==1){?>
        <tr>
          <td>
          <div class="listItem">
          <div class="image">
              <div class="iconBox bg-success"> 
              <i class="icon ion-md-wallet"></i> 
              </div>
            </div>
     <div class="text"><div><strong>Recharge</strong><small><?php echo $convert;?></small></div></div>
            </div>
            </td>
          <td class="tdtext">+<?php echo number_format($summeryResult['amount'],2);?></td>
        </tr>
         <?php }}if($actiontype=='join'){?>
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
          <td class="tdtext2">-<?php echo number_format($summeryResult['amount'],2);?></td>
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
        <?php }if($actiontype=='withdraw'){
$chkwithdrawalQuery=mysqli_query($con,"select * from `tbl_withdrawal` where `id`='".$actiontypeval."'");
$chkwithdrawalResult=mysqli_fetch_array($chkwithdrawalQuery);
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
          <td class="tdtext">- <?php echo number_format($summeryResult['amount'],2);?></td>
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
          <td class="tdtext3"><?php echo number_format($summeryResult['amount'],2);?><br>
<small>Pending..</small></td>
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
          <td class="tdtext">+<?php echo number_format($summeryResult['amount'],2);?></td>
<!--          <br>
<small>Fail</small>--></td>
        </tr>
        <?php }?>
         <?php }if($actiontype=='envelope'){?>
        <tr>
          <td>
          <div class="listItem">
          <div class="image">
              <div class="iconBox bg-success"> 
              <i class="icon ion-ios-mail"></i> 
              </div>
            </div>
            <div class="text"><div><strong>Envelope</strong><small><?php echo $convert;?></small></div></div>
            </div>
            </td>
          <td class="tdtext">+<?php echo number_format($summeryResult['amount'],2);?></td>
        </tr>
        <?php }if($actiontype=='reward'){?>
        <tr>
          <td>
          <div class="listItem">
          <div class="image">
              <div class="iconBox bg-success"> 
              <i class="icon ion-ios-gift"></i> 
              </div>
            </div>
            <div class="text"><div><strong>Reward</strong><small><?php echo $convert;?></small></div></div>
            </div>
            </td>
          <td class="tdtext">+<?php echo number_format($summeryResult['amount'],2);?></td>
        </tr>
        
        <?php }if($actiontype=='bonus'){?>
        <tr>
          <td>
          <div class="listItem">
          <div class="image">
              <div class="iconBox bg-success"> 
              <i class="icon ion-ios-gift"></i> 
              </div>
            </div>
            <div class="text"><div><strong>Bonus</strong><small><?php echo $convert;?></small></div></div>
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

<!--<div class="recharge_box">-->
    
<!--    <div class="completed_list">-->
        
<!--        <ul class="list_box">-->
<!--            <li>-->
<!--                <ol>-->
<!--                    <p>₹ 0.00</p>-->
<!--                    <p>₹ 0.00</p>-->
<!--                </ol>-->
<!--                <ol>-->
<!--                    <p>Sign In Reward</p>-->
<!--                    <p>₹ 0.00</p>-->
<!--                </ol>-->
<!--                 <ol >-->
<!--                    <p >2022-06-27 16:03</p>-->
                    
<!--                </ol>-->
<!--                <ol style="margin-top:4% !important:">-->
<!--                    <p>₹ 0.00</p>-->
<!--                    <p>₹ 0.00</p>-->
<!--                </ol>-->
<!--                <ol>-->
<!--                    <p>₹ 0.00</p>-->
                    
<!--                </ol>-->
<!--                 <ol>-->
<!--                    <p >2022-06-27 16:03</p>-->
                    
<!--                </ol>-->
<!--            </li>-->
            
<!--        </ul>-->
        
        
<!--    </div>-->
    
<!--</div>-->

<!--<div class="container-fluid">-->
        
<!--        <div class="row">-->
            
<!--            <div class="col-md-12">-->
<!--                <div class="table-responsive">-->
<!--              <table class="table">-->
<!--                <thead>-->
<!--                  <tr>-->
                    
<!--                    <th >ID</th>-->
<!--                    <th >Phone</th>-->
<!--                    <th >Withdrawal Money</th>-->
<!--                    <th >Process</th>-->
                    
<!--                  </tr>-->
<!--                </thead>-->
<!--                <tbody>-->
<!--                  <tr>-->
                    
<!--                    <td>No Data available</td>-->
<!--                    <td></td>-->
<!--                    <td></td>-->
<!--                    <td></td>-->
                    
<!--                  </tr>-->
                  
<!--                </tbody>-->
<!--              </table>-->
<!--            </div>-->
            <!-- Secondary Dropdown -->
<!--  <div class="dropdown float-right">-->
<!--  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button"  data-toggle="dropdown">-->
<!--    Row Per Page-->
<!--  </button>-->
<!--  <div class="dropdown-menu">-->
<!--    <a class="dropdown-item" href="#">10</a>-->
<!--    <a class="dropdown-item" href="#">20</a>-->
<!--    <a class="dropdown-item" href="#">30</a>-->
<!--  </div>-->
<!--</div>-->
<!--            </div>-->
            
<!--        </div>-->
        
<!--    </div>-->

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