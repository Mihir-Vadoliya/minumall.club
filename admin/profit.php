<?php
// Database credentials
$servername = "localhost";
$username = "triumpha_clubapp";
$password = "2ME^+FivKXhE";
$dbname = "triumpha_clubapp";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Calculate total amount
$sql = "SELECT SUM(amount) AS total_amount FROM tbl_betting";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $total_amount = $row["total_amount"];
} else {
    $total_amount = 0;
}

// Handle add/subtract form submission
if (isset($_POST["submit"])) {
    $userid = $_POST["userid"];
    $action = $_POST["action"];
    $amount = $_POST["amount"];

    if ($action == "add") {
        $sql = "INSERT INTO tbl_betting (userid, amount) VALUES ('$userid', $amount)";
    } else if ($action == "subtract") {
        $sql = "INSERT INTO tbl_betting (userid, amount) VALUES ('$userid', -$amount)";
    }

    if (mysqli_query($conn, $sql)) {
        // Success
        header("Location: ".$_SERVER['PHP_SELF']);
        exit;
    } else {
        // Error
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Profit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f1f1f1;
        }

        /* Header */
        .header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        /* Container for the form */
        .form-container {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        /* Form inputs */
        input[type=text], input[type=number], select {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            background-color: #333;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #555;
        }

        /* Responsive layout - when the screen is less than 600px wide, stack the inputs vertically */
        @media screen and (max-width: 600px) {
            .form-container {
                max-width: 100%;
            }

            input[type=text], input[type=number], select, input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }
        
        .footer {
  background-color: #f2f2f2;
  padding: 20px;
  text-align: center;
}

.footer a {
  display: inline-block;
  padding: 10px 20px;
  margin: 0 10px;
  color: #333;
  text-decoration: none;
  border-radius: 3px;
  border: 1px solid #ccc;
  transition: background-color 0.3s ease;
}

.footer a:hover {
  background-color: #333;
  color: #fff;
}

    </style>
</head>
<body>
    <div class="header">
        <h1>Admin profit</h1>
    </div>

    <div class="form-container">
        <h2>Total profit: <?php echo $total_amount; ?></h2>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="userid">User ID:</label>
            <input type="text" name="userid" required>

            <label for="action">Action:</label>
            <select name="action">
                <option value="add">Add</option>
                <option value="subtract">Subtract</option>
            </select>

            <label for="amount">Amount:</label>
            <input type="number" name="amount" required>

            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
    
    
</body>
<div class="footer">
    <a href="desktop.php">Home</a>
    <a href="manage_withdraw.php">Withdraw Request</a>
    <!--a href="#">Button 3</a>
    <a href="#">Button 4</-->
</div>

</html>

