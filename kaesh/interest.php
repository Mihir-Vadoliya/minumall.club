<?php 
ob_start();
session_start();
if($_SESSION['frontuserid']=="")
{header("location:login.php");exit();}?>

<!doctype html>
<html lang="en">
     <?php
include("include/connection.php");
$userid=$_SESSION['frontuserid'];
$Query=mysqli_query($con,"select * from tbl_website WHERE id=1");
$rows=mysqli_fetch_array($Query);
?>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo $rows['title']; ?></title>
<link rel="stylesheet" href="assets/css/style.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<link href="assets/css/dataTables.bootstrap.min.css" rel="stylesheet"/>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<style>
  body {
	-ms-user-select:text;
	user-select:text;
	-moz-user-select:text;
	-webkit-user-select:text
}
.layout--tabs .nav-item{
    width:33%;
}
.table thead th{color:#000;}
.accordion .btn-link::after{
    display:none;
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
h3{ font-weight:normal; font-size:20px;}
h4{ font-weight:normal; font-size:18px; color:#858585;}
.card-body{ padding:.6rem;}
td{ padding:3px;}
.btn-sm {
    height: 26px;
    padding: 0px 12px;
}
.form-control{box-shadow:none; border-bottom:#ccc solid 1px; margin-bottom:3px;}
#alert h4{font-size: 1rem; font-weight:bold; color:#333;}
#alert p{font-size: 13px; margin-top:20px;}
#alert .modal-content{border-radius:3px}
#alert .modal-dialog{padding:20px; margin-top:130px;}

label{ color:#999;}
#bonus .modal-dialog{margin-top:100px;}
#bonus .modal-footer{ border:none;}
.dropdown-menu{ background:#fff;top: -15px;
left: -145px; border:none;
border-radius:0px;
-webkit-box-shadow: 0 3px 1px -2px rgba(0, 0, 0, .2), 0 2px 2px 0 rgba(0, 0, 0, .14), 0 1px 5px 0 rgba(0, 0, 0, .12);
box-shadow: 0 3px 1px -2px rgba(0, 0, 0, .2), 0 2px 2px 0 rgba(0, 0, 0, .14), 0 1px 5px 0 rgba(0, 0, 0, .12);}
.appHeader1 .right{right:20px;}
.dropdown-item {
    padding: .75rem 1.5rem;
}

.nav-tabs .nav-link.active{
    background:#ccc !important;
        padding: 0 198px;

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

  .nav-item {
    margin-left: 0;
 
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

      a {
        border: 1px solid lightgray;
        border-radius: 0;
        padding: 6px 10px;

        &:hover,
        &:focus,
        &:active,
        &.active {
          background-color: lightgray;
        }
      }
  
      &:last-child {
        border-radius: 0 0 0 4px;
      }

    }

    &.overflow-tab-action {
      position: absolute;
      right: 0;
    }
  }

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
    background: rgba(0,0,0,.4);
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
    transition: .3s cubic-bezier(.25,.8,.5,1);
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

.tz_close{
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

.hide{
    display:none;
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
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
   margin-left: -120px;
}

.dropdown-content p{
        font-size: 16px;
    padding: 10px;

}

.dropdown:hover .dropdown-content {
  display: block;
}
.modal-header{background:none; border-bottom:none;}

.appBottomMenu .item.active span {
    color: var(--background-color)!important;
}
.appBottomMenu .item .ion-md-person{color: var(--background-color)!important;}
.appBottomMenu .item .toggleSidebar span{color: var(--background-color)!important;}
@media only screen and (max-width: 600px) {
 .nav-tabs .nav-link.active {
    background: #ccc !important;
    padding: 0 28px;
}
.modal-header{height:46px !important;}
.modal-dialog{  margin: 0.5rem 0 !important;}

}

.message {
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: #007bff;
  color: #fff;
  border: 1px solid #ccc;
  padding: 20px;
  box-shadow: 0px 0px 10px rgba(0,0,0,0.5);
  z-index: 9999;
  text-align: center;
}

		.close-button a {
			position: absolute;
			top: 25px;
			right: 50px;
			font-size: 18px;
			font-weight: bold;
			color:black;
			background-color: transparent;
			border: none;
			cursor: pointer;
		}
		
		ul {
      text-align: left;
    }
    
    .interest-list {
  text-align: center;
  margin: 0;
  padding: 0;
  list-style-type: none;
}

@media only screen and (max-width: 480px) {
  .interest-list {
    font-size: 14px;
    text-align: left;
  }
  .interest-list li {
    margin-bottom: 10px;
  }
}



</style>

</head>

<body onload="showMessage()">

	<!-- id="message-box" class="message" style="display: none;">
		<ul class="interest-list">
      <li>Interest will be added daily at midnight</li>
      <li>Interest rate is 1% for wallet balance of 10K or above</li>
      <li>Interest rate is 0.8% for wallet balance of 3K or above</li>
      <li>Interest rate is 0.3% for wallet balance of 500 or above</li>
    </ul-->


<style>
  ul {
    text-align: center;
  }
</style>


		<button class="close-button"><a href="myaccount.php">X</a></button>
	</div>

	<script type="text/javascript">
		function showMessage() {
			document.querySelector('#message-box').style.display = 'block';
		}
		function hideMessage() {
			document.querySelector('#message-box').style.display = 'none';
		}
	</script>

    
    <?php   
    $sql134 = mysqli_query($con,"select * from tbl_interest where userid='$userid'");
    $row134 = mysqli_fetch_array($sql134);
    $interest_rate = $row134['interest_rate'];

    // Calculate interest percentage based on wallet_amount and interest_amount
    $sql_wallet = mysqli_query($con,"select * from tbl_wallet where userid='$userid'");
    $row_wallet = mysqli_fetch_array($sql_wallet);
    $wallet_amount = $row_wallet['amount'];
    $interest_amount = $row_wallet['interest_applied'];
    $interest_percentage = ($interest_amount / $wallet_amount) * 100;
?>

<h3 class="text-center m-2">Interest Summary <!--: <span>₹ <span id="bms"><?php echo $interest_amount;?></span></span>--></h3>

<div class="text-center mb-2">
  <!--<a  href="apply_interest.php" class="btn btn-primary" style="width:160px; height:36px;     background: var(--background-color) !important;">Apply to Balance</a>-->
</div>

<div style="margin-left:40px;margin-right:40px;">
  <div class="table-responsive">
    <table class="table" id="myTable">
      <thead>
        <tr>                    
          <th scope="col">Date</th>
          <th scope="col">Wallet Balance</th>
          <th scope="col">Interest(%)</th>
          <th scope="col">Interest Amount</th>
          <th scope="col">Total Interest Amount</th>
        </tr>  
      </thead>
      <tbody>
        <?php 
          $userid=$_SESSION['frontuserid'];
          $user=mysqli_query($con,"select * from `tbl_interest_summery` where `userid`='".$userid."' order by id desc");
          while($rows=mysqli_fetch_array($user))
          {      
        ?>
        <tr>
          <td>
            <?php 
              $post_date2 = strtotime($rows['post_date']);
              $convert=date('Y-m-d',$post_date2); 
              echo $convert;  
            ?>
          </td>
          <td><?php echo number_format($rows['wallet_amount'],2); ?></td>
          <td><?php echo number_format(($rows['interest_amount'] / $rows['wallet_amount']) * 100, 2); ?>%</td>

          <td><?php echo number_format($rows['interest_amount'],2); ?></td>
          <td><?php echo number_format($rows['total_ineterest'],2); ?></td>
        </tr>
        <?php } ?>  
      </tbody>
    </table>
  </div>
</div>


     <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">   
   <script type="text/javascript" charset="utf8" src="/DataTables/datatables.js"></script>
   <script>
        $(document).ready( function () {
    document.getElementById("myTable").DataTable();
} );
    </script>
    <?php include("include/footer.php");?>
  </body>
  </html>