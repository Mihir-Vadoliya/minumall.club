<?php

include("include/connection.php");


$year = date("Y"); 
$month = date("m"); 
$day = date("d"); 
$lastperiodid=$year.$month.$day.sprintf("%03d",000);

//echo $lastperiodid;

$truncateQuery=mysqli_query($con,"TRUNCATE TABLE `tbl_gameid`");

$truncateResultQuery=mysqli_query($con,"TRUNCATE TABLE `tbl_result`");

$sql1=mysqli_query($con,"INSERT INTO `tbl_gameid` (`gameid`) VALUES ('".$lastperiodid."')");




?>