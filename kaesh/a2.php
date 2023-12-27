<?php
// Connect to MySQL
$servername = "localhost";
$username = "igamesi1_colour2";
$password = "~6L[@r)2u#N6";
$dbname = "igamesi1_colour2";

$conn = new mysqli($servername, $username, $password, $dbname);

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// check if there is enough money in the wallet
if ($_POST["has_money"] == "yes") {
    $sql = "SELECT amount FROM tbl_wallet WHERE userid = 'userid_value'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    // display the amount and add the amount to the wallet
    echo "Amount available: " . $row["amount"];
    $new_amount = $row["amount"] + $_POST["amount"];
    $sql = "UPDATE tbl_wallet SET amount = " . $new_amount . " WHERE userid = 'userid_value'";
    $conn->query($sql);
} else {
    // display the error message
    echo "Sorry, no amount is available.";
}

// close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Amount to Wallet</title>
</head>
<body>
    <h1>Add Amount to Wallet</h1>
    <?php if ($_POST["has_money"] == "no") { ?>
    <p>No money is available.</p>
    <?php } else { ?>
    <form method="post" action="">
        <label for="amount">Amount:</label>
        <input type="number" id="amount" name="amount">
        <br><br>
        <input type="submit" value="Add">
    </form>
    <?php } ?>
</body>
</html>
