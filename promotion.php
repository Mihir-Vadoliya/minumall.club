<?php
ob_start();
session_start();
if ($_SESSION['frontuserid'] == "") {
  header("location:login.php");
  exit();
} ?>

<!doctype html>
<html lang="en">
<?php
include("include/connection.php");
$userid = $_SESSION['frontuserid'];
$Query = mysqli_query($con, "select * from tbl_website WHERE id=1");
$rows = mysqli_fetch_array($Query);
?>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $rows['title']; ?></title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
  <link href="assets/css/dataTables.bootstrap.min.css" rel="stylesheet" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  <style>
    body {
      -ms-user-select: text;
      user-select: text;
      -moz-user-select: text;
      -webkit-user-select: text
    }

    .layout--tabs .nav-item {
      width: 33%;
    }

    .table thead th {
      color: #000;
    }

    .accordion .btn-link::after {
      display: none;
    }

    .card {
      border: 1px solid #E5E9F2;
      border-radius: 3px;
      padding: 0px;
    }

    .card .card-title {
      margin-bottom: 7px;
    }

    .nav-tabs.size2 .cvc {
      width: 33%;
    }

    .modal-body {
      padding: 0 15px !important;
    }

    h3 {
      font-weight: normal;
      font-size: 20px;
    }

    h4 {
      font-weight: normal;
      font-size: 18px;
      color: #858585;
    }

    .card-body {
      padding: .6rem;
    }

    td {
      padding: 3px;
    }

    .btn-sm {
      height: 26px;
      padding: 0px 12px;
    }

    .form-control {
      box-shadow: none;
      border-bottom: #ccc solid 1px;
      margin-bottom: 3px;
    }

    #alert h4 {
      font-size: 1rem;
      font-weight: bold;
      color: #333;
    }

    #alert p {
      font-size: 13px;
      margin-top: 20px;
    }

    #alert .modal-content {
      border-radius: 3px
    }

    #alert .modal-dialog {
      padding: 20px;
      margin-top: 130px;
    }

    label {
      color: #999;
    }

    #bonus .modal-dialog {
      margin-top: 100px;
    }

    #bonus .modal-footer {
      border: none;
    }

    .dropdown-menu {
      background: #fff;
      top: -15px;
      left: -145px;
      border: none;
      border-radius: 0px;
      -webkit-box-shadow: 0 3px 1px -2px rgba(0, 0, 0, .2), 0 2px 2px 0 rgba(0, 0, 0, .14), 0 1px 5px 0 rgba(0, 0, 0, .12);
      box-shadow: 0 3px 1px -2px rgba(0, 0, 0, .2), 0 2px 2px 0 rgba(0, 0, 0, .14), 0 1px 5px 0 rgba(0, 0, 0, .12);
    }

    .appHeader1 .right {
      right: 20px;
    }

    .dropdown-item {
      padding: .75rem 1.5rem;
    }

    .nav-tabs .nav-link.active {
      /*background:#ccc !important;
        padding: 0 198px;*/

      background: #F14625 !important;
      padding: 0 198px;
      color: #fff;
      border-radius: 4px 40px 3px 40px;

    }

    .tab-content {
      padding: 0;
    }

    .card {
      border-radius: 0 0 .25rem .25rem;
      border-top: 0;
    }

    .nav-tabs {
      height: 42px;
      padding: 0;
      position: relative;
    }

    .nav-item {
      margin-left: 0;
    }

    a {
      color: black;
      display: block;
      padding: 8px 25px;
    }


    &.overflow-tab {
      background-color: white;
      display: none;
      position: absolute;
      right: 0;
      width: 150px;
      z-index: 1;
    }
      a {
        border: 1px solid lightgray;
        border-radius: 0;
        padding: 6px 10px;

        &:hover,
        &:focus,
        &:active,
        &.active : background-color: lightgray;
        
      }

      &:last-child {
        border-radius: 0 0 0 4px;
      }

    

    &.overflow-tab-action {
      position: absolute;
      right: 0;
    
    }

    

    /* ----- CSS ----- */
    #popup {
      display: inline-block;
      opacity: 0;
      width: 63%;
      height: 50%;
      z-index: 99;
      position: fixed;
      top: 120px;
      left: 770px;
      padding: 1em;
      transform: translateX(-50%);
      background: #fff;
      border: 1px solid #888;
      box-shadow: 1px 1px 0.5em 0 rgb(0 0 0 / 50%);
      transition: opacity .3s ease-in-out;
    }

    #popup.hidden {
      display: none;
    }

    #popup.fade-in {
      opacity: 1;
    }

    .notice_zz {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, .4);
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .wrapper {
      background: #fff;
      padding: 15px;
      box-sizing: border-box;
      border-radius: 4px;
      width: 70%;
      box-shadow: 0 3px 1px -2px rgb(0 0 0 / 20%), 0 2px 2px 0 rgb(0 0 0 / 14%), 0 1px 5px 0 rgb(0 0 0 / 12%);
      transition: .3s cubic-bezier(.25, .8, .5, 1);
    }

    .tz_title {
      font-size: 18px;
      padding: 15px;
    }

    .tz_info {
      font-size: 14px;
      padding: 15px;
      line-height: 1.5;
      max-height: 47vh;
      overflow-y: auto;
    }

    .tz_close {
      display: flex;
      justify-content: flex-end;
      padding: 8px 5px 8px 15px;
      box-sizing: border-box;
    }

    .tz_close button {
      color: #00897b;
      font-size: 14px;
      padding: 5px 10px;
      border: 0;
      background: transparent;
      margin-left: 10px;
    }

    .hide {
      display: none;
    }

    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      padding: 12px 16px;
      z-index: 1;
      margin-left: -120px;
    }

    .dropdown-content p {
      font-size: 16px;
      padding: 10px;

    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

    .modal-header {
      background: none;
      border-bottom: none;
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

    @media only screen and (max-width: 600px) {
      .nav-tabs .nav-link.active {
        background: #F14625 !important;
        padding: 0 28px;
      }

      .modal-header {
        height: 46px !important;
      }

      .modal-dialog {
        margin: 0.5rem 0 !important;
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


  <div id="modal-content" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>

        </div>
        <div class="modal-body">
          <p class="signCenter">
            <span class="closeSymbol">X</span>
          </p>
        </div>
        <div class="modal-footer signCenter">
          <p class="snapHdr">Oh Snap !</p>
          <p class="info">Your time has limited. Try checking once again</p>
          <a href="#" class="btn closeftr" data-dismiss="modal">Close</a>

        </div>
      </div>
    </div>
  </div>

  <!----- HTML ----->


  <!--<div class="notice_zz">
      
      <div class="wrapper">
          
          <h3 class="tz_title">Notice</h3>
          <p class="tz_info">When your friends trade, you will also receive a 30% commission. Therefore, the more friends you invite, the higher your 
          commission. There is a fixed income every day, the commission is permanent, but the reward is only onceWhen they make money, they will 
          invite their friends to join them, and then you can get a 20% commission. In this way, your team can spread quickly. Therefore, I hope 
          everyone can use our platform to make money, make money, and make money!When they make money, they will invite their friends to join them, 
          and then you can get a 20% commission. In this way, your team can spread quickly. Therefore, I hope everyone can use our platform to make money, 
          make money, and make money!Level 1 commission: Friends who join through your own link belong to your level, when they trade, you will get 30% commission.
          Tier 2 commission: Friends who join through your friend link belong to your secondary commission. When they trade, you can get 20% commission.
          Level 3 commission: Friends who join through friends of friends belong to your level 3. When they trade, you get 10% commission.
          Promotional rewards: 10% bonus amount for the first recharge after the first-level lower level joins. If your friend joins through your 
          invitation and recharges 1000 for the first time, you will get 200</p>
          
          <div class="tz_close">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
          </div>
          
      </div>
      
  </div>-->






  <!-- App Header -->
  <div class="appHeader1" style="background-color:#F14625 !important">
    <div class="left"> <a href="#" onClick="goBack();" class="icon goBack"> <i class="icon ion-md-arrow-back"></i> </a>
      <div class="pageTitle">Promotion</div>
    </div>

    <div class="right">

      <div class="dropdown">
        <span><i style="font-size:25px;" class="icon ion-md-list"></i></a></span>
        <div class="dropdown-content">
          <p><a href="bonusrecord.php">Bonus Record</a></p>
          <p><a href="promotion_apply_record.php">Apply Record</a></p>
        </div>
      </div>

      <!--<div class="dropdown">
  <a class="" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size:25px;">
    <i class="icon ion-md-list"></i></a>
  

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    
    <a class="dropdown-item" href="bonusrecord.php">Bonus Record</a>
    <a class="dropdown-item" href="promotion_apply_record.php">Apply Record</a>
  </div>
</div>-->
    </div>
  </div>
  <!-- searchBox -->

  <!-- * searchBox -->
  <!-- * App Header -->

  <!-- App Capsule -->
  <div id="appCapsule" class="pb-2">
    <div class="appContent1 pb-5">


      <h3 class="text-center m-2">Bonus: <span>₹ <span id="bms"><?php echo (bonus($con, 'amount', $userid)); ?></span></span></h3>
      <div class="text-center mb-2">
        <a data-toggle="modal" href="#bonus" data-backdrop="static" data-keyboard="false" class="btn btn-primary" style="width:160px; height:36px;     background: #F14625 !important;">Apply to Balance</a>
      </div>

      <ul class="nav nav-tabs size2" id="myTab3" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="home-tab3" data-toggle="tab" href="#level1" role="tab">Level 1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="profile-tab3" data-toggle="tab" href="#level2" role="tab">Level 2</a>
        </li>

      </ul>


      <div class="mt-1">
        <div class="tab-content" id="myTabContent">

          <div class="tab-pane fade active show" id="level1" role="tabpanel">
            <div class="row">
              <div class="col-6">
                <div class="mb-3">
                  <div class="text-center">
                    <h4>Total People</h4>
                    <h3>
                      <?php
                      @$userid = $_SESSION['frontuserid'];
                      $user = mysqli_query($con, "select * from `tbl_user` where `id`='" . $userid . "'");
                      $userRows = mysqli_num_rows($user);
                      $userResult = mysqli_fetch_array($user);
                      $owncode = $userResult['owncode'];
                      $userlevel1 = mysqli_query($con, "select * from `tbl_user` where `code`='" . $owncode . "' order by id asc");
                      $userlevel1Rows = mysqli_num_rows($userlevel1);

                      echo $userlevel1Rows;
                      ?>
                    </h3>
                  </div>
                </div>
              </div>
              <div class="col-6">
                <div class="mb-3">
                  <div class="text-center ">
                    <h4 style="font-style:normal;">Contribution</h4>
                    <h3>₹ <?php echo (bonus($con, 'level1', $userid)); ?></h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--=========================tab-1 end========================================-->
          <!--=========================tab-2========================================-->
          <div class="tab-pane fade" id="level2" role="tabpanel">
            <div class="row">
              <div class="col-6">
                <div class="mb-3">
                  <div class="text-center">
                    <h4>Total People </h4>
                    <h3>
                      <?php
                      $userid = $_SESSION['frontuserid'];
                      $user = mysqli_query($con, "select * from `tbl_user` where `id`='" . $userid . "'");
                      $userResult = mysqli_fetch_array($user);
                      $owncode = $userResult['owncode'];
                      $userlevel1 = mysqli_query($con, "select * from `tbl_user` where `code`='" . $owncode . "' order by id desc");
                      $i = 0;
                      while ($userlevel1Rows = mysqli_fetch_array($userlevel1)) {
                        $owncodeid = $userlevel1Rows['owncode'];
                        $userlevel2 = mysqli_query($con, "select * from `tbl_user` where `code`='" . $owncodeid . "' order by id desc");

                        while ($userlevel2Rows = mysqli_fetch_array($userlevel2)) {
                          $count = mysqli_num_rows($userlevel2);
                          $i = $i + 1;
                        }
                      }
                      echo $i;
                      ?>

                    </h3>
                  </div>
                </div>
              </div>
              <div class="col-6">
                <div class="mb-3">
                  <div class="text-center">
                    <h4><em>Contribution</em> </h4>
                    <h3>₹ <?php echo (bonus($con, 'level2', $userid)); ?></h3>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <?php
      //$userid=$_SESSION['frontuserid'];
      $Query = mysqli_query($con, "select * from tbl_website WHERE id=1");
      $row = mysqli_fetch_array($Query);
      ?>
      <div class="mt-1" style="margin: 0 15px;">
        <div class="mt-3 border-bottom">
          <label>My Promotion Code</label>
          <p><strong><?php echo user($con, 'owncode', $userid); ?></strong></p>
        </div>
        <div class="mt-3 border-bottom">
          <label>Long press to share or copy download app link</label>
          <p><strong style="color:#333;"><?php echo $row['website_link']; ?>signup.php?code=<?php echo user($con, 'owncode', $userid); ?></strong></p>
        </div>



        <div class="col-md-12">
          <div class="row">
            <div class="col-md-6">
              <button class="btn copyBtn" style="width: 100%;" data-clipboard-text="<?php echo $row['website_link']; ?>/signup.php?code=<?php echo user($con, 'owncode', $userid); ?>">Copy Link</button>
            </div>
            <div class="col-md-6">
              <a style="width: 100%;" href="<?php echo $row['website_link']; ?>/signup.php?code=<?php echo user($con, 'owncode', $userid); ?>" class="btn bnt btn-light">Open Link</a>
            </div>
          </div>


        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.6/clipboard.min.js"></script>
        <script type="text/javascript">
          function showToast(text) {
            var ele = document.createElement("div");
            ele.className = "toast";
            ele.innerHTML = text;
            document.body.appendChild(ele);
            setTimeout(function() {
              document.body.removeChild(ele);
            }, 2000)
          }
          var btns = document.querySelectorAll('.btn');
          var clipboard = new ClipboardJS(btns);
          clipboard.on('success', function(e) {
            showToast("COPY SUCCESS");
          });

          clipboard.on('error', function(e) {
            showToast("COPY FAIL");
          });
        </script>
        <style>
          .tabbable-responsive {
            display: block;
            min-width: 100%;
            overflow-x: auto;
            margin: 0px -20px -13px -20px;
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
          }

          .tabbable .nav-tabs .nav-item .nav-link {
            display: inline-block;
          }

          small {
            font-size: 12px;
          }

          .card {
            box-shadow: 0 5px 15px -5px rgba(0, 0, 0, 0.15);
          }

          a {
            color: #0da58e;
          }

          a:hover {
            color: #075e51;
          }

          .text-dark {
            text-decoration: none !important;
          }

          .elmahio-ad {
            background: #fff;
            box-shadow: 0px 0px 0px 1px #ddd;
            border-radius: 4px;
            overflow: hidden;
          }

          .elmahio-ad .logo {
            background: #0da58e;
            width: 60px;
            height: 60px;
            text-align: center;
            line-height: 52px;
          }

          .elmahio-ad .logo img {
            width: 50px;
          }

          .elmahio-ad .motto {
            width: 180px;
            font-size: 12px;
            font-weight: bolder;
            padding: 12px;
          }

          .nav-tabs .nav-link {
            line-height: 44px;
            background: #fff;
          }

          .nav-tabs .nav-item {
            text-align: center;
            width: 49%;
          }
        </style>

        <div class="row">

          <div class="col-md-12">


            <div class="card">
              <div class="card-header">


                <!-- START TABS DIV -->
                <div class="tabbable-responsive">
                  <div class="tabbable">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="first-tab" data-toggle="tab" href="#first" role="tab" aria-controls="first" aria-selected="true">Level 1</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="second-tab" data-toggle="tab" href="#second" role="tab" aria-controls="second" aria-selected="false">Level 2</a>
                      </li>
                      <!--<li class="nav-item">
              <a class="nav-link" id="third-tab" data-toggle="tab" href="#third" role="tab" aria-controls="second" aria-selected="false">Level 3 (0)</a>
            </li>-->
                    </ul>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="first" role="tabpanel" aria-labelledby="first-tab">
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>

                            <th>ID</th>
                            <th>Phone</th>
                            <th>First Recharge</th>

                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $userid = $_SESSION['frontuserid'];
                          $user = mysqli_query($con, "select * from `tbl_user` where `id`='" . $userid . "'");
                          $userResult = mysqli_fetch_array($user);
                          $owncode = $userResult['owncode'];
                          $userlevel1 = mysqli_query($con, "select * from `tbl_user` where `code`='" . $owncode . "' order by id desc");
                          while ($userlevel1Rows = mysqli_fetch_array($userlevel1)) {

                          ?>
                            <tr>

                              <td><?php echo $userlevel1Rows['id']; ?></td>
                              <td>*******<?php echo substr($userlevel1Rows['mobile'], -3); ?></td>
                              <td>
                                <?php
                                $id = $userlevel1Rows['id'];
                                $firstrecharge = mysqli_query($con, "select * from  tbl_walletsummery  where userid='$id' and actiontype='recharge'");
                                $firstResult = mysqli_fetch_array($firstrecharge);
                                // print_r($firstResult);exit;
                                echo number_format($firstResult['amount'], 2);
                                ?></td>

                            </tr>
                          <?php } ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="second" role="tabpanel" aria-labelledby="second-tab">
                    <div class="table-responsive">
                      <table class="table">
                        <thead>

                          <tr>

                            <th scope="col">ID</th>
                            <th scope="col">Phone</th>
                            <th scope="col">First Recharge</th>

                          </tr>

                        </thead>
                        <tbody>
                          <?php
                          $userid = $_SESSION['frontuserid'];
                          $user = mysqli_query($con, "select * from `tbl_user` where `id`='" . $userid . "'");
                          $userResult = mysqli_fetch_array($user);
                          $owncode = $userResult['owncode'];
                          $userlevel1 = mysqli_query($con, "select * from `tbl_user` where `code`='" . $owncode . "' order by id desc");
                          while ($userlevel1Rows = mysqli_fetch_array($userlevel1)) {
                            $owncodeid = $userlevel1Rows['owncode'];
                            $userlevel2 = mysqli_query($con, "select * from `tbl_user` where `code`='" . $owncodeid . "' order by id desc");

                            while ($userlevel2Rows = mysqli_fetch_array($userlevel2)) {

                          ?>
                              <tr>
                                <td><?php echo $userlevel2Rows['id']; ?></td>
                                <td><?php echo $userlevel2Rows['mobile']; ?></td>
                                <td>
                                  <?php
                                  $id2 = $userlevel2Rows['id'];
                                  $firstrecharge2 = mysqli_query($con, "select * from  tbl_walletsummery  where userid='$id2' and actiontype='recharge'");
                                  $firstResult2 = mysqli_fetch_array($firstrecharge2);
                                  // print_r($firstResult);exit;
                                  echo number_format($firstResult2['amount'], 2);
                                  ?></td>

                              </tr>
                          <?php }
                          } ?>
                        </tbody>
                      </table>
                    </div>
                  </div>


                  <!--<div class="tab-pane fade" id="third" role="tabpanel" aria-labelledby="third-tab">
          <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    
                    <th scope="col">ID</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Water Reward</th>
                    <th scope="col">First Reward</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    
                    <td>No Data available</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    
                  </tr>
                  
                </tbody>
              </table>
            </div>
        </div>-->

                </div>
              </div>
            </div>


          </div>


        </div>

        <!-- <div class="row" style="margin-bottom:5%;">
            
            
            <div class="col-md-12 x">
                
                
                <div class="layout--tabs">
  <div class="container-fluid x">
    

    <div class="nav-tabs-wrapper">
      <ul class="nav nav-tabs" id="tabs-title-region-nav-tabs" role="tablist">
        <li class="nav-item ">
          <a class="nav-link active" data-toggle="tab" role="tab" href="#block-simple-text-1" aria-selected="false" aria-controls="block-simple-text-1" id="block-simple-text-1-tab">Level 1(1)</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" role="tab" href="#block-simple-text-2" aria-selected="false" aria-controls="block-simple-text-2" id="block-simple-text-2-tab">Level 2 (0)</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" role="tab" href="#block-simple-text-3" aria-selected="false" aria-controls="block-simple-text-3" id="block-simple-text-3-tab">Level 3 (0)</a>
        </li>
        

      </ul>
    </div>
    <div class="card">
      <div class="card-body">
        <div class="tab-content">

          <div id="block-simple-text-1" class="tab-pane active block block-layout-builder block-inline-blockqfcc-blocktype-simple-text" role="tabpanel" aria-labelledby="block-simple-text-1-tab">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    
                    <th >ID</th>
                    <th >Phone</th>
                    <th >Water Reward</th>
                    <th >First Reward</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    
                    <td>201547</td>
                    <td>9185465478</td>
                    <td>0</td>
                    <td>0</td>
                    
                  </tr>
                  
                </tbody>
              </table>
            </div>
          </div>
          <div id="block-simple-text-2" class="tab-pane active block block-layout-builder block-inline-blockqfcc-blocktype-simple-text" role="tabpanel" aria-labelledby="block-simple-text-2-tab">
           <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    
                    <th scope="col">ID</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Water Reward</th>
                    <th scope="col">First Reward</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    
                    <td>201547</td>
                    <td>9185465478</td>
                    <td>0</td>
                    <td>0</td>
                    
                  </tr>
                  
                </tbody>
              </table>
            </div>
          </div>
          <div id="block-simple-text-3" class="tab-pane active block block-layout-builder block-inline-blockqfcc-blocktype-simple-text" role="tabpanel" aria-labelledby="block-simple-text-3-tab">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    
                    <th scope="col">ID</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Water Reward</th>
                    <th scope="col">First Reward</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    
                    <td>201547</td>
                    <td>9185465478</td>
                    <td>0</td>
                    <td>0</td>
                    
                  </tr>
                  
                </tbody>
              </table>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>
                
            </div>
            
        </div>-->



        <!-- <div class="row">
            
            <div class="col-md-12">
                
                <ul class="nav nav-tabs size2" id="myTab4" role="tablist">
                        <li class="nav-item cvc"> 
                <a class="nav-link " id="level1-tab3" data-toggle="tab" href="#level14" role="tab">Level 1</a> 
                
            <div id="level14" class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    
                    <th scope="col">ID</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Water Reward</th>
                    <th scope="col">First Reward</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    
                    <td>201547</td>
                    <td>9185465478</td>
                    <td>0</td>
                    <td>0</td>
                    
                  </tr>
                  
                </tbody>
              </table>
            </div>
                
                
                        </li>
                        <li class="nav-item cvc"> 
                <a class="nav-link" id="level2-tab3" data-toggle="tab" href="#level22" role="tab">Level 2</a>
                
                <div id="#level22" class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    
                    <th scope="col">ID</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Water Reward</th>
                    <th scope="col">First Reward</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    
                  </tr>
                  
                </tbody>
              </table>
            </div>
                
                
                
                         </li>
                         <li class="nav-item cvc"> 
                <a class="nav-link" id="level3-tab3" data-toggle="tab" href="#level23" role="tab">Level 3</a>
                
                <div id="#level23" class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Heading</th>
        <th scope="col">Heading</th>
        <th scope="col">Heading</th>
        <th scope="col">Heading</th>
        <th scope="col">Heading</th>
        <th scope="col">Heading</th>
        <th scope="col">Heading</th>
        <th scope="col">Heading</th>
        <th scope="col">Heading</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
      </tr>
    </tbody>
  </table>
</div>
                
                
                
                         </li>
                        
                </ul>
                
            </div>
            
            
        </div>-->


        <!--<div class="mt-3">
<label>My Promotion Link</label>
<p>Test</p>
</div>-->
      </div>
    </div>

    <!-- Modal ->
    <div class="modal fade " id="popupModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 style="background:none; color:#000;" class="modal-title" id="exampleModalLabel">Notice</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
          <p>When your friends trade, you will also receive a 30% commission. Therefore, the more friends you invite, the higher your commission. 
          There is a fixed income every day, the commission is permanent, but the reward is only onceWhen they make money, they will invite their
          friends to join them, and then you can get a 20% commission. In this way, your team can spread quickly. Therefore, I hope everyone can
          use our platform to make money, make money, and make money!When they make money, they will invite their friends to join them, and then
          you can get a 20% commission. In this way, your team can spread quickly. Therefore, I hope everyone can use our platform to make money,
          make money, and make money!Level 1 commission: Friends who join through your own link belong to your level, when they trade, you will 
          get 30% commission.Tier 2 commission: Friends who join through your friend link belong to your secondary commission. When they trade, 
          you can get 20% commission.Level 3 commission: Friends who join through friends of friends belong to your level 3. When they trade, you
          get 10% commission.Promotional rewards: 10% bonus amount for the first recharge after the first-level lower level joins. If your friend 
          joins through your invitation and recharges 1000 for the first time, you will get 200</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <!-<button type="button" class="btn btn-primary">Save changes</button>->
        </div>
        </div>
    </div>
    </div>

    <!-- Optional JavaScript ->
    <!-- jQuery first, then Popper.js, then Bootstrap JS ->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>
       $(document).ready(function(){
            $('#popupModal').modal('show');
        }); 
    </script>
</div>
<!-- appCapsule -->

    <?php include("include/footer.php"); ?>
    <div id="bonus" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content ">
          <div class="modal-header paymentheader" id="paymenttitle">
            <h4 class="modal-title text-dark">Apply to Balance</h4>
          </div>
          <form action="#" method="post" id="bonusForm" autocomplete="off">
            <div class="modal-body mt-1" id="loadform">
              <div class="row">
                <div class="col-12">
                  <div class="inner-addon left-addon mt-3">
                    <i class="icon"><i class="fa fa-rupee"></i></i>
                    <input type="number" id="bonusammount" name="bonusammount" class="form-control" placeholder="Bonus" onKeyPress="return isNumber(event)">
                  </div>
                  <input type="hidden" name="userid" id="userid" class="form-control" value="<?php echo $userid; ?>">
                  <input type="hidden" name="action" id="action" class="form-control" value="bonus">

                </div>
              </div>
            </div>
            <input type="hidden" name="tab" id="tab" value="parity">
            <div class="modal-footer">
              <a type="button" class="pull-left btn btn-sm closebtn" data-dismiss="modal">CANCEL</a>
              <button type="submit" class="pull-left btn btn-sm btn-white text-info">CONFIRM</button>
            </div>
          </form>
        </div>
      </div>
    </div>

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
    <!-- Jquery -->
    <script>
      /**
       * Defines the bootstrap tabs handler.
       *
       * @param {string} element
       *  Element.
       */
      var tabsActions = function(element) {
        this.element = $(element);

        this.setup = function() {
          if (this.element.length <= 0) {
            return;
          }
          this.init();
          // Update after resize window.
          var resizeId = null;
          $(window).resize(function() {
            clearTimeout(resizeId);
            resizeId = setTimeout(() => {
              this.init()
            }, 50);
          }.bind(this));
        };

        this.init = function() {

          // Add class to overflow items.
          this.actionOverflowItems();
          var tabs_overflow = this.element.find('.overflow-tab');

          // Build overflow action tab element.
          if (tabs_overflow.length > 0) {
            if (!this.element.find('.overflow-tab-action').length) {
              var tab_link = $('<a>')
                .addClass('nav-link')
                .attr('href', '#')
                .attr('data-toggle', 'dropdown')
                .text('...')
                .on('click', function(e) {
                  e.preventDefault();
                  $(this).parents('.nav.nav-tabs').children('.nav-item.overflow-tab').toggle();
                });

              var overflow_tab_action = $('<li>')
                .addClass('nav-item')
                .addClass('overflow-tab-action')
                .append(tab_link);

              // Add hide to overflow tabs when click on any tab.
              this.element.find('.nav-link').on('click', function(e) {
                $(this).parents('.nav.nav-tabs').children('.nav-item.overflow-tab').hide();
              });
              this.element.append(overflow_tab_action);
            }

            this.openOverflowDropdown();
          } else {
            this.element.find('.overflow-tab-action').remove();
          }
        };

        this.openOverflowDropdown = function() {
          var overflow_sum_height = 0;
          var overflow_first_top = 41;

          this.element.find('.overflow-tab').hide();
          // Calc top position of overflow tabs.
          this.element.find('.overflow-tab').each(function() {
            var overflow_item_height = $(this).height() - 1;
            if (overflow_sum_height === 0) {
              $(this).css('top', overflow_first_top + 'px');
              overflow_sum_height += overflow_first_top + overflow_item_height;
            } else {
              $(this).css('top', overflow_sum_height + 'px');
              overflow_sum_height += overflow_item_height;
            }

          });
        };

        this.actionOverflowItems = function() {
          var tabs_limit = this.element.width() - 100;
          var count = 0;

          // Calc tans width and add class to any tab that is overflow.
          for (var i = 0; i < this.element.children().length; i += 1) {
            var item = $(this.element.children()[i]);
            if (item.hasClass('overflow-tab-action')) {
              continue;
            }

            count += item.width();
            if (count > tabs_limit) {
              item.addClass('overflow-tab');
            } else if (count < tabs_limit) {
              item.removeClass('overflow-tab');
              item.show();
            }
          }
        };
      };

      var tabsAction = new tabsActions('.layout--tabs .nav-tabs-wrapper .nav-tabs');
      tabsAction.setup();
    </script>
    <script src="assets/js/lib/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap-->
    <script src="assets/js/lib/popper.min.js"></script>
    <script src="assets/js/lib/bootstrap.min.js"></script>
    <!-- Owl Carousel -->
    <script src="assets/js/plugins/owl.carousel.min.js"></script>
    <!-- Main Js File -->
    <script src="assets/js/app.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/bonus.js"></script>

</body>

</html>