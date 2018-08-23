<html>
<head>
	<title>registration success Page</title>
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

$sql = "INSERT INTO registration (usercode,fname,lname,DOB,city,pincode,state,email,phone,registrationdate,IDprooftype,IDproofno) VALUES (null,'$_POST[fname]','$_POST[lname]','$_POST[dat]','$_POST[city]','$_POST[pincode]','$_POST[state]','$_POST[email]','$_POST[phone]','$_POST[regdate]','$_POST[idpt]','$_POST[idpn]')";

							if(mysqli_query($con,$sql))
							{	
								$usercode= mysqli_insert_id($con);
							} 
							else
							{
								die('Error:'.mysqli_error($con));
							}

$sql1 = "INSERT INTO login (usercode,username,email,phone) VALUES ($usercode,'$_POST[fname]','$_POST[email]','$_POST[phone]')";
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
		<form method="post" action="login.php">
	<div class="divider"></div>
	<div class="fwimage1">
		<h1 class="home1">WELCOME!!</h1>
		<h4 class="home4">Registration Successful</h4>
		<h4 class="home4"><?php echo "User $_POST[fname] addded successfully"; ?></h4>
		<h4 class="home4"><?php echo "Your Usercode is: $usercode "; ?></h4>
							
		
		<br>
		<button class="buttonhome">Click here To Login</button>
	</div>





</body>

</html>
