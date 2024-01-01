<?php

include("include/connection.php");

$periodid = "20230939645";
$number = "5";
$result = "Green";
$openprice = "31530";
$tabtype = "parity";

resultbyUser($con,$periodid,$number,$result,$openprice,$tabtype);

function resultbyUser($con,$periodid,$number,$result,$openprice,$tabtype){

	$color=$result;
	$a=explode("+",$color);
	$b="'" . implode ( "', '", $a ) . "'";
	
	if($color=='red+violet'){ 
		
		$sqli=mysqli_query($con,"select *, 
		CASE WHEN value in('$number',$b) THEN 
		CASE 
		WHEN value='violet' THEN truncate((amount-(amount/100*2))*4.5,2) 
		WHEN value='red' THEN truncate((amount-(amount/100*2))*1.5,2)
		WHEN value='green' THEN truncate(((amount-amount/100*2)),2) 
		WHEN value='0' THEN (amount-(amount/100*2))*9 
		WHEN value='1' THEN (amount-(amount/100*2))*9 
		WHEN value='2' THEN (amount-(amount/100*2))*9 
		WHEN value='3' THEN (amount-(amount/100*2))*9 
		WHEN value='4' THEN (amount-(amount/100*2))*9 
		WHEN value='5' THEN (amount-(amount/100*2))*9 
		WHEN value='6' THEN (amount-(amount/100*2))*9 
		WHEN value='7' THEN (amount-(amount/100*2))*9 
		WHEN value='8' THEN (amount-(amount/100*2))*9 
		WHEN value='9' THEN (amount-(amount/100*2))*9 END
		ELSE 
		CASE
		WHEN value='green' THEN truncate(((amount-amount/100*2)),2)
		WHEN value='violet' THEN truncate((amount-(amount/100*2)),2)
		WHEN value='red' THEN truncate((amount-(amount/100*2)),2)
		WHEN value='0' THEN (amount-(amount/100*2))
		WHEN value='1' THEN (amount-(amount/100*2))
		WHEN value='2' THEN (amount-(amount/100*2))
		WHEN value='3' THEN (amount-(amount/100*2))
		WHEN value='4' THEN (amount-(amount/100*2))
		WHEN value='5' THEN (amount-(amount/100*2))
		WHEN value='6' THEN (amount-(amount/100*2))
		WHEN value='7' THEN (amount-(amount/100*2))
		WHEN value='8' THEN (amount-(amount/100*2))
		WHEN value='9' THEN (amount-(amount/100*2))END
		END AS valueamount,
		CASE 
		WHEN value in('$number',$b) THEN 
		CASE 
		WHEN value='green' THEN truncate(((amount/100*2)),2) 
		WHEN value='violet' THEN truncate(((amount/100*2)),2) 
		WHEN value='red' THEN truncate(((amount/100*2)),2) 
		WHEN value='0' THEN ((amount/100*2))
		WHEN value='1' THEN ((amount/100*2)) 
		WHEN value='2' THEN ((amount/100*2)) 
		WHEN value='3' THEN ((amount/100*2)) 
		WHEN value='4' THEN ((amount/100*2)) 
		WHEN value='5' THEN ((amount/100*2)) 
		WHEN value='6' THEN ((amount/100*2)) 
		WHEN value='7' THEN ((amount/100*2)) 
		WHEN value='8' THEN ((amount/100*2)) 
		WHEN value='9' THEN ((amount/100*2)) END
		ELSE 
		CASE
		WHEN value='green' THEN truncate(((amount/100*2)),2)
		WHEN value='violet' THEN truncate(((amount/100*2)),2)
		WHEN value='red' THEN truncate(((amount/100*2)),2)
		WHEN value='0' THEN ((amount/100*2))
		WHEN value='1' THEN ((amount/100*2))
		WHEN value='2' THEN ((amount/100*2))
		WHEN value='3' THEN ((amount/100*2))
		WHEN value='4' THEN ((amount/100*2))
		WHEN value='5' THEN ((amount/100*2))
		WHEN value='6' THEN ((amount/100*2))
		WHEN value='7' THEN ((amount/100*2))
		WHEN value='8' THEN ((amount/100*2))
		WHEN value='9' THEN ((amount/100*2))END
		END AS tax,
		CASE WHEN value in('$number',$b) THEN 
		'success' 
		ELSE 'fail'
		END as status
		from `tbl_betting` where `periodid`='".$periodid."' and `tab`='".$tabtype."'");

	}
	else if($color=='green+violet')
	{
		$sqli=mysqli_query($con,"select *, 
		CASE WHEN value in('$number',$b) THEN 
		CASE 
		WHEN value='green' THEN truncate((amount-(amount/100*2))*1.5,2)
		WHEN value='violet' THEN truncate((amount-(amount/100*2))*4.5,2)
		WHEN value='red' THEN truncate((amount-(amount/100*2)),2)
		WHEN value='0' THEN (amount-(amount/100*2))*9 
		WHEN value='1' THEN (amount-(amount/100*2))*9 
		WHEN value='2' THEN (amount-(amount/100*2))*9 
		WHEN value='3' THEN (amount-(amount/100*2))*9 
		WHEN value='4' THEN (amount-(amount/100*2))*9 
		WHEN value='5' THEN (amount-(amount/100*2))*9 
		WHEN value='6' THEN (amount-(amount/100*2))*9 
		WHEN value='7' THEN (amount-(amount/100*2))*9 
		WHEN value='8' THEN (amount-(amount/100*2))*9 
		WHEN value='9' THEN (amount-(amount/100*2))*9 END
		ELSE 
		CASE
		WHEN value='green' THEN truncate(((amount-amount/100*2)),2)
		WHEN value='violet' THEN truncate((amount-(amount/100*2)),2)
		WHEN value='red' THEN truncate((amount-(amount/100*2)),2)
		WHEN value='0' THEN (amount-(amount/100*2))
		WHEN value='1' THEN (amount-(amount/100*2))
		WHEN value='2' THEN (amount-(amount/100*2))
		WHEN value='3' THEN (amount-(amount/100*2))
		WHEN value='4' THEN (amount-(amount/100*2))
		WHEN value='5' THEN (amount-(amount/100*2))
		WHEN value='6' THEN (amount-(amount/100*2))
		WHEN value='7' THEN (amount-(amount/100*2))
		WHEN value='8' THEN (amount-(amount/100*2))
		WHEN value='9' THEN (amount-(amount/100*2))END
		END AS valueamount,
		CASE 
		WHEN value in('$number',$b) THEN 
		CASE 
		WHEN value='green' THEN truncate(((amount/100*2)),2) 
		WHEN value='violet' THEN truncate(((amount/100*2)),2) 
		WHEN value='red' THEN truncate(((amount/100*2)),2) 
		WHEN value='0' THEN ((amount/100*2))
		WHEN value='1' THEN ((amount/100*2)) 
		WHEN value='2' THEN ((amount/100*2)) 
		WHEN value='3' THEN ((amount/100*2)) 
		WHEN value='4' THEN ((amount/100*2)) 
		WHEN value='5' THEN ((amount/100*2)) 
		WHEN value='6' THEN ((amount/100*2)) 
		WHEN value='7' THEN ((amount/100*2)) 
		WHEN value='8' THEN ((amount/100*2)) 
		WHEN value='9' THEN ((amount/100*2)) END
		ELSE 
		CASE
		WHEN value='green' THEN truncate(((amount/100*2)),2)
		WHEN value='violet' THEN truncate(((amount/100*2)),2)
		WHEN value='red' THEN truncate(((amount/100*2)),2)
		WHEN value='0' THEN ((amount/100*2))
		WHEN value='1' THEN ((amount/100*2))
		WHEN value='2' THEN ((amount/100*2))
		WHEN value='3' THEN ((amount/100*2))
		WHEN value='4' THEN ((amount/100*2))
		WHEN value='5' THEN ((amount/100*2))
		WHEN value='6' THEN ((amount/100*2))
		WHEN value='7' THEN ((amount/100*2))
		WHEN value='8' THEN ((amount/100*2))
		WHEN value='9' THEN ((amount/100*2))END
		END AS tax,
		CASE WHEN value in('$number',$b) THEN 
		'success' 
		ELSE 'fail'
		END as status
		from `tbl_betting` where `periodid`='".$periodid."' and `tab`='".$tabtype."'");	
	}else
	{
		$sqli=mysqli_query($con,"select *, 
		CASE WHEN value in('$number',$b) THEN 
		CASE 
		WHEN value='green' THEN truncate((amount-(amount/100*2))*2,2)
		WHEN value='violet' THEN truncate((amount-(amount/100*2))*4.5,2)
		WHEN value='red' THEN truncate((amount-(amount/100*2))*2,2)
		WHEN value='0' THEN (amount-(amount/100*2))*9 
		WHEN value='1' THEN (amount-(amount/100*2))*9 
		WHEN value='2' THEN (amount-(amount/100*2))*9 
		WHEN value='3' THEN (amount-(amount/100*2))*9 
		WHEN value='4' THEN (amount-(amount/100*2))*9 
		WHEN value='5' THEN (amount-(amount/100*2))*9 
		WHEN value='6' THEN (amount-(amount/100*2))*9 
		WHEN value='7' THEN (amount-(amount/100*2))*9 
		WHEN value='8' THEN (amount-(amount/100*2))*9 
		WHEN value='9' THEN (amount-(amount/100*2))*9 END
		ELSE 
		CASE
		WHEN value='green' THEN truncate(((amount-amount/100*2)),2)
		WHEN value='violet' THEN truncate((amount-(amount/100*2)),2)
		WHEN value='red' THEN truncate((amount-(amount/100*2)),2)
		WHEN value='0' THEN (amount-(amount/100*2))
		WHEN value='1' THEN (amount-(amount/100*2))
		WHEN value='2' THEN (amount-(amount/100*2))
		WHEN value='3' THEN (amount-(amount/100*2))
		WHEN value='4' THEN (amount-(amount/100*2))
		WHEN value='5' THEN (amount-(amount/100*2))
		WHEN value='6' THEN (amount-(amount/100*2))
		WHEN value='7' THEN (amount-(amount/100*2))
		WHEN value='8' THEN (amount-(amount/100*2))
		WHEN value='9' THEN (amount-(amount/100*2))END
		END AS valueamount,
		CASE 
		WHEN value in('$number',$b) THEN 
		CASE 
		WHEN value='green' THEN truncate(((amount/100*2)),2) 
		WHEN value='violet' THEN truncate(((amount/100*2)),2) 
		WHEN value='red' THEN truncate(((amount/100*2)),2) 
		WHEN value='0' THEN ((amount/100*2))
		WHEN value='1' THEN ((amount/100*2)) 
		WHEN value='2' THEN ((amount/100*2)) 
		WHEN value='3' THEN ((amount/100*2)) 
		WHEN value='4' THEN ((amount/100*2)) 
		WHEN value='5' THEN ((amount/100*2)) 
		WHEN value='6' THEN ((amount/100*2)) 
		WHEN value='7' THEN ((amount/100*2)) 
		WHEN value='8' THEN ((amount/100*2)) 
		WHEN value='9' THEN ((amount/100*2)) END
		ELSE 
		CASE
		WHEN value='green' THEN truncate(((amount/100*2)),2)
		WHEN value='violet' THEN truncate(((amount/100*2)),2)
		WHEN value='red' THEN truncate(((amount/100*2)),2)
		WHEN value='0' THEN ((amount/100*2))
		WHEN value='1' THEN ((amount/100*2))
		WHEN value='2' THEN ((amount/100*2))
		WHEN value='3' THEN ((amount/100*2))
		WHEN value='4' THEN ((amount/100*2))
		WHEN value='5' THEN ((amount/100*2))
		WHEN value='6' THEN ((amount/100*2))
		WHEN value='7' THEN ((amount/100*2))
		WHEN value='8' THEN ((amount/100*2))
		WHEN value='9' THEN ((amount/100*2))END
		END AS tax,
		CASE WHEN value in('$number',$b) THEN 
		'success' 
		ELSE 'fail'
		END as status
		from `tbl_betting` where `periodid`='".$periodid."' and `tab`='".$tabtype."'");
	}


	// Create array to store Results
	$lowestAmountSuccessRecords = [];
	$lowestAmountSuccessRecordsMultiWin = [];
	$FailedRecordsArray = [];

	// Fetch data in a while loop
	while ($row = mysqli_fetch_array($sqli, MYSQLI_ASSOC)) {
	    $userId = $row['userid'];
	    $amount = $row['amount'];
	    $status = $row['status'];

	    if ($status === 'success' && isset($lowestAmountSuccessRecords[$userId])) {
	        
	        if($amount == $lowestAmountSuccessRecords[$userId]['amount']){
	        	$lowestAmountSuccessRecordsMultiWin[$userId] = $row;
	        }elseif ($amount < $lowestAmountSuccessRecords[$userId]['amount']) {
	            $lowestAmountSuccessRecords[$userId] = $row;
	        }else{
	        	$FailedRecordsArray[] = $row;
	        }

	    } elseif ($status === 'success' && !isset($lowestAmountSuccessRecords[$userId])) {
	        $lowestAmountSuccessRecords[$userId] = $row;
	    }elseif ($status === 'fail') {
	    	$FailedRecordsArray[] = $row;
	    }
	}

	// Results
	$successRecords = array_values($lowestAmountSuccessRecords);
	$FailedRecords = array_values($FailedRecordsArray);
	$lowestAmountSuccessMultiWinRecords = array_values($lowestAmountSuccessRecordsMultiWin);

	// Insert Success Record DB
	foreach ($successRecords as $key => $successValue) {
		winInsertCommanLogic($successValue, $con, $openprice);
	}

	// Insert MultiWin Success Record DB
	foreach ($lowestAmountSuccessMultiWinRecords as $key => $successValue) {
		winInsertCommanLogic($successValue, $con, $openprice);
	}

	// Insert Failed Record DB
	foreach ($FailedRecords as $key => $failedValue) {
		$userid=$failedValue['userid'];
		$userperiodid=$failedValue['periodid'];
		$type=$failedValue['type'];
		$value=$failedValue['value'];	
		$amount=$failedValue['amount'];
		$tab=$failedValue['tab'];
		$fee=$failedValue['tax'];
		$paidamount=$amount - $fee;
		$status="fail";
		$date=date( 'Y-m-d H:i:s' );

		$insertQuery=mysqli_query($con,"INSERT INTO `tbl_userresult` (`userid`, `periodid`, `type`, `value`, `amount`, `openprice`, `tab`, `paidamount`, `fee`, `status`, `createdate`) VALUES ('".$userid."', '".$userperiodid."', '".$type."', '".$value."','".$amount."', '".$openprice."', '".$tab."', '".$paidamount."', '".$fee."', '".$status."','".$date."')");
	}
}

function winInsertCommanLogic($successValue, $con, $openprice){
	$userid=$successValue['userid'];
	$userperiodid=$successValue['periodid'];
	$type=$successValue['type'];
	$value=$successValue['value'];	
	$amount=$successValue['amount'];
	$tab=$successValue['tab'];
	$paidamount=$successValue['valueamount'];
	$fee=$successValue['tax'];
	$status=$successValue['status'];
	$date=date( 'Y-m-d H:i:s' );

	$insertQuery=mysqli_query($con,"INSERT INTO `tbl_userresult` (`userid`, `periodid`, `type`, `value`, `amount`, `openprice`, `tab`, `paidamount`, `fee`, `status`, `createdate`) VALUES ('".$userid."', '".$userperiodid."', '".$type."', '".$value."','".$amount."', '".$openprice."', '".$tab."', '".$paidamount."', '".$fee."', '".$status."','".$date."')");
	
	$sql= mysqli_query($con,"INSERT INTO `tbl_order`(`userid`,`transactionid`,`amount`,`status`,`createdate`) VALUES ('".$userid."','".$userperiodid."','".$paidamount."','1','".$date."')");
	@$orderid=mysqli_insert_id($con);

	$sql3= mysqli_query($con,"INSERT INTO `tbl_walletsummery`(`userid`,`orderid`,`amount`,`type`,`actiontype`,`createdate`) VALUES ('".$userid."','".$orderid."','".$paidamount."','credit','win','".$date."')");

	$selectwallet=mysqli_query($con,"select `amount` from `tbl_wallet` where `userid`='".$userid."'");
	$walletResult=mysqli_fetch_array($selectwallet);
	
	$finalbalancecredit=$walletResult['amount']+$paidamount;	
	$sqlwallet= mysqli_query($con,"UPDATE `tbl_wallet` SET `amount` = '".$finalbalancecredit."' WHERE `userid`= '".$userid."'");
}

?>

