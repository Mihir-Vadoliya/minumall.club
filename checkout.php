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
if (isset($_POST['submit'])) {

  $ref_num = $_POST['refrence'];
  $amt = $_POST['deposit'];
  $email = $_POST['email'];
  $uid = $_SESSION['frontuserid'];
  $refcode = $uid . refcode();

  $phone = $_POST['phone'];

  $bamt = $_POST['bamount'];

  date_default_timezone_set('Asia/Calcutta');
  $today = date("F j, Y, g:i a");


  $deposit = mysqli_query($con, "INSERT INTO `deposits`(`ref_num`, `amount`, `email`, `status`, `uid`, `date`) VALUES('$ref_num', '$amt', '$email', '1','$uid', '$today')");

  if ($deposit) {
    $sql = "INSERT INTO tbl_walletsummery (phone,userid,orderid,amount,amount_1,utr_no,type,actiontype,status,bamount)
                                    VALUES ('$phone','$uid','$refcode', '$amt', '$amt','$ref_num','credit','recharge','0',$bamt)";
    if (mysqli_query($con, $sql))
      echo "<script>
        window.location = './myaccount.php';
    </script>";
  } else {
    echo "Payment failed";
  }
}
?>



<?php
$Query = mysqli_query($con, "select * from tbl_website WHERE id=1");
$row = mysqli_fetch_array($Query);
?>


<!DOCTYPE html>
<html>

<head>
  <div id="timer">Time left: 5:00</div>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <title>Recharge Gateway</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script type="text/javascript" src="script.js"></script>
  <style>
    /* Style for the form container */
    .form-container {
      max-width: 500px;
      margin: auto;
      padding: 20px;
      background-color: #f2f2f2;
    }

    /* Style for the form elements */
    .form-group {
      margin-bottom: 10px;
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    input[type="text"],
    input[type="submit"] {
      width: 100%;
      padding: 10px;
      border: none;
      border-radius: 5px;
      background-color: #e8e8e8;
    }

    input[type="submit"] {
      background-color: #0081FF;
      color: #fff;
      font-weight: bold;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
      background-color: #005cbf;
    }

    /* Style for the small text */
    p.small-text {
      margin: 5px 0 0;
      font-size: 12px;
      color: #666;
    }

    /* Style for the copy button */
    button.copy-button {
      display: block;
      margin: 10px auto;
      padding: 10px;
      border: none;
      border-radius: 5px;
      background-color: #0081FF;
      color: #fff;
      font-weight: bold;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button.copy-button:hover {
      background-color: #005cbf;
    }


    input[type="text"],
    input[type="submit"],
    button.copy-button {
      padding: 10px;
      font-size: 14px;
    }


    .copy-button {
      background-color: #4CAF50;
      /* Green */
      border: none;
      color: white;
      padding: 12px 16px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
      border-radius: 4px;
    }

    .copy-button:hover {
      background-color: #3e8e41;
    }

    .copy-button:active {
      background-color: #3e8e41;
      transform: translateY(2px);
    }

    .copyButton {
      background-color: blue;
      color: white;
      display: block;
      margin: 0 auto;
      width: 120px;
      height: 40px;
      font-size: 16px;
    }

    #timer {
      text-align: center;
      background-color: blue;
      color: white;
      padding: 10px;
      border-radius: 5px;
    }

    .my-button {
      background-color: green;
      color: white;
      display: inline-block;
      padding: 10px 20px;
      font-size: 16px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .label-red {
      color: red;
      display: inline-block;
      margin-right: 10px;
      font-weight: bold;
      font-size: 16px;
    }

    .value-red {
      color: red;
      display: inline-block;
      font-size: 16px;
    }

    .small-text-center {
      text-align: center;
      font-size: 14px;
      margin-bottom: 10px;
    }

    .submitBtn {
      font-size: 16px;
      padding: 8px 20px;
    }



    @media (max-width: 768px) {
      .code-container {
        width: 100%;
      }
    }
  </style>
</head>

<body>
  <div class="form-container">
    <div style="text-align: center;">
      <span class="label-red">USDT (BEP20)</span>
      <span class="value-red"><?php echo $row['upi']; ?></span>
    </div>
    <!--<div style="text-align: center;">
    <span class="label-red">Account Number</span>
    <span class="value-red"><?php echo $row['acc_no']; ?></span>
    </div>
    <div style="text-align: center;">
    <span class="label-red">IFS Code</span>
    <span class="value-red"><?php echo $row['ifsc_code']; ?></span>
    </div>
    <div style="text-align: center;">
    <span class="label-red">Name</span>
    <span class="value-red"><?php echo $row['name']; ?></span>
    </div>-->
    <div style="text-align: center;">
      <span class="label-red">
        <h5>QR Code (Tap To Download)</h5>
      </span></br>
      <span class="value-red">
        <a href="<?php echo $row['qr_code']; ?>" download="qr_code.png">
          <img src="<?php echo $row['qr_code']; ?>" style="height:230px;" alt="QR Code">
        </a>
      </span>
    </div>

    <p>
    <div id="p1" style="display:none;"><?php echo $row['upi']; ?></div>
    </p>
    <button class="copyButton btn" onclick="copyToClipboard('p1')('<?php echo $row['upi']; ?>')">Copy USDT</button>


    <br>
    <br>
    <div style="text-align: center;">
      <span class="label-red">USDT (BEP20)</span>
      <span class="value-red"><?php echo $row['upi_1']; ?></span>
    </div>
    <div style="text-align: center;">
      <span class="label-red">
        <h5>Alternative QR Code (Tap To Download)</h5>
      </span></br>
      <span class="value-red">
        <a href="<?php echo $row['qr_code_1']; ?>" download="alternative_qr_code.png">
          <img src="<?php echo $row['qr_code_1']; ?>" style="height:230px;" alt="QR Code">
        </a>
      </span>
    </div>

    <p>
    <div id="p2" style="display:none;"><?php echo $row['upi_1']; ?></div>
    </p>
    <button class="copyButton btn" onclick="copyToClipboard('p2')('<?php echo $row['upi_1']; ?>')">Copy USDT</button>


    <div style="text-align: center;">
      <!--<p class="small-text">Click the button to copy the UPI ID:</p>-->
      <div style="text-align: center;">
        <!--  <button class="my-button" onclick="window.location.href='upi://pay?pa=<?php echo $row['upi']; ?>&pn=<?php echo $row['upi']; ?>&am=<?php echo $_POST['finalamount']; ?>&cu=INR&tn=Recharge'">Pay Now From UPI Apps</button> -->
      </div>

      <br>
      <strong>USDT (BEP20):</strong>
      <span><?php echo $row['upi_id']; ?></span>

      <form class="paymentRefForm" action="#" method="POST" autocomplete="off">
        <div class="form-group">
          <label>Payment Hash ID</label>
          <input class="form-control" type="text" name="refrence" placeholder="Enter Payment HASH ID" required>
        </div>

        <input class="form-control" type="hidden" name="bamount" value="<?php echo $_POST['bamount']; ?>" readonly>

        <div class="form-group">
          <label>Deposit Amount</label>
          <input class="form-control" type="text" name="deposit" value="<?php echo $_POST['finalamount']; ?>" readonly>
        </div>
        <div class="form-group">
          <label>Registered Phone Number</label>
          <input class="form-control" type="text" name="phone" value="<?php echo $_SESSION['mobile']; ?>" readonly>
        </div>
        <input class="btn btn-primary submitBtn" type="submit" name="submit" value="Submit">
      </form>
    </div>


    <script>
      function copyToClipboard(var1) {
        let val = document.getElementById(var1).innerHTML;
        const selBox = document.createElement('textarea');
        selBox.style.position = 'fixed';
        selBox.style.left = '0';
        selBox.style.top = '0';
        selBox.style.opacity = '0';
        selBox.value = val;
        document.body.appendChild(selBox);
        selBox.focus();
        selBox.select();
        document.execCommand('copy');
        document.body.removeChild(selBox);
        alert('UPI ID Copied');

      }


      // Set the timer for 5 minutes (300 seconds)
      let timeLeft = 300;

      // Update the timer display every second
      const timer = setInterval(function() {
        // Update the time left
        timeLeft--;

        // Calculate the minutes and seconds left
        const minutesLeft = Math.floor(timeLeft / 60);
        const secondsLeft = timeLeft % 60;

        // Display the time left in the header
        const timerElement = document.getElementById('timer');
        timerElement.innerHTML = `Time left: ${minutesLeft}:${secondsLeft.toString().padStart(2, '0')}`;

        // Check if the time has expired
        if (timeLeft === 0) {
          // Redirect the page to the specified URL
          window.location.replace('https://colourfind.online/recharge.php');

          // Clear the timer interval
          clearInterval(timer);
        }
      }, 1000);
    </script>

</body>

</html>