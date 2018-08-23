<html>
<head>
	<link rel="stylesheet" href="style1.css">
</head>
<body>
<?php
session_start();
			$con = mysqli_connect("localhost","root","root","hotelproject");

		if (!$con)

		{

		die('Could not connect: ' . mysqli_error($con));

		}
		mysqli_select_db($con,"hotelproject");
		

$sql="INSERT INTO roomdetail (roomno,categoryid,specification) VALUES ('$_POST[roomno]','$_POST[sel]','$_POST[sel1]')";


if(!mysqli_query($con,$sql))
{
die('Error: ' . mysqli_error($con));
}
mysqli_close($con);
?>
<header>
		<nav>
			<h1>Radison Blu Plaza</h1>
		</nav>
	</header>
		<form method="post" action="adminhome.php">
	<div class="divider"></div>
	<div class="fwimage1">
		<br><br><br><br>

		
		<h4 class="home4">Room Added Successful</h4>
		<h4 class="home4"><?php echo "Room $_POST[roomno] addded successfully"; ?></h4>
		
							
		
		<br>
		<button class="buttonhome">Back</button>
	</div>
</body>
</html>
