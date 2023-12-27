<?php
ob_start();
session_start();
if ($_SESSION['frontuserid'] == "") {
  header("location:login.php");
  exit();
} ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <?php include 'head.php' ?>
  <link rel="stylesheet" href="assets/css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta name="description" content="Brozers Mall">
  <meta name="keywords" content="Brozers Mall" />
  <style>
    h3 {
      font-weight: normal;
      font-size: 14px;
    }


    .btn {
      background-image: linear-gradient(#29B6F6,
          #29B6F6);
      border-radius: 5px 5px 5px 5px;
      border: 0.5px solid white;
      color: white;
      transition: 0.5s;

    }

    .payment_text {
      display: none;
    }

    .amount_list {
      width: 100%;
      padding: 15px 10% 15px;
      box-sizing: border-box;
      display: flex;
      flex-direction: row;
      flex-wrap: wrap;
      justify-content: space-around;
    }

    .amount_list p {
      width: 28%;
      margin: 5px 5px;
      padding: 10px 0;
      box-sizing: border-box;
      text-align: center;
      font-size: 14px;
      box-shadow: 0 3px 1px -2px rgb(0 0 0 / 20%), 0 2px 2px 0 rgb(0 0 0 / 14%), 0 1px 5px 0 rgb(0 0 0 / 12%);
      transition: .3s cubic-bezier(.25, .8, .5, 1), color 1ms;
      background: #f5f5f5;
      border: 0;
    }

    .payment_box {
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

    .recharge_btn {
      width: 100%;
      padding: 15px 0;
      display: flex;
      justify-content: center;
      align-items: center;
      /*margin: 12px 0 24px;*/
      margin-top: 10% !important;
      margin-bottom: 50px;
    }

    .recharge_btn button {
      background: #F14625;
      color: #fff;
      font-size: 14px;
      border-radius: 2px;
      border: 0;
      padding: 14px 0;
      text-align: center;
      width: 52%;
    }

    .btn-primary:hover {
      background: #ffffff !important;
      border-color: #ffffff !important;
      color: #333;
    }

    .appBottomMenu .item.active i {
      color: #F14625 !important;
    }

    .appBottomMenu .item.active span {
      color: #F14625 !important;
    }

    .appBottomMenu .item .ion-md-person {
      color: #F14625 !important;
    }

    .appBottomMenu .item .toggleSidebar span {
      color: #F14625 !important;
    }

    #appCapsule {
      padding: 12px;
    }

    @media only screen and (max-width: 600px) {

      .otbt {
        width: 95%;
        margin: 0 12px;
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
      <div class="pageTitle">Recharge</div>
    </div>

    <div class="right">

      <a href="rechargehistory.php"><i style="font-size:24px;" class="icon ion-md-list"></i></a>
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
      <!--<h3 class="text-center m-2" style="color:red;">Any Problem? Contact </span></h3>
    <?php
    $Query = mysqli_query($con, "select * from tbl_website WHERE id=1");
    $row = mysqli_fetch_array($Query);
    //print_r($row);exit;
    ?>
<h3 class="text-center m-2"><span style="color:#29B6F6;"><?php echo $row['mail']; ?></span></h3>-->

      <h2 style="font-weight:normal; font-size: 22px;" class="text-center m-2">Balance: <span>₹ <?php echo number_format(wallet($con, 'amount', $userid), 2); ?></span></h2>
      <form action="#" id="paymentForm" method="post" class="card-body" autocomplete="off">
        <input type="hidden" id="userammount" name="userammount" class="form-control" value="" placeholder="Enter recharge amount" required>

        <div class="inner-addon left-addon">

          <i class="icon ion-md-wallet"></i>

          <input type="number" id="userammount2" class="form-control" value="" placeholder="Enter recharge amount" required>
        </div>
        <div>
          <p style="color: red; font-size:11px;"><strong>Note:</strong> <br>
            <?php
            $data = mysqli_query($con, "select * from tbl_paymentsetting");
            $val = mysqli_fetch_array($data);
            ?>
            1.Minimum Recharge =₹<?php echo $val['rechargeamount']; ?> 
            <br>
            2.Minimum Recharge<br>
            3.If You recharge ₹500+ and maintain the minimum balnace ₹500 so you will get upto 0.05% of Intreset Rate of your Balance as Daily Income. <br>
            4.If you Invite 1 person you will get ₹200. <br>
            5. If any one  not add Rechrge amount in wallet contact our customer service 
            <a class="badge badge-danger" href="complaints_and_suggestions.php">Recharge Support</a>
          </p>
        </div>
        <div class="amount_list">
          <?php

          $user_id = $_SESSION['frontuserid'];

          $check = mysqli_query($con, "select * from `tbl_user` where id = $user_id");
          $check = mysqli_fetch_array($check);



          if ($check['recharge'] == 0) {
            $summery = mysqli_query($con, "select * from `pricer`");

            while ($summeryResult = mysqli_fetch_array($summery)) {
          ?>

              <p class="" onclick="myfunction(<?php echo $summeryResult['amount']; ?>,<?php echo $summeryResult['com']; ?>)">
                ₹ <span data-v-d269120a=""><?php echo $summeryResult['amount']; ?></span>
              </p>


            <?php
            }
          } else {
            ?>

            <?php
            $summery = mysqli_query($con, "select * from `pricer`");

            $zero = 0;

            while ($summeryResult = mysqli_fetch_array($summery)) {
            ?>

              <p class="" onclick="myfunction(<?php echo $summeryResult['amount']; ?>,<?php echo $zero; ?>)">
                ₹ <span data-v-d269120a=""><?php echo $summeryResult['amount']; ?></span>
              </p>


          <?php
            }
          }
          ?>

        </div>
        <script>
          function myfunction(val, val2) {
            var x = val + val2;
            document.getElementById("userammount2").value = val;
            document.getElementById("userammount").value = x;

            document.getElementById("bamount").value = val2;
          }
        </script>
        <div class="payment_text">
          <p class="payment_text">Payment</p>
          <div role="radiogroup " class="van-radio-group">
            <!----><!----><!---->
            <div role="radio" tabindex="0" aria-checked="true" class="van-radio">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="payment" id="customCheck1" value="EkPay" onchange="Check24(this)" checked>
                <label class="custom-control-label" for="customCheck1"></label>
              </div>


              <span class="van-radio__label">
                <span class="text">EkPay</span><br>

              </span>
            </div><!----><!----><!---->
          </div>

          <div role="radiogroup " class="van-radio-group">
            <!----><!----><!---->
            <div role="radio" tabindex="0" aria-checked="true" class="van-radio">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" value="WowPay" name="payment" id="customCheck2" onchange="Check25(this)" disabled>
                <label class="custom-control-label" for="customCheck2"></label>
              </div>


              <span class="van-radio__label">
                <span class="text">WowPay</span><br>

              </span>
            </div><!----><!----><!---->
          </div>

          <div role="radiogroup " class="van-radio-group">
            <!----><!----><!---->
            <div role="radio" tabindex="0" aria-checked="true" class="van-radio">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" value="WinPay" name="payment" id="customCheck3" onchange="Check26(this)" disabled>
                <label class="custom-control-label" for="customCheck3"></label>
              </div>


              <span class="van-radio__label">
                <span class="text">WinPay</span><br>

              </span>
            </div><!----><!----><!---->
          </div>

        </div>
        <div class="recharge_btn text-center ">
          <input type="submit" class="btn btn-primary" style="width:76%;background-color:#F14625 !important;background-image: none;" value="Recharge">
        </div>


      </form>
    </div>
  </div>
  <script>
    function Check24(value) {
      var val = value.checked;
      //console.log(val);
      if (val == true) {
        $("#customCheck1").prop('disabled', false);
        $("#customCheck2").prop('disabled', true);
        $("#customCheck3").prop('disabled', true);
      } else {
        $("#customCheck1").prop('disabled', false);
        $("#customCheck2").prop('disabled', false);
        $("#customCheck3").prop('disabled', false);
      }
    };


    function Check25(value) {
      var val = value.checked;
      //console.log(val);
      if (val == true) {
        $("#customCheck1").prop('disabled', true);
        $("#customCheck2").prop('disabled', false);
        $("#customCheck3").prop('disabled', true);
      } else {
        $("#customCheck1").prop('disabled', false);
        $("#customCheck2").prop('disabled', false);
        $("#customCheck3").prop('disabled', false);
      }
    };

    function Check26(value) {
      var val = value.checked;
      //console.log(val);
      if (val == true) {
        $("#customCheck1").prop('disabled', true);
        $("#customCheck2").prop('disabled', true);
        $("#customCheck3").prop('disabled', false);
      } else {
        $("#customCheck1").prop('disabled', false);
        $("#customCheck2").prop('disabled', false);
        $("#customCheck3").prop('disabled', false);
      }
    };
  </script>
  <!--<div class="container d-flex justify-content-center"><a href="rechargehistory.php" class"badge bg-info"> Recharge Record</a>
</div>-->


  <!-- appCapsule -->

  <?php include("include/footer.php"); ?>
  <?php
  $Query = mysqli_query($con, "select * from tbl_walletsummery WHERE userid='$userid'");
  $row = mysqli_fetch_array($Query);
  ?>
  <div id="paymentdetail" class="modal fade" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content ">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span></button>
          <p>&nbsp;</p>
          <div class="">
            <form action="checkout.php" method="post">
              <div class="inner-addon left-addon">
                <i class="icon ion-md-person"></i>
                <input type="text" id="name" name="name" class="form-control" placeholder="Enter Your Name" value="<?php echo $row['name']; ?>">
              </div>
              <div class="inner-addon left-addon">
                <i class="icon ion-md-phone-portrait"></i>
                <input type="tel" id="mobile" name="mobile" class="form-control" placeholder="Enter Mobile Number" value="<?php echo user($con, 'mobile', $userid); ?>" readonly>
              </div>
              <div class="inner-addon left-addon">

              </div>
              <input type="hidden" name="bamount" id="bamount" value="">
              <input type="hidden" name="finalamount" id="finalamount" value="">
              <input type="hidden" name="action" id="action" value="paydetail">
              <div class="text-center mt-3">
                <button type="submit" class="btn btn-primary" style="width:264px;"> Recharge </button>
              </div>
            </form>
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
  <script src="assets/js/payment.js.php"></script>

</body>

</html>