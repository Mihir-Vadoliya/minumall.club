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
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Bitter Mobile Template">
<meta name="keywords" content="bootstrap, mobile template, bootstrap 4, mobile, html, responsive" />
<style>
h3{ font-weight:normal; font-size:20px;}
.btn .error{margin-top: 55px;}
.btn-group {
box-shadow: none;
}
#alert h4{font-size: 1rem;}
#alert p{font-size: 13px; margin-top:20px;}
#alert .modal-content{border-radius:3px}
#alert .modal-dialog{padding:20px; margin-top:130px;}
#confirm .modal-dialog{padding:20px; margin-top:130px;}
.inner-addon select.error {
    font-size: 16px;
    position: unset;
}
.payment_box{
    width: 100%;
    padding-left: 4%;
    box-sizing: border-box;
}

.van-radio {
    display: -webkit-box;
    display: -webkit-flex;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    align-items: center;
    overflow: hidden;
    cursor: pointer;
    -webkit-user-select: none;
    user-select: none;
}
.payment_box .van-radio {
    height: 48px;
    line-height: 48px;
    font-size: 16px;
}
.van-radio__icon {
    -webkit-box-flex: 0;
    -webkit-flex: none;
    flex: none;
    height: 1em;
    font-size: 20px;
    line-height: 1em;
    cursor: pointer;
}
.payment_box .van-radio__icon--checked .van-icon {
    color: #333;
    background-color: transparent;
    border-color: transparent;
    font-size: 20px;
    width: 25px;
    display: inline-block;
}
.payment_box .van-radio__icon .van-icon {
    border: transparent;
    width: 25px;
    display: inline-block;
}
.van-radio__label {
        margin-left: 8px;
    color: #323233;
    margin-top: -23px;
}

.payment_text {
    height: 48px;
    line-height: 48px;
    font-size: 14px;
    color: #757575;
}
.form-control{
    margin-top: 50px;
    border-radius: 33px;
    height: 41px;}

.box_border{
    border-bottom: 1px solid #949494;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding-bottom: 5px;
     background-color: #fff;
    border-radius: 33px;
}
.pasw{
    width: 100%;
    border: 0;
    color:#7f7f7f;
    height: 36px;
    font-size: 14px;
    padding-left:111px;
}
.recharge_btn{
    width: 100%;
    padding: 15px 0;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 12px 0 24px;
}
.recharge_btn button{
    background: #F14625;
    color: #fff;
    font-size: 14px;
    border-radius: 2px;
    border: 0;
    padding: 14px 0;
    text-align: center;
    width: 52%;
}
.appBottomMenu .item .ion-md-person{color: #F14625!important;}
.appBottomMenu .item .toggleSidebar span{color: #F14625!important;}
.left-addon .icon {
    left: 8px;
    top: 1px;
    font-size: 15px;
}
.appBottomMenu .item .ion-md-person{color: #F14625!important;}
.appBottomMenu .item .toggleSidebar span{color: #F14625 !important;}
@media only screen and (max-width: 600px) {
 
 .pasw{
     padding-left:20px;
     height: 26px;
 }
 
}
</style>
</head>

<body>



<!-- App Header -->
<div class="appHeader1" style="background-color:#F14625 !important">
<div class="left">
            <a href="#" onClick="goBack();" class="icon goBack">
                <i class="icon ion-md-arrow-back"></i>
            </a>
            <div class="pageTitle">Withdrawal</div>
              </div>
              
              
              <div class="right"> 
        
        <a href="withdrawalrecord.php"><i style="font-size: 18px;" class="icon ion-md-list"></i></a>
  <!--<div class="dropdown">
  <a class="" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size:25px;">
    <i class="icon ion-md-list"></i></a>
  

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <!--<a class="dropdown-item" href="promotionrecord.php">Promotion Record</a>->
    <a class="dropdown-item" href="bonusrecord.php">Bonus Record</a>
    <a class="dropdown-item" href="promotion_apply_record.php">Apply Record</a>
  </div>
</div>-->
  </div>
 
 
</div>
<!-- * App Header --> 
<!-- App Capsule -->
<div id="appCapsule">
  <div class="appContent1">
<h3 style="font-size: 16px; font-weight: bold;" class="text-center m-2">Eligible For Withdrawal: 
  <?php

    $wallet = mysqli_query($con, "SELECT *, amount FROM `tbl_wallet` WHERE userid = '".$userid."'");


$wallet_row = mysqli_fetch_assoc($wallet);

$wallet_amount = $wallet_row['amount'];

$balance = $wallet_amount;



echo '₹ ' . number_format($balance, 2);
?>
</h3>

<?php   
         $data=mysqli_query($con,"select * from tbl_paymentsetting");
      $val=mysqli_fetch_array($data);
        ?>

    <p style="margin-left:30px;color:red;font-size:12px;">Minimum withdraw amount <?php echo $val['withdrawalamount']; ?></p>  
    <form action="withdrawalNow.php"  method="post" class="card-body" autocomplete="off" style="margin-top: -63px;">
      <div class="inner-addon left-addon">
      <i class="icon"><i class="fa fa-rupee"></i></i>
        <input max="<?php echo number_format($balance, 2);?>" type="number" id="userammount" name="withdraw" class="form-control" placeholder="Enter withdrawal amount" onchange="myfunction(this.value)" required>
      </div>
       <input type="hidden" name="" value="" id="discount">
      <p class=" m-2" Style="font-size:11px; color:#333;">Fee: <?php echo $val['with_charge'];?>% ,
      <input type="hidden" name="userammount" value="" id="amount">to bank account <a id="demo">0</a></p>
      <p>If You Apply More Than Eligible Amount Your Withdrawal Will Be Failed Refunding To Wallet (<?php echo $val['with_charge'];?>% Fee Will Be Deducted)</p></br>
      <h6 style="text-align: center;">
    <a href="manage_bankcard.php" style="color: Green;">Manage Bankcard</a>
</h6>
            <div>
        <script>
           function myfunction(val)
           {
               var value=val
               var amount=document.getElementById("discount").value;
               var discount=(value*amount)/100;
               var final_amount=value-discount;
               document.getElementById("amount").value=final_amount;
               document.getElementById("demo").innerHTML=final_amount;
           }
        </script>        
           <div class="payment_text">
                <p class="payment_text">Payout</p>
                
                
            </div>
           
           
      
               <div class="inner-addon left-addon mt-1">
      <i class="icon ion-md-card"></i>
        <select class="form-control select2" name="acid" id="acid" style="padding-left:45px; box-shadow:none;">
            <?php 
            $userid = $_SESSION['frontuserid'];
            $sql=mysqli_query($con,"select * from `tbl_bankdetail` where `userid` ='".$userid."'");
            $rows=mysqli_num_rows($sql);
            if($rows!=''){ 
            while($row=mysqli_fetch_array($sql))
             {
               $id=$row['id'];
               $data=$row['bankname'];
               $account=$row['account'];
            ?>
        <option style="font-size:14px;" value="<?php echo $id;?>"><?php echo $account;?></option>
        <?php } }else{
            
            $s=1;
        }
        ?>
        </select>
      </div>  
      
      <div class="box_border">
          <i style="margin-left: 12px;font-size:24px; color:#7f7f7f;" class="icon ion-md-key"></i>
          <input class="pasw" type="password" placeholder="Enter your login password" name="password" required>
      </div>
<input type="hidden" name="userid" value="<?php echo $userid;?>">
<input type="hidden" name="action" value="withdrawal">
      <div class="recharge_btn text-center mt-3">
        <!--<button type="submit" class="btn btn-primary" style="width:59%;"> Withdrawal </button>-->
        <?php if($s!=1){ ?>
        <input type="submit" class="btn btn-primary" style="width:215px;background-color: #F14625 !important; background-image:none;" value="Withdrawal">
       <?php  }else{ ?>
       <input type="submit" class="btn btn-primary" disabled style="width:215px;background-color: #F14625 !important; background-image:none;" value="Withdrawal">
      
        <?php  } ?>
        </div>
        
      </div>
    </form>
  </div>
</div>
<!--<div class="container d-flex justify-content-center"><a href="withdrawalrecord.php" class"badge bg-info">Withdrawal Record</a>
</div>-->
<!-- appCapsule -->

<?php include("include/footer.php");?>
<div id="alert" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-body" id="alertmessage"> </div>
      <div class="text-center pb-1">
    <a type="button" class="text-info" data-dismiss="modal">OK</a>
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
<script src="assets/js/withdrawal.js.php"></script>
<script>
function paytype(userid,type)
{
//alert(userid);
var dataString = 'userid='+ userid+ "& type=" + type;
$.ajax
({
type: "POST",
url: "ajax_bankdetail.php",
data: dataString,
cache: false,
success: function(html)
{ //alert(html);
$("#acid").html(html);
} 
});	
	}
</script>

</body>
</html>