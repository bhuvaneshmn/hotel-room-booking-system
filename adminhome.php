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
		<h1>Admin Home Page</h1>
		<div class="homebox">
			<p>
				<a href="roomdetails.php"><input type="submit" value="Room Details"></a>
			</p>
			<p>
				<a href="empty2.php"><input type="submit" value="Available Rooms"></a>
			</p>
			<p>
				<a href="insertroom.php"><input type="submit" value="Insert a room"></a>	
			</p>
			<p>
				<a href="deleteroom"><input type="submit" value="Delete a Room"></a>
			</p>
			<p>
				<a href="updateroom.php"><input type="submit" value="Update a Room"></a>
			</p>
			<p>
				<a href="adminlogin.php"><input type="submit" value="logout"></a>
			</p>
			
				
				
			
		</div>
	</div>
	
	<form class="myform" action="index.html" method="post">

			<input name="logout" type="submit" id="logout_btn" class="logout_btn" value="Log Out"/>
			
		</form>
		
		<?php
			if(isset($_POST['logout']))
			{
				session_destroy();
				header('location:index.html');
			}
		?>
	</div>
</body>
</html>