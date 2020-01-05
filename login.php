<!DOCTYPE html>
<html>
	
	<head>
		
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="css/login.css"/>
		<title>Resturant</title>
		<link rel="shortout icon" href="images/logo2.png"/>
		<link rel="stylesheet" href="fontawesome/css/all.min.css">

	</head>
	<body>
		<form action="login.php" method="post">
		<div class="login-box">
			<div class="left-box">
				<h1>Log In</h1>
				<input type="text" class="input-box" name="username" placeholder="UserName" required="required" />

				<input type="email" class="input-box" name="email" placeholder="Email" required="required" />

				<input type="password" class="input-box" name="password" placeholder="Password" required="required" />
				<br><br>

				<input type="submit" class="submit-btn" name="login_user" value="Log In"/>
				
			</div>

			<div class="right-box">
				<span class="right-title">Log In with<br>Social Media</span>
				<button class="social facebook">Log In with Facebook</button>
				<button class="social twitter">Log In with Twitter</button>
				<button class="social google">Log In with Google</button>
				<p class="class">
					<a href="signup.php" target="blank" class="aaa">
						<input type="checkbox" class="checkbox">Create an Account</a>
				</p>
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