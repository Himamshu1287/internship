<!DOCTYPE html>
<html>
<head>
	<title>USD to INR</title>

	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/component.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style_grid.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>
	<body style=" background-image: url('currencyImg.jpg');">
		
		<div class="signin-form profile" style="margin-top: 170px;	">
		<h2>USD to INR</h2>
		<div class="signup-form">
		<form action="" method="POST">
			<input type="text" name="USD" placeholder="Enter Dollar to convert"><br><br>
			<input type="submit" name="sbtn">
			<?php
				if(isset($_POST['sbtn']))
				{
					$amount= $_POST['USD'];
					$url="https://currencyapi.net/api/v1/rates?key=n4gCD2QzAnCM2ztEBphnafsOV8QRUgNaVeXM&base=USD";
					$curl = curl_init();
					curl_setopt($curl, CURLOPT_URL, $url);
					curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
					$output = curl_exec($curl);
					curl_close($curl);
					$obj = json_decode($output,1);
					$inr=$obj["rates"]["INR"];
					echo "<br><h2> INR= ".$amount*$inr."</h2>";
				}
			?>
			</form>
	</div>
</div>
</body>
</html>