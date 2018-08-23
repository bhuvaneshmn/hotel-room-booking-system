<!DOCTYPE html>
<html>
<head>
	<title>user registration sys </title>
	<link rel="stylesheet" type="text/css" href="registerstyle.css">
</head>
<body>
	<div class="loginbox">
		<img src="register.PNG" class="image">
		<h2>Register</h2>
		<form method="post" action="server.php">
				
				<p>Fname</p>
				<input type="text" name="fname" placeholder="Enter your First Name">
			
				<p>Lname</p>
				<input type="text" name="lname" placeholder="Enter your Last Name">

				<p>DOB</p>
				<input type="date" name="dat" placeholder="Enter your date of birth">

				 
				<p>City</p>
				<input type="text" name="city" placeholder="Enter your city">

				<p>Pincode</p>
				<input type="text" name="pincode" placeholder="Enter your pincode">

				<p>State</p>
				<input type="text" name="state" placeholder="Enter your state">

				<p>Email</p>
				<input type="text" name="email" placeholder="Enter your Email">
				<p>Phone</p>
				<input type="text" name="phone" placeholder="Enter your phone">

				<p>Registration Date</p>
				<input type="date" name="regdate" placeholder="Enter your registration date">

				<p>IDproof type</p>
				<input type="text" name="idpt" placeholder="Enter your IDproof">

				<p>IDproof no</p>
				<input type="text" name="idpn" placeholder="Enter your IDproof no">

				<input type="submit" name="" value="Register">
		
		
		
			Already a member? <a href="login.php">Sign in</a>
	</form>
</div>
</div>

</body>
</html>