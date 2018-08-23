<html>
<head>
	<title>Last Page</title>
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


$sql1 = "INSERT INTO cancellation (usercode,fname,phone,reason,howtoimp) VALUES ('$_POST[usercode]','$_POST[fname]','$_POST[phone]','$_POST[reason]','$_POST[hm]')";


if (!mysqli_query($con,$sql1))

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
		<form method="post" action="home.php">
	<div class="divider"></div>
	<div class="fwimage1">
		<h1 class="home1">Cancelled!!</h1>
		<h4 class="home4">Sorry! Hope to See You Again</h4>
		
		<br>
		<button class="buttonhome">HOME</button>
	</div>


</body>

</html>
