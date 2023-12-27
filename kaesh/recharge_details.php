<?php
ob_start();
session_start();
if ($_SESSION['userid'] == "") {
	header("location:index.php?msg1=notauthorized");
	exit();
}

include("include/connection.php");

if (isset($_POST['submit']) == 'Submit') {


	$utr_no = ($_POST['utr_no']);
	$amount = ($_POST['amount']);
	$status = ($_POST['status']);
	$orderid = ($_POST['orderid']);
	$id = ($_POST['id']);
	//////////////
	if ($status == 1) {

		$sql1 = "SELECT * FROM tbl_walletsummery WHERE id='$id'";
		$select = mysqli_query($con, $sql1);
		$row = mysqli_fetch_array($select);
		$userid = $row['userid'];




		$sqlu = "SELECT * FROM tbl_user WHERE id='$userid'";
		$selectu = mysqli_query($con, $sqlu);
		$rowu = mysqli_fetch_array($selectu);
		$rid = $rowu['code'];
		$user_mobile = $rowu['mobile'];


		$sqluu = "SELECT * FROM tbl_user WHERE owncode='$rid'";
		$selectuu = mysqli_query($con, $sqluu);
		$rowuu = mysqli_fetch_array($selectuu);
		$rid = $rowuu['id'];


		$a = $_POST['amount'] - $row['bamount'];


		$level1 = mysqli_query($con, "SELECT * FROM `level` where `level`= 1");
		$level1 = mysqli_fetch_array($level1);

		$check_user_new_reg = "SELECT * FROM tbl_wallet WHERE userid = '$userid'";
		$query_check_user_new_reg = mysqli_query($con, $check_user_new_reg);
		while ($row_check_user_new_reg = mysqli_fetch_array($query_check_user_new_reg)) {
			echo $user_amount_check = $row_check_user_new_reg['amount'];

			if ($user_amount_check == 0) {

				$reference_amount = 200;
				$order_id = rand(10000, 99999);
				$update_wallet = "UPDATE `tbl_wallet` SET `amount`=amount+'$reference_amount' WHERE userid = '$rid'";
				$query_wallet = mysqli_query($con, $update_wallet);
				if ($query_wallet) {
					$update_wallet_summry = "INSERT INTO `tbl_walletsummery`(`userid`, `orderid`, `utr_no`, `amount`, `type`, `actiontype`, `amount_1`, `value`, `status`, `phone`, `bamount`)  VALUES ('$rid','$order_id','','$reference_amount','credit','1 Referral Recharge $user_mobile','$reference_amount','NULL','1','$user_mobile','$reference_amount')";
					$query_wallet_summry = mysqli_query($con, $update_wallet_summry);
				}
			}
		}
		$sqlw = "SELECT * FROM tbl_wallet WHERE id='$rid'";
		$selectw = mysqli_query($con, $sqlw);
		$roww = mysqli_fetch_array($selectw);
		$per =  $a - ($a * ($level1["amount"] / 100));
		$per = $a - $per;
		$amountw = $roww['amount'] + $row['bamount'] + $per;
		mysqli_query($con, "UPDATE `tbl_wallet` SET `amount` = '$amountw' WHERE `userid`= '$rid'");


		// 	 4th starts here




		$sqlu = "SELECT * FROM tbl_user WHERE id='$rid'";
		$selectu = mysqli_query($con, $sqlu);
		$rowu = mysqli_fetch_array($selectu);
		$rid = $rowu['code'];

		$sqluu = "SELECT * FROM tbl_user WHERE owncode='$rid'";
		$selectuu = mysqli_query($con, $sqluu);
		$rowuu = mysqli_fetch_array($selectuu);
		$rid = $rowuu['id'];

		$a = $_POST['amount'] - $row['bamount'];


		$level2 = mysqli_query($con, "SELECT * FROM `level` where `level`= 2");
		$level2 = mysqli_fetch_array($level2);

		$sqlw = "SELECT * FROM tbl_wallet WHERE id='$rid'";
		$selectw = mysqli_query($con, $sqlw);
		$roww = mysqli_fetch_array($selectw);
		$per =  $a - ($a * ($level2["amount"] / 100));
		$per = $a - $per;
		$amountw = $roww['amount']  + $per;
		mysqli_query($con, "UPDATE `tbl_wallet` SET `amount` = '435353+$amountw' WHERE `userid`= '$rid'");

		// 	 4th ends here	  




		// 	 3th starts here

		$sqlu = "SELECT * FROM tbl_user WHERE id='$rid'";
		$selectu = mysqli_query($con, $sqlu);
		$rowu = mysqli_fetch_array($selectu);
		$rid = $rowu['code'];

		$sqluu = "SELECT * FROM tbl_user WHERE owncode='$rid'";
		$selectuu = mysqli_query($con, $sqluu);
		$rowuu = mysqli_fetch_array($selectuu);
		$rid = $rowuu['id'];

		$a = $_POST['amount'] - $row['bamount'];


		$level3 = mysqli_query($con, "SELECT * FROM `level` where `level`= 3");
		$level3 = mysqli_fetch_array($level3);

		$sqlw = "SELECT * FROM tbl_wallet WHERE id='$rid'";
		$selectw = mysqli_query($con, $sqlw);
		$roww = mysqli_fetch_array($selectw);
		$per =  $a - ($a * ($level3["amount"] / 100));
		$per = $a - $per;
		$amountw = $roww['amount']  + $per;
		mysqli_query($con, "UPDATE `tbl_wallet` SET `amount` = '$amountw' WHERE `userid`= '$rid'");

		// 	 3th ends here


		// 	 2th starts here

		$sqlu = "SELECT * FROM tbl_user WHERE id='$rid'";
		$selectu = mysqli_query($con, $sqlu);
		$rowu = mysqli_fetch_array($selectu);
		$rid = $rowu['code'];

		$sqluu = "SELECT * FROM tbl_user WHERE owncode='$rid'";
		$selectuu = mysqli_query($con, $sqluu);
		$rowuu = mysqli_fetch_array($selectuu);
		$rid = $rowuu['id'];

		$a = $_POST['amount'] - $row['bamount'];

		$level4 = mysqli_query($con, "SELECT * FROM `level` where `level`= 4");
		$level4 = mysqli_fetch_array($level4);

		$sqlw = "SELECT * FROM tbl_wallet WHERE id='$rid'";
		$selectw = mysqli_query($con, $sqlw);
		$roww = mysqli_fetch_array($selectw);
		$per =  $a - ($a * ($level4["amount"] / 100));
		$per = $a - $per;
		$amountw = $roww['amount']  + $per;
		mysqli_query($con, "UPDATE `tbl_wallet` SET `amount` = '$amountw' WHERE `userid`= '$rid'");

		// 	 2th ends here



		// 	 1th starts here

		$sqlu = "SELECT * FROM tbl_user WHERE id='$rid'";
		$selectu = mysqli_query($con, $sqlu);
		$rowu = mysqli_fetch_array($selectu);
		$rid = $rowu['code'];

		$sqluu = "SELECT * FROM tbl_user WHERE owncode='$rid'";
		$selectuu = mysqli_query($con, $sqluu);
		$rowuu = mysqli_fetch_array($selectuu);
		$rid = $rowuu['id'];

		$level5 = mysqli_query($con, "SELECT * FROM `level` where `level`= 5");
		$level5 = mysqli_fetch_array($level5);

		$a = $_POST['amount'] - $row['bamount'];

		$sqlw = "SELECT * FROM tbl_wallet WHERE id='$rid'";
		$selectw = mysqli_query($con, $sqlw);
		$roww = mysqli_fetch_array($selectw);
		$per =  $a - ($a * ($level5["amount"] / 100));
		$per = $a - $per;
		$amountw = $roww['amount']  + $per;
		mysqli_query($con, "UPDATE `tbl_wallet` SET `amount` = '$amountw' WHERE `userid`= '$rid'");



		$sql12 = "SELECT * FROM tbl_walletsummery WHERE userid='$userid' and actiontype='recharge' and status='1'";
		$select12 = mysqli_query($con, $sql12);
		$row_count = mysqli_num_rows($select12);
		if ($row_count == 0) {
			$chkrcode = mysqli_query($con, "select * from tbl_user where id='$userid'");
			$codedata = mysqli_fetch_array($chkrcode);
			$reffercode = $codedata['code'];
			if ($reffercode != 0) {

				$chkrcode12 = mysqli_query($con, "select * from tbl_user where owncode='$reffercode'");
				$codedata12 = mysqli_fetch_array($chkrcode12);
				$reffercode12 = $codedata12['code'];
				$firstuserid = $codedata12['id'];

				$bonus_sql = mysqli_query($con, "select * from tbl_bonus WHERE userid= '$firstuserid'");
				$bonus_data = mysqli_fetch_array($bonus_sql);
				$walletAvailablebalance = $bonus_data['amount'];
				$level1balance = $bonus_data['level1'];

				$value = "SELECT * FROM tbl_paymentsetting WHERE id=1";
				$val = mysqli_query($con, $value);
				$row_val = mysqli_fetch_array($val);
				$r_amount = ($amount * $row_val['level1']) / 100;

				$finalbalanceCredit = $walletAvailablebalance + $r_amount;
				$level1totalbalance = $level1balance + $r_amount;
				$sqlwallet = mysqli_query($con, "UPDATE tbl_bonus SET amount = '$finalbalanceCredit',level1 = '$level1totalbalance' WHERE userid= '$firstuserid'");

				$chkrcode2 = mysqli_query($con, "select * from `tbl_user` where `owncode`='" . $reffercode12 . "'");
				$codeRow2 = mysqli_num_rows($chkrcode2);

				if ($codeRow2 != '0') {
					$codedata2 = mysqli_fetch_array($chkrcode2);
					$firstuserid2 = $codedata2['id'];

					$bonus_sql2 = mysqli_query($con, "select * from tbl_bonus WHERE userid= '$firstuserid2'");
					$bonus_data2 = mysqli_fetch_array($bonus_sql2);
					$walletAvailablebalance2 = $bonus_data2['amount'];
					$level2balance = $bonus_data2['level2'];

					$value2 = "SELECT * FROM tbl_paymentsetting WHERE id=1";
					$val2 = mysqli_query($con, $value2);
					$row_val2 = mysqli_fetch_array($val2);
					$r_amount2 = ($amount * $row_val2['level2']) / 100;

					$finalbalanceCredit2 = $walletAvailablebalance2 + $r_amount2;
					$level2totalbalance = $level2balance + $r_amount2;
					$sqlwallet = mysqli_query($con, "UPDATE tbl_bonus SET amount = '$finalbalanceCredit2',level2= '$level2totalbalance' WHERE userid= '$firstuserid2'");
				}
			}
			$value12 = "SELECT * FROM tbl_paymentsetting WHERE id=1";
			$val12 = mysqli_query($con, $value12);
			$row_val12 = mysqli_fetch_array($val12);
			$r_amount12 = ($amount * $row_val12['first_bonus']) / 100;
			$amount12 = $r_amount12 + $amount;
			$walletAvailablebalance = wallet($con, 'amount', $userid);
			$finalbalanceCredit = $walletAvailablebalance + $amount12;
			$sqlwallet = mysqli_query($con, "UPDATE `tbl_wallet` SET `amount` = '$finalbalanceCredit' WHERE `userid`= '$userid'");
		} else {
			$walletAvailablebalance = wallet($con, 'amount', $userid);
			$finalbalanceCredit = $walletAvailablebalance + $amount;
			$sqlwallet = mysqli_query($con, "UPDATE `tbl_wallet` SET `amount` = '$finalbalanceCredit' WHERE `userid`= '$userid'");
		}
	}
	///////////
	$sql = "UPDATE tbl_walletsummery SET utr_no='$utr_no',amount='$amount',status='$status',orderid='$orderid' WHERE id='$id'";
	//print_r($sql);exit;	
	$query = mysqli_query($con, $sql);
	if ($query) {

		echo "<script>
	alert('Upadte sucessfully');
	window.location.href='recharge_history.php';
	</script>";
	}
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Adminsuit | Amount Setup</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
	<link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
	<link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
	<link rel="stylesheet" href="plugins/morris/morris.css">
	<link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
	<link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
	<link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
	<link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
	<link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
	<link rel="stylesheet" href="plugins/select2/select2.min.css">
	<link rel="stylesheet" href="plugins/iCheck/all.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.multiselect.css" />
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.css" />
	<script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>
	<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
	<link rel="stylesheet" href="css/style.css">
</head>

<body class="hold-transition skin-red sidebar-mini">
	<div class="wrapper">
		<?php include("include/header.inc.php"); ?>
		<?php include("include/navigation.inc.php");
		$id = $_GET['ID'];
		$sql = "select* FROM `tbl_walletsummery` WHERE id='$id'";
		$query = mysqli_query($con, $sql);
		$role = mysqli_fetch_array($query);
		//print_r($role);exit;
		?>
		<div class="content-wrapper">
			<section class="content-header">
				<h1>Amount Setup</h1>
				<ol class="breadcrumb">
					<li><a href="desktop.php"><i class="fa fa-dashboard"></i>Home</a></li>
					<li class="active">Amount Setup</li>
				</ol>
			</section>


			<!-- Main content -->
			<section class="content">
				<div class="row">
					<div class="col-xs-12 text-center">

						<?php if (isset($_GET['msg']) == "updt") { ?>
							<span class="text-center red_txt">Update Successfully......</span><?php  } ?>
					</div>
					<div class="col-xs-12">
						<div class="box">

							<form id="formID" name="formID" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
								<input type="hidden" name="id" value="<?php echo $role['id']; ?>">
								<div class="box-body">
									<div class="clearfix"></div>

									<div class="col-sm-6">
										<div class="form-group">
											<label>Transaction Id</label>
											<input type="text" class="form-control" name="utr_no" id="mra" required value="<?php echo $role['utr_no']; ?>" readonly>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>AMOUNT</label>
											<input type="text" class="form-control" name="amount" id="mwa" required value="<?php echo $role['amount_1']; ?>">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>STATUS</label>
											<select class="form-control" name="status">
												<option value="0" <?php if ($role['status'] == 0) { ?> selected="selected" <?php } ?>>Pending</option>
												<option value="1" <?php if ($role['status'] == 1) { ?> selected="selected" <?php } ?>>Success</option>
												<option value="2" <?php if ($role['status'] == 2) { ?> selected="selected" <?php } ?>>Fail</option>
											</select>
											<!-- <input type="text" class="form-control"  name="status" id="ib" required value="<?php echo $role['status']; ?>">-->
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>ORDER ID</label>
											<input type="text" class="form-control" name="orderid" id="ib" required value="<?php echo $role['orderid']; ?>" readonly>
										</div>
									</div>
									<div class="clearfix"></div>
									<div class="form-group">
										<div class="text-center">

											<input type="submit" class="btn btn-primary" value="Submit" name="submit" <?php if ($role['status'] == 1) { ?> disabled <?php } ?>>
										</div>
									</div>
								</div>
								<div class="clearfix"></div>



							</form>
							<!-- /.box-body -->
						</div>
						<!-- /.box -->
					</div>
					<!-- /.col -->
				</div>
				<!-- /.row -->
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

		<?php include("include/footer.inc.php"); ?>
	</div>

</body>

</html>