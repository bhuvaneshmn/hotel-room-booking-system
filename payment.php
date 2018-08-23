<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>transperent Login form</title>
		<link rel="stylesheet" href="style7.css">
	</head>
	<body>
		<div class="bg">
		<div class="loginbox">
			<img src="dollars-money-bag-on-a-hand.PNG" class="image">
			<h2>Payment Details</h2>
			<form method="post" action="server1.php">

				<p>Usercode</p>
				<input type="text" name="usercode" value="">
			
				<p>Bank Name</p>
				<input type="text" name="bname" value="">
				
				<p>Card Type</p>
				<input type="text" name="ct" value="">
				<p>Validity Date</p>
				<input type="date" name="vt" value="">
				<p>Amount</p>
				<input type="text" name="amt" value="">
				<input type="submit" name="" value="Proceed">
				</form>
		<a href="cancel.php"><input type="submit" name="Cancel" value="Cancel"></a>
		</div>
	</div>



</body>
</html>