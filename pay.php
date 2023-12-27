<?php
session_start();
include("include/connection.php");
error_reporting(1);
if (!isset($_SESSION['mobile']) && !isset($_SESSION['frontuserid'])) {
echo "<script> 
window.location = './login.php';
</script>";
} 
?>
<?php 
if(isset($_POST['submit'])){
    
    $ref_num = $_POST['refrence'];
    $amt = $_POST['deposit'];
    $email = $_POST['email'];
    $uid = $_SESSION['frontuserid'];

    date_default_timezone_set('Asia/Calcutta');
    $today = date("F j, Y, g:i a"); 
    $deposit = mysqli_query($con, "INSERT INTO `deposits`(`ref_num`, `amount`, `email`, `status`, `uid`, `date`) VALUES('$ref_num', '$amt', '$email', '1','$uid', '$today')");

    if($deposit){
        echo "<script>
        window.location = './myaccount.php';
    </script>";
    }else{
        echo "Payment failed"; 
    }
}
?>

<?php

$Query=mysqli_query($con,"select * from tbl_website WHERE id=1");
$rows=mysqli_fetch_array($Query);
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
  <title>My Form</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script type="text/javascript" src="script.js"></script>


    
    <style>
        .form-container {
  display: flex;
  flex-direction: column;
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
  padding: 20px;
}

.form-row {
  display: flex;
  flex-direction: row;
  align-items: center;
  margin-bottom: 10px;
}

.label {
  font-weight: bold;
  margin-right: 10px;
}

.value {
  font-weight: normal;
}

.small-text {
  font-size: 12px;
  margin: 0;
}

.copy-button {
  background-color: #007bff;
  border: none;
  color: #fff;
  padding: 5px 10px;
  border-radius: 5px;
  cursor: pointer;
  font-size: 14px;
  margin-left: 10px;
}

.copy-button:hover {
  background-color: #0069d9;
}

.form-group {
  display: flex;
  flex-direction: column;
  margin-bottom: 10px;
}

.form-control {
  border: none;
  border-radius: 5px;
  padding: 10px;
  background-color: #f1f1f1;
  font-size: 14px;
}

.form-control:focus {
  outline: none;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
}

.btn {
  background-color: #007bff;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font

    </style>
  <meta charset="UTF-8">
  <title>My Form</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php

$Query=mysqli_query($con,"select * from tbl_website WHERE id=1");
$rows=mysqli_fetch_array($Query);
?>   
  <div class="form-container">
    <div class="form-row">
      <label class="label">UPI ID</label>
      <span class="value"><?php echo $row['upi']; ?></span>
    </div>

    <div class="form-row">
      <p class="small-text">Click the button to copy the UPI ID:</p>
      <button class="copy-button" onclick="copyText('<?php echo $row['upi_id']; ?>')">Copy UPI ID</button>
    </div>

    <div class="form-row">
      <label class="label">VPA/UPI:</label>
      <span class="value"><?php echo $row['upi_id']; ?></span>
    </div>

    <form class="paymentRefForm" action="save.php" method="POST" autocomplete="off">
      <div class="form-group">
        <label>Payment Reference Number</label>
        <input class="form-control" type="text" name="refrence" placeholder="Enter Payment Reference Number" required>
      </div>

      <div class="form-group">
        <label>Deposit Amount</label>
        <input class="form-control" type="text" name="deposit" value="<?php echo $_POST['finalamount']; ?>" readonly>
      </div>

      <div class="form-group">
        <label>Registered Phone Number</label>
        <input class="form-control" type="text" name="phone" value="<?php echo $_SESSION['mobile']; ?>" readonly>
      </div>

      <div class="form-group">
        <input class="btn btn-primary submitBtn" type="submit" name="submit" value="Submit">
      </div>
    </form>
  </div>
  
  <script>
      function copyText(text) {
  // Create a textarea element
  var textarea = document.createElement("textarea");

  // Set the value of the textarea to the text to be copied
  textarea.value = text;

  // Add the textarea element to the page
  document.body.appendChild(textarea);

  // Select the text in the textarea
  textarea.select();

  // Copy the selected text to the clipboard
  document.execCommand("copy");

  // Remove the textarea element from the page
  document.body.removeChild(textarea);

  // Show an alert to the user indicating that the text was copied
  alert("UPI ID copied to clipboard: " + text);
}

  </script>
</body>
</html>
