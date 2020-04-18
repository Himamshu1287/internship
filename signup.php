<!DOCTYPE html>
<html>
<head>
	<title>signup</title>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/component.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style_grid.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
	<div class="signin-form profile">
		<h2>REGISTRATION FORM</h2>
		<div class="signup-form">
			<form action="" method="post">
				<input type="text" name="uname" placeholder="name" required="">
				<input type="email" name="email" placeholder="E-mail" required="">
				<input type="password" name="password" placeholder="Password" required="">
				<input type="password" name="cpassword" placeholder="Confirm Password" required="">
				<input type="submit" name="sbtn">
			</form>
		</div>
</body>
</html>
<?php 
	if(isset($_POST['sbtn']))
	{
		$email=$_POST['email'];
		$con=mysqli_connect("localhost","root","root","db_test");
		if(mysqli_connect_errno())
		{
			echo "Failed to connect";
		}
		$qry="SELECT * from user WHERE email='$email'";
		$result=mysqli_query($con,$qry);
		if(mysqli_num_rows($result)>0)
		{
			echo '<script type="text/javascript">';
			echo 'alert("user already exist")</script>';
		}
		else
		{
			echo '<script type="text/javascript">';
			echo 'alert("Sign up succesfull")</script>';
		}
		$con=mysqli_close($con);
	}
?>