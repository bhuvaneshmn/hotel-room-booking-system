<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style10.css">
	

</head>
<body style="background-color:white">
 
<?php

session_start();


$con = mysqli_connect("localhost","root","root","hotelproject");

if (!$con)

{

die('Could not connect: ' . mysqli_error($con));

}

mysqli_select_db($con,"hotelproject");

$cid = $_POST['cid'];
$sql1 = "INSERT INTO confirmation (orderid,usercode,roomno,noofperson,checkin,checkout) VALUES (null,'$_POST[usercode]','$_POST[roomno]','$_POST[nop]','$_POST[cin]','$_POST[cout]')";


if (!mysqli_query($con,$sql1))

{

die('Error: ' . mysqli_error($con));

}



mysqli_close($con)
?>

<header>
		<nav>
			<h1>Radison Blu Plaza</h1>
		</nav>
	</header>
		<form method="post" action="payment.php">
	<div class="divider"></div>
	<div class="fwimage1">

		<h4 class="home4"><?php if($cid==1111)
		{
			echo "Amount to be paid is 2000";
		} 
		if($cid==1112)
		{
			echo "Amount to be paid is 3000";
		} 
		if($cid==1113)
		{
			echo "Amount to be paid is 4000";
		} 
		if($cid==1114)
		{
			echo "Amount to be paid is 5500";
		} 
		if($cid==1115)
		{
			echo "Amount to be paid is 2500";
		} 
		if($cid==1116)
		{
			echo "Amount to be paid is 2750";
		} 
		if($cid==1117)
		{
			echo "Amount to be paid is 3500";
		} 
		if($cid==1118)
		{
			echo "Amount to be paid is 6500";
		} 

		?></h4>
		<h4 class="home4">Proceed with Payment?</h4>
		
		<button class="buttonhome">Yes</button>

	
</form>
<br><br>
<form method="post" action="cancel.php">
	
		<button class="buttonhome">Cancel</button>
	</form>
</div>
</form>
	



</body>

</html>
