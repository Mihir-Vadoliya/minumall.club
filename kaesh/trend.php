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
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<link href="assets/css/dataTables.bootstrap.min.css" rel="stylesheet"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<style>
.btn {
    border-radius: 10px 10px 10px 10px;
    border: 2px solid white;

    transition: 0.5s;
    
}

.appHeader1 {
	background-color: #fff !important;
	border-color: #fff !important;
}
.appContent3 {
	background-color: #2196f3 !important;
	border-color: #2196f3 !important;
	padding:10px;
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
.reaload {
	box-shadow:none;
}
.ion-md-refresh {
	font-size:30px !important;
}
.responsive {
	height:300px;
	overflow-x: auto;
}
.vcard {
	box-shadow:none;
}
h5{ color:#888; font-size:20px; font-weight:normal;}
h5 span{ color:#333; font-size:20px;}
.divsize4 .btn{padding: 0 10px; width:100px;}
.left-addon input {
    padding-left: 20px;
}
.error {
    top: 45px;
}
.containerrecord{border-bottom: solid 2px #F14625;}
.recordlink{
    font-size: 30px;
    color: #333;
	border-bottom: solid 2px #565EFF ;
}
.recordlink .title{font-size: 14px;
font-weight: 500; color: #7e7e7e;}
#alert h4{font-size: 1rem;}
#alert p{font-size: 13px; margin-top:30px;}
#alert .modal-content{border-radius:3px}
#alert .modal-dialog{padding:30px; margin-top:200px;}
#payment .modal-dialog{padding:10px;margin-top:60px;}
#loader .modal-dialog{padding:30px; margin-top:200px;}

.btn-lg {
    height: 42px;
    padding: 0px 24px;
    font-size: 15px;
}
.vg{
    background: linear-gradient(137.11deg, #7400AB -9.13%, #7400AB 49.79%, #1DCC70 49.8%, #1DCC70 107.5%) !important;
    }
.rv{
  background: linear-gradient(137.11deg, #7400AB -9.13%, #7400AB 49.79%, #ff2d55 49.8%, #ff2d55 107.5%) !important;
}
.btn-blue{
 background-color:#2196f3;
}
.btn {
     border-radius: 3px 3px 3px 3px; 
    border: 0px solid white;
    transition: 0.5s;
    color:#d9d5db;
}
.btn-blue{
    background-color:#2196f3;
    color:#d9d5db;
}

.btn3 {
    /*border-radius: 30px 30px 30px 30px; */
    border: 0px solid white;
    padding: 10px 19px;
    transition: 0.5s;
    /*background-image: linear-gradient(#f44336, #9c27b0);*/
    background: #f44336;
    background: linear-gradient(320deg, rgb(244 67 54) 48%, rgb(156 39 176) 49%);
}

.btn4 {
    /* border-radius: 30px 30px 30px 30px; */
    border: 0px solid white;
    padding: 10px 19px;
    transition: 0.5s;
    /* background-image: linear-gradient(#1DCC70, #9c27b0); */
    background-image: linear-gradient(#37b844, #9c27b0);
    background: #37b844;
    background: linear-gradient(316deg, rgb(76, 175, 80) 48%, rgba(156,39,176,1) 49%);
}

.btn-violet {
    background-color: #9c27b0 !important;
    border-color: #9c27b0 !important;
    color: #fff;
}

.btn-violet:hover {
    background-color: #9c27b0 !important;
    border-color: #9c27b0 !important;
    color: #fff;
}

.btn-success {
    background: #4caf50;
    border-color: #4caf50;
}

.btn-success:hover {
    background: #4caf50 !important;
    border-color: #4caf50 !important;
}

.btn-danger{
        background:#f44336;
    border-color: #f44336;
}

.btn-danger:hover{
        background:#f44336;
    border-color: #f44336;
}

.vcard{
    padding:15px;
}

.p-text{
    position: absolute;
    bottom: -470px;
    left: 410px;
    color: rgb(136, 136, 136);
}

.btn-primary{
    background-color:#F14625!important;
    border-color:#F14625!important;
    margin-top:-100px !important;
}
.btn-primary:hover{
    background-color:#F14625!important;
    border-color:#F14625!important;
}

div.dataTables_wrapper div.dataTables_info{
        padding-top: 8px;
    white-space: nowrap;
    text-align: center;
    padding-left: 13%;
}
.tab-pane .recordlink .ion-md-trophy{
    color: #7e7e7e;
}
.recordlink .ion-md-paper{ color: #7e7e7e;}

.kline {
    padding: 5px 12px 0;
}
.reservation-chunk {
    margin-bottom: 10px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
}
.reservation-chunk-sub {
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
}
.reservation-chunk-sub-title {
    padding: 10px 0;
    font-size: 16px;
    color: #7d7d7d;
}
.reservation-chunk-sub-num {
    font-size: 24px;
}
.item-red {
    width: 20px;
    height: 20px;
    background: #f52827;
    border-radius: 20px;
    text-align: center;
    line-height: 19px;
    font-size: 12px;
    color: #fff;
}
.kline .title {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    text-align: center;
    margin: 10px;
}
.kline .title .red {
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
    color: #f52827;
}
.kline .title .green {
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
    color: #157239;
}
.kline .title .violet {
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
    color: #e839f1;
}
.kline .title .violet {
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
    color: #e839f1;
}

.kline .switchBox {
    float: right;
    margin: 10px;
}

.van-button--small {
    height: 32px;
    padding: 0 8px;
    font-size: 12px;
}
.van-button--primary {
    color: #fff;
    background-color: #07c160;
    border: 1px solid #07c160;
}
.van-button--default {
    color: #323233;
    background-color: #fff;
    border: 1px solid #ebedf0;
}
.van-button {
    position: relative;
    display: inline-block;
    box-sizing: border-box;
    height: 44px;
    margin: 0;
    padding: 0;
    font-size: 16px;
    line-height: 1.2;
    text-align: center;
    border-radius: 2px;
    cursor: pointer;
    -webkit-transition: opacity .2s;
    transition: opacity .2s;
    -webkit-appearance: none;
}
.box {
    overflow: scroll;
    width: 100%;
    line-height: 40px;
    margin-bottom: 0px;
}
.grid {
    display: inline-grid;
    width: auto;
    padding-bottom: 20px;
    border: 1px solid #eee;
    
}


.nav-tabs.size4 .nav-item {
    width: 16%;
}
.row1 {
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    margin-left: 40px;
    border-bottom: 1px solid #eee;
}
.index {
    width: 40px;
    text-align: center;
    position: absolute;
    left: 0;
    background-color: #fff;
    left: 12px;
    border: 1px solid #eee;
}
.kline .box .row1 .cell {
    padding: 10px;
    border-left: 1px solid #eee;
}
.item-green {
    width: 20px;
    height: 20px;
    background: #157239;
    border-radius: 20px;
    text-align: center;
    line-height: 19px;
    font-size: 12px;
    color: #fff;
}
.item-violet-green{
    border-radius: 50%;
    width: 20px;
    height: 20px;
    background-image: linear-gradient(-90deg,#e839f1 10px,#157239 0);
    text-align: center;
    line-height: 19px;
    font-size: 12px;
    color: #fff;
}
.cell {
    padding: 10px;
    border-left: 1px solid #eee;
}
.item-null {
    width: 20px;
    height: 20px;
    border-radius: 20px;
}
.item-violet-red {
    border-radius: 50%;
    width: 20px;
    height: 20px;
        background-image: linear-gradient(-90deg,#e839f1 10px,#f52827 0);
    text-align: center;
    line-height: 19px;
    font-size: 12px;
    color: #fff;
}
.van-button__text{
    font-size: 12px;
    font-weight: bold;
    padding: 10px;
}

.van-cell-group {
    background-color: #fff;
}
.van-cell {
    position: relative;
    display: -webkit-box;
    display: -webkit-flex;
    display: flex;
    box-sizing: border-box;
    width: 100%;
    padding: 10px 16px;
    overflow: hidden;
    color: #323233;
    font-size: 14px;
    line-height: 24px;
    background-color: #fff;
}

.van-cell__value {
    position: relative;
    overflow: hidden;
    color: #969799;
    text-align: right;
    vertical-align: middle;
    word-wrap: break-word;
        -webkit-box-flex: 1;
    -webkit-flex: 1;
    flex: 1;
}
.van-cell__value--alone {
    color: #323233;
    text-align: left;
}
.van-progress {
    position: relative;
    height: 14px;
    background: #e5e5e5;
    border-radius: 4px;
  
}
.van-progress__portion {
    position: absolute;
    left: 0;
    height: 100%;
    background: #1989fa;
    border-radius: inherit;
}
.van-progress__pivot {
    position: absolute;
    top: 50%;
    box-sizing: border-box;
    min-width: 3.6em;
    padding: 0 5px;
    color: #fff;
    font-size: 10px;
    line-height: 1.6;
    text-align: center;
    word-break: keep-all;
    background-color: #1989fa;
    border-radius: 1em;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
}
.nav-tabs .nav-link.active {
    
   border-bottom: 2px solid #157239;
}
@media only screen and (max-width: 769px) {
 
 .p-text{
     left:0px;
     bottom: -315px;
     line-height: 16px;
 }
 .btn-primary{margin-top:-87px !important;}
 
}

</style>

</head>

<body>
<?php

$userid=$_SESSION['frontuserid'];
$selectruser=mysqli_query($con,"select * from `tbl_user` where `id`='".$userid."'");
$userresult=mysqli_fetch_array($selectruser);
$selectwallet=mysqli_query($con,"select * from `tbl_wallet` where `userid`='".$userid."'");
$walletResult=mysqli_fetch_array($selectwallet);
?>
<!-- Page loading -->

<script>
var divs = ["chart1", "chart2"];
var visibleDivId = null;
function toggleVisibility(divId) {
  if(visibleDivId === divId) {
    //visibleDivId = null;
  } else {
    visibleDivId = divId;
  }
  hideNonVisibleDivs();
}
function hideNonVisibleDivs() {
  var i, divId, div;
  for(i = 0; i < divs.length; i++) {
    divId = divs[i];
    div = document.getElementById(divId);
    if(visibleDivId === divId) {
      div.style.display = "block";
    } else {
      div.style.display = "none";
    }
  }
}
</script>

<!-- App Header ->
<div class="vcard" >
  <div class="appContent3 text-white" style="background-color:#F14625 !important;">
    <div class="row1">
      <div class="col-12">
        <!--<div class="col-12 mb-1" style="font-size:18px;">Available balance: ₹ <span id="balance"><?php echo number_format(wallet($con,'amount',$userid), 2); ?></span></div>-->
        <!--<div class="col-12">
          <div> <a href="recharge.php" class="btn btn-blue btn-blue m-0">Recharge</a> <a  data-toggle="modal" href="#rule" data-backdrop="static" data-keyboard="false" class="btn " style="background-color:#dee2e6 !important;color:#000 !important;">Trend</a> <a href="javascript:void(0);" onClick="reloadbtn(<?php echo $userid;?>);" class="reaload text-white pull-right mt-1" onclick="getResultbyCategory(parity,parity)"> <i class="icon ion-md-refresh"></i></a> </div>
        </div>->
      </div>
    </div>
  </div>
</div>
<!-- searchBox --> 

<!-- * searchBox --> 
<!-- * App Header --> 

<!-- App Capsule ->
<div class="mb-5">
  <div class="long mb-3">      
      <!-- listview ->
      <ul class="nav nav-tabs size4" id="myTab3" role="tablist">
        <li class="nav-item"> 
<a class="nav-link active" id="home-tab3" data-toggle="tab" href="#parity" role="tab" onClick="tabname('parity');getResultbyCategory('parity','parity');">Parity</a> 
        </li>
        <li class="nav-item"> 
<a class="nav-link" id="profile-tab3" data-toggle="tab" href="#sapre" role="tab" onClick="tabname('sapre');getResultbyCategory('sapre','sapre');">Sapre</a>
         </li>
        <li class="nav-item"> 
<a class="nav-link" id="contact-tab3" data-toggle="tab" href="#bcone" role="tab" onClick="tabname('bcone');getResultbyCategory('bcone','bcone');">Bcone</a> 
        </li>
        <li class="nav-item"> 
<a class="nav-link" id="contact-tab3" data-toggle="tab" href="#emerd" role="tab" onClick="tabname('emerd');getResultbyCategory('emerd','emerd');">Emerd</a> 
        </li>
      </ul>
      </div>
      <!--=====================game area============================-->
      <div class="appContent1 container-fluid bg-light mt-n1 mt-5">
      <div class="layout">
        <div class="gameidtimer"> 
      <h5 class="mb-2"><i class="icon ion-md-trophy"></i> Period</h5>
      <h5>
      <span class="showload">
      <div class="spinnner-border text-danger" role="status">
                    </div></span>
             <span id="gameid" class="none"><?php echo sprintf("%03d",gameid($con));?></span>
             <input type="hidden" id="futureid" name="futureid" value="<?php echo sprintf("%03d",gameid($con));?>">
             </h5>
      </div>
      <div class="gameidtimer text-right"> 
      <h5 class="mb-2">Count Down</h5>
       <h5 id="demo"></h5>
      </div>
      </div>
	  
     
  </div>
  
  <div class="kline"><div class="reservation-chunk"><div class="reservation-chunk-sub"><div class="reservation-chunk-sub-title">
              PrePeriod
            </div> <div class="previous-game-id">
  <p>Previous Game ID: <?php echo $previousGameId; ?></p>
</div>
</div> <div class="reservation-chunk-sub" style="text-align: center;"><div class="reservation-chunk-sub-title">
              Result
            </div> <div class="reservation-chunk-sub-num"><div class="item-red" style="margin: 5px 0px 0px 35px;">
                4
              </div></div></div> <div class="reservation-chunk-sub" style="text-align: right;"><div class="reservation-chunk-sub-title">
              OpenPrice
            </div> <div class="reservation-chunk-sub-num"><div style="color: rgb(232, 57, 241);">
                15154
              </div>
              </div>
              </div>
              </div>
              </div>
              
              
              <div class="kline"><div class="title"><div class="red">
            Red:133
          </div> <div class="green">
            Green:152
          </div> <div class="violet">
            Violet:70
          </div></div> <div id="chart1" class="switchBox">
              <button class="van-button van-button--small van-button--default"><span class="van-button__text">
                  <a onclick="toggleVisibility('chart2');" href="#chart2"> ShowPeriod</a></span></button>
            <button class="van-button van-button--small van-button--primary">
                <span class="van-button__text"><a href="#chart1">ShowOpenNum</a></span></button>
                </div> 
                <div id="chart1" class="box targetDiv">
                    <div class="grid">
                        <div class="row1">
                            <div class="index">
                  1
                </div> <div class="cell border"><div class="item-red">
                    8
                  </div></div><div class="cell border"><div class="item-violet-green">
                    5
                  </div></div><div class="cell border"><div class="item-red">
                    2
                  </div></div><div class="cell border"><div class="item-green">
                    3
                  </div></div><div class="cell border"><div class="item-red">
                    6
                  </div></div><div class="cell border"><div class="item-green">
                    7
                  </div></div><div class="cell border"><div class="item-red">
                    6
                  </div></div><div class="cell border"><div class="item-green">
                    3
                  </div></div><div class="cell border"><div class="item-red">
                    8
                  </div></div><div class="cell border"><div class="item-green">
                    1
                  </div></div><div class="cell border"><div class="item-red">
                    4
                  </div></div><div class="cell border"><div class="item-green">
                    7
                  </div></div><div class="cell border"><div class="item-red">
                    8
                  </div></div><div class="cell border"><div class="item-green">
                    1
                  </div></div><div class="cell border"><div class="item-red">
                    8
                  </div></div><div class="cell border"><div class="item-violet-green">
                    5
                  </div></div><div class="cell border"><div class="item-red">
                    6
                  </div></div><div class="cell border"><div class="item-violet-green">
                    5
                  </div></div><div class="cell border"><div class="item-red">
                    8
                  </div></div><div class="cell border"><div class="item-green">
                    1
                  </div></div><div class="cell border"><div class="item-violet-red">
                    0
                  </div></div><div class="cell border"><div class="item-green">
                    7
                  </div></div><div class="cell border"><div class="item-red">
                    6
                  </div></div><div class="cell border"><div class="item-violet-green">
                    5
                  </div></div><div class="cell border"><div class="item-red">
                    6
                  </div></div><div class="cell border"><div class="item-green">
                    7
                  </div></div><div class="cell border"><div class="item-red">
                    2
                  </div></div><div class="cell border"><div class="item-green">
                    3
                  </div></div><div class="cell border"><div class="item-red">
                    4
                  </div></div><div class="cell border"><div class="item-green">
                    9
                  </div></div><div class="cell border"><div class="item-red">
                    4
                  </div></div><div class="cell border"><div class="item-green">
                    1
                  </div></div><div class="cell border"><div class="item-violet-red">
                    0
                  </div></div><div class="cell border"><div class="item-violet-green">
                    5
                  </div></div><div class="cell border"><div class="item-red">
                    8
                  </div></div><div class="cell border"><div class="item-green">
                    7
                  </div></div><div class="cell border"><div class="item-red">
                    6
                  </div></div><div class="cell border"><div class="item-violet-green">
                    5
                  </div></div><div class="cell border"><div class="item-red">
                    2
                  </div></div><div class="cell border"><div class="item-violet-green">
                    5
                  </div></div><div class="cell border"><div class="item-violet-red">
                    0
                  </div></div><div class="cell border"><div class="item-violet-green">
                    5
                  </div></div><div class="cell border"><div class="item-red">
                    6
                  </div></div><div class="cell border"><div class="item-green">
                    7
                  </div></div><div class="cell border"><div class="item-red">
                    8
                  </div></div><div class="cell border"><div class="item-green">
                    1
                  </div></div><div class="cell border"><div class="item-red">
                    6
                  </div></div><div class="cell border"><div class="item-green">
                    7
                  </div></div><div class="cell border"><div class="item-red">
                    4
                  </div></div><div class="cell border"><div class="item-green">
                    9
                  </div></div><div class="cell border"><div class="item-violet-red">
                    0
                  </div></div><div class="cell border"><div class="item-green">
                    1
                  </div></div><div class="cell border"><div class="item-red">
                    2
                  </div></div><div class="cell border"><div class="item-green">
                    7
                  </div></div><div class="cell border"><div class="item-red">
                    2
                  </div></div><div class="cell border"><div class="item-green">
                    3
                  </div></div><div class="cell border"><div class="item-violet-red">
                    0
                  </div></div><div class="cell border"><div class="item-green">
                    9
                  </div></div><div class="cell border"><div class="item-violet-red">
                    0
                  </div></div><div class="cell border"><div class="item-violet-green">
                    5
                  </div></div><div class="cell border"><div class="item-red">
                    2
                  </div></div><div class="cell border"><div class="item-green">
                    3
                  </div></div><div class="cell border"><div class="item-red">
                    6
                  </div></div><div class="cell border"><div class="item-green">
                    3
                  </div></div><div class="cell border"><div class="item-red">
                    6
                  </div></div><div class="cell border"><div class="item-violet-green">
                    5
                  </div></div><div class="cell border"><div class="item-red">
                    4
                  </div></div><div class="cell border"><div class="item-green">
                    3
                  </div></div><div class="cell border"><div class="item-violet-red">
                    0
                  </div></div><div class="cell border"><div class="item-green">
                    9
                  </div></div><div class="cell border"><div class="item-red">
                    2
                  </div></div><div class="cell border"><div class="item-green">
                    3
                  </div></div><div class="cell border"><div class="item-red">
                    4
                  </div></div><div class="cell border"><div class="item-green">
                    9
                  </div></div><div class="cell border"><div class="item-violet-red">
                    0
                  </div></div><div class="cell border"><div class="item-green">
                    7
                  </div></div><div class="cell border"><div class="item-violet-red">
                    0
                  </div></div><div class="cell border"><div class="item-green">
                    1
                  </div></div><div class="cell border"><div class="item-red">
                    4
                  </div></div><div class="cell border"><div class="item-green">
                    3
                  </div></div><div class="cell border"><div class="item-red">
                    2
                  </div></div><div class="cell border"><div class="item-violet-green">
                    5
                  </div></div><div class="cell border"><div class="item-red">
                    4
                  </div></div><div class="cell border"><div class="item-green">
                    3
                  </div></div><div class="cell border"><div class="item-red">
                    2
                  </div></div><div class="cell border"><div class="item-violet-green">
                    5
                  </div></div><div class="cell border"><div class="item-red">
                    2
                  </div></div><div class="cell border"><div class="item-violet-green">
                    5
                  </div></div><div class="cell border"><div class="item-red">
                    6
                  </div></div><div class="cell border"><div class="item-violet-green">
                    5
                  </div></div><div class="cell border"><div class="item-red">
                    2
                  </div></div><div class="cell border"><div class="item-green">
                    3
                  </div></div><div class="cell border"><div class="item-violet-red">
                    0
                  </div></div><div class="cell border"><div class="item-green">
                    7
                  </div></div><div class="cell border"><div class="item-red">
                    4
                  </div></div><div class="cell border"><div class="item-green">
                    7
                  </div></div><div class="cell border"><div class="item-red">
                    6
                  </div></div><div class="cell border"><div class="item-violet-green">
                    5
                  </div></div><div class="cell border"><div class="item-red">
                    8
                  </div></div><div class="cell border"><div class="item-violet-green">
                    5
                  </div></div><div class="cell border"><div class="item-red">
                    4
                  </div></div><div class="cell border"><div class="item-green">
                    3
                  </div></div><div class="cell border"><div class="item-violet-red">
                    0
                  </div></div><div class="cell border"><div class="item-green">
                    9
                  </div></div><div class="cell border"><div class="item-red">
                    2
                  </div></div><div class="cell border"><div class="item-green">
                    1
                  </div></div><div class="cell border"><div class="item-red">
                    4
                  </div></div><div class="cell border"><div class="item-violet-green">
                    5
                  </div></div><div class="cell border"><div class="item-violet-red">
                    0
                  </div></div><div class="cell border"><div class="item-violet-green">
                    5
                  </div></div><div class="cell border"><div class="item-red">
                    8
                  </div></div><div class="cell border"><div class="item-green">
                    7
                  </div></div><div class="cell border"><div class="item-violet-red">
                    0
                  </div></div><div class="cell border"><div class="item-green">
                    7
                  </div></div><div class="cell border"><div class="item-violet-red">
                    0
                  </div></div><div class="cell border"><div class="item-green">
                    7
                  </div></div><div class="cell border"><div class="item-red">
                    8
                  </div></div><div class="cell border"><div class="item-green">
                    7
                  </div></div><div class="cell border"><div class="item-red">
                    2
                  </div></div><div class="cell border"><div class="item-violet-green">
                    5
                  </div></div><div class="cell border"><div class="item-red">
                    4
                  </div></div><div class="cell border"><div class="item-green">
                    7
                  </div></div><div class="cell border"><div class="item-red">
                    4
                  </div></div><div class="cell border"><div class="item-green">
                    3
                  </div></div><div class="cell border"><div class="item-red">
                    8
                  </div></div><div class="cell border"><div class="item-green">
                    9
                  </div></div><div class="cell border"><div class="item-red">
                    8
                  </div></div><div class="cell border"><div class="item-green">
                    9
                  </div></div><div class="cell border"><div class="item-red">
                    8
                  </div></div><div class="cell border"><div class="item-violet-green">
                    5
                  </div></div><div class="cell border"><div class="item-violet-red">
                    0
                  </div></div><div class="cell border"><div class="item-green">
                    9
                  </div></div></div><div class="row1"><div class="index">
                  2
                </div> <div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    9
                  </div></div><div class="cell border"><div class="item-red">
                    4
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    8
                  </div></div><div class="cell border"><div class="item-green">
                    1
                  </div></div><div class="cell border"><div class="item-red">
                    8
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    1
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    7
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    3
                  </div></div><div class="cell border"><div class="item-red">
                    6
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-violet-red">
                    0
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    7
                  </div></div><div class="cell border"><div class="item-red">
                    4
                  </div></div><div class="cell border"><div class="item-green">
                    1
                  </div></div><div class="cell border"><div class="item-red">
                    8
                  </div></div><div class="cell border"><div class="item-green">
                    1
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    1
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    3
                  </div></div><div class="cell border"><div class="item-violet-red">
                    0
                  </div></div><div class="cell border"><div class="item-green">
                    9
                  </div></div><div class="cell border"><div class="item-red">
                    6
                  </div></div><div class="cell border"><div class="item-green">
                    9
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    7
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    3
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    8
                  </div></div><div class="cell border"><div class="item-green">
                    9
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    3
                  </div></div><div class="cell border"><div class="item-violet-red">
                    0
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    2
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-violet-red">
                    0
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-violet-red">
                    0
                  </div></div><div class="cell border"><div class="item-green">
                    7
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-violet-green">
                    5
                  </div></div><div class="cell border"><div class="item-red">
                    8
                  </div></div><div class="cell border"><div class="item-green">
                    9
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-violet-red">
                    0
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-violet-green">
                    5
                  </div></div><div class="cell border"><div class="item-red">
                    2
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    1
                  </div></div><div class="cell border"><div class="item-red">
                    8
                  </div></div><div class="cell border"><div class="item-green">
                    3
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    2
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    4
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    8
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    3
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    3
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    8
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    4
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-violet-green">
                    5
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    4
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    2
                  </div></div><div class="cell border"><div class="item-violet-green">
                    5
                  </div></div><div class="cell border"><div class="item-red">
                    6
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    2
                  </div></div><div class="cell border"><div class="item-green">
                    7
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    1
                  </div></div><div class="cell border"><div class="item-violet-red">
                    0
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-violet-green">
                    5
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    3
                  </div></div><div class="cell border"><div class="item-red">
                    2
                  </div></div><div class="cell border"><div class="item-green">
                    7
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    6
                  </div></div><div class="cell border"><div class="item-violet-green">
                    5
                  </div></div></div><div class="row1"><div class="index">
                  3
                </div> <div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    1
                  </div></div><div class="cell border"><div class="item-violet-red">
                    0
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    1
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    7
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    9
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-violet-red">
                    0
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    3
                  </div></div><div class="cell border"><div class="item-red">
                    8
                  </div></div><div class="cell border"><div class="item-green">
                    7
                  </div></div><div class="cell border"><div class="item-red">
                    4
                  </div></div><div class="cell border"><div class="item-green">
                    9
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    3
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-violet-green">
                    5
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    1
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    1
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    1
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-violet-red">
                    0
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    2
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    3
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    1
                  </div></div><div class="cell border"><div class="item-red">
                    8
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    4
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    4
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    7
                  </div></div><div class="cell border"><div class="item-violet-red">
                    0
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    4
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-violet-green">
                    5
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    1
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-violet-green">
                    5
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    2
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    2
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    2
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    9
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    9
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    6
                  </div></div><div class="cell border"><div class="item-green">
                    7
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-violet-red">
                    0
                  </div></div><div class="cell border"><div class="item-green">
                    3
                  </div></div></div><div class="row1"><div class="index">
                  4
                </div> <div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-violet-green">
                    5
                  </div></div><div class="cell border"><div class="item-red">
                    2
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-violet-green">
                    5
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    4
                  </div></div><div class="cell border"><div class="item-violet-green">
                    5
                  </div></div><div class="cell border"><div class="item-red">
                    4
                  </div></div><div class="cell border"><div class="item-green">
                    7
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    1
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    3
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    2
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    3
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    1
                  </div></div><div class="cell border"><div class="item-red">
                    6
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    4
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    8
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    7
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    9
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    4
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    6
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    4
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-violet-green">
                    5
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-violet-red">
                    0
                  </div></div><div class="cell border"><div class="item-violet-green">
                    5
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    4
                  </div></div><div class="cell border"><div class="item-green">
                    7
                  </div></div></div><div class="row1"><div class="index">
                  5
                </div> <div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    7
                  </div></div><div class="cell border"><div class="item-violet-red">
                    0
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    1
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    3
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    8
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    3
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    2
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-violet-green">
                    5
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    3
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    8
                  </div></div><div class="cell border"><div class="item-violet-green">
                    5
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    6
                  </div></div><div class="cell border"><div class="item-violet-green">
                    5
                  </div></div></div><div class="row1"><div class="index">
                  6
                </div> <div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    3
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-violet-green">
                    5
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    7
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    6
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-violet-red">
                    0
                  </div></div><div class="cell border"><div class="item-null"></div></div></div><div class="row1"><div class="index">
                  7
                </div> <div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    9
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    9
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-violet-green">
                    5
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    2
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-violet-red">
                    0
                  </div></div><div class="cell border"><div class="item-null"></div></div></div><div class="row1"><div class="index">
                  8
                </div> <div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    7
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    9
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div></div><div class="row1"><div class="index">
                  9
                </div> <div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    3
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div></div><div class="row1"1><div class="index">
                  10
                </div> <div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    7
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div></div><div class="row1"1><div class="index">
                  11
                </div> <div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    1
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"><
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  
                  
                  
                  <div class=" box">
                  <div id="chart2" style="display:none;" class="grid targetDiv">
                      <div class="row1">
                      <div class="index">
                  1
                </div> <div class="cell border"><div class="item-green">
                    298
                  </div></div><div class="cell border"><div class="item-red">
                    295
                  </div></div><div class="cell border"><div class="item-green">
                    294
                  </div></div><div class="cell border"><div class="item-violet-red">
                    293
                  </div></div><div class="cell border"><div class="item-green">
                    292
                  </div></div><div class="cell border"><div class="item-red">
                    289
                  </div></div><div class="cell border"><div class="item-green">
                    286
                  </div></div><div class="cell border"><div class="item-red">
                    285
                  </div></div><div class="cell border"><div class="item-violet-green">
                    284
                  </div></div><div class="cell border"><div class="item-red">
                    279
                  </div></div><div class="cell border"><div class="item-green">
                    274
                  </div></div><div class="cell border"><div class="item-red">
                    273
                  </div></div><div class="cell border"><div class="item-green">
                    271
                  </div></div><div class="cell border"><div class="item-red">
                    268
                  </div></div><div class="cell border"><div class="item-green">
                    266
                  </div></div><div class="cell border"><div class="item-red">
                    265
                  </div></div><div class="cell border"><div class="item-green">
                    264
                  </div></div><div class="cell border"><div class="item-red">
                    260
                  </div></div><div class="cell border"><div class="item-green">
                    259
                  </div></div><div class="cell border"><div class="item-red">
                    256
                  </div></div><div class="cell border"><div class="item-green">
                    255
                  </div></div><div class="cell border"><div class="item-red">
                    254
                  </div></div><div class="cell border"><div class="item-violet-green">
                    253
                  </div></div><div class="cell border"><div class="item-red">
                    251
                  </div></div><div class="cell border"><div class="item-violet-green">
                    248
                  </div></div><div class="cell border"><div class="item-red">
                    247
                  </div></div><div class="cell border"><div class="item-green">
                    245
                  </div></div><div class="cell border"><div class="item-violet-red">
                    244
                  </div></div><div class="cell border"><div class="item-green">
                    243
                  </div></div><div class="cell border"><div class="item-red">
                    240
                  </div></div><div class="cell border"><div class="item-violet-green">
                    236
                  </div></div><div class="cell border"><div class="item-red">
                    232
                  </div></div><div class="cell border"><div class="item-green">
                    228
                  </div></div><div class="cell border"><div class="item-red">
                    224
                  </div></div><div class="cell border"><div class="item-green">
                    223
                  </div></div><div class="cell border"><div class="item-red">
                    218
                  </div></div><div class="cell border"><div class="item-green">
                    217
                  </div></div><div class="cell border"><div class="item-red">
                    216
                  </div></div><div class="cell border"><div class="item-green">
                    215
                  </div></div><div class="cell border"><div class="item-violet-red">
                    213
                  </div></div><div class="cell border"><div class="item-violet-green">
                    211
                  </div></div><div class="cell border"><div class="item-red">
                    209
                  </div></div><div class="cell border"><div class="item-green">
                    207
                  </div></div><div class="cell border"><div class="item-red">
                    205
                  </div></div><div class="cell border"><div class="item-violet-green">
                    204
                  </div></div><div class="cell border"><div class="item-red">
                    203
                  </div></div><div class="cell border"><div class="item-violet-green">
                    202
                  </div></div><div class="cell border"><div class="item-violet-red">
                    195
                  </div></div><div class="cell border"><div class="item-violet-green">
                    194
                  </div></div><div class="cell border"><div class="item-red">
                    191
                  </div></div><div class="cell border"><div class="item-green">
                    190
                  </div></div><div class="cell border"><div class="item-red">
                    189
                  </div></div><div class="cell border"><div class="item-green">
                    188
                  </div></div><div class="cell border"><div class="item-red">
                    187
                  </div></div><div class="cell border"><div class="item-green">
                    185
                  </div></div><div class="cell border"><div class="item-red">
                    182
                  </div></div><div class="cell border"><div class="item-green">
                    181
                  </div></div><div class="cell border"><div class="item-violet-red">
                    178
                  </div></div><div class="cell border"><div class="item-green">
                    176
                  </div></div><div class="cell border"><div class="item-red">
                    175
                  </div></div><div class="cell border"><div class="item-green">
                    174
                  </div></div><div class="cell border"><div class="item-red">
                    173
                  </div></div><div class="cell border"><div class="item-green">
                    170
                  </div></div><div class="cell border"><div class="item-violet-red">
                    169
                  </div></div><div class="cell border"><div class="item-green">
                    164
                  </div></div><div class="cell border"><div class="item-violet-red">
                    163
                  </div></div><div class="cell border"><div class="item-violet-green">
                    161
                  </div></div><div class="cell border"><div class="item-red">
                    150
                  </div></div><div class="cell border"><div class="item-green">
                    149
                  </div></div><div class="cell border"><div class="item-red">
                    145
                  </div></div><div class="cell border"><div class="item-green">
                    141
                  </div></div><div class="cell border"><div class="item-red">
                    139
                  </div></div><div class="cell border"><div class="item-violet-green">
                    138
                  </div></div><div class="cell border"><div class="item-red">
                    137
                  </div></div><div class="cell border"><div class="item-green">
                    136
                  </div></div><div class="cell border"><div class="item-violet-red">
                    135
                  </div></div><div class="cell border"><div class="item-green">
                    130
                  </div></div><div class="cell border"><div class="item-red">
                    129
                  </div></div><div class="cell border"><div class="item-green">
                    128
                  </div></div><div class="cell border"><div class="item-red">
                    126
                  </div></div><div class="cell border"><div class="item-green">
                    122
                  </div></div><div class="cell border"><div class="item-violet-red">
                    121
                  </div></div><div class="cell border"><div class="item-green">
                    120
                  </div></div><div class="cell border"><div class="item-violet-red">
                    117
                  </div></div><div class="cell border"><div class="item-green">
                    114
                  </div></div><div class="cell border"><div class="item-red">
                    112
                  </div></div><div class="cell border"><div class="item-green">
                    111
                  </div></div><div class="cell border"><div class="item-red">
                    110
                  </div></div><div class="cell border"><div class="item-violet-green">
                    109
                  </div></div><div class="cell border"><div class="item-red">
                    108
                  </div></div><div class="cell border"><div class="item-green">
                    105
                  </div></div><div class="cell border"><div class="item-red">
                    104
                  </div></div><div class="cell border"><div class="item-violet-green">
                    102
                  </div></div><div class="cell border"><div class="item-red">
                    101
                  </div></div><div class="cell border"><div class="item-violet-green">
                    099
                  </div></div><div class="cell border"><div class="item-red">
                    098
                  </div></div><div class="cell border"><div class="item-violet-green">
                    097
                  </div></div><div class="cell border"><div class="item-red">
                    093
                  </div></div><div class="cell border"><div class="item-green">
                    092
                  </div></div><div class="cell border"><div class="item-violet-red">
                    089
                  </div></div><div class="cell border"><div class="item-green">
                    088
                  </div></div><div class="cell border"><div class="item-red">
                    087
                  </div></div><div class="cell border"><div class="item-green">
                    085
                  </div></div><div class="cell border"><div class="item-red">
                    084
                  </div></div><div class="cell border"><div class="item-violet-green">
                    082
                  </div></div><div class="cell border"><div class="item-red">
                    081
                  </div></div><div class="cell border"><div class="item-violet-green">
                    080
                  </div></div><div class="cell border"><div class="item-red">
                    075
                  </div></div><div class="cell border"><div class="item-green">
                    074
                  </div></div><div class="cell border"><div class="item-violet-red">
                    073
                  </div></div><div class="cell border"><div class="item-green">
                    072
                  </div></div><div class="cell border"><div class="item-red">
                    071
                  </div></div><div class="cell border"><div class="item-green">
                    067
                  </div></div><div class="cell border"><div class="item-red">
                    066
                  </div></div><div class="cell border"><div class="item-violet-green">
                    065
                  </div></div><div class="cell border"><div class="item-violet-red">
                    064
                  </div></div><div class="cell border"><div class="item-violet-green">
                    062
                  </div></div><div class="cell border"><div class="item-red">
                    060
                  </div></div><div class="cell border"><div class="item-green">
                    056
                  </div></div><div class="cell border"><div class="item-violet-red">
                    055
                  </div></div><div class="cell border"><div class="item-green">
                    054
                  </div></div><div class="cell border"><div class="item-violet-red">
                    053
                  </div></div><div class="cell border"><div class="item-green">
                    049
                  </div></div><div class="cell border"><div class="item-red">
                    047
                  </div></div><div class="cell border"><div class="item-green">
                    046
                  </div></div><div class="cell border"><div class="item-red">
                    043
                  </div></div><div class="cell border"><div class="item-violet-green">
                    041
                  </div></div><div class="cell border"><div class="item-red">
                    040
                  </div></div><div class="cell border"><div class="item-green">
                    039
                  </div></div><div class="cell border"><div class="item-red">
                    038
                  </div></div><div class="cell border"><div class="item-green">
                    037
                  </div></div><div class="cell border"><div class="item-red">
                    029
                  </div></div><div class="cell border"><div class="item-green">
                    028
                  </div></div><div class="cell border"><div class="item-red">
                    026
                  </div></div><div class="cell border"><div class="item-green">
                    019
                  </div></div><div class="cell border"><div class="item-red">
                    014
                  </div></div><div class="cell border"><div class="item-violet-green">
                    013
                  </div></div><div class="cell border"><div class="item-violet-red">
                    012
                  </div></div><div class="cell border"><div class="item-green">
                    005
                  </div></div></div><div class="row1"><div class="index">
                  2
                </div> <div class="cell border"><div class="item-green">
                    297
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    291
                  </div></div><div class="cell border"><div class="item-red">
                    288
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    283
                  </div></div><div class="cell border"><div class="item-red">
                    278
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    272
                  </div></div><div class="cell border"><div class="item-green">
                    270
                  </div></div><div class="cell border"><div class="item-red">
                    267
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    263
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    258
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    252
                  </div></div><div class="cell border"><div class="item-red">
                    250
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-violet-red">
                    246
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    242
                  </div></div><div class="cell border"><div class="item-red">
                    239
                  </div></div><div class="cell border"><div class="item-green">
                    235
                  </div></div><div class="cell border"><div class="item-red">
                    231
                  </div></div><div class="cell border"><div class="item-green">
                    227
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    222
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    214
                  </div></div><div class="cell border"><div class="item-violet-red">
                    212
                  </div></div><div class="cell border"><div class="item-green">
                    210
                  </div></div><div class="cell border"><div class="item-red">
                    208
                  </div></div><div class="cell border"><div class="item-green">
                    206
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    201
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    193
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    186
                  </div></div><div class="cell border"><div class="item-green">
                    184
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    180
                  </div></div><div class="cell border"><div class="item-violet-red">
                    177
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    172
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-violet-red">
                    168
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-violet-red">
                    162
                  </div></div><div class="cell border"><div class="item-green">
                    160
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-violet-green">
                    148
                  </div></div><div class="cell border"><div class="item-red">
                    144
                  </div></div><div class="cell border"><div class="item-green">
                    140
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-violet-red">
                    134
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-violet-green">
                    127
                  </div></div><div class="cell border"><div class="item-red">
                    125
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    119
                  </div></div><div class="cell border"><div class="item-red">
                    116
                  </div></div><div class="cell border"><div class="item-green">
                    113
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    107
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    103
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    100
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    096
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    091
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    086
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    083
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-violet-green">
                    079
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    070
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    063
                  </div></div><div class="cell border"><div class="item-violet-green">
                    061
                  </div></div><div class="cell border"><div class="item-red">
                    059
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    052
                  </div></div><div class="cell border"><div class="item-green">
                    048
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    045
                  </div></div><div class="cell border"><div class="item-violet-red">
                    042
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-violet-green">
                    036
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    027
                  </div></div><div class="cell border"><div class="item-red">
                    025
                  </div></div><div class="cell border"><div class="item-green">
                    018
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    011
                  </div></div><div class="cell border"><div class="item-violet-green">
                    004
                  </div></div></div><div class="row1"><div class="index">
                  3
                </div> <div class="cell border"><div class="item-green">
                    296
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    290
                  </div></div><div class="cell border"><div class="item-red">
                    287
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    282
                  </div></div><div class="cell border"><div class="item-violet-red">
                    277
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    269
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    262
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    257
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-violet-red">
                    249
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    241
                  </div></div><div class="cell border"><div class="item-red">
                    238
                  </div></div><div class="cell border"><div class="item-green">
                    234
                  </div></div><div class="cell border"><div class="item-red">
                    230
                  </div></div><div class="cell border"><div class="item-green">
                    226
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    221
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-violet-green">
                    200
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    192
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    183
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    179
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-violet-red">
                    171
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    167
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    159
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    147
                  </div></div><div class="cell border"><div class="item-red">
                    143
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    133
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    124
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    118
                  </div></div><div class="cell border"><div class="item-violet-red">
                    115
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    106
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-violet-green">
                    095
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    090
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-violet-green">
                    078
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    069
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    058
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    051
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    044
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    035
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    024
                  </div></div><div class="cell border"><div class="item-green">
                    017
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-violet-red">
                    010
                  </div></div><div class="cell border"><div class="item-green">
                    003
                  </div></div></div><div class="row1"><div class="index">
                  4
                </div> <div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-violet-green">
                    281
                  </div></div><div class="cell border"><div class="item-red">
                    276
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-violet-green">
                    261
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    237
                  </div></div><div class="cell border"><div class="item-violet-green">
                    233
                  </div></div><div class="cell border"><div class="item-red">
                    229
                  </div></div><div class="cell border"><div class="item-green">
                    225
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    220
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    199
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    166
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    158
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    146
                  </div></div><div class="cell border"><div class="item-red">
                    142
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    132
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    123
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    094
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    077
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    068
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    057
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    050
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-violet-green">
                    034
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-violet-red">
                    023
                  </div></div><div class="cell border"><div class="item-violet-green">
                    016
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    009
                  </div></div><div class="cell border"><div class="item-green">
                    002
                  </div></div></div><div class="row1"><div class="index">
                  5
                </div> <div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    280
                  </div></div><div class="cell border"><div class="item-violet-red">
                    275
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    219
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    198
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    165
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    157
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    131
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-violet-green">
                    076
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    033
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    022
                  </div></div><div class="cell border"><div class="item-violet-green">
                    015
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    008
                  </div></div><div class="cell border"><div class="item-violet-green">
                    001
                  </div></div></div><div class="row1"><div class="index">
                  6
                </div> <div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    197
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-violet-green">
                    156
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    032
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    021
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-violet-red">
                    007
                  </div></div><div class="cell border"><div class="item-null"></div></div></div><div class="row1"><div class="index">
                  7
                </div> <div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    196
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    155
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-violet-green">
                    031
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-red">
                    020
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-violet-red">
                    006
                  </div></div><div class="cell border"><div class="item-null"></div></div></div><div class="row1"><div class="index">
                  8
                </div> <div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    154
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    030
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div></div><div class="row1"><div class="index">
                  9
                </div> <div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    153
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div></div><div class="row1"><div class="index">
                  10
                </div> <div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    152
                  </div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div></div><div class="row1"><div class="index">
                  11
                </div> <div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-green">
                    151
                  </div></div><div class="cell border"><div class="item-null"></div></div>
                  <div class="cell border"><div class="item-null"></div></div>
                  <div class="cell border"><div class="item-null"></div></div>
                  <div class="cell border"><div class="item-null"></div></div>
                  <div class="cell border"><div class="item-null"></div></div>
                  <div class="cell border"><div class="item-null"></div></div>
                  <div class="cell border"><div class="item-null"></div></div>
                  <div class="cell border"><div class="item-null"></div></div>
                  <div class="cell border"><div class="item-null"></div></div>
                  <div class="cell border"><div class="item-null"></div></div>
                  <div class="cell border"><div class="item-null"></div></div>
                  <div class="cell border"><div class="item-null"></div></div>
                  <div class="cell border"><div class="item-null"></div></div>
                  <div class="cell border"><div class="item-null"></div></div>
                  <div class="cell border"><div class="item-null"></div></div>
                  <div class="cell border"><div class="item-null"></div></div>
                  <div class="cell border"><div class="item-null"></div></div>
                  <div class="cell border"><div class="item-null"></div></div>
                  <div class="cell border"><div class="item-null"></div></div>
                  <div class="cell border"><div class="item-null"></div></div>
                  <div class="cell border"><div class="item-null"></div></div>
                  <div class="cell border"><div class="item-null"></div></div>
                  <div class="cell border"><div class="item-null"></div></div>
                  <div class="cell border"><div class="item-null"></div></div>
                  <div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div><div class="cell border"><div class="item-null"></div></div></div></div>
  </div>
  <!--<div class="text-center">
      <button type="button" class="btn btn-primary"><a style="color:#fff;" href="order.php">My Orders</a></button>
  </div>-->
  
  
  
  <div class="long " style="margin-bottom:63px;">      
      <!-- listview -->
      <ul class="nav nav-tabs size4" id="myTab3" role="tablist">
        <li class="nav-item"> 
<a class="nav-link active" id="home-tab3" data-toggle="tab" href="#rd_3" role="tab" >RD.3</a> 
        </li>
        <li class="nav-item"> 
<a class="nav-link" id="profile-tab3" data-toggle="tab" href="#rd_4" role="tab" >RD.4</a>
         </li>
        <li class="nav-item"> 
<a class="nav-link" id="contact-tab3" data-toggle="tab" href="#rd_5" role="tab" >RD.5</a> 
        </li>
        <li class="nav-item"> 
<a class="nav-link" id="contact-tab3" data-toggle="tab" href="#rd_6" role="tab" >RD.6</a> 
        </li>
        <li class="nav-item"> 
<a class="nav-link" id="contact-tab3" data-toggle="tab" href="#rd_7" role="tab" >RD.7</a> 
        </li>
        <li class="nav-item"> 
<a class="nav-link" id="contact-tab3" data-toggle="tab" href="#rd_8" role="tab" >RD.8</a> 
        </li>
      </ul>
      
      
      
      <div class="tab-content" id="myTabContent">
          
          
          <div class="tab-pane fade show active" id="rd_3" role="tabpanel"> 
          
          <div class="box">
             <div class="grid"><div class="row1"><div class="index">
                1
              </div> <div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div></div><div class="row1"><div class="index">
                2
              </div> <div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div></div><div class="row1"><div class="index">
                3
              </div> <div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div></div></div>
                </div>
                <div class="kline">
                    <div class="box">
                        <div class="van-cell-group van-hairline--top-bottom">
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress">
                                        <span class="van-progress__portion" style="background: rgb(245, 40, 39); width: 679.62px;">
                                            <span class="van-progress__pivot" style="left: 657.06px; background: rgb(245, 40, 39);">Red:157</span>
                                            </span>
                                </div>
                                </div>
                                </div>
                                <div class="van-cell">
                                    <div class="van-cell__value van-cell__value--alone">
                                        <div class="van-progress"><span class="van-progress__portion" style="background: rgb(21, 114, 57); width: 751.92px;">
                                            <span class="van-progress__pivot" style="left: 722.28px; background: rgb(21, 114, 57);">Green:174</span>
                                            </span>
                                            </div>
                                            </div>
                                            </div> 
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress">
                                        <span class="van-progress__portion" style="background: rgb(232, 57, 241); width: 332.58px;">
                                            <span class="van-progress__pivot" style="left: 321.31px; background: rgb(232, 57, 241);">Violet:77</span>
                                            </span>
                                            </div>
                                            </div>
                                            </div>
                                            <div class="van-cell">
                                                <div class="van-cell__value van-cell__value--alone">
                                                    <div class="van-progress"><span class="van-progress__portion" style="background: rgb(0, 122, 204); width: 159.06px;">
                                                        <span class="van-progress__pivot" style="left: 155.1px; background: rgb(0, 122, 204);">0:37</span>
                                                        </span>
                                                        </div>
                                                        </div>
                                                        </div>
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress">
                                        <span class="van-progress__portion" style="background: rgb(0, 122, 204); width: 144.6px;">
                                            <span class="van-progress__pivot" style="left: 141px; background: rgb(0, 122, 204);">1:35</span></span>
                                            </div>
                                            </div>
                                            </div>
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress"><span class="van-progress__portion" style="background: rgb(0, 122, 204); width: 115.68px;">
                                        <span class="van-progress__pivot" style="left: 112.8px; background: rgb(0, 122, 204);">2:29</span></span>
                                        </div>
                                        </div>
                                        </div> 
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress">
                                        <span class="van-progress__portion" style="background: rgb(0, 122, 204); width: 144.6px;">
                                            <span class="van-progress__pivot" style="left: 141px; background: rgb(0, 122, 204);">3:35</span></span>
                                            </div>
                                            </div>
                                            </div>
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress">
                                        <span class="van-progress__portion" style="background: rgb(0, 122, 204); width: 130.14px;">
                                            <span class="van-progress__pivot" style="left: 126.9px; background: rgb(0, 122, 204);">4:33</span></span>
                                            </div>
                                            </div>
                                            </div>
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress"><span class="van-progress__portion" style="background: rgb(0, 122, 204); width: 173.52px;">
                                        <span class="van-progress__pivot" style="left: 169.2px; background: rgb(0, 122, 204);">5:40</span></span>
                                        </div>
                                        </div>
                                        </div>
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress">
                                        <span class="van-progress__portion" style="background: rgb(0, 122, 204); width: 101.22px;">
                                            <span class="van-progress__pivot" style="left: 98.7px; background: rgb(0, 122, 204);">6:25</span></span>
                                            </div>
                                            </div>
                                            </div>
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress">
                                        <span class="van-progress__portion" style="background: rgb(0, 122, 204); width: 159.06px;">
                                            <span class="van-progress__pivot" style="left: 155.1px; background: rgb(0, 122, 204);">7:38</span></span>
                                            </div>
                                            </div>
                                            </div> 
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress">
                                        <span class="van-progress__portion" style="background: rgb(0, 122, 204); width: 130.14px;">
                                            <span class="van-progress__pivot" style="left: 126.9px; background: rgb(0, 122, 204);">8:33</span></span>
                                            </div>
                                            </div>
                                            </div>
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress">
                                        <span class="van-progress__portion" style="background: rgb(0, 122, 204); width: 101.22px;">
                                            <span class="van-progress__pivot" style="left: 98.7px; background: rgb(0, 122, 204);">9:26</span></span>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
          
          
          </div>
          
           <div class="tab-pane fade" id="rd_4" role="tabpanel"> 
          
         <div class="box"><div class="grid"><div class="row1"><div class="index">
                1
              </div> <div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div></div><div class="row1"><div class="index">
                2
              </div> <div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div></div><div class="row1"><div class="index">
                3
              </div> <div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <!----> <div class="item-null"></div></div></div><div class="row1"><div class="index">
                4
              </div> <div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <!---->
                <div class="item-null"></div>
                </div>
                </div>
                </div>
                </div>
                
                <div class="kline">
                    <div class="box">
                        <div class="van-cell-group van-hairline--top-bottom">
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress">
                                        <span class="van-progress__portion" style="background: rgb(245, 40, 39); width: 679.62px;">
                                            <span class="van-progress__pivot" style="left: 657.06px; background: rgb(245, 40, 39);">Red:157</span>
                                            </span>
                                </div>
                                </div>
                                </div>
                                <div class="van-cell">
                                    <div class="van-cell__value van-cell__value--alone">
                                        <div class="van-progress"><span class="van-progress__portion" style="background: rgb(21, 114, 57); width: 751.92px;">
                                            <span class="van-progress__pivot" style="left: 722.28px; background: rgb(21, 114, 57);">Green:174</span>
                                            </span>
                                            </div>
                                            </div>
                                            </div> 
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress">
                                        <span class="van-progress__portion" style="background: rgb(232, 57, 241); width: 332.58px;">
                                            <span class="van-progress__pivot" style="left: 321.31px; background: rgb(232, 57, 241);">Violet:77</span>
                                            </span>
                                            </div>
                                            </div>
                                            </div>
                                            <div class="van-cell">
                                                <div class="van-cell__value van-cell__value--alone">
                                                    <div class="van-progress"><span class="van-progress__portion" style="background: rgb(0, 122, 204); width: 159.06px;">
                                                        <span class="van-progress__pivot" style="left: 155.1px; background: rgb(0, 122, 204);">0:37</span>
                                                        </span>
                                                        </div>
                                                        </div>
                                                        </div>
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress">
                                        <span class="van-progress__portion" style="background: rgb(0, 122, 204); width: 144.6px;">
                                            <span class="van-progress__pivot" style="left: 141px; background: rgb(0, 122, 204);">1:35</span></span>
                                            </div>
                                            </div>
                                            </div>
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress"><span class="van-progress__portion" style="background: rgb(0, 122, 204); width: 115.68px;">
                                        <span class="van-progress__pivot" style="left: 112.8px; background: rgb(0, 122, 204);">2:29</span></span>
                                        </div>
                                        </div>
                                        </div> 
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress">
                                        <span class="van-progress__portion" style="background: rgb(0, 122, 204); width: 144.6px;">
                                            <span class="van-progress__pivot" style="left: 141px; background: rgb(0, 122, 204);">3:35</span></span>
                                            </div>
                                            </div>
                                            </div>
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress">
                                        <span class="van-progress__portion" style="background: rgb(0, 122, 204); width: 130.14px;">
                                            <span class="van-progress__pivot" style="left: 126.9px; background: rgb(0, 122, 204);">4:33</span></span>
                                            </div>
                                            </div>
                                            </div>
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress"><span class="van-progress__portion" style="background: rgb(0, 122, 204); width: 173.52px;">
                                        <span class="van-progress__pivot" style="left: 169.2px; background: rgb(0, 122, 204);">5:40</span></span>
                                        </div>
                                        </div>
                                        </div>
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress">
                                        <span class="van-progress__portion" style="background: rgb(0, 122, 204); width: 101.22px;">
                                            <span class="van-progress__pivot" style="left: 98.7px; background: rgb(0, 122, 204);">6:25</span></span>
                                            </div>
                                            </div>
                                            </div>
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress">
                                        <span class="van-progress__portion" style="background: rgb(0, 122, 204); width: 159.06px;">
                                            <span class="van-progress__pivot" style="left: 155.1px; background: rgb(0, 122, 204);">7:38</span></span>
                                            </div>
                                            </div>
                                            </div> 
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress">
                                        <span class="van-progress__portion" style="background: rgb(0, 122, 204); width: 130.14px;">
                                            <span class="van-progress__pivot" style="left: 126.9px; background: rgb(0, 122, 204);">8:33</span></span>
                                            </div>
                                            </div>
                                            </div>
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress">
                                        <span class="van-progress__portion" style="background: rgb(0, 122, 204); width: 101.22px;">
                                            <span class="van-progress__pivot" style="left: 98.7px; background: rgb(0, 122, 204);">9:26</span></span>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
          
          </div>
          
          
           <div class="tab-pane fade" id="rd_5" role="tabpanel"> 
          
          <div class="box"><div class="grid"><div class="row1"><div class="index">
                1
              </div> <div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div></div><div class="row1"><div class="index">
                2
              </div> <div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div></div><div class="row1"><div class="index">
                3
              </div> <div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div></div><div class="row1"><div class="index">
                4
              </div> <div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div></div><div class="row1"><div class="index">
                5
              </div> <div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div></div></div></div>
                
                
                <div class="kline">
                    <div class="box">
                        <div class="van-cell-group van-hairline--top-bottom">
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress">
                                        <span class="van-progress__portion" style="background: rgb(245, 40, 39); width: 679.62px;">
                                            <span class="van-progress__pivot" style="left: 657.06px; background: rgb(245, 40, 39);">Red:157</span>
                                            </span>
                                </div>
                                </div>
                                </div>
                                <div class="van-cell">
                                    <div class="van-cell__value van-cell__value--alone">
                                        <div class="van-progress"><span class="van-progress__portion" style="background: rgb(21, 114, 57); width: 751.92px;">
                                            <span class="van-progress__pivot" style="left: 722.28px; background: rgb(21, 114, 57);">Green:174</span>
                                            </span>
                                            </div>
                                            </div>
                                            </div> 
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress">
                                        <span class="van-progress__portion" style="background: rgb(232, 57, 241); width: 332.58px;">
                                            <span class="van-progress__pivot" style="left: 321.31px; background: rgb(232, 57, 241);">Violet:77</span>
                                            </span>
                                            </div>
                                            </div>
                                            </div>
                                            <div class="van-cell">
                                                <div class="van-cell__value van-cell__value--alone">
                                                    <div class="van-progress"><span class="van-progress__portion" style="background: rgb(0, 122, 204); width: 159.06px;">
                                                        <span class="van-progress__pivot" style="left: 155.1px; background: rgb(0, 122, 204);">0:37</span>
                                                        </span>
                                                        </div>
                                                        </div>
                                                        </div>
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress">
                                        <span class="van-progress__portion" style="background: rgb(0, 122, 204); width: 144.6px;">
                                            <span class="van-progress__pivot" style="left: 141px; background: rgb(0, 122, 204);">1:35</span></span>
                                            </div>
                                            </div>
                                            </div>
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress"><span class="van-progress__portion" style="background: rgb(0, 122, 204); width: 115.68px;">
                                        <span class="van-progress__pivot" style="left: 112.8px; background: rgb(0, 122, 204);">2:29</span></span>
                                        </div>
                                        </div>
                                        </div> 
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress">
                                        <span class="van-progress__portion" style="background: rgb(0, 122, 204); width: 144.6px;">
                                            <span class="van-progress__pivot" style="left: 141px; background: rgb(0, 122, 204);">3:35</span></span>
                                            </div>
                                            </div>
                                            </div>
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress">
                                        <span class="van-progress__portion" style="background: rgb(0, 122, 204); width: 130.14px;">
                                            <span class="van-progress__pivot" style="left: 126.9px; background: rgb(0, 122, 204);">4:33</span></span>
                                            </div>
                                            </div>
                                            </div>
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress"><span class="van-progress__portion" style="background: rgb(0, 122, 204); width: 173.52px;">
                                        <span class="van-progress__pivot" style="left: 169.2px; background: rgb(0, 122, 204);">5:40</span></span>
                                        </div>
                                        </div>
                                        </div>
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress">
                                        <span class="van-progress__portion" style="background: rgb(0, 122, 204); width: 101.22px;">
                                            <span class="van-progress__pivot" style="left: 98.7px; background: rgb(0, 122, 204);">6:25</span></span>
                                            </div>
                                            </div>
                                            </div>
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress">
                                        <span class="van-progress__portion" style="background: rgb(0, 122, 204); width: 159.06px;">
                                            <span class="van-progress__pivot" style="left: 155.1px; background: rgb(0, 122, 204);">7:38</span></span>
                                            </div>
                                            </div>
                                            </div> 
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress">
                                        <span class="van-progress__portion" style="background: rgb(0, 122, 204); width: 130.14px;">
                                            <span class="van-progress__pivot" style="left: 126.9px; background: rgb(0, 122, 204);">8:33</span></span>
                                            </div>
                                            </div>
                                            </div>
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress">
                                        <span class="van-progress__portion" style="background: rgb(0, 122, 204); width: 101.22px;">
                                            <span class="van-progress__pivot" style="left: 98.7px; background: rgb(0, 122, 204);">9:26</span></span>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
          
          </div>
          
          
          <div class="tab-pane fade" id="rd_6" role="tabpanel"> 
          
         <div class="box"><div class="grid"><div class="row1"><div class="index">
                1
              </div> <div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div></div><div class="row1"><div class="index">
                2
              </div> <div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div></div><div class="row1"><div class="index">
                3
              </div> <div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <!----> <div class="item-null"></div></div></div><div class="row1"><div class="index">
                4
              </div> <div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <!----> <div class="item-null"></div></div></div><div class="row1"><div class="index">
                5
              </div> <div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <!----> <div class="item-null"></div></div></div><div class="row1"><div class="index">
                6
              </div> <div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <!----> <div class="item-null"></div>
                </div>
                </div>
                </div>
                </div>
                
                <div class="kline">
                    <div class="box">
                        <div class="van-cell-group van-hairline--top-bottom">
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress">
                                        <span class="van-progress__portion" style="background: rgb(245, 40, 39); width: 679.62px;">
                                            <span class="van-progress__pivot" style="left: 657.06px; background: rgb(245, 40, 39);">Red:157</span>
                                            </span>
                                </div>
                                </div>
                                </div>
                                <div class="van-cell">
                                    <div class="van-cell__value van-cell__value--alone">
                                        <div class="van-progress"><span class="van-progress__portion" style="background: rgb(21, 114, 57); width: 751.92px;">
                                            <span class="van-progress__pivot" style="left: 722.28px; background: rgb(21, 114, 57);">Green:174</span>
                                            </span>
                                            </div>
                                            </div>
                                            </div> 
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress">
                                        <span class="van-progress__portion" style="background: rgb(232, 57, 241); width: 332.58px;">
                                            <span class="van-progress__pivot" style="left: 321.31px; background: rgb(232, 57, 241);">Violet:77</span>
                                            </span>
                                            </div>
                                            </div>
                                            </div>
                                            <div class="van-cell">
                                                <div class="van-cell__value van-cell__value--alone">
                                                    <div class="van-progress"><span class="van-progress__portion" style="background: rgb(0, 122, 204); width: 159.06px;">
                                                        <span class="van-progress__pivot" style="left: 155.1px; background: rgb(0, 122, 204);">0:37</span>
                                                        </span>
                                                        </div>
                                                        </div>
                                                        </div>
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress">
                                        <span class="van-progress__portion" style="background: rgb(0, 122, 204); width: 144.6px;">
                                            <span class="van-progress__pivot" style="left: 141px; background: rgb(0, 122, 204);">1:35</span></span>
                                            </div>
                                            </div>
                                            </div>
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress"><span class="van-progress__portion" style="background: rgb(0, 122, 204); width: 115.68px;">
                                        <span class="van-progress__pivot" style="left: 112.8px; background: rgb(0, 122, 204);">2:29</span></span>
                                        </div>
                                        </div>
                                        </div> 
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress">
                                        <span class="van-progress__portion" style="background: rgb(0, 122, 204); width: 144.6px;">
                                            <span class="van-progress__pivot" style="left: 141px; background: rgb(0, 122, 204);">3:35</span></span>
                                            </div>
                                            </div>
                                            </div>
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress">
                                        <span class="van-progress__portion" style="background: rgb(0, 122, 204); width: 130.14px;">
                                            <span class="van-progress__pivot" style="left: 126.9px; background: rgb(0, 122, 204);">4:33</span></span>
                                            </div>
                                            </div>
                                            </div>
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress"><span class="van-progress__portion" style="background: rgb(0, 122, 204); width: 173.52px;">
                                        <span class="van-progress__pivot" style="left: 169.2px; background: rgb(0, 122, 204);">5:40</span></span>
                                        </div>
                                        </div>
                                        </div>
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress">
                                        <span class="van-progress__portion" style="background: rgb(0, 122, 204); width: 101.22px;">
                                            <span class="van-progress__pivot" style="left: 98.7px; background: rgb(0, 122, 204);">6:25</span></span>
                                            </div>
                                            </div>
                                            </div>
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress">
                                        <span class="van-progress__portion" style="background: rgb(0, 122, 204); width: 159.06px;">
                                            <span class="van-progress__pivot" style="left: 155.1px; background: rgb(0, 122, 204);">7:38</span></span>
                                            </div>
                                            </div>
                                            </div> 
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress">
                                        <span class="van-progress__portion" style="background: rgb(0, 122, 204); width: 130.14px;">
                                            <span class="van-progress__pivot" style="left: 126.9px; background: rgb(0, 122, 204);">8:33</span></span>
                                            </div>
                                            </div>
                                            </div>
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress">
                                        <span class="van-progress__portion" style="background: rgb(0, 122, 204); width: 101.22px;">
                                            <span class="van-progress__pivot" style="left: 98.7px; background: rgb(0, 122, 204);">9:26</span></span>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
          
          </div>
          
          
           <div class="tab-pane fade" id="rd_7" role="tabpanel"> 
          
          <div class="box"><div class="grid"><div class="row1"><div class="index">
                1
              </div> <div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div></div><div class="row1"><div class="index">
                2
              </div> <div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div></div><div class="row1"><div class="index">
                3
              </div> <div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div></div><div class="row1"><div class="index">
                4
              </div> <div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div></div><div class="row1"><div class="index">
                5
              </div> <div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div></div><div class="row1"><div class="index">
                6
              </div> <div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div></div><div class="row1"><div class="index">
                7
              </div> <div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div>
                </div>
                </div>
                </div>
                
                
                <div class="kline">
                    <div class="box">
                        <div class="van-cell-group van-hairline--top-bottom">
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress">
                                        <span class="van-progress__portion" style="background: rgb(245, 40, 39); width: 679.62px;">
                                            <span class="van-progress__pivot" style="left: 657.06px; background: rgb(245, 40, 39);">Red:157</span>
                                            </span>
                                </div>
                                </div>
                                </div>
                                <div class="van-cell">
                                    <div class="van-cell__value van-cell__value--alone">
                                        <div class="van-progress"><span class="van-progress__portion" style="background: rgb(21, 114, 57); width: 751.92px;">
                                            <span class="van-progress__pivot" style="left: 722.28px; background: rgb(21, 114, 57);">Green:174</span>
                                            </span>
                                            </div>
                                            </div>
                                            </div> 
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress">
                                        <span class="van-progress__portion" style="background: rgb(232, 57, 241); width: 332.58px;">
                                            <span class="van-progress__pivot" style="left: 321.31px; background: rgb(232, 57, 241);">Violet:77</span>
                                            </span>
                                            </div>
                                            </div>
                                            </div>
                                            <div class="van-cell">
                                                <div class="van-cell__value van-cell__value--alone">
                                                    <div class="van-progress"><span class="van-progress__portion" style="background: rgb(0, 122, 204); width: 159.06px;">
                                                        <span class="van-progress__pivot" style="left: 155.1px; background: rgb(0, 122, 204);">0:37</span>
                                                        </span>
                                                        </div>
                                                        </div>
                                                        </div>
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress">
                                        <span class="van-progress__portion" style="background: rgb(0, 122, 204); width: 144.6px;">
                                            <span class="van-progress__pivot" style="left: 141px; background: rgb(0, 122, 204);">1:35</span></span>
                                            </div>
                                            </div>
                                            </div>
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress"><span class="van-progress__portion" style="background: rgb(0, 122, 204); width: 115.68px;">
                                        <span class="van-progress__pivot" style="left: 112.8px; background: rgb(0, 122, 204);">2:29</span></span>
                                        </div>
                                        </div>
                                        </div> 
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress">
                                        <span class="van-progress__portion" style="background: rgb(0, 122, 204); width: 144.6px;">
                                            <span class="van-progress__pivot" style="left: 141px; background: rgb(0, 122, 204);">3:35</span></span>
                                            </div>
                                            </div>
                                            </div>
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress">
                                        <span class="van-progress__portion" style="background: rgb(0, 122, 204); width: 130.14px;">
                                            <span class="van-progress__pivot" style="left: 126.9px; background: rgb(0, 122, 204);">4:33</span></span>
                                            </div>
                                            </div>
                                            </div>
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress"><span class="van-progress__portion" style="background: rgb(0, 122, 204); width: 173.52px;">
                                        <span class="van-progress__pivot" style="left: 169.2px; background: rgb(0, 122, 204);">5:40</span></span>
                                        </div>
                                        </div>
                                        </div>
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress">
                                        <span class="van-progress__portion" style="background: rgb(0, 122, 204); width: 101.22px;">
                                            <span class="van-progress__pivot" style="left: 98.7px; background: rgb(0, 122, 204);">6:25</span></span>
                                            </div>
                                            </div>
                                            </div>
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress">
                                        <span class="van-progress__portion" style="background: rgb(0, 122, 204); width: 159.06px;">
                                            <span class="van-progress__pivot" style="left: 155.1px; background: rgb(0, 122, 204);">7:38</span></span>
                                            </div>
                                            </div>
                                            </div> 
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress">
                                        <span class="van-progress__portion" style="background: rgb(0, 122, 204); width: 130.14px;">
                                            <span class="van-progress__pivot" style="left: 126.9px; background: rgb(0, 122, 204);">8:33</span></span>
                                            </div>
                                            </div>
                                            </div>
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress">
                                        <span class="van-progress__portion" style="background: rgb(0, 122, 204); width: 101.22px;">
                                            <span class="van-progress__pivot" style="left: 98.7px; background: rgb(0, 122, 204);">9:26</span></span>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
          
          </div>
          
           <div class="tab-pane fade" id="rd_8" role="tabpanel"> 
          
          <div class="box"><div class="grid"><div class="row1"><div class="index">
                1
              </div> <div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div></div><div class="row1"><div class="index">
                2
              </div> <div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div></div><div class="row1"><div class="index">
                3
              </div> <div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div></div><div class="row1"><div class="index">
                4
              </div> <div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div></div><div class="row1"><div class="index">
                5
              </div> <div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div></div><div class="row1"><div class="index">
                6
              </div> <div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div></div><div class="row1"><div class="index">
                7
              </div> <div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div></div><div class="row1"><div class="index">
                8
              </div> <div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  1
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  8
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  2
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  3
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  9
                </div> <!----></div><div class="cell border"><div class="item-violet-red">
                  0
                </div> <!----> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  4
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <div class="item-green">
                  7
                </div> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <div class="item-violet-green">
                  5
                </div> <!----> <!----> <!----></div><div class="cell border"><!----> <!----> <div class="item-red">
                  6
                </div> <!----> <!----></div><div class="cell border"><!----> <!----> <!----> <!----> <div class="item-null"></div>
                </div>
                </div>
                </div>
                </div>
                
                
                
                <div class="kline">
                    <div class="box">
                        <div class="van-cell-group van-hairline--top-bottom">
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress">
                                        <span class="van-progress__portion" style="background: rgb(245, 40, 39); width: 679.62px;">
                                            <span class="van-progress__pivot" style="left: 657.06px; background: rgb(245, 40, 39);">Red:157</span>
                                            </span>
                                </div>
                                </div>
                                </div>
                                <div class="van-cell">
                                    <div class="van-cell__value van-cell__value--alone">
                                        <div class="van-progress"><span class="van-progress__portion" style="background: rgb(21, 114, 57); width: 751.92px;">
                                            <span class="van-progress__pivot" style="left: 722.28px; background: rgb(21, 114, 57);">Green:174</span>
                                            </span>
                                            </div>
                                            </div>
                                            </div> 
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress">
                                        <span class="van-progress__portion" style="background: rgb(232, 57, 241); width: 332.58px;">
                                            <span class="van-progress__pivot" style="left: 321.31px; background: rgb(232, 57, 241);">Violet:77</span>
                                            </span>
                                            </div>
                                            </div>
                                            </div>
                                            <div class="van-cell">
                                                <div class="van-cell__value van-cell__value--alone">
                                                    <div class="van-progress"><span class="van-progress__portion" style="background: rgb(0, 122, 204); width: 159.06px;">
                                                        <span class="van-progress__pivot" style="left: 155.1px; background: rgb(0, 122, 204);">0:37</span>
                                                        </span>
                                                        </div>
                                                        </div>
                                                        </div>
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress">
                                        <span class="van-progress__portion" style="background: rgb(0, 122, 204); width: 144.6px;">
                                            <span class="van-progress__pivot" style="left: 141px; background: rgb(0, 122, 204);">1:35</span></span>
                                            </div>
                                            </div>
                                            </div>
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress"><span class="van-progress__portion" style="background: rgb(0, 122, 204); width: 115.68px;">
                                        <span class="van-progress__pivot" style="left: 112.8px; background: rgb(0, 122, 204);">2:29</span></span>
                                        </div>
                                        </div>
                                        </div> 
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress">
                                        <span class="van-progress__portion" style="background: rgb(0, 122, 204); width: 144.6px;">
                                            <span class="van-progress__pivot" style="left: 141px; background: rgb(0, 122, 204);">3:35</span></span>
                                            </div>
                                            </div>
                                            </div>
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress">
                                        <span class="van-progress__portion" style="background: rgb(0, 122, 204); width: 130.14px;">
                                            <span class="van-progress__pivot" style="left: 126.9px; background: rgb(0, 122, 204);">4:33</span></span>
                                            </div>
                                            </div>
                                            </div>
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress"><span class="van-progress__portion" style="background: rgb(0, 122, 204); width: 173.52px;">
                                        <span class="van-progress__pivot" style="left: 169.2px; background: rgb(0, 122, 204);">5:40</span></span>
                                        </div>
                                        </div>
                                        </div>
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress">
                                        <span class="van-progress__portion" style="background: rgb(0, 122, 204); width: 101.22px;">
                                            <span class="van-progress__pivot" style="left: 98.7px; background: rgb(0, 122, 204);">6:25</span></span>
                                            </div>
                                            </div>
                                            </div>
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress">
                                        <span class="van-progress__portion" style="background: rgb(0, 122, 204); width: 159.06px;">
                                            <span class="van-progress__pivot" style="left: 155.1px; background: rgb(0, 122, 204);">7:38</span></span>
                                            </div>
                                            </div>
                                            </div> 
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress">
                                        <span class="van-progress__portion" style="background: rgb(0, 122, 204); width: 130.14px;">
                                            <span class="van-progress__pivot" style="left: 126.9px; background: rgb(0, 122, 204);">8:33</span></span>
                                            </div>
                                            </div>
                                            </div>
                            <div class="van-cell">
                                <div class="van-cell__value van-cell__value--alone">
                                    <div class="van-progress">
                                        <span class="van-progress__portion" style="background: rgb(0, 122, 204); width: 101.22px;">
                                            <span class="van-progress__pivot" style="left: 98.7px; background: rgb(0, 122, 204);">9:26</span></span>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
          
          </div>
          
          
          
          </div>
      
      
      
      
      
      
      
      
      </div>
  
  
</div>
<!-- appCapsule -->
<?php include("include/footer.php");?>
<div id="rule" class="modal fade" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content ">
      <div class="modal-header"> </div>
      <div class="modal-body responsive"> <?php echo content($con,"rule");?> </div>
      <div class="modal-footer"> 
      <a type="button" class="pull-left" data-dismiss="modal"><strong>CLOSE</strong></a> 
      </div>
    </div>
  </div>
</div>

<div id="payment" class="modal fade" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content ">
      <div class="modal-header paymentheader" id="paymenttitle"> 
      <h4 class="modal-title" id="chn"></h4>
       </div>
 <form action="#" method="post" id="bettingForm" autocomplete="off">
      <div class="modal-body mt-1" id="loadform">
      <div class="row1">
                    <div class="col-12">
                    <p class="mb-1">Contract Money</p>
                    <div class="btn-group btn-group-toggle mb-2" data-toggle="buttons">
                        <label class="btn btn-secondary active" onClick="contract(10);">
                          <input class="contract" type="radio" name="contract" id="hoursofoperation" value="10" checked >
                          10 </label>
                        <label class="btn btn-secondary" onClick="contract(100);">
                          <input type="radio" class="contract" name="contract" id="hoursofoperation" value="100">
                          100 </label>
                          <label class="btn btn-secondary" onClick="contract(1000);">
                          <input type="radio" class="contract" name="contract" id="hoursofoperation" value="1000">
                          1000 </label>
                          <label class="btn btn-secondary" onClick="contract(10000);">
                          <input type="radio" class="contract" name="contract" id="hoursofoperation" value="10000" >
                          10000 </label>
                      </div>
                      
                   <input type="hidden" id="contractmoney" name="contractmoney" value="10">   
                      
                    <p class="mb-1">Contract Count</p>
      <div class="def-number-input number-input safari_only">
  <button type="button" onClick="this.parentNode.querySelector('input[type=number]').stepDown(); addvalue();" class="minus"></button>
  <input class="quantity" min="1" name="amount" id="amount" value="1" type="number" onKeyUp="addvalue();">
  <button type="button" onClick="this.parentNode.querySelector('input[type=number]').stepUp(); addvalue();" class="plus"></button>
</div>
<input type="hidden" name="userid" id="userid" class="form-control" value="<?php echo $userid;?>">
      <input type="hidden" name="type" id="type" class="form-control" value="<?php echo $type;?>">
      <input type="hidden" name="value" id="value" class="form-control" value="<?php echo $name;?>>
      <input type="hidden" name="counter" id="counter" class="form-control" >
      <input type="hidden" name="inputgameid" id="inputgameid" class="form-control" value="<?php echo sprintf("%03d",gameid($con));?>"> 
      <div class="mt-2">Total contract money is <span id="showamount">10</span></div>
      <input type="hidden" name="finalamount" id="finalamount" value="10">
      <div class="custom-control custom-checkbox mt-2">
    <input type="checkbox" checked class="custom-control-input" id="presalerule" name="presalerule">
  <label class="custom-control-label text-muted" for="presalerule">I agree <a data-toggle="modal" href="#privacy" data-backdrop="static" data-keyboard="false">PRESALE RULE</a></label>
                        </div>
                    </div>
                    
                </div>
      </div>
      <input type="hidden" name="tab" id="tab" value="parity">
      <div class="modal-footer"> 
   <a type="button" class="pull-left btn btn-sm closebtn" data-dismiss="modal">CANCEL</a>
<button type="submit" class="pull-left btn btn-sm btn-blue">CONFIRM</button> 
      </div>
      </form>
    </div>
  </div>
</div>
<div id="alert" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-body" id="alertmessage"> </div>
      <div class="text-right pb-1 pr-2">
    <a type="button" class="text-info" data-dismiss="modal">OK</a>
    </div> 
    </div>
  </div>
</div>
  <div id="loader" class="modal fade" role="dialog">
  <div class="modal-dialog">
  <div class="modal-content" style="background:transparent; border:none;">
    <div class="text-center pb-1">
  <a type="button" id="closbtnloader" data-dismiss="modal"> <div class="spinner-grow1 text-success"></div></a></div>
  
    </div>
    </div>
  </div>
<!-- Jquery --> 
<script src="assets/js/lib/jquery-3.4.1.min.js"></script> 
<!-- Bootstrap--> 
<script src="assets/js/lib/popper.min.js"></script> 
<script src="assets/js/lib/bootstrap.min.js"></script> 
<!-- Owl Carousel --> 
<script src="assets/js/plugins/owl.carousel.min.js"></script> 
<!-- Main Js File --> 
<script src="assets/js/app.js"></script>
<script src="assets/js/betting.js"></script>
<script src="assets/js/jquery.dataTables.min.js"></script>

 
 
<script>
$(document).ready(function () {
   
var x = setInterval(function() { 
start_count_down(); 
  $('#closbtnloader').click(); 
}, 1e3);

getResultbyCategory('parity','parity');

$('#example').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": true,
      "autoWidth": false
    });
});
function start_count_down() { 
$(".showload").hide();
$(".none").show();
var countDownDate = Date.parse(new Date) / 1e3;
  var now = new Date().getTime();
  var distance = 180 - countDownDate % 180;
  //alert(distance);
  var i = distance / 60,
   n = distance % 60,
   o = n / 10,
   s = n % 10;
  var minutes = Math.floor(i);
  var seconds = ('0'+Math.floor(n)).slice(-2);
  document.getElementById("demo").innerHTML = "<span class='timer'>0"+Math.floor(minutes)+"</span>" + "<span>:</span>" +"<span class='timer'>"+seconds+"</span>";
document.getElementById("counter").value = distance;
if(distance==180 || distance==175 || distance==170 || distance==165 || distance==160){
generateGameid();
getResultbyCategory('parity','parity');
getResultbyCategory('sapre','sapre');
getResultbyCategory('bcone','bcone');
getResultbyCategory('emerd','emerd');
}
if(distance<=30)
{
$(".gbutton").prop('disabled', true);
}else{ 
$(".gbutton").prop('disabled', false);
	}
}

function generateGameid()
{
var futureid=$('#futureid').val();
	$.ajax({
    type: "Post",
    data:"futureid=" + futureid + "& type=" + "generate" ,
    url: "periodid-generation.php",
    success: function (html) {
     //alert(html);
	 var arr = html.split('~');
	 //alert(arr[1]);
	 document.getElementById("gameid").innerHTML=arr[0];
	 document.getElementById("inputgameid").value=arr[0];
	 document.getElementById("futureid").value=arr[0];
      return false;
      },
      error: function (e) {}
      });
	}
	
	function betbutton(color,type,name)
{
	$.ajax({
    type: "Post",
    data:"type=" + type+ "& name=" + name ,
    url: "betform.php",
    success: function (html) {
		
	 document.getElementById("loadform").innerHTML=html;
      return false;
      },
      error: function (e) {}
      });

	if(type=='number'){
	$(".paymentheader").css("background-color", color);
	document.getElementById('chn').innerHTML = 'Select '+name;

		}else{
	$(".paymentheader").css("background-color", color);
	document.getElementById('chn').innerHTML = 'Join '+name;
	}
	$('#payment').modal({backdrop: 'static', keyboard: false})  
     $('#payment').modal('show');
     document.getElementById('type').value = type;
	 document.getElementById('value').value = name;

	}
//=====================amount calculation======================	
function contract(abc){ //alert(abc);
var amount =$("#amount").val();
document.getElementById('contractmoney').value = abc;
var addvalue=abc*amount;
document.getElementById('showamount').innerHTML = addvalue;
document.getElementById('finalamount').value = addvalue;

};	
function addvalue()
{ 
var amount =$("#amount").val();
var contractmoney =$("#contractmoney").val();
var addvalue=contractmoney*amount;
document.getElementById('showamount').innerHTML = addvalue;
document.getElementById('finalamount').value = addvalue;
	}

function tabname(tabname){
document.getElementById('tab').value = tabname;	
	}	

//=====================amount calculation======================
//====================== get Result==============================

function getResultbyCategory(category,containerid)
{ 
$.ajax({
    type: "Post",
    data:"category=" + category,
    url: "getResultbyCategory.php",
    success: function (html) {
	 document.getElementById(containerid).innerHTML=html;
	 waitlist('parity',<?php echo $userid;?>,'paritywait');
	 waitlist('sapre',<?php echo $userid;?>,'saprewait');
	 waitlist('bcone',<?php echo $userid;?>,'bconewait');
	 waitlist('emerd',<?php echo $userid;?>,'emerdwait');
	 if(category=='parity'){
	  $('#parityt').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": true,
      "autoWidth": false
    });
	$('#myrecordparityt').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": true,
      "autoWidth": false
    });
	 }
	 else if(category=='sapre'){
	  $('#sapret').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": true,
      "autoWidth": false
    });
	$('#myrecordsapret').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": true,
      "autoWidth": false
    });
	 }
	 else if(category=='bcone'){
	  $('#bconet').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": true,
      "autoWidth": false
    });
	$('#myrecordbconet').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": true,
      "autoWidth": false
    });
	 }
	 else if(category=='emerd'){
	  $('#emerdt').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": true,
      "autoWidth": false
    });
	$('#myrecordemerdt').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": true,
      "autoWidth": false
    });
	 }
      return false;
      },
      error: function (e) {}
      });
	 
	}

$(document).ready(function () {
	waitlist('parity',<?php echo $userid;?>,'paritywait');
});
  function reloadbtn(id){
    $('#loader').modal({backdrop: 'static', keyboard: false})  
 $('#loader').modal('show');

$.ajax({
    type: "Post",
    data:"userid=" + id,
    url: "getwalletbalance.php",
    success: function (html) {
	 
			document.getElementById('balance').innerHTML =html;
      return false;
      },
      error: function (e) {}
      });
	
	}

</script>


</body>
</html>