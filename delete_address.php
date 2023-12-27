<?php

include("include/connection.php");




 
$id = $_REQUEST['id'];


// Attempt delete query execution
$sql = "DELETE FROM tbl_address WHERE id='$id'";

if(mysqli_query($con, $sql)){

	echo "<script type='text/javascript'>alert('Deleted Successfully ');window.location='address.php';</script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($com);
}
 
// Close connection
mysqli_close($com);
?>

