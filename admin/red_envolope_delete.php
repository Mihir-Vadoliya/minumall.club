<?php

include ("include/connection.php");


$id = $_GET['ID'];


// Attempt delete query execution
$sql = "DELETE FROM red_envolope WHERE id='$id'";

if(mysqli_query($con, $sql)){

	echo "<script type='text/javascript'>alert('Deleted Successfully ');window.location='red_envolope.php';</script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($com);
}
 
// Close connection
mysqli_close($com);
?>

