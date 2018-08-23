<html>
<head>
	<title>update success Page</title>
	<link rel="stylesheet" href="styleup.css">

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


$sql1 = "UPDATE roomdetail SET specification='AC,WiFi' WHERE roomno='$_POST[roomno]'";
if (!mysqli_query($con,$sql1))

{

die('Error: ' . mysqli_error($con));

}

?>

<header>
		<nav>
			<h1>Radison Blu Plaza</h1>
		</nav>
	</header>
		<form method="post" action="updateroom.php">
	<div class="divider"></div>
	<div class="fwimage1">
		<h4 class="home4">Updation Successful</h4>
		<h4 class="home4"><?php echo "Roomno $_POST[roomno] has AC,WiFi facilities"; ?></h4>
		
						
		<br>
		<button class="buttonhome">Back</button>
	</div>





</body>

</html>
