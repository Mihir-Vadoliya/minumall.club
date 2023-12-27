<?php

// connect to database
$servername = "localhost";
$username = "triumpha_clubapp";
$password = "2ME^+FivKXhE";
$dbname = "triumpha_clubapp";
$conn = new mysqli($servername, $username, $password, $dbname);

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// get input values
$amount = $_POST["amount"];
$sendto = $_POST["sendto"];
$userid = $_POST["userid"];

// validate input
if (empty($amount)) {
    die("Please enter an amount to send.");
}
if ($sendto == "single" && empty($userid)) {
    die("Please enter a user ID.");
}

// update database
if ($sendto == "all") {
    // send to all users
    $sql = "UPDATE tbl_wallet SET amount = amount + $amount";
} else {
    // send to single user
    $sql = "UPDATE tbl_wallet SET amount = amount + $amount WHERE userid = $userid";
}

if ($conn->query($sql) === TRUE) {
    echo "Amount sent successfully.";
} else {
    echo "Error sending amount: " . $conn->error;
}

// close database connection
$conn->close();

?> </br>
<a href="https://app.triumphantclub.live/Youradmin/red_envolope.php" class="button">Go Back</a>
<style>
  .button {
    display: inline-block;
    padding: 10px 20px;
    background-color: red;
    color: white;
    text-decoration: none;
    border-radius: 5px;
  }
</style>
