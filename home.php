<?php
	session_start();
	$con = mysqli_connect("localhost","root","root","hotelproject");

if (!$con)

{

die('Could not connect: ' . mysqli_error($con));

}

mysqli_select_db($con,"hotelproject");
?>
<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
<link rel="stylesheet" href="style4.css">
</head>
<body>
	
	<div class="bg3">
		<h1>Home Page</h1>
		<div class="homebox">
			<p>
				<a href="empty1.php"><input type="submit" value="Available Rooms"></a>
				
			</p>
			<p>
				<a href="roomdetails1.php"><input type="submit" value="Room Details"></a>
			</p>
			
			<p>
				<a href="unavailable.php"><input type="submit" value="Unavailable Rooms"></a>
			</p><br><br><br><br><br><br>
			<form action="login.php" method="post">
		
			<input name="logout" type="submit" id="logout_btn" class="logout_btn" value="Log Out"/><br>
			
		</form>
			
			
				
				
			
		</div>
	</div>
	
	
		
		<?php
			if(isset($_POST['logout']))
			{
				session_destroy();
				header('location:login.php');
			}
		?>
	</div>
</body>
</html>