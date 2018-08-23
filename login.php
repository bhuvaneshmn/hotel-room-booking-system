<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>transperent Login form</title>
		<link rel="stylesheet" href="style3.css">
	</head>
	<body>
		<div class="bg">
		<div class="loginbox">
			<img src="images.PNG" class="image">
			<h2>Login Here</h2>
			<form method="post" action="server3.php">

				<p>Usercode</p>
				<input type="text" name="usercode" placeholder="Enter your Usercode">
			
				<p>Username</p>
				<input type="text" name="uname" placeholder="Enter your Username">
				
				<p>Email</p>
				<input type="text" name="email" placeholder="Enter your Email">
				<p>Phone</p>
				<input type="text" name="phone" placeholder="Enter your phone">
				<input type="submit" name="login" value="Log in">
				
				<p>
					Not yet a member?<a href="register.php">Sign Up</a>
				</p>
			</form>

		</div>
	</div>
	</body>
</html>

