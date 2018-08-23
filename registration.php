<!DOCTYPE html>
<html>
<head>
	<title>user registration sys </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>

	<form method="post" action="server.php">
		<?php include('errors.php'); ?>
		<div class="input-group">
			<label>Usercode:</label>
			<input type="text" name="usercode">
		</div>
		<div class="input-group">
			<label>Fname:</label>
			<input type="text" name="fname" required><br>
		</div>
		<div class="input-group">
			<label>Lname:</label>
			<input type="text" name="lname" required>
		</div>
		<div class="input-group">
			<label>DOB</label>
			<input type="date" name="dat" required>
		</div>
		<div class="input-group">
			<label>Doorno:</label>
			<input type="text" name="doorno" required>
		</div>
		<div class="input-group">
			<label>City:</label>
			<input type="text" name="city" required>
		</div>
		<div class="input-group">
			<label>Pincode:</label>
			<input type="text" name="pincode">
		</div>
		<div class="input-group">
			<label>State:</label>
			<input type="text" name="state" required>
		</div>
		<div class="input-group">
			<label>Email:</label>
			<input type="text" name="email" required>
		</div>
		<div class="input-group">
			<label>Phone:</label>
			<input type="text" name="phone" required>
		</div>
		<div class="input-group">
			<label>Registration Date:</label>
			<input type="date" name="regdate" required>
		</div>
		<div class="input-group">
			<label>IDProof Type:</label>
			<input type="text" name="idpt" required>
		</div>
		<div class="input-group">
			<label>IDProof No:</label>
			<input type="text" name="idpn" required>
		</div>
		
		<div class="input-group">
			<button type="submit" name="register" class="btn">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>

</body>
</html>