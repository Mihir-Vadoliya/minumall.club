<!DOCTYPE html>
<html>
<head>
	<title>Send Amount</title>
	<style>
		body {
			background: linear-gradient(to bottom, #ffffff, #009688);
			margin: 0;
			padding: 0;
			display: flex;
			justify-content: center;
			align-items: center;
			min-height: 100vh;
			font-family: Arial, sans-serif;
		}
		
		form {
			background: #f2f2f2;
			padding: 20px;
			border-radius: 5px;
			box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
			width: 100%;
			max-width: 400px;
		}

		form label {
			display: block;
			margin-bottom: 10px;
		}

		form input[type="text"] {
			padding: 5px;
			border: none;
			border-radius: 3px;
			width: 100%;
			margin-bottom: 10px;
			box-sizing: border-box;
		}

		form input[type="radio"] {
			margin-right: 10px;
		}

		form input[type="submit"] {
			background: #4CAF50;
			color: white;
			border: none;
			border-radius: 3px;
			padding: 10px 20px;
			cursor: pointer;
			font-size: 16px;
			margin-top: 10px;
		}
	</style>
</head>
<body>
	<form method="post" action="send_amount.php">
		<label>Enter Amount to Send ₹:</label>
		<input type="text" name="amount">

		<label>Send to:</label>
		<input type="radio" name="sendto" value="all" checked> All Users
		<input type="radio" name="sendto" value="single"> Single User

		<div id="useridDiv" style="display:none;">
			<label>User ID:</label>
			<input type="text" name="userid">
		</div>

		<input type="submit" value="Send">
	</form>

	<script>
		// show/hide the userid input field based on the selected radio button
		document.getElementsByName('sendto').forEach(function(radio) {
			radio.addEventListener('change', function() {
				if (this.value == 'all') {
					document.getElementById('useridDiv').style.display = 'none';
				} else {
					document.getElementById('useridDiv').style.display = 'block';
				}
			});
		});
	</script>
</body>
</html>
