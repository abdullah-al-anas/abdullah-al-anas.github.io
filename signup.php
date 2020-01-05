
<?php include('server.php') ?>

<!DOCTYPE html>
<html>
	
	<head>
		
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="css/signup.css"/>
		<title>Resturant</title>
		<link rel="shortout icon" href="images/logo2.png"/>
		<link rel="stylesheet" href="fontawesome/css/all.min.css">

	</head>
	<body>
		<form action="signup.php" method="post">
		<div class="login-box">
			<div class="left-box">
				<h1>Sign Up</h1>
				<input type="text" class="input-box" name="username" placeholder="UserName" required="required" />

				<input type="email" class="input-box" name="email" placeholder="Email" required="required" />

				<input type="password" class="input-box" name="password_1" placeholder="Password" required="required" />

				<input type="password" class="input-box" name="password_2" placeholder="Re-type Password" required="required" />
					

				<input type="submit" class="submit-btn" name="reg_user" value="Sign Up"/>

				<input type="reset" class="reset-btn" name="reset" value="Reset"/>
				
			</div>

			<div class="right-box">
				<span class="right-title">Sign Up with<br>Social Media</span>
				<a href="#"><button class="social facebook">Sign Up with Facebook</button></a>
				<a href="#"><button class="social twitter">Sign Up with Twitter</button></a>
				<a href="#"><button class="social google">Sign Up with Google</button></a>
				<p class="class">
					<input type="checkbox" class="checkbox">
					<a href="login.php" class="aaa">I have already an Account</a></p>
			</div>

			<div class="or">
				OR
			</div>

		</div>
		</form>

		

<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="fontawesome/js/all.min.js"></script>
	</body>

</html>